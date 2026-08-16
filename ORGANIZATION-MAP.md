# Alex Playground organization map

Implemented on 2026-08-14. This records where everything moved and which files were intentionally removed as verified duplicates.

## Parent Alex Playground archive

All items below moved from `alex playground/` to `alex playground/archive/early-homepage-experiments/` with the same filename:

- `finer-things-home.html`
- `index.html`
- `index-test.html`
- `index-codex.html`
- `index-fixed.html`
- `index-calmer.html`
- `index-calmer-pro-max.html`
- `index-luxury.html`
- `index-luxury-new.html`
- `index-luxury-refined.html`
- `index-fixed-plan.md`
- `hero1.webp` through `hero7.webp`
- `1.jpg` through `3.jpg`
- `1.webm` through `5.webm`
- The complete `luxury-calm/` folder, including `CALMER-GUIDE.md`, `INDEX-GUIDE.md`, `calmer.html`, and `index.html`

Nothing in this parent-level move was deleted or rewritten. A before/after SHA-256 hash-multiset comparison matched across all 30 files. Media remains beside the archived HTML, so its existing relative references still work. In particular, the unique `4.webm` and `5.webm` are preserved in this archive.

## Legacy studies inside the Git repository

These files moved from the `alex-mockups/` root to `alex-mockups/studies/legacy-homepages/`:

- `mockup-first.html`
- `mockup-second.html`
- `mockup-grand-salon.html`
- `mockup-cinematic-portfolio.html`
- `mockup-atelier-filmstrip.html`
- `mockup-added-sections.html`
- `mockup-luxury-refinement.html`
- `section-ideas.html`

Their local media references changed from `assets/...` to `../../assets/...`. Cloudflare Pages `_redirects` rules preserve both each former extensionless URL and its `.html` equivalent.

## Assets

- Kept as canonical: `alex-mockups/assets/` — all 48 repository images and videos.
- Removed as a verified byte-identical duplicate: `alex-mockups/finer-things-website/assets/` — all 48 files remain recoverable from Git history.
- Active pages in `finer-things-website/` now use `../assets/...`.
- Motion studies in `finer-things-website/luxury-motion-studies/` now use `../../assets/...`.
- Legacy homepage studies in `studies/legacy-homepages/` now use `../../assets/...`.

## Housekeeping

- Removed tracked `alex-mockups/.DS_Store` and `alex-mockups/finer-things-website/.DS_Store`.
- Added `alex-mockups/.gitignore` so Finder metadata is not tracked again.
- Expanded `alex-mockups/README.md` into the current project map.
- The active website stayed in `alex-mockups/finer-things-website/`.
- The experimental pages remain in `alex-mockups/finer-things-website/luxury-motion-studies/`; their former `*-2.html` filenames were later simplified to clean `.html` names, with compatibility redirects retained.

## Recovery

Repository moves, duplicate removals, and path changes are tracked by Git and can be recovered from the commit before this organization pass. Parent-level early experiments were archived rather than deleted and retain their original contents.
