#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""Auto-assign [C##]/[J##]/[B##] serial numbers to _bibliography/papers.bib.

Runs automatically during the GitHub Actions build (see .github/workflows/deploy.yml)
so you never have to touch the numbers — just add/edit papers in papers.bib.

Numbering per type: newest (by year, then order in the file) gets the highest number.
  @inproceedings -> C,  @article -> J,  @book -> B
Idempotent: strips any existing `nums` fields and recomputes.
"""
import os, re
from collections import defaultdict

BIB = os.path.join(os.path.dirname(__file__), "..", "_bibliography", "papers.bib")
BIB = os.path.normpath(BIB)

lines = open(BIB, encoding="utf-8").read().split("\n")
lines = [l for l in lines if not re.match(r"\s*nums\s*=", l)]  # strip existing

entries = []
cur = None
for i, l in enumerate(lines):
    m = re.match(r"@(\w+)\s*\{", l.strip())
    if m:
        cur = {"line": i, "type": m.group(1).lower(), "year": 0, "order": len(entries)}
        entries.append(cur)
    elif cur is not None:
        ym = re.match(r"\s*year\s*=\s*\{?\s*(\d{4})", l)
        if ym and cur["year"] == 0:
            cur["year"] = int(ym.group(1))

label = {"inproceedings": "C", "article": "J", "book": "B"}
by_type = defaultdict(list)
for e in entries:
    by_type[e["type"]].append(e)

line_num = {}
for t, es in by_type.items():
    lab = label.get(t, "P")
    ordered = sorted(es, key=lambda e: (-e["year"], e["order"]))  # newest first
    n = len(ordered)
    for rank, e in enumerate(ordered):
        line_num[e["line"]] = f"{lab}{n - rank}"

out = []
for i, l in enumerate(lines):
    out.append(l)
    if i in line_num:
        out.append(f"  nums = {{{line_num[i]}}},")

open(BIB, "w", encoding="utf-8").write("\n".join(out))
print("Numbered publications: " + ", ".join(
    f"{label.get(t, t)}={len(es)}" for t, es in sorted(by_type.items())))
