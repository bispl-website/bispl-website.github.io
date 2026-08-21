# BISPL 홈페이지 편집 안내 (bispl-website.github.io)

이 사이트는 **al-folio(Jekyll 테마)**로 만들어졌고, `main` 브랜치에 커밋하면
**GitHub Action이 자동으로 빌드·배포**합니다 (반영까지 보통 2~5분).

## 편집하는 두 가지 방법
- **① GitHub 웹에서 직접 (가장 쉬움)** — 저장소에서 파일을 열고 우측 연필(✎) 아이콘 → 수정 → 아래 **Commit changes**.
- **② 로컬에서** — `git clone` → 수정 → `git commit` → `git push origin main`.
- 저장(커밋)하면 자동 빌드되고, **Actions 탭**에서 진행/성공 여부를 볼 수 있습니다.

> 편집한 내용이 안 보이면: (1) Actions에서 빌드 성공했는지, (2) 브라우저 강력새로고침(⌘⇧R), (3) 몇 분 후 CDN 반영을 확인하세요.

---

## 1. 홈 상단 "Research Highlight"

### (a) 내용 바꾸기 — `_data/highlight.yml`
```yaml
title:   "논문 제목"
authors: "저자 et al., 학회/저널 연도"
url:     "https://arxiv.org/abs/..."     # 클릭 시 이동할 링크
image:   "assets/img/highlight/파일명.png"  # 아래 (b)
```
- **이미지 교체**: 새 그림을 `assets/img/highlight/` 폴더에 넣고, 위 `image:`를 그 파일명으로.

### (b) 폭·폰트·색 바꾸기 — `assets/css/main.scss` 의 `.research-highlight` 블록 (약 196~268줄)
| 무엇 | 위치(속성) | 설명 |
|---|---|---|
| **박스(글) 가로 비율** | `.rh-body { flex: 0 0 40%; }` | 40%를 키우면 글박스 넓어지고 그림 좁아짐 |
| **그림 가로 비율** | `.rh-img { flex: 1 1 60%; }` | 위와 합이 100% 되게 (예: 45% / 55%) |
| **제목 폰트 크기** | `.rh-title { font-size: clamp(1.2rem, 1.6vw, 1.55rem); }` | 세 값(최소, 유동, 최대)을 키우면 커짐 |
| **제목 폰트 종류** | `.rh-title { font-family: Georgia, ... serif; }` | 원하는 폰트로 |
| **저자 글자 크기** | `.rh-authors { font-size: 0.95rem; }` | |
| **저자 글자 색** | `.rh-authors { color: #ffd166; }` | |
| **박스 배경색** | `.rh-body { background: #2a3342; }` | |
| **"Latest Research Highlight" 태그 색** | `.rh-tag { color: #ff8c1a; }` | |
| **그림 채움 방식** | `.rh-img img { object-fit: contain; }` | `contain`=그림 전체(잘림 없음) / `cover`=박스 꽉 채움(잘릴 수 있음) |
| **모바일(작은 화면)** | `@media ... { .research-highlight { flex-direction: column; } ... }` (약 263줄) | 세로로 쌓임. 모바일 제목 크기 등 여기서 |

> 배치(제목·이미지 순서 등) 자체를 바꾸려면 `_pages/about.md` 위쪽의 `<div class="research-highlight">` HTML을 수정.

---

## 2. 홈페이지 "News" 내용 — `_news/` 폴더

뉴스 하나 = 파일 하나. 파일명은 **`YYYY-MM-DD-제목.md`** 형식 (날짜가 정렬·표시에 쓰임).

새 뉴스 추가: `_news/`에 예를 들어 `2026-08-01-new-award.md` 파일 생성:
```markdown
---
layout: post
title: "뉴스 제목"
date: 2026-08-01 12:00:00
inline: false      # true = 한 줄 짧은 소식 / false = 제목+본문이 있는 글
---

본문 내용. 목록도 가능:
- 항목 1
- 항목 2
```
- **날짜(`date:`)는 한국 시간으로 해석**됩니다 (`_config.yml`의 `timezone: Asia/Seoul`). 오늘 날짜로 적어도 바로 올라갑니다.
- **홈페이지**엔 최신 몇 개만, **`/news/` 페이지**엔 전체가 보입니다.
- 뉴스 **수정/삭제**: 해당 날짜 파일을 열어 고치거나 파일을 삭제.
- 홈에 보이는 개수는 `_pages/about.md`의 `{% include news.liquid limit=true %}` (테마 기본 개수)로 정해집니다.

