---
layout: about
title: About
permalink: /
hide_header: true
subtitle:

selected_papers: true
social: false

announcements:
  enabled: false   # rendered manually below so we control the page order
  scrollable: true
  limit: 5

latest_posts:
  enabled: false
---

{% assign hl = site.data.highlight %}
<div class="research-highlight">
  <div class="rh-body">
    <span class="rh-tag">Latest Research Highlight</span>
    <h2 class="rh-title"><a href="{{ hl.url }}" target="_blank" rel="noopener">{{ hl.title }}</a></h2>
    <p class="rh-authors">{{ hl.authors }}</p>
  </div>
  <a class="rh-img" href="{{ hl.url }}" target="_blank" rel="noopener">
    <img src="{{ hl.image | relative_url }}" alt="{{ hl.title }}">
  </a>
</div>

<h2 class="home-section"><a href="{{ '/news/' | relative_url }}" style="color: inherit;">News</a></h2>
{% include news.liquid limit=true %}

<h2 class="home-section">About BISPL</h2>

**BISPL @ KAIST AI** is a group of researchers dedicated to investigating the beauty of
**bio-imaging, signal processing, and machine learning (BISPL) ** for applications across healthcare,
computer vision, and scientific discovery — led by [Prof. Jong Chul Ye](/professor/), IEEE Fellow.

Our research is primarily focused on signal processing and machine learning for high-resolution,
high-sensitivity image reconstruction from real-world biomedical imaging systems. These problems
lead to investigations of fundamental questions across physics, mathematics, signal processing,
biology, and medicine. We believe that **actual imaging applications are a source of endless
inspiration for new mathematical theories**, and we are eager to solve both specific applications
and application-inspired fundamental theoretical problems.

Current directions include **generative models** (diffusion & flow), **large language models**
(reasoning, diffusion LMs, clinical LLMs), **computer vision** (text-to-image/video, 3D/4D),
**healthcare AI**, and **AI for science** — building on a long history of work in computational
imaging (MRI, CT/PET, microscopy) and inverse problems.

Explore our [people](/people/), [publications](/publications/), and [latest news](/news/).
