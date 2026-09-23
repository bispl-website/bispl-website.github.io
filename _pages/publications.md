---
layout: page
permalink: /publications/
title: Publications
description: Publications by BISPL @ KAIST AI, in reverse chronological order 
nav: true
nav_order: 4
---

<!-- _pages/publications.md -->

<!-- Bibsearch Feature -->

(**C**: top-tier AI conference, **J**: peer-reviewed journal, **B**: book)

<div class="publication-totals text-muted" id="publication-totals"></div>

<a class="btn btn-sm z-depth-0 bib-download" role="button" download
   href="{{ '/_bibliography/papers.bib' | relative_url }}"
   title="Download every entry on this page as BibTeX">
  <i class="ti ti-download"></i> Download all as BibTeX
</a>

{% include bib_search.liquid %}

<div class="publications">

{% bibliography %}

</div>

<script>
  // jekyll-scholar writes the year headings and the entry list; it has no hook
  // for putting a count beside them, so the counting is done here from what it
  // rendered. Each entry carries its own kind in a class -- pub-num-J, -C, -B --
  // which is what the totals and the per-year tallies are read from.
  (function () {
    var KINDS = [
      { key: "J", label: "journal" },
      { key: "C", label: "top-tier conference" },
      { key: "B", label: "book" }
    ];

    function tally(root) {
      var counts = {};
      KINDS.forEach(function (k) {
        counts[k.key] = root.querySelectorAll(".pub-num-" + k.key).length;
      });
      return counts;
    }

    function phrase(counts, plural) {
      return KINDS
        .filter(function (k) { return counts[k.key] > 0; })
        .map(function (k) {
          var n = counts[k.key];
          return n + " " + k.label + (plural && n !== 1 ? "s" : "");
        })
        .join(" \u00b7 ");
    }

    var list = document.querySelector(".publications");
    if (!list) return;

    var totals = tally(list);
    var sum = totals.J + totals.C + totals.B;
    var box = document.getElementById("publication-totals");
    if (box && sum) {
      box.textContent = sum + " publications \u2014 " + phrase(totals, true);
    }

    list.querySelectorAll("h2.bibliography").forEach(function (h) {
      var ol = h.nextElementSibling;
      while (ol && ol.tagName !== "OL") ol = ol.nextElementSibling;
      if (!ol) return;
      var year = tally(ol);
      var text = phrase(year, false);
      if (!text) return;
      var tag = document.createElement("span");
      tag.className = "year-count text-muted";
      tag.textContent = text;
      h.appendChild(tag);
    });
  })();
</script>
