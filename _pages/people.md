---
layout: page
permalink: /people/
title: People
description: Current members of BISPL @ KAIST AI.
nav: true
nav_order: 3
---

<style>
.people-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 1.4rem 1rem; margin-bottom: 2rem; }
.person { text-align: center; }
.person .ph { width: 96px; height: 96px; border-radius: 50%; object-fit: cover; margin: 0 auto .55rem; display: block; box-shadow: 0 2px 8px rgba(0,0,0,.15); background: var(--global-bg-color); }
.person .ph-init { display: grid; place-items: center; font-weight: 700; font-size: 1.5rem; color: #fff; background: linear-gradient(135deg, var(--global-theme-color), #12a3a3); }
.person .nm { font-weight: 600; line-height: 1.2; }
.person .ed { font-size: .72rem; color: var(--global-text-color-light); margin-top: .2rem; }
.person .lk { display: flex; justify-content: center; gap: .5rem; margin-top: .35rem; }
.person .lk a { color: var(--global-text-color-light); font-size: 1rem; line-height: 1; text-decoration: none; transition: color .15s ease; }
.person .lk a:hover { color: var(--global-theme-color); text-decoration: none; }
.people-h { border-bottom: 1px solid var(--global-divider-color); padding-bottom: .3rem; margin: 1.8rem 0 1.1rem; font-size: 1.05rem; font-weight: 700; }
</style>

{% for g in site.data.members %}
<h3 class="people-h">{{ g.group }} <span style="color: var(--global-text-color-light); font-weight: 400; font-size: .8em;">· {{ g.people | size }}</span></h3>
<div class="people-grid">
{% for p in g.people %}
  <div class="person">
    {% if p.photo %}<img class="ph" src="{{ p.photo | relative_url }}" alt="{{ p.name }}" loading="lazy">{% else %}<div class="ph ph-init">{{ p.initials }}</div>{% endif %}
    <div class="nm">{{ p.name }}</div>
    {%- if p.edu %}
    <div class="ed">{{ p.edu | first }}</div>
    {%- endif %}
    {%- if p.email or p.website %}
    <div class="lk">{% if p.email %}<a href="mailto:{{ p.email | encode_email }}" title="Email {{ p.name }}" aria-label="Email {{ p.name }}"><i class="ti ti-mail"></i></a>{% endif %}{% if p.website %}{% assign homepage_url = p.website %}{% unless homepage_url contains "://" %}{% assign homepage_url = "https://" | append: homepage_url %}{% endunless %}<a href="{{ homepage_url }}" target="_blank" rel="noopener noreferrer" title="{{ p.name }} homepage" aria-label="{{ p.name }} homepage"><i class="ti ti-world"></i></a>{% endif %}</div>
    {%- endif %}
  </div>
{% endfor %}
</div>
{% endfor %}

<p style="margin-top: 2rem; color: var(--global-text-color-light);">
Looking for former members? See the <a href="{{ '/alumni/' | relative_url }}">alumni page</a>.
</p>

<p style="font-size: .85rem; color: var(--global-text-color-light);">
BISPL members: to add or update your email, homepage or photo, follow the
<a href="https://github.com/bispl-website/bispl-website.github.io/blob/main/MEMBER-EDIT-GUIDE.md">member edit guide</a>
(내 정보 수정하는 법).
</p>
