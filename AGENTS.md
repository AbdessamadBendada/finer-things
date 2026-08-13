# Finer Things mockups — Codex handoff

## Current active deliverable

The work has moved beyond homepage explorations into a connected multi-page website. The active deliverable is now the self-contained site in `finer-things-website/`, with `finer-things-website/index.html` as its homepage.

Before changing anything inside that folder, read `finer-things-website/AGENTS.md`. It contains the current page map, approved interaction decisions, known placeholders, recent fixes, and validation commands.

The root-level `mockup-*.html` files remain design history and comparison material. Do not use `mockup-luxury-refinement.html` as the active homepage anymore unless the user explicitly asks to return to the exploratory phase. Do not overwrite or delete the root mockups.

## Mandatory documentation discipline

Every agent must update the relevant Markdown handoff documentation as part of every meaningful change. Do this immediately in the same task; do not wait for the user to request documentation separately.

For active website work, update `finer-things-website/AGENTS.md`. Update this root `AGENTS.md` too when a decision affects the overall project, the relationship between mockups and the active site, shared assets, or global working rules.

Documentation must state the resulting current behavior, not merely that a file changed. If the user rejects, reverses, or rolls back a decision, record all three of the following:

1. What was tried or changed.
2. That it was rejected or rolled back, including the user's reason when known.
3. Which behavior or version is now authoritative.

Never leave a superseded decision written as though it remains active. Preserve useful decision history under a clearly labeled rollback or change-history note so another agent does not accidentally restore rejected work.

## Project purpose

This folder contains standalone HTML design explorations for the Finer Things luxury hospitality/accessories website. There is no framework, package manager, or build step. Each HTML file contains its own CSS and JavaScript and can be opened directly in a browser.

The intended visual direction is elegant, restrained, editorial, chic, and luxurious. Favor slow cinematic motion, generous typography, warm neutral colors, and purposeful animation. Avoid generic cards, busy UI, excessive wording, or effects that feel playful/techy.

## Files and their roles

- `mockup-first.html`: Original first design. Keep it as a baseline.
- `mockup-second.html`: Original second design with the cinematic scroll hero. Keep it as a baseline.
- `mockup-grand-salon.html`: Full duplicate of the first design with the selected Grand Salon Featured gallery. This is the strongest version of the first direction.
- `mockup-cinematic-portfolio.html`: Duplicate of the second design. Its Featured section is a vertically stacking editorial project cascade. The earlier interactive project-index concept was rejected and is no longer displayed, although some unused CSS for it may remain.
- `mockup-atelier-filmstrip.html`: Duplicate of the second design with a pinned horizontal Atelier Filmstrip Featured section. The user liked this direction. Its scroll motion was subsequently changed to eased interpolation with continuous distance-based scaling and opacity.
- `mockup-added-sections.html`: Duplicate of `mockup-first.html` used to develop the approved family story, experience numbers/testimonial proof section, corrected CTA/newsletter order, and revised end-of-page color rhythm. Preserve it as the pre-refinement comparison.
- `mockup-luxury-refinement.html`: Strongest preserved exploration of the first-design direction and the source for the active site's homepage. Keep it as historical comparison; active work now continues in `finer-things-website/index.html`.
- `section-ideas.html`: Earlier comparison/prototyping page for three variants of the living mosaic. The user selected the first “Grand Salon” direction. Treat this as an experiment, not the main deliverable.

Do not overwrite the two original baseline files unless the user explicitly asks. For a new direction, duplicate the closest existing variant and use a meaningful filename.

## Shared decisions already made

### Assets

All raster images and WebM videos live in `assets/`. All HTML references should use `assets/<filename>`.

The folder currently contains:

- 34 newer `.webp` project images, numbered approximately `0661`–`0704`
- 7 original `hero*.webp` images
- 3 product stills: `1.jpg`, `2.jpg`, `3.jpg`
- 3 product videos: `1.webm`, `2.webm`, `3.webm`
- Supplied family portrait: `finer-things-family.png`

The newer filenames identify projects such as Marsa Al Arab Lobby, Suites, Corridors, Iliana, Bombay Club, and Waldorf Astoria Osaka. Use those names when creating project groupings. Always inventory `assets/` again before assuming this list is current; the user may add more images.

### Pinned second-section statement

Both major derivative directions use the same treatment for the second/Purpose section:

- The Purpose section is approximately `200svh` tall (`220svh` on mobile).
- Its inner `.wrap` is sticky and fills the viewport.
- Vertical scrolling progressively reveals the sentence word by word using masked movement, opacity, and blur.
- The section releases after the complete sentence is visible.
- Reduced-motion mode removes the pin and shows the complete sentence immediately.

Relevant code is labeled `PINNED PURPOSE STATEMENT` in CSS and `pinned purpose statement` in JavaScript.

