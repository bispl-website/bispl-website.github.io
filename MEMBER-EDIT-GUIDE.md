# 내 정보 수정하기 / Editing your own profile

BISPL 홈페이지 [People 페이지](https://bispl-website.github.io/people/)에 나오는 **본인 정보**(이메일, 개인 홈페이지, 사진, 학력)를 직접 고치는 방법입니다.

고쳐야 할 파일은 **`_data/members.yml` 하나뿐**입니다. 다른 파일은 건드릴 필요 없습니다.

---

## 방법 1. GitHub 웹에서 직접 수정 (권장)

GitHub 계정만 있으면 됩니다. 레포 권한은 필요 없습니다 — 수정 요청을 보내면 관리자가 확인 후 반영합니다.

> 💡 **관리자로부터 collaborator 권한을 받은 분**은 fork 과정이 없고, 4단계에서 곧바로 저장됩니다. 차이점은 [아래 별도 설명](#collaborator-권한이-있는-경우)을 보세요. 나머지 단계는 동일합니다.

### 1단계 — 편집 화면 열기

아래 주소를 클릭하세요 (GitHub 로그인 필요):

**https://github.com/bispl-website/bispl-website.github.io/edit/main/_data/members.yml**

처음 열면 *"You need to fork this repository to propose changes"* 같은 안내가 뜹니다.
**Fork this repository** 를 누르면 자동으로 본인 사본이 만들어지고 편집기가 열립니다. 원본에는 아직 아무 영향이 없습니다.

### 2단계 — 내 이름 찾기

`Ctrl + F` (Mac은 `Cmd + F`) 로 본인 이름을 검색하세요. 이런 블록이 보입니다:

```yaml
    - name: "Gil Dong Hong"
      initials: "GD"
      photo: "assets/img/people/gil-dong-hong.jpg"
      edu:
        - "MS. AI, KAIST"
        - "BS. CS, KAIST"
      email: "gildong@kaist.ac.kr"
```

### 3단계 — 고치기

원하는 줄을 수정하거나 추가합니다.

| 항목 | 설명 | 예시 |
|---|---|---|
| `email` | 이메일. 넣으면 이름 아래 ✉ 아이콘이 생깁니다 | `email: "gildong@kaist.ac.kr"` |
| `website` | 개인 홈페이지. 넣으면 🌐 아이콘이 생깁니다 | `website: "https://gildonghong.github.io"` |
| `edu` | 학력. 페이지에는 **첫 줄만** 표시됩니다 | 아래 예시 참고 |
| `photo` | 사진 경로 (사진 올리는 법은 아래 별도 설명) | `photo: "assets/img/people/gil-dong-hong.jpg"` |

**개인 홈페이지를 추가하는 예:**

```yaml
    - name: "Gil Dong Hong"
      initials: "GD"
      photo: "assets/img/people/gil-dong-hong.jpg"
      edu:
        - "MS. AI, KAIST"
        - "BS. CS, KAIST"
      email: "gildong@kaist.ac.kr"
      website: "https://gildonghong.github.io"     # ← 이 줄 추가
```

`https://` 는 생략해도 됩니다 (`gildonghong.github.io` 라고만 써도 자동으로 붙습니다).

**빼고 싶으면** 해당 줄을 통째로 지우면 됩니다. 아이콘도 같이 사라집니다.

> ⚠️ **들여쓰기(공백 개수)를 반드시 맞춰주세요.** `email:` 과 `website:` 는 `name:` 의 `n` 과 같은 칸에서 시작해야 합니다 (공백 6칸). YAML은 들여쓰기가 틀리면 빌드가 실패합니다. 탭(Tab) 대신 스페이스를 쓰세요.

### 4단계 — 수정 요청 보내기

1. 오른쪽 위 **Commit changes...** 버튼 클릭
2. 설명란에 간단히 적기 — 예: `Add homepage for Gil Dong Hong`
3. **Propose changes** 클릭
4. 다음 화면에서 **Create pull request** 클릭 → 한 번 더 **Create pull request**

끝입니다. 관리자가 확인 후 병합하면 **2~4분 뒤** 홈페이지에 자동 반영됩니다.

---

## Collaborator 권한이 있는 경우

관리자로부터 초대를 받아 수락한 분은 위 과정이 더 짧습니다.

- **1단계**에서 fork 안내가 뜨지 않고 편집기가 바로 열립니다.
- **4단계**에서 **Commit changes...** 를 누르면 저장 위치를 고르는 화면이 나옵니다. **Commit directly to the `main` branch** 를 선택하고 저장하면 끝입니다. 검토 없이 **2~4분 뒤** 바로 반영됩니다.

권한 범위를 알고 계셔야 합니다. Collaborator는 `members.yml` 뿐 아니라 **레포 전체를 수정할 수 있습니다.** 본인 정보 외의 파일은 건드리지 말아 주세요. 실수로 다른 곳을 고쳤다면 숨기지 말고 관리자에게 알려주시면 됩니다 — git 기록이 남아 있어 되돌릴 수 있습니다.

확신이 없을 때는 `main`에 바로 저장하는 대신 **Create a new branch and start a pull request** 를 고르셔도 됩니다. 언제든 안전한 선택입니다.

---

## 사진을 바꾸고 싶다면

1. 정사각형 사진을 준비합니다 (얼굴 중심, 400×400px 이상 권장, `.jpg`)
2. 파일명은 이름을 소문자·하이픈으로: `gil-dong-hong.jpg`
3. 본인 fork에서 [`assets/img/people/`](https://github.com/bispl-website/bispl-website.github.io/tree/main/assets/img/people) 폴더로 이동 → **Add file → Upload files** 로 올리기
4. `members.yml` 의 `photo:` 값을 `"assets/img/people/gil-dong-hong.jpg"` 로 맞추기
5. 위와 같이 pull request 보내기

사진이 없으면 이니셜이 적힌 원형 아이콘이 대신 표시됩니다.

---

## 방법 2. 관리자에게 전달

GitHub 계정이 없거나 위 과정이 번거로우면, 아래 내용을 관리자에게 보내주세요.

```
이름:
이메일:
개인 홈페이지:
학력(최신순):
사진: (첨부)
```

---

## 자주 묻는 것

**Q. 내가 실수해서 사이트가 깨질 수 있나요?**
아니요. 두 겹으로 막혀 있습니다. 첫째, pull request는 관리자가 검토 후 병합하므로 바로 반영되지 않습니다. 둘째, 설령 잘못된 내용이 병합돼도 빌드가 실패하면 배포가 중단되어 **기존 사이트가 그대로 유지**됩니다.

**Q. 이메일을 공개하면 스팸이 오지 않나요?**
주소를 그대로 넣지 않고 인코딩해서 내보냅니다. 실제 페이지 소스에는 `%6A%65%6F%6E...` 처럼 나오고, 클릭하면 정상 동작합니다. 그래도 걱정되면 `email:` 줄을 빼고 `website:` 만 넣으셔도 됩니다.

**Q. 반영이 안 돼요.**
병합 후 2~4분 걸립니다. 그 뒤에도 안 보이면 강력 새로고침 하세요 — `Ctrl+Shift+R` (Mac은 `Cmd+Shift+R`).

---

# English

To update **your own** entry on the [People page](https://bispl-website.github.io/people/) (email, personal homepage, photo, education), you only need to edit one file: **`_data/members.yml`**.

1. Open the editor (GitHub account required, no repo permissions needed):
   **https://github.com/bispl-website/bispl-website.github.io/edit/main/_data/members.yml**
   Click **Fork this repository** when prompted — this creates your own copy.
2. Find your name with `Ctrl+F` / `Cmd+F`.
3. Add or edit these optional fields. Indentation must be **6 spaces**, and spaces — never tabs:

   ```yaml
       - name: "Anna Example"
         initials: "AE"
         photo: "assets/img/people/anna-example.jpg"
         edu:
           - "MS. AI, KAIST"
         email: "anna@kaist.ac.kr"
         website: "https://anna-example.github.io"
   ```

   `email` adds a ✉ icon, `website` adds a 🌐 icon. Omit a line to hide its icon. The `https://` prefix is optional. Only the **first** `edu` line is displayed.
4. Click **Commit changes...** → **Propose changes** → **Create pull request**.

An admin reviews and merges it; the site rebuilds automatically within 2–4 minutes.

**If you were invited as a collaborator**, there is no fork step: the editor opens directly, and at step 4 you can choose **Commit directly to the `main` branch** — your change goes live in 2–4 minutes with no review. Note that collaborator access covers the **whole repository**, not just `members.yml`, so please leave other files alone. When in doubt, pick **Create a new branch and start a pull request** instead — always safe.

**To change your photo**, upload a square image to `assets/img/people/` in your fork (**Add file → Upload files**) and point `photo:` at it. Without a photo, your initials are shown instead.

**Nothing you do here can break the live site.** Pull requests require review, and if a build fails the previous version stays online.

No GitHub account? Send your name, email, homepage, education and photo to the admin instead.