---

## 3. Publications 내용 — `_bibliography/papers.bib`

논문 목록은 **BibTeX 파일** 하나(`_bibliography/papers.bib`)로 관리됩니다. 위에 추가할수록 위에 표시.

새 논문 추가 예:
```bibtex
@inproceedings{성key2026short,
  author    = {First Author and Second Author and Jong Chul Ye},
  title     = {논문 제목},
  booktitle = {NeurIPS},          % 학회. 저널이면 journal = {...}
  year      = {2026},
  url       = {https://arxiv.org/abs/...},   % 링크
  pdf       = {파일.pdf},          % (선택) assets/pdf/ 에 넣은 파일
  code      = {https://github.com/...},      % (선택)
  bibtex_show = {true},           % BibTeX 보기 버튼
}                                 % nums / selected 는 빌드가 자동으로 넣습니다
```
- **번호 `[C##]`/`[J##]`/`[B##]`**: 빌드할 때 `bin/number_pubs.py` 가 자동으로 매기므로 **손대지 마세요.**
  - 한번 부여된 번호는 **절대 바뀌지 않습니다.** 새 논문은 항상 기존 번호 **뒤에** 붙습니다 (예: 마지막이 C103이면 다음은 C104). 오래된 논문을 뒤늦게 추가해도 마찬가지입니다.
  - 번호는 빌드가 `papers.bib` 에 써서 저장소에 되커밋합니다. 그래서 **push 후에는 `git pull` 을 먼저** 하고 다음 작업을 하세요.
  - `year` 는 `{2026}`, `"2026"`, `2026` 어느 형식이든 됩니다 (ACL Anthology 형식 그대로 붙여넣어도 OK).
- **홈 대표 논문**: `selected` 필드도 같은 스크립트가 관리합니다. **가장 최신 6편이 자동으로** 홈의 "Most Recent Publications"에 올라갑니다. 직접 `selected={true}` 를 넣어도 빌드 때 덮어써집니다. 편수를 바꾸려면 `bin/number_pubs.py` 맨 위의 `N_SELECTED` 를 고치세요.
- **저자 강조**: `_config.yml` 의 `scholar.last_name` / `scholar.first_name` 에 적힌 저자를 기울임체로 강조합니다. 현재 `Ye` + `Jong Chul` / `J. C.` / `J. Chul` 로 설정되어 있습니다.
- **저자 표시 수**: `_config.yml` 의 `max_author_limit` 를 비워 두어 **모든 저자를 표시**합니다. 숫자를 넣으면 그 수만큼만 보이고 나머지는 "and N more authors"로 접히는데, 교수님이 마지막 저자인 논문에서는 성함이 아예 사라지므로 비워 두는 것을 권합니다.

---

## 4. People / Students 페이지 — `_data/members.yml`

`/people/` 페이지는 **`_data/members.yml`** 를 읽어 자동 생성됩니다.
그룹: **Postdocs · Ph.D. Students · M.S. Students** (순서대로 표시).

구성원 추가/수정: 해당 그룹의 `people:` 아래에 블록 추가:
```yaml
- group: "Ph.D. Students"
  role: "Ph.D. Student"
  people:
    - name: "Gil Dong Hong"
      initials: "GD"                         # 사진 없을 때 원형 이니셜로 표시
      photo: "assets/img/people/gil-dong-hong.jpg"   # (선택) 사진
      edu:
        - "MS. KAIST"
        - "BS. Seoul Nat'l Univ."
      email: "gildong@kaist.ac.kr"              # (선택) 이메일 아이콘
      website: "https://gildonghong.github.io"  # (선택) 개인 홈페이지 아이콘
```
- **사진**: `assets/img/people/` 에 정사각형 사진(예: 얼굴)을 넣고 위 `photo:`에 파일명. 사진이 없으면 `initials`가 원형으로 표시됩니다.
- **이메일 / 개인 홈페이지**: `email:`, `website:` 를 넣으면 이름 아래에 ✉ / 🌐 아이콘이 생기고, 클릭하면 각각 메일 작성·홈페이지 새 탭으로 연결됩니다. 넣지 않으면 아이콘이 나오지 않으니 **원하는 사람만** 추가하면 됩니다.
  - 이메일은 스팸봇 수집 방지를 위해 HTML 엔티티로 자동 인코딩되어 출력됩니다(화면에는 정상 동작).
  - `website:` 는 `https://` 를 빼고 `gildonghong.github.io` 처럼 적어도 됩니다.
