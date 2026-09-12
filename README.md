# Uranium

Uranium is a hybrid WordPress theme for industrial companies: manufacturers, equipment makers, parts distributors, engineering firms and field-service teams. It's built for sites that show a technical catalog, take quote requests and sell parts online.

- **Demos:** [WooCommerce store](https://demo.gatilab.com/uranium/) and [FluentCart store](https://demo.gatilab.com/uranium-fluentcart/)
- **Download:** [uranium-0.1.1.zip](https://github.com/wpgaurav/uranium/releases/download/v0.1.1/uranium-0.1.1.zip)
- **Requires:** WordPress 6.8 or later (tested up to 7.1) and PHP 8.1 or later

## What's inside

- **Hybrid build:** PHP templates run the page shell and the store screens, theme.json holds the design tokens, and the header and footer are block template parts you can edit in the Site Editor.
- **41 patterns:**
  - split heroes and a dark spec strip
  - numbered product families and an industry panel
  - a process band, product cards and spare part cards
  - closing bands and contact, support and sign-in layouts
  - three headers, three footers and seven complete pages
- **WooCommerce:** shop, categories, product pages with a spec rail built from attributes, cart and checkout blocks, My Account and the Mini-Cart. It uses hooks only, with no template overrides.
- **FluentCart:** templates for products, categories and brands, with FluentCart's colors mapped to the theme.
- **Light and dark:** dark follows the visitor's device by default, and a header toggle remembers their choice.
- **Four accent palettes** in the Customizer: Signal, Hazard, Hi-vis and Cobalt.
- **Details:** IBM Plex type, square corners, hairline rules and no jQuery on the front end.

Uranium Pro is a separate plugin in development. It will add quote requests, catalog filters and compare, product documents and interactive blocks. The free theme is complete without it.

## Install

1. Download the zip from the [latest release](https://github.com/wpgaurav/uranium/releases/latest).
2. In your dashboard, go to Appearance > Themes > Add New Theme > Upload Theme, and choose the zip.
3. Activate Uranium.
4. Create a page from the Home page pattern, then set it as your front page under Settings > Reading.

## Repo layout

| Path | What it holds |
|---|---|
| `theme/` | The theme itself. This is what the zip contains |
| `docs/hooks.md` | Actions, filters and CSS hooks for child themes and Uranium Pro |
| `docs/spikes.md` | What was checked in WordPress 7.1, WooCommerce 11.1 and FluentCart 1.6.4 before building |
| `docs/overrides.md`, `docs/credits.md` | Store template overrides (none) and asset provenance |
| `build.sh` | Zips `theme/` into `build/uranium-<version>.zip` |

## License

- **Theme:** GPLv2 or later.
- **Fonts:** IBM Plex, under the SIL Open Font License 1.1.
- **Icons:** drawn from Heroicons, under the MIT License.
- **Images:** created for Uranium and released under CC0.

Details are in `theme/readme.txt`.
