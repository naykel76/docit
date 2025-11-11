<p align="center"><a href="https://naykel.com.au" target="_blank"><img src="https://avatars0.githubusercontent.com/u/32632005?s=460&u=d1df6f6e0bf29668f8a4845271e9be8c9b96ed83&v=4" width="120"></a></p>

<a href="https://packagist.org/packages/naykel/docit"><img src="https://img.shields.io/packagist/dt/naykel/docit" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/naykel/docit"><img src="https://img.shields.io/packagist/v/naykel/docit" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/naykel/docit"><img src="https://img.shields.io/packagist/l/naykel/docit" alt="License"></a>

# NAYKEL Docit

Docit is a documentation generator for Laravel applications. It allows you to
create beautiful, customizable documentation pages using Markdown syntax.

## Docit Flag System Documentation

### Individual Flags

**`+code`** - Displays syntax-highlighted code using Torchlight inline.

**`+code-X`** - Displays code with language override (e.g., `+code-blade`
highlights as Blade regardless of fence language).

**`+preview`** - Renders and displays the live output of the code (executes
Blade/HTML). Shows visual result only.

**`+source`** - Displays the original source code. Should be used with
`+preview` for component documentation.

**`+collapse`** - Makes code sections collapsible with toggle buttons. Requires
code to be displayed via other flags.

**`+title="..."`** - Customizes the button text for collapsible sections. Only
works with `+collapse`.

**`class="..."`** - Adds a CSS class to the preview wrapper. Only works with
`+preview`.

---

### Common Flag Combinations

**`+code-blade +preview`**  
Rendered preview (top) + source code highlighted as Blade (bottom, inline).

**`+preview +source`**  
Rendered component (top) + original source code (bottom, inline).

**`+code-blade +collapse`**  
Code hidden in collapsible section with "Show Code" button.

**`+preview +source +collapse`**  
Rendered component (always visible) + collapsible source code below.

**`+code-blade +preview +collapse`**  
Rendered preview (always visible) + collapsible source code below.

---

### Usage Notes

- No flags = standard markdown code block (no syntax highlighting)
- `+collapse` requires code display (via `+code`, `+source`, or auto-display with `+preview`)
- `+title` only affects collapsible sections
- `class` only affects preview wrapper

---