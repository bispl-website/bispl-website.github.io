# BISPL @ KAIST — 홈페이지 (al-folio)

라이브: **https://bispl-website.github.io/**

[al-folio](https://github.com/alshedivat/al-folio) 테마 기반입니다. 내용을 수정하고 저장(커밋)하면
**GitHub Actions가 자동으로 빌드·배포**합니다 (보통 3~6분). 로컬에 프로그램을 설치할 필요 없이,
GitHub 웹에서 파일을 열고 ✏️로 고친 뒤 **Commit changes** 하면 됩니다.

> 배포 진행 상황은 저장소의 **Actions** 탭에서 볼 수 있습니다. 초록 체크(✓)가 뜨면 반영 완료입니다.

---

## 📰 뉴스 추가 — `_news/` 폴더
새 파일 `_news/2026-09-01-제목.md` 을 만들고:
```markdown
---
layout: post
title: "우리 논문이 NeurIPS 2026에 채택되었습니다"
date: 2026-09-01 12:00:00
inline: false
---

- 저자 A, 저자 B, *논문 제목*, NeurIPS 2026.
- 축하합니다!
```
최신 뉴스가 홈 화면과 News 페이지에 자동으로 올라갑니다.
(`inline: true`로 하면 제목 없이 한 줄로 표시됩니다.)

## 📄 논문 추가 — `_bibliography/papers.bib`
표준 **BibTeX** 형식입니다. Google Scholar나 논문 관리 프로그램에서 내보낸 `.bib`를 붙여넣으면 됩니다.
```bibtex
@inproceedings{ye2026example,
  author    = {First Author and Second Author and Jong Chul Ye},
  title      = {논문 제목},
  booktitle = {NeurIPS},
  year       = {2026},
  bibtex_show = {true},
  selected   = {true}   % 홈 화면 'selected papers'에 표시하려면
}
```
- `@inproceedings`(학회), `@article`(저널), `@book`(책).
- `selected = {true}`인 논문이 홈의 대표 논문으로 노출됩니다.

## 👥 멤버·동문 — `_data/members.yml`, `_data/alumni.yml`
간단한 목록입니다. 사진은 `assets/img/people/`에 올리고 `photo:`에 경로를 적습니다.
```yaml
# _data/members.yml
- group: "M.S. Students"
  role: "M.S. Student"
  people:
    - name: "홍길동"
      initials: "HG"                      # 사진 없을 때 표시
      photo: "assets/img/people/hong.jpg" # (선택)
      edu: ["BS. CS, KAIST"]
```
졸업하면 해당 블록을 `_data/alumni.yml`로 옮기면 됩니다.

## 🏆 수상 — `_data/awards.yml`, 👤 교수 소개 — `_pages/professor.md`
`awards.yml`은 목록만 수정, `professor.md`는 마크다운으로 자유롭게 수정하면 됩니다.

## 🖼 랜딩·소개 문구 — `_pages/about.md`
홈 화면의 소개 글, 프로필 사진(`profile.image`), 주소 등을 여기서 바꿉니다.

## 🎨 색상·설정 — `_config.yml`
사이트 제목, 색상 테마, 메뉴 순서 등 전반 설정. (`_sass/`에서 세부 스타일)

---

### 폴더 요약
| 위치 | 내용 |
|---|---|
| `_news/` | 뉴스 (마크다운) |
| `_bibliography/papers.bib` | 논문 (BibTeX) |
| `_data/members.yml`, `alumni.yml`, `awards.yml` | 멤버·동문·수상 |
| `_pages/` | about(홈)·people·professor·awards 등 페이지 |
| `assets/img/people/` | 멤버·동문 사진 |
| `_config.yml` | 사이트 전반 설정 |

### 배포 구조 (참고)
`main` 브랜치에 푸시 → GitHub Actions(`.github/workflows/deploy.yml`)가 빌드 → `gh-pages` 브랜치로 배포 →
Pages가 `gh-pages`를 서빙. **`main`을 직접 편집**하면 되고, `gh-pages`는 자동 생성되므로 건드리지 않습니다.

### 복원 지점 (브랜치/태그)
- `weebly-mirror` — 원본 Weebly 백업
- `custom-jekyll` — al-folio 이전의 커스텀 디자인 버전
