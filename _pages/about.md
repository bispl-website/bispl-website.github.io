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

**BISPL @ KAIST AI**, led by Pled by [Prof. Jong Chul Ye](/professor/), IEEE Fellow, explores the mathematical beauty and fundamental principles underlying modern AI.
We study not only how AI works, but why it works—developing new theories and algorithms inspired by real-world problems.
We believe that **actual real-world applications are a source of endless inspiration for new mathematical theories**, and we are eager to solve both specific applications
and application-inspired fundamental theoretical problems. 

Our current research spans **Theory & Reinforcement Learning (RL) for Diffusion/Flow Models, LLMs & Agentic AI, Vision-Language-Action Models, World Models, Computer Vision, AI for Science & Healthcare, and Medical Imaging**.
Building on longstanding expertise in **bio-imaging, signal processing, inverse problems, and machine learning**, we connect rigorous theory with transformative real-world applications.


Explore our [people](/people/), [publications](/publications/), and [latest news](/news/).
