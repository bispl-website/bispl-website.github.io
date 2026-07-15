---
layout: page
permalink: /alumni/
title: alumni
description: Former BISPL members now leading in academia, industry, and medicine worldwide.
nav: true
nav_order: 3
---

<style>
.alum-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(210px, 1fr)); gap: 1rem; margin-bottom: 1.6rem; }
.alum { display: flex; gap: .7rem; align-items: center; }
.alum .ph { width: 52px; height: 52px; min-width: 52px; border-radius: 50%; object-fit: cover; }
.alum .ph-init { display: grid; place-items: center; font-weight: 700; color: #fff; font-size: .95rem; background: linear-gradient(135deg, var(--global-theme-color), #12a3a3); }
.alum .nm { font-weight: 600; font-size: .9rem; line-height: 1.15; }
.alum .ed { font-size: .72rem; color: var(--global-text-color-light); }
.alum-h { border-bottom: 1px solid var(--global-divider-color); padding-bottom: .3rem; margin: 1.8rem 0 1.1rem; }
</style>

{% for c in site.data.alumni %}
<h3 class="alum-h">{{ c.category }} <span style="color: var(--global-text-color-light); font-weight: 400; font-size: .8em;">· {{ c.people | size }}</span></h3>
<div class="alum-grid">
{% for p in c.people %}
  <div class="alum">
    {% if p.photo %}<img class="ph" src="{{ p.photo | relative_url }}" alt="{{ p.name }}" loading="lazy">{% else %}<div class="ph ph-init">{{ p.initials }}</div>{% endif %}
    <div>
      <div class="nm">{{ p.name }}</div>
      <div class="ed">{{ p.detail }}</div>
    </div>
  </div>
{% endfor %}
</div>
{% endfor %}
