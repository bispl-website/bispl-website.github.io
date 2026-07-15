---
layout: page
permalink: /awards/
title: Hall of Fame
description: BISPL annual awards, recognizing outstanding research and service since 2013.
nav: true
nav_order: 5
---

<style>
.award-gallery { display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: .5rem; margin: .8rem 0 2rem; }
.award-gallery a { display: block; overflow: hidden; border-radius: 8px; }
.award-gallery img { width: 100%; height: 130px; object-fit: cover; display: block; transition: transform .25s ease; box-shadow: 0 1px 5px rgba(0,0,0,.12); }
.award-gallery a:hover img { transform: scale(1.05); }
.award-year { display: flex; align-items: center; gap: .8rem; font-weight: 700; color: var(--global-theme-color); margin: 2rem 0 .3rem; }
.award-year::after { content: ""; flex: 1; height: 2px; border-radius: 2px; background: var(--global-divider-color); }
.award-note { color: var(--global-text-color-light); font-size: .92rem; margin: 0 0 .5rem; }
</style>

The **BISPL Awards** were created in 2013 to recognize the contributions of BISPL researchers
each year, in three categories: **Best Researcher**, **Best Doctoral Student**, and
**Best Master Student**.

{% for a in site.data.awards %}
<h3 class="award-year">{{ a.year }} BISPL Award</h3>
<p class="award-note">{{ a.note }}</p>

{% for w in a.winners %}- **{{ w.cat }}:** {{ w.who }}
{% endfor %}

{% if a.photos %}
<div class="award-gallery">
{% for ph in a.photos %}<a href="{{ ph | relative_url }}" target="_blank" rel="noopener"><img src="{{ ph | relative_url }}" alt="{{ a.year }} BISPL award ceremony" loading="lazy"></a>
{% endfor %}</div>
{% endif %}

{% endfor %}
