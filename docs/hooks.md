# Uranium hooks

These are the hooks Uranium Pro and child themes can use. Add a line here whenever a hook is added.

## Actions

| Hook | Where | Arguments |
|---|---|---|
| `uranium_before_header` | `header.php`, before the header part | none |
| `uranium_after_header` | `header.php`, after the header part | none |
| `uranium_page_heading_end` | `template-parts/page-heading.php`, inside the heading, after the intro and search | `array $args` (title, intro, meta, class, search) |
| `uranium_before_footer` | `footer.php`, before the footer part | none |
| `uranium_after_footer` | `footer.php`, after the footer part | none |

## Filters

| Hook | What it filters | Arguments |
|---|---|---|
| `uranium_breadcrumb_items` | Breadcrumb trail as label and URL pairs, first to last | `array $items` |
| `uranium_breadcrumbs_html` | Return a string to replace the breadcrumbs entirely, for example with an SEO plugin's trail. Return `null` to keep Uranium's own | `string\|null $html` |
| `uranium_product_facts` | WooCommerce facts shown on cards and in the single product spec rail | `array $facts` (label => value), `WC_Product $product` |

## CSS hooks

| Class | Effect |
|---|---|
| `is-arrow-diagonal` on a Button block | Uses the up-right arrow, for links that go to a destination |
| `is-arrow-none` on a Button block | Removes the trailing arrow |
| `is-compact` on a Numbered rows group | A single-line list with a number and an arrow |
| `is-current` on a row inside a compact Numbered rows group | Marks the active row |
| `is-split`, `is-timeline` on a Hairline rows group | Two-column rows: a claim beside its detail, or a year beside an event |
| `u-muted` | Secondary text color that adapts to the surface it sits on |