### CTA and newsletter order/copy

In the derivative versions, the end-of-page order should be:

1. Final “Start a project” CTA
2. Newsletter
3. Footer

The client/user prefers very little newsletter wording. Approved current copy:

- Heading: `Stay in touch.`
- Body: `Occasional stories, new projects and considered objects.`
- Button: `Subscribe`
- Fine print: `No noise. Just the occasional note.`

Do not reintroduce “From the House,” “A personal note on places with soul,” or the studio signature; the client disliked that wording.

### Latest first-direction homepage structure

The approved structure in `mockup-luxury-refinement.html` is:

1. Hero
2. Purpose
3. Our Work / three service rows
4. Experience in numbers plus testimonial
5. Finer Living
6. Family editorial story
7. Start a Project CTA
8. Newsletter
9. Footer

Do not add another homepage section without a clear reason. The user wants clarity, restraint, and minimal wording. Important brand information should be integrated into the existing sections wherever possible.

### Family editorial story

- The user supplied `assets/finer-things-family.png`, a candid portrait of Alex and Malika.
- The section sits after Finer Living and before the final CTA.
- Current headline: `Behind Finer Things is one family.`
- It presents Finer Things as a family business founded by Alex and Malika.
- Current factual wording states that Alex spent two decades opening and operating hotels, resorts, and residences around the world; Malika brings the discerning eye that gives spaces their final character.
- The portrait uses an intentional crop, subdued color grade, curtain reveal, subtle scroll drift, and an `Alex & Malika` caption.
- Keep this intimate and editorial. Do not turn it into a conventional team grid, biography timeline, or large About section.

### Experience and testimonial proof

- The rejected image frieze looked like a portfolio rather than social proof and must not be restored.
- The rejected oversized mixed-typography client-name layout felt loud and damaged the elegant direction.
- The current proof treatment uses three large facts followed by one testimonial:
  - `20` years of hospitality experience
  - `100+` artisan relationships worldwide
  - `50` destinations worldwide
- `20+ years` is supported by the current website/About page.
- `100+ artisans` and `50 destinations` still require explicit client confirmation. Do not present them as verified facts until confirmed.
- The testimonial and attribution are placeholders. Replace them with a real approved quote, client name, title, and property when supplied. Never invent testimonial content for production.

### End-of-page color rhythm

The current approved color sequence is:

- Family story: cream `var(--paper)`
- Final CTA: slightly brighter warm stone `#E5E0D5`
- Newsletter: dark `var(--ink)`
- Footer: dark `var(--ink)`

The CTA background was intentionally made a little brighter. Preserve the distinction between the family and CTA sections.

### Luxury refinement pass

`mockup-luxury-refinement.html` includes these deliberate refinements:

- Real project imagery replaces generic `hero5.webp`–`hero7.webp` images in the three service rows.
- Service imagery uses quieter saturation, deeper contrast, and meaningful alt text.
- Service headings use roman serif rather than italic and have reduced hover travel.
- Generic rise animations travel less and move more slowly.
- The intro cover releases sooner and the hero copy appears sooner.
- The proof section and testimonial have reduced scale and visual weight.
- Product labels say `Making of` instead of `▶ How it's made`; the UI-like translucent badge was removed.
- Product names use roman rather than italic styling.
- The family headline and section spacing were slightly reduced; portrait grading is quieter.
- The CTA typography is slightly smaller and calmer.
- The newsletter is more compact, uses a landscape crop, has a smaller headline, and no decorative image badge.
- Mobile navigation now uses an editorial full-screen menu instead of disappearing completely.
- The document title is `Finer Things | Bespoke Hospitality Details`.

### Latest homepage copy decisions

The refined file now communicates the following inside existing sections rather than adding more sections:

- Our Work combines sourcing, production, styling, and project rollout.
- Bespoke Accessories can be customized across material, colour, scale, finish, and stitching.
- Styling & Curation covers guest rooms, public spaces, restaurants, residences, and libraries.
- Finer Living emphasizes European makers and marble, wood, leather, metal, and glass.
- The unconfirmed claim `in stock and fast to ship` was removed.
- Alex's experience is described as opening and operating hotels, resorts, and residences worldwide.

### Information reviewed from the current live website

The current public website is `https://finerthingsdesigns.com/`. Useful confirmed positioning includes:

- Finer Things is a boutique focused on sourcing and producing luxury decorative accessories.
- Alex has more than two decades of international hospitality experience.
- The wider offer includes hotel/residence opening support, restaurant and lounge support, food-and-beverage concepts, library curation, seasonal styling, uniforms, florals, and other services.
- Materials include marble, leather, wood, metal, shells, stitching, colors, and finishes.
- These wider details are useful for sharpening existing homepage sections, but should not become additional homepage sections or long service lists.
- The live website describes Finer Living as launching in 2026. Verify its present availability before adding claims such as ready-to-ship or in-stock.

