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

**BISPL** —the Bio Imaging, Signal Processing, and Machine Learning Lab at KAIST AI — is led by [Prof. Jong Chul Ye](/professor/), an IEEE Fellow. Our research spans **theory & reinforcement Learning (RL) for diffusion/flow Models, LLMs & agentic AI, vision-language-action (VLA) Models, world models, computer vision, AI for science & healthcare, and medical imaging**. Across these areas, we seek to uncover the mathematical beauty and fundamental principles  of modern AI and translate them into real-world impact. We ask not only how AI works, but why it works, developing new theories and algorithms from challenging practical problems. Building on deep expertise in **biomedical imaging, signal processing, inverse problems, and machine learning**, we turn real-world applications into sources of fundamental insight—and fundamental advances into transformative technologies.




Explore our [people](/people/), [publications](/publications/), and [latest news](/news/).
