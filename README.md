# Finer Things website studies

Standalone HTML design and motion studies for the Finer Things luxury hospitality and accessories website. There is no build step: pages contain their own CSS and JavaScript and can be opened directly in a browser.

## Project map

- `finer-things-website/` — current authoritative multi-page website.
- `finer-things-website/luxury-motion-studies/` — experimental `-2` page variants. They reference the shared root asset library and do not contain copied media.
- `studies/legacy-homepages/` — preserved first-generation homepage and Featured-section explorations. These are references, not the active site.
- `assets/` — the single canonical image and video library for the repository.
- `AGENTS.md` — repository-wide decisions, history, and working rules.
- `finer-things-website/AGENTS.md` — detailed handoff for the active website.
- `_redirects` — Cloudflare Pages redirects preserving the former root URLs of legacy mockups.
- `ORGANIZATION-MAP.md` — exact record of the 2026-08-14 old and new file locations.
- `FILE-PATH-MAP.md` — exhaustive one-row-per-file ledger of every move, consolidation, and metadata removal.

The parent `alex playground/archive/early-homepage-experiments/` folder contains experiments that predate this Git repository, together with the media required to open them. It is deliberately outside this repository and is not deployed by Cloudflare Pages.

## Current entry points

- Active homepage: `finer-things-website/index.html`
- Experimental motion homepage: `finer-things-website/luxury-motion-studies/index-2.html`
- Preserved legacy studies: `studies/legacy-homepages/`

## Editing rules

Read both applicable `AGENTS.md` files before making changes. Update the relevant handoff immediately with every meaningful implementation, rollback, or architectural decision. Preserve the baseline studies and avoid duplicating the root asset library.