- **삭제**: 해당 `- name:` 블록을 지우면 됩니다.
- **그룹 추가**(예: "Interns"): `- group: "Interns"` 블록을 통째로 추가.
- 표시 개수는 자동으로 세어집니다.
- 표(그리드) 모양(사진 크기·간격 등)은 `_pages/people.md` 위쪽 `<style>` 블록에서 조정.

### 졸업생(Alumni) — `_data/alumni.yml` (페이지 `/alumni/`)
같은 방식으로 `_data/alumni.yml` 편집.

### 수상(Awards) — `_data/awards.yml` (페이지 `/awards/`)

---

## 5. Professor 페이지 — `_pages/professor.md`

교수 소개는 **마크다운 파일** `_pages/professor.md` 를 직접 수정.
- **사진**: `assets/img/prof.png` 교체 (같은 이름으로 덮어쓰기).
- **CV(PDF)**: `assets/pdf/cv.pdf` 교체하면 페이지의 다운로드/미리보기에 반영.
- 직함·수상·링크 등은 파일 안 마크다운 텍스트를 고치면 됩니다.

---

## 6. 그 밖에

| 무엇 | 파일 |
|---|---|
| 홈 "About BISPL" 소개 문단 | `_pages/about.md` (아래쪽 마크다운) |
| 사이트 제목/설명/키워드(SEO)·메뉴 순서 | `_config.yml` |
| 소셜 링크(이메일·GitHub 등) | `_data/socials.yml` |
| 상단 메뉴에 페이지 표시/순서 | 각 `_pages/*.md` 앞부분의 `nav: true`, `nav_order:` |
| 색상 테마·글꼴 등 전역 스타일 | `_sass/` 폴더, `assets/css/main.scss` |
| 소셜 공유 미리보기·검색 인증 | `_config.yml` (`serve_og_meta`, `og_image`, `google_site_verification` 등) |

---

## 자주 겪는 점
- **이미지가 안 보임**: 경로가 `assets/img/...` 로 정확한지, 파일명 대소문자가 맞는지 확인.
- **YAML 파일(.yml) 오류**: 들여쓰기(스페이스 2칸)와 따옴표를 지켜야 빌드가 됩니다. 저장 후 Actions에서 실패 뜨면 그 파일의 들여쓰기부터 확인.
- **빌드 실패**: 저장소 **Actions 탭**에서 빨간 X를 클릭하면 어느 줄이 문제인지 로그가 나옵니다.
- **뉴스 목록엔 보이는데 클릭하면 404**: 글의 `date:` 가 빌드 시각보다 미래면 Jekyll이 목록에는 넣고 개별 페이지는 만들지 않습니다. `_config.yml` 에 `timezone: Asia/Seoul` 과 `future: true` 를 넣어 막아 두었으니 지금은 발생하지 않아야 합니다.
- **빌드가 아예 시작조차 안 됨**: 커밋 메시지에 `[` `skip ci` `]` (대괄호로 감싼 형태) 문자열이 들어가면 GitHub Actions가 그 커밋을 통째로 건너뜁니다. 제목뿐 아니라 **본문에 설명으로 적어도** 걸리니, 커밋 메시지에는 쓰지 마세요. Actions 탭에 실행 기록 자체가 없으면 이걸 의심하세요.
- 반영은 커밋 후 **2~5분**. 급하면 Actions에서 빌드 완료를 확인하고 ⌘⇧R.

---

## 학생 본인이 정보를 고치도록 안내할 때

구성원에게 배포할 안내문은 [MEMBER-EDIT-GUIDE.md](MEMBER-EDIT-GUIDE.md) 에 있습니다 (한국어 + English).
`/people/` 페이지 하단에도 이 문서 링크가 걸려 있습니다.
