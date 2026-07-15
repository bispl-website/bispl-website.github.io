---
layout: page
permalink: /awards/
title: hall of fame
description: BISPL annual awards, recognizing outstanding research and service since 2013.
nav: true
nav_order: 6
---

The **BISPL Awards** were created in 2013 to recognize the contributions of BISPL researchers
each year, in three categories: **Best Researcher**, **Best Doctoral Student**, and
**Best Master Student**.

{% for a in site.data.awards %}
#### {{ a.year }} BISPL Award
<span style="color: var(--global-text-color-light);">{{ a.note }}</span>

{% for w in a.winners %}- **{{ w.cat }}:** {{ w.who }}
{% endfor %}

{% endfor %}