## Main Featured directions

### Grand Salon (`mockup-grand-salon.html`)

- A full-width/full-height 12-frame living mosaic.
- Responsive gutters use the same `var(--ink)` color as the Featured section background.
- A split curtain plus staggered tile reveal forms the section entrance.
- Once visible, one frame changes per cycle and two frames change every third cycle.
- Incoming images alternate curtain, side-wipe, and soft-focus reveals.
- The JavaScript `salonImages` array currently contains all 44 image assets that existed when it was authored. If assets change, update this array so all images participate.
- Initial frames use the newer project imagery rather than the old hero images.

### Editorial project cascade (`mockup-cinematic-portfolio.html`)

- Four oversized project chapters stack as the user scrolls.
- Each chapter has a full image, minimal caption, and floating detail crop.
- This replaced a rejected hover-based project-index concept.
- The user has not explicitly approved this replacement yet.
- **2026-08-13 deployment fix:** The project chapters now fail open instead of remaining permanently clipped when `IntersectionObserver` delivery is delayed or unavailable. Base CSS keeps chapters visible; JavaScript applies the cinematic clip only after adding `motion-ready`/`awaiting-reveal`, immediately reveals chapters already in view, observes the rest at a `0.01` threshold, and includes a 2.2-second safety reveal. The sticky stacking and reduced-motion behavior remain intact. This fix was pushed to `main` in commit `fcb08c4`; the detailed diagnosis is recorded in `finer-things-website/AGENTS.md`.

### Atelier Filmstrip (`mockup-atelier-filmstrip.html`)

- This is currently a liked direction.
- A `400svh` scroll region pins a full-screen horizontal filmstrip.
- Vertical scroll drives horizontal movement through five oversized project panels.
- Motion uses a `requestAnimationFrame` interpolation loop rather than mapping raw scroll values directly.
- Cards scale and fade continuously according to their distance from the viewport center; do not restore discrete snapping.
- The progress line uses `transform: scaleX()` for smooth GPU-friendly rendering.
- Relevant code is labeled `HORIZONTAL ATELIER FILMSTRIP` in CSS and `horizontal atelier filmstrip` in JavaScript.

## Interaction and accessibility expectations

- Preserve `prefers-reduced-motion` fallbacks whenever adding animation.
- Do not trap scrolling with `overflow: hidden`; use sticky sections and scroll distance for narrative pauses.
- On desktop, hover interactions may enhance a section, but core content must remain usable on touch devices.
- Keep image `alt` text meaningful when the image communicates a named space or project.
- Avoid changing more than two images simultaneously in living-gallery concepts.
- Use `transform` and `opacity` for scroll-linked animation where possible. Prefer `translate3d`, `scale`, `will-change`, and `requestAnimationFrame` interpolation for smoothness.

## Code conventions

- Keep each mockup self-contained in one HTML file.
- Reuse the existing CSS variables and Google fonts (`Cormorant Garamond` and `Jost`).
- Put new assets in `assets/` and use relative paths.
- Label substantial CSS and JavaScript sections with descriptive comments so variants remain understandable.
- Preserve original user work and unrelated variants.
- When replacing a concept, remove or disable JavaScript that queries elements no longer present; otherwise null references can break the rest of the page.

## Quick validation

After editing a mockup, check embedded JavaScript syntax with Node:

```sh
node -e 'const fs=require("fs"),s=fs.readFileSync("FILE.html","utf8");new Function(s.match(/<script>([\s\S]*?)<\/script>/)[1]);console.log("JavaScript syntax: OK")'
```

Check referenced local assets exist:

```sh
rg -o "assets/[A-Za-z0-9._-]+" FILE.html | sort -u | while read asset; do test -f "$asset" || echo "Missing: $asset"; done
```

## Likely next work for the preserved mockups

- Continue from `finer-things-website/index.html` for the active website. Use `mockup-luxury-refinement.html` only as historical comparison.
- Obtain client confirmation for `100+` artisans and `50` destinations.
- Replace the placeholder testimonial with a real named client quote and attribution.
- Confirm Finer Living launch, availability, and fulfillment wording.
- Replace mockup `#` links and connect the newsletter/contact actions when final URLs and platforms are supplied.
- Visually compare `mockup-added-sections.html` with `mockup-luxury-refinement.html` before removing or reversing any refinement.
- Continue polishing `mockup-atelier-filmstrip.html` if the user wants adjustments to the liked horizontal direction.
- Compare the Grand Salon and Atelier Filmstrip as the two strongest Featured options.
- Re-inventory `assets/` whenever the user says images were updated.
- Browser-test desktop and mobile scroll behavior before treating a direction as final.
