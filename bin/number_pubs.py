#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""Assign stable [C##]/[J##]/[B##] serial numbers to _bibliography/papers.bib
and flag the most recent publications for the home page.

Runs automatically during the GitHub Actions build (see .github/workflows/deploy.yml),
which commits the updated papers.bib back to `main` so the numbers are frozen.

NUMBERING — append-only. A number, once assigned, never changes:
  * An entry that already has `nums` keeps it, always.
  * An entry without `nums` gets the next free number for its type
    (highest so far + 1). When several new entries appear at once they are
    ordered oldest-first, so the newest ends up with the highest number.
  * `year` is read whether it is written {2026}, "2026" or 2026. The old
    regex only accepted braces, so ACL Anthology exports (which quote the
    value) were read as year 0, sorted to the very bottom and handed [C1],
    [C2], [C3] while pushing every other paper up by three.
  * @inproceedings -> C,  @article -> J,  @book -> B,  anything else -> P

  Adding an older paper therefore no longer renumbers everything above it,
  which is what used to make [C1], [C2], ... shift on every edit.

HOME PAGE — the "Most Recent Publications" section renders entries flagged
`selected = {true}` (see _includes/selected_papers.liquid). This script owns
that flag: it clears every `selected` field and re-applies it to the
N_SELECTED most recent entries, sorted by year then by position in the file.
Do not set `selected` by hand — it is overwritten on every build.
"""
import os, re
from collections import defaultdict

N_SELECTED = 6  # how many papers the home page shows

BIB = os.path.normpath(
    os.path.join(os.path.dirname(__file__), "..", "_bibliography", "papers.bib")
)
LABEL = {"inproceedings": "C", "article": "J", "book": "B"}

ENTRY_RE = re.compile(r"^\s*@(\w+)\s*\{", re.I)
NUMS_RE = re.compile(r"^\s*nums\s*=\s*\{?\s*([A-Z]+)(\d+)", re.I)
SEL_RE = re.compile(r"^\s*selected\s*=", re.I)
YEAR_RE = re.compile(r"^\s*year\s*=\s*[\"{]?\s*(\d{4})")

lines = open(BIB, encoding="utf-8").read().split("\n")

# --- split the file into a preamble plus one block per entry -----------------
preamble, entries = [], []
for line in lines:
    m = ENTRY_RE.match(line)
    if m:
        entries.append({"type": m.group(1).lower(), "body": [line],
                        "year": 0, "num": None})
        continue
    if not entries:
        preamble.append(line)
        continue
    e = entries[-1]
    nm = NUMS_RE.match(line)
    if nm:                                  # remember, then drop (re-emitted below)
        e["num"] = int(nm.group(2))
        continue
    if SEL_RE.match(line):                  # this script owns `selected`
        continue
    ym = YEAR_RE.match(line)
    if ym and e["year"] == 0:
        e["year"] = int(ym.group(1))
    e["body"].append(line)

for pos, e in enumerate(entries):
    e["pos"] = pos

# --- numbering: keep what exists, append for the rest ------------------------
by_type = defaultdict(list)
for e in entries:
    by_type[e["type"]].append(e)

assigned = 0
for typ, group in by_type.items():
    taken = {e["num"] for e in group if e["num"] is not None}
    nxt = max(taken) + 1 if taken else 1
    # oldest first, so the newest new entry ends up with the highest number
    for e in sorted([e for e in group if e["num"] is None],
                    key=lambda e: (e["year"], -e["pos"])):
        while nxt in taken:                 # tolerate gaps / manual numbers
            nxt += 1
        e["num"] = nxt
        taken.add(nxt)
        assigned += 1

# --- home page selection: the N most recent ---------------------------------
recent = sorted(entries, key=lambda e: (-e["year"], e["pos"]))[:N_SELECTED]
for e in recent:
    e["selected"] = True

# --- rebuild ----------------------------------------------------------------
out = list(preamble)
for e in entries:
    out.append(e["body"][0])
    out.append("  nums = {%s%d}," % (LABEL.get(e["type"], "P"), e["num"]))
    if e.get("selected"):
        out.append("  selected = {true},")
    out.extend(e["body"][1:])

open(BIB, "w", encoding="utf-8").write("\n".join(out))

print("Publications: " + ", ".join(
    "%s=%d" % (LABEL.get(t, "P"), len(g)) for t, g in sorted(by_type.items())))
print("Newly numbered: %d   |   Featured on home page: %d"
      % (assigned, len(recent)))
for e in recent:
    title = next((l for l in e["body"] if re.match(r"\s*title\s*=", l)), "")
    title = re.sub(r"\s*title\s*=\s*\{?", "", title).rstrip("},").strip()
    print("   [%s%d] %s" % (LABEL.get(e["type"], "P"), e["num"], title[:64]))
