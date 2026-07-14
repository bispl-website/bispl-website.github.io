# BISPL @ KAIST — 홈페이지

라이브: **https://bispl-website.github.io/**

이 사이트는 **Jekyll**로 만들어져 있어, HTML을 직접 건드리지 않고 **간단한 텍스트 파일만 수정**하면 됩니다.
파일을 저장(커밋)하면 **1~2분 뒤 사이트에 자동으로 반영**됩니다. 로컬에 프로그램을 설치할 필요가 없습니다.

가장 쉬운 방법: GitHub 웹사이트에서 파일을 열고 연필(✏️) 아이콘을 눌러 수정 → 아래 초록색 **Commit changes** 버튼을 누르면 끝입니다.

---

## 📰 뉴스 추가하기 (가장 자주 하는 작업)

`_posts/` 폴더에 새 파일을 하나 만듭니다. 파일 이름은 반드시 **`날짜-제목.md`** 형식입니다.

예: `_posts/2026-09-01-new-paper-neurips.md`

```markdown
---
title: "우리 논문이 NeurIPS 2026에 채택되었습니다"
date: 2026-09-01
---

- 저자 A, 저자 B, Jong Chul Ye, *논문 제목*, NeurIPS 2026.
- 축하합니다!
```

- `---` 사이는 제목과 날짜입니다.
- 그 아래는 **마크다운**으로 자유롭게 작성 (`- ` 는 목록, `*글자*` 는 기울임, `**글자**` 는 굵게)
- 최신 뉴스가 홈 화면 맨 위에 자동으로 올라갑니다.

## 👥 멤버 추가·수정 — `_data/members.yml`

```yaml
- group: "M.S. Students"
  role: "M.S. Student"
  people:
    - name: "홍길동"
      initials: "HG"                       # 사진 없을 때 표시될 이니셜
      photo: "assets/img/people/hong.jpg"  # (선택) 사진 경로
      edu:
        - "BS. CS, KAIST"
```

- 새 멤버는 해당 그룹의 `people:` 밑에 위 형식으로 한 명 추가하면 됩니다.
- 사진을 넣으려면: 사진 파일을 `assets/img/people/` 폴더에 올리고, `photo:` 에 그 경로를 적으면 됩니다. (사진이 없으면 `photo:` 줄을 지우면 이니셜이 표시됩니다.)
- 졸업하면 그 사람 블록을 잘라내 `_data/alumni.yml` 로 옮기면 됩니다.

## 🎓 동문 — `_data/alumni.yml`
멤버와 비슷합니다. `detail:` 한 줄에 현재 소속을 적습니다.

## 📄 논문 추가 — `_data/publications.yml`

```yaml
conferences:
  - text: "저자들, \"논문 제목\", NeurIPS, 2026."
    badge: "spotlight"        # (선택) 없으면 이 줄 삭제
journals:
  - text: "저자들, \"논문 제목\", IEEE TMI, 2026."
```

- 맨 위에 추가하면 목록 맨 앞에 나옵니다.
- 큰따옴표(`"`)를 글 안에 쓸 때는 `\"` 처럼 앞에 백슬래시를 붙입니다.

## 🏆 수상 — `_data/awards.yml`, 🔬 연구주제 — `_data/research.yml`, 👤 교수 소개 — `_data/professor.yml`
같은 방식으로 목록만 수정하면 됩니다.

---

## 폴더 구조 요약
| 위치 | 내용 |
|---|---|
| `_posts/` | 뉴스 (마크다운) |
| `_data/*.yml` | 멤버·동문·논문·수상·연구주제·교수 정보 |
| `assets/style.css` | 디자인(색상·글꼴 등) |
| `assets/img/people/` | 멤버·동문 사진 |
| `index.html`, `professor.html` 등 | 페이지 틀 (보통 건드릴 필요 없음) |

> 원본 Weebly 백업은 `weebly-mirror` 브랜치에 그대로 보존되어 있습니다.
