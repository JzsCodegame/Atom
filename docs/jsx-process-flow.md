# JSX/UI Process Flow for Atom Repo

This repository is PHP-based (no React JSX files), so this flow defines the **UI-render and form-submission lifecycle** that happens in the browser layer and connects to backend handlers.

## 1) Initial page render flow

```mermaid
flowchart TD
    A[Browser requests page] --> B[index.php / signup.php / login.php]
    B --> C[include_once header.php]
    C --> D[Shared HTML head + CSS + nav]
    B --> E[Page-specific section content]
    E --> F[include_once footer.php]
    F --> G[Response HTML returned to browser]
```

## 2) Sign-up form submission flow

```mermaid
flowchart TD
    A[User opens signup.php] --> B[Form fields rendered in signup.php]
    B --> C[User clicks SignUp]
    C --> D[POST to includes/signup.inc.php]
    D --> E[Read POST values]
    E --> F[Load dbh2.inc.php connection]
    F --> G[Load validation helpers from functions.inc.php]
    G --> H{Validation checks}
    H -- fail --> I[Redirect back to signup.php with error query]
    H -- pass --> J[createUser(...)]
    J --> K[Insert user data in DB]
    K --> L[Redirect to signup.php?error=none or success state]
```

## 3) Login form submission flow

```mermaid
flowchart TD
    A[User opens login.php] --> B[Form rendered]
    B --> C[User submits credentials]
    C --> D[POST to includes/login.inc.php]
    D --> E[Load dbh.inc.php connection]
    E --> F[Lookup user by username/email]
    F --> G{Password verify}
    G -- fail --> H[Redirect with wrong password error]
    G -- pass --> I[Start session + store userId/userUid]
    I --> J[Redirect to index.php?login=success]
```

## 4) End-to-end request map

```mermaid
flowchart LR
    Browser -->|GET| Page[PHP page]
    Page -->|include| Header[header.php]
    Page -->|include| Footer[footer.php]
    Browser -->|POST signup| SignUpHandler[includes/signup.inc.php]
    Browser -->|POST login| LoginHandler[includes/login.inc.php]
    SignUpHandler --> Helpers[includes/functions.inc.php]
    SignUpHandler --> DB2[includes/dbh2.inc.php]
    LoginHandler --> DB1[includes/dbh.inc.php]
    DB1 --> MySQL[(MySQL/ClearDB)]
    DB2 --> MySQL
```

## Notes

- `header.php` is the shared entrypoint for the visual shell (HTML head, CSS imports, navigation).
- `footer.php` closes the shared wrapper/layout.
- `signup.php` and `login.php` are the user-facing forms.
- `includes/*.inc.php` files handle server-side form processing and redirects.

If you want, I can also add a **sequence-diagram version** and a **recommended “fixed” flow** based on current validation/field mismatches.
