---
layout: page
permalink: /professor/
title: Professor
description: 
nav: true
nav_order: 2
---

<img src="{{ 'assets/img/prof.png' | relative_url }}" alt="Prof. Jong Chul Ye" style="float: right; width: 210px; max-width: 40%; border-radius: 10px; margin: 0 0 1rem 1.6rem; box-shadow: 0 2px 12px rgba(0,0,0,.18);">

## Jong Chul Ye, Ph.D.

**Chung Moon Soul Mirae Chair · KAIST Endowed Chair Professor**
**Fellow,  The Korean Academy of Science and Technology · National Academy of Medicine of Korea**

**IEEE Fellow** — *“for contributions to signal processing and
machine learning for bio-medical imaging.”*

Address: 

Kim Jaechul Graduate School of AI, KAIST,
108  Taebong-ro, Seocho-gu,  Seoul,  06764

[Google Scholar](https://scholar.google.com/citations?user=HNMjoNEAAAAJ)

---

{% assign cv = site.static_files | where: "path", "/assets/pdf/cv.pdf" | first %}
{% if cv %}
<div class="cv-block">
  <a class="cv-download" href="{{ '/assets/pdf/cv.pdf' | relative_url }}" target="_blank" rel="noopener">⬇&nbsp; Download CV (PDF)</a>
  <iframe class="cv-embed" src="{{ '/assets/pdf/cv.pdf' | relative_url }}" title="Curriculum Vitae"></iframe>
</div>
{% else %}

<blockquote>📄 <strong>To publish the full CV here, upload it as <code>assets/pdf/cv.pdf</code></strong> — the page will then show your CV automatically (the photo and heading above stay). Until then, the summary below is shown.</blockquote>

### Education

- **Postdoctoral Researcher**, Coordinated Science Lab., Univ. of Illinois at Urbana-Champaign, 1999–2001 (Advisors: Yoram Bresler, Pierre Moulin)
- **Ph.D.**, Electrical & Computer Engineering, Purdue University, 1999 (Advisors: Kevin Webb, Charles Bouman)
- **M.S.**, Control & Instrumentation Engineering (now ECE), Seoul National University, 1995
- **B.S.**, Control & Instrumentation Engineering (now ECE), Seoul National University, 1993

### Work Experience

- **Jan. 2022 – current** · Full Professor (tenured), Kim Jaechul Graduate School of AI, KAIST
- **Mar. 2016** · KAIST Endowed Chair Professor
- **Aug. 2004 – Dec. 2021** · Assistant → Associate → Full Professor, Dept. of Bio & Brain Engineering, KAIST
- **Mar. 2017 – current** · Adjunct Professor, Dept. of Mathematical Sciences, KAIST
- **Jul. 2014 – Aug. 2015** · Interim Department Head, Dept. of Bio & Brain Engineering, KAIST
- **2003 – 2004** · Senior Researcher, X-ray CT Technology Group, GE Global Research Center, New York
- **2001 – 2003** · Senior Member Research Staff, Philips Research Center, Briarcliff Manor, New York

### Leadership & Editorial Positions

- IEEE Fellow (2020); IEEE EMBS Distinguished Lecturer (2020–2021)
- General Chair, IEEE ISBI (2020); Program Chair, IEEE ICASSP, Seoul (2024)
- Chair, IEEE Technical Committee on Computational Imaging (2020–2021)
- Senior Editor, IEEE Signal Processing Magazine (2018–current)
- Associate Editor, IEEE Trans. Medical Imaging (2018–current)

### Honors & Awards

- Fellow of IEEE (2020)
- IEEE EMBS Distinguished Lecturer (2020–2021)
- KumGok Technical Achievement Award, KSIAM (2022)
- Gold Medal for Technical Achievement, KSMRM (2021)
- KAIST Research Excellence Award (2012); Beckman Senior Fellowship, UIUC (2012–2013)
- 2nd Place, AAPM Low-Dose CT Grand Challenge (2016); 3rd Place, CVPR NTIRE Super-Resolution Challenge (2017)

### Research Interests

Machine learning & deep learning · Computer vision & generative models · Computational imaging ·
MRI signal processing · CT/PET reconstruction · Super-resolution microscopy · Inverse problems
{% endif %}
