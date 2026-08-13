# Finer Things website — active handoff

## What this folder is

This is the active connected website for Finer Things. It grew from the approved luxury-refinement homepage direction and now includes the important service, project, company, contact, and legal pages.

There is no framework, package manager, build step, or shared stylesheet. Every page is a standalone HTML document with embedded CSS and JavaScript. Open `index.html` directly in a browser.

Continue working in this folder unless the user explicitly asks to modify one of the older root-level mockup explorations.

## Design direction

The approved character is elegant, restrained, editorial, warm, chic, and luxurious. Use Cormorant Garamond with Jost, warm neutral surfaces, desaturated project imagery, generous spacing, and deliberate cinematic motion.

Avoid generic card layouts, dense UI, playful or tech-like effects, excessive copy, invented claims, and animation without a clear purpose. Preserve reduced-motion fallbacks and keep core content usable without hover.

## Current page map

- `index.html` — active homepage and main entry point
- `luxury-motion-studies/` — experimental page variants; these link to the single parent `assets/` directory and must not contain copied assets
- `luxury-motion-studies/index-2.html` — experimental homepage luxury-motion study; not yet approved as the active homepage
- `luxury-motion-studies/our-work-2.html` — experimental Our Work luxury-motion study; not yet approved as the active page
- `luxury-motion-studies/bespoke-accessories-2.html` — experimental Bespoke Accessories luxury-motion study; not yet approved as the active page
- `luxury-motion-studies/styling-curation-2.html` — experimental Styling & Curation luxury-motion study; not yet approved as the active page
- `luxury-motion-studies/finer-living-2.html` — experimental Finer Living luxury-motion study; not yet approved as the active page
- `luxury-motion-studies/projects-2.html` — experimental Projects index luxury-motion study; not yet approved as the active page
- `luxury-motion-studies/marsa-al-arab-2.html` — experimental Jumeirah Marsa Al Arab project-detail study; not yet approved as the active page
- `luxury-motion-studies/waldorf-astoria-osaka-2.html` — experimental Waldorf Astoria Osaka project-detail study; not yet approved as the active page
- `luxury-motion-studies/about-2.html` — experimental About page luxury-motion study; not yet approved as the active page
- `luxury-motion-studies/contact-2.html` — experimental Contact page luxury-motion study; not yet approved as the active page
- `luxury-motion-studies/privacy-2.html` — experimental Privacy Policy reading study; legal content remains placeholder
- `luxury-motion-studies/terms-2.html` — experimental Terms & Conditions reading study; legal content remains placeholder
- `our-work.html` — overview of the three offers
- `bespoke-accessories.html` — Bespoke Accessories service page
- `styling-curation.html` — Styling & Curation service page
- `finer-living.html` — Finer Living collection page
- `projects.html` — selected-projects index
- `marsa-al-arab.html` — Jumeirah Marsa Al Arab project detail
- `waldorf-astoria-osaka.html` — Waldorf Astoria Osaka project detail
- `about.html` — family/company story
- `contact.html` — minimal enquiry page and current contact form mockup
- `privacy.html` — explicitly labeled legal placeholder
- `terms.html` — explicitly labeled legal placeholder
- `assets/` — all local images and WebM product videos used by the site

## Navigation and linking

The pages are connected with relative `.html` links. The expected primary destinations are Home, Our Work, Projects, About, Finer Living, and Contact. Service rows on the homepage and Our Work page lead to their individual pages. Project previews lead to the two project-detail pages. Calls to begin or start a project lead to `contact.html`. Footers expose Privacy and Terms.

Do not replace working relative links with `#`. The only intentional `href="#"` links are LinkedIn placeholders because the client has not supplied the final profile URL. The newsletter and contact forms are visual mockups and do not yet have approved external submission destinations.

## Homepage decisions

`index.html` is the current homepage. Its structure is:

1. Hero
2. Pinned Purpose statement
3. Our Work / three service rows
4. Experience facts and testimonial
5. Finer Living
6. Family editorial story
7. Start a Project CTA
8. Newsletter
9. Footer

The large initial wordmark begins at about 70% of the viewport width and shrinks into the normal header logo on scroll. Its shrink speed was restored to the earlier faster behavior at the user's request; do not slow that scroll transformation unless asked.

The preloader is intentionally slower at the client's request. `Finer Things` writes in letter by letter, followed by a staggered entrance for `Bespoke`, `Styling`, and `Heritage`. The normal release begins around 2800 ms after load and the safety fallback is 4200 ms. Preserve the stagger and reduced-motion behavior unless the user asks to revise it.

## Typography clipping fix

All pages received a typography overflow pass. Near the end of each document head is a CSS block labeled `TYPOGRAPHY CLIPPING SAFEGUARDS`. These rules give animated text masks room for Cormorant Garamond ascenders, descenders, and italic side bearings; allow long headings to wrap; and reduce the largest headings on narrow screens.

Do not remove these rules merely because their negative margins look unusual: the padding creates safe reveal space and the matching margins preserve layout rhythm. When introducing a new masked heading, include enough top, bottom, and inline padding inside the mask. Test long italic words and narrow mobile widths carefully.

The last clipping audit was code-based because the in-app browser connection was unavailable. A real visual QA pass at desktop and mobile sizes is still recommended.

## Copy and factual status

Confirmed or defensible positioning used in the site includes:

- Finer Things sources and produces luxury decorative accessories.
- Alex has more than two decades of international hospitality experience.
- Work can span hotel and residence openings, restaurants and lounges, food-and-beverage concepts, libraries, seasonal styling, uniforms, florals, and related support.
- Relevant materials include marble, leather, wood, metal, shells, stitching, colours, and finishes.

Content that remains unconfirmed or placeholder:

- `100+` artisan relationships worldwide
- `50` destinations worldwide
- the homepage testimonial, client name, title, and property
- current Finer Living availability and fulfilment language
- company/legal identity, jurisdiction, processors, analytics, cookies, retention, and other legal details
- contact recipient, LinkedIn URL, newsletter platform, and form endpoints

Never present these placeholders as verified production facts. The Privacy Policy and Terms must be reviewed and approved by qualified legal counsel before launch.

## Assets

All media lives in `assets/` and must be referenced as `assets/<filename>`. Current groups include Marsa Al Arab lobby, suite, corridor, Bombay Club and Iliana imagery; Waldorf Astoria Osaka imagery; Finer Living imagery; the Alex and Malika family portrait; seven older hero images; and three product still/video pairs.

Re-inventory `assets/` before assuming the list is complete because the user may add images. Keep meaningful alt text for named projects and spaces.

## Editing conventions

- Keep pages self-contained unless the user explicitly authorizes a structural refactor.
- Preserve the older root-level mockups and unrelated variants.
- Use the existing CSS variables, Cormorant Garamond, and Jost.
- Label substantial new CSS and JavaScript sections.
- Prefer transforms and opacity for animation; use `requestAnimationFrame` for continuous scroll-linked interpolation.
- Preserve `prefers-reduced-motion` behavior.
- Do not trap normal page scrolling.
- If markup is removed, also remove or guard JavaScript that queries it.
- Keep wording restrained and fact-check project or business claims before adding them.

## Mandatory living handoff

Treat this file as part of the deliverable. Every agent must update it immediately whenever making a meaningful change to the website. Documentation is not a separate optional cleanup step: the HTML/CSS/JavaScript change and its handoff update belong to the same task.

After each change, record the current authoritative state in the most relevant section of this file. This includes page additions or removals, navigation changes, copy decisions, timing and animation changes, design approvals or rejections, factual verification status, new assets, unresolved integrations, and validation findings. Small typo-only or formatting-only edits do not require a history entry unless they change meaning or behavior.

For a rollback or reversal, never simply restore the code and leave the earlier instruction untouched. Document:

1. The behavior that was introduced.
2. That the user rejected or reversed it, and why when a reason was provided.
3. The restored or replacement behavior that is now authoritative.
4. Any remnants that intentionally remain or still need cleanup.

Keep rejected ideas labeled as rejected and current decisions labeled as current. Never allow contradictory instructions to coexist without an explicit explanation of which one wins. If a change affects the wider mockup project or shared working rules, update the parent `../AGENTS.md` in the same task.

## Decision and rollback log

Add dated entries here for meaningful changes that future agents could otherwise misunderstand. Keep entries concise and state the final authoritative outcome.

- **2026-08-12 — Documentation workflow:** The user required all future meaningful changes to update the Markdown handoff immediately. Rollbacks must retain a clear record of the attempted behavior, the reversal, and the currently authoritative behavior.
- **2026-08-12 — Homepage wordmark speed:** The shrinking wordmark was temporarily slowed, then the user rejected that speed change. The original faster scroll-shrink behavior is authoritative; the starting wordmark remains approximately 70% of viewport width.
- **2026-08-12 — Homepage preloader:** The client requested a slower preloader despite the user's personal preference for the faster version. The authoritative version writes `Finer Things`, then staggers `Bespoke`, `Styling`, and `Heritage`, releasing around 2800 ms with a 4200 ms fallback.
- **2026-08-12 — Typography overflow:** All pages gained `TYPOGRAPHY CLIPPING SAFEGUARDS` rules to prevent animated Cormorant headings from clipping at the top, bottom, or sides. These safeguards are current and must be preserved or deliberately replaced and documented.
- **2026-08-12 — Luxury motion audit:** A restraint-first animation audit was completed for all pages. The ideas in `Luxury refinement opportunities` below are proposals only; the user has not yet selected or approved them for implementation. Do not treat them as current behavior.
- **2026-08-12 — `index-2.html` motion experiment:** The user asked to test selected homepage refinements in a separate file. `index.html` remains untouched and authoritative. `index-2.html` currently implements a composed preloader handoff, alternating directional service-row reveals, a centre-opening family portrait, and a dark newsletter tonal wipe. This variant is experimental until the user reviews and approves or rejects it.
- **2026-08-12 — Experimental variant folder:** The user required all new luxury-motion variants to be grouped in `luxury-motion-studies/` without duplicating media. `index-2.html` moved there and now references `../assets/...`. `our-work-2.html` was created there with alternating chapter curtains, staged number/heading/copy entrances, and a drawn service divider. The original parent pages remain authoritative.
- **2026-08-12 — `our-work-2.html` second-image reveal fix:** The Styling & Curation chapter image remained hidden because the even-row curtain rule overrode the general active reveal state. An explicit `.service:nth-child(even).in-view .service-media` open state now makes the right-origin curtain complete correctly. All three service chapters are intended to show their images after entering the viewport.
- **2026-08-12 — `our-work-2.html` heading correction and italic rollback:** The first diagnosis incorrectly treated the screenshot problem as mobile sizing. The user clarified that the issue was the service chapter’s large italic Cormorant treatment, which looked cheap—especially `Styling & Curation`. The oversized italic treatment is rejected. Service chapter emphasis now uses restrained Roman Cormorant at a smaller scale, calmer line-height and tracking, with colour and a modest indent providing hierarchy. Do not restore the swashy italic chapter style. The responsive size safeguards remain useful but were not the root fix.
- **2026-08-12 — Roman display typography rule for all studies:** The user confirmed the same oversized italic problem in the `our-work-2.html` hero (`Three expressions.`) and explicitly rejected that styling for every page being built. All current and future files in `luxury-motion-studies/` must use Roman serif for large `h1`, `h2`, and `h3` display text, including text wrapped in `<em>`. Large swashy italic headings are prohibited. Italic may be used only for small editorial accents such as captions, signatures, or restrained footer details. The Our Work hero second line is now Roman with calmer tracking, line-height and indent; all existing studies include a `ROMAN DISPLAY RULE` safeguard.
- **2026-08-12 — `bespoke-accessories-2.html` motion experiment:** The next luxury study was created without copied assets. It uses parent `../assets/...` references and tests three material-cut directions for editorial imagery, quieter letter-spacing/contrast focus in the material list, the existing continuous process-line draw, and a reduced selected-project focal drift. `bespoke-accessories.html` remains authoritative until the variant is reviewed.
- **2026-08-12 — `styling-curation-2.html` motion experiment:** A Styling & Curation variant was added to `luxury-motion-studies/` with no copied media. It uses parent `../assets/...` references, Roman display headings, sequential editorial-image placement (main, supporting, detail), restrained scope-row focus through letter spacing/contrast rather than lateral movement, the existing continuous process-line draw, and a reduced selected-work focal drift. Existing study pages now link to this variant. `styling-curation.html` remains authoritative until review.
- **2026-08-12 — `finer-living-2.html` motion experiment:** A Finer Living variant was added without copied assets. It uses Roman display headings and parent `../assets/...` media. The three making-of films uncover from different material-like directions rather than fading, playback occurs only through intentional hover, focus, or touch activation, and videos stop/reset when the interaction ends or the figure leaves view. Material rows use fine-rule, tracking, and contrast focus instead of lateral movement. The collection finale has a very small two-axis drift and approximately 2.2% scale. Existing study pages now link to this variant; `finer-living.html` remains authoritative until review.
- **2026-08-12 — `projects-2.html` motion experiment:** A Projects index variant was added without copied assets. It uses Roman display headings and parent `../assets/...` media. The two project previews open like folios from opposing edges, their metadata/headings/copy enter in reading order after the image, and a restrained fixed `01 / 02` indicator appears only while a project occupies the viewport. The four Marsa Al Arab detail images retain their asymmetrical layout and reveal with 140 ms stagger increments. Existing study navigation now points to this variant. Project-detail links still return to the authoritative parent pages until their study variants are created; `projects.html` remains authoritative until review.
- **2026-08-12 — `marsa-al-arab-2.html` motion experiment:** A Marsa Al Arab project-detail variant was added without copied assets. It uses Roman display headings and parent `../assets/...` media. Existing chapter curtains remain, with each chapter image gently dimming after it passes, while chapter numbers drift roughly 22 px in the opposite direction to the image for restrained depth. Gallery crops reveal from alternating horizontal edges while captions remain still. `projects-2.html` now links to this study. Its Next Project link still points to the authoritative parent Waldorf page until `waldorf-astoria-osaka-2.html` is created. `marsa-al-arab.html` remains authoritative until review.
- **2026-08-12 — `waldorf-astoria-osaka-2.html` motion experiment:** A Waldorf Astoria Osaka project-detail variant was added without copied assets. It uses Roman display headings and parent `../assets/...` media. Its motion is intentionally quieter and more symmetrical than Marsa: chapter and gallery imagery reveal vertically from the centre, image drift is limited to about 22 px, chapter-number counter-drift to about 14 px, and brass-toned rules draw beneath chapter labels. The Projects study links to it, and both project studies now link to each other. `waldorf-astoria-osaka.html` remains authoritative until review.
- **2026-08-12 — `about-2.html` motion experiment:** An About variant was added without copied assets. It uses Roman display headings and parent `../assets/...` media. The Alex and Malika portrait opens from the centre over 1.75 seconds, the two founder perspectives settle sequentially with a 200 ms separation, and the three global images reveal from different restrained directions while retaining distinct drift values. Principles now draw their dividers before their number, heading, and paragraph settle. Existing study navigation links to this variant; `about.html` remains authoritative until review.
- **2026-08-12 — `contact-2.html` motion experiment:** A Contact variant was added without copied assets. It uses Roman display headings and the parent contact image. The image reveal waits 550 ms and opens vertically from the centre after the headline begins. Field focus slightly scales and colours the label while drawing the existing underline; nonfocused input text softens only while another field is active. Mock submission keeps the user on the page, softens the completed form controls, hides the submit action, and presents an inline Roman-serif thank-you status. This remains a visual placeholder and does not send data. Existing study navigation links to this variant; `contact.html` remains authoritative until review.
- **2026-08-12 — `privacy-2.html` and `terms-2.html` reading studies:** Both legal variants were created together with unchanged placeholder legal copy and no copied assets. They use Roman display typography, smooth anchors with the existing 110 px fixed-header offset, a sticky contents link that tracks the current section, and one short rule drawing above each section heading. Legal paragraphs do not animate. Reduced-motion mode disables smooth scrolling and rule animation. The study footer and Contact study link to these variants. The parent legal pages remain authoritative, and qualified legal review is still required before launch.
- **2026-08-12 — Shared-header rollback:** A single shared `study-header.css` and identical header markup were briefly imposed across all studies. The user immediately rejected this because it flattened the homepage’s deliberate wordmark-to-header transition, overrode page-specific behavior with `!important`, and made the result feel generic. That entire change was rolled back: `study-header.css` was deleted and every study recovered the header markup and behavior of its corresponding authoritative parent page, with links adjusted only to study variants. The homepage transition is authoritative and must remain untouched. Do not impose a generic shared header stylesheet or force identical header behavior across pages. Future consistency work must preserve each page’s designed transition and should be proposed/tested carefully rather than bulk-overridden.
- **2026-08-12 — `projects-2.html` header navigation correction:** After the rollback, the Projects study still inherited an older page-specific menu that omitted `Projects` on desktop, used `#projects` on mobile, and omitted `Finer Living` from mobile. The navigation items now match the study-page set: desktop `Our Work`, `Projects`, `About`, `Contact`; mobile also includes `Home` and `Finer Living`. `Projects` uses `aria-current="page"`. The existing Projects header styling and scroll transition were deliberately preserved; this was a navigation correction, not another shared-header override.
- **2026-08-12 — `contact-2.html` header navigation correction:** The Contact study inherited a menu that omitted `Contact` from desktop and omitted both `Finer Living` and `Contact` from mobile. It now uses the same navigation destinations as the corrected Projects study and marks `Contact` with `aria-current="page"`. The page’s existing light header styling and behavior remain unchanged.

## Luxury refinement opportunities

The user asked how to make every page feel more luxurious without adding sections or copy. The recommended approach is improved choreography, materiality, and transitions—not a larger quantity of effects. Most ideas remain proposals. Four homepage ideas are implemented only in the experimental `index-2.html`; they are not approved for `index.html` yet.

### Site-wide priorities

1. Add a restrained page-transition system: the clicked page title or a warm-paper curtain carries into the next page, then clears quickly. Keep normal browser navigation and reduced-motion fallbacks.
2. Replace identical generic `.rise` entrances with a small motion vocabulary: text settles 12–18 px, images reveal like curtains, and rules draw from left to right. Avoid animating every element at once.
3. Add extremely subtle image breathing on major hero and chapter imagery—roughly 1–2% scale over a long duration—plus existing scroll drift. Never use aggressive zooms.
4. Make section-to-section colour changes feel intentional with soft edge wipes or a brief background interpolation where supported. Do not add gradients or decoration without a compositional reason.
5. Refine links and buttons with a quiet magnetic pull or underline draw on pointer devices only. Keep movement below roughly 6 px and preserve touch behavior.
6. Use stagger based on reading order, not DOM quantity. Headline, supporting copy, then action should enter as one composed beat.

### `index.html`

- Keep the preloader and shrinking wordmark as the signature opening. A cleaner preloader handoff is now being tested in `index-2.html`: the intro name settles and softens for 520 ms before the cover lifts. It does not literally geometrically align with the large wordmark yet.
- Directional reveals for the three Our Work rows are now tested in `index-2.html`. A warm-paper cover clears from alternating sides as each row enters, followed by the existing content.
- Let the proof numbers count once with restrained easing while their labels remain still. Do this only after the numbers are client-confirmed.
- The family portrait now opens from the centre outward in `index-2.html`, retaining its existing near-imperceptible drift.
- The dark newsletter now arrives through a top-origin tonal wipe in `index-2.html`; its existing content reveals remain.

### `our-work.html`

- Treat each service as a chapter: image reveal first, number and eyebrow second, heading last. The timing should make the page feel paced rather than animated.
- Add a subtle image-to-image handoff between the three full service rows, using opposing curtain directions. Do not pin or snap the scroll.
- Draw the three continuity rules or separators as the user reaches them instead of moving all text.

### `bespoke-accessories.html`

- Use a material-inspired reveal language: images can uncover through a precise vertical or diagonal mask resembling a sheet, seam, or crafted edge.
- In the materials list, allow the active row's rule to extend and its descriptor to sharpen from muted to full contrast. Keep other rows visible and usable.
- Animate the process line continuously as the user passes the four steps, rather than revealing each step as an unrelated card.
- Give the selected-project image a slow focal shift toward the featured object, with no zoom beyond approximately 2%.

### `styling-curation.html`

- Make the three-image editorial composition assemble in sequence, as though a stylist is placing layers: main image, supporting image, detail crop.
- Let scope-row typography shift only a few pixels while the accompanying description gently gains contrast; this should feel like focus, not hover UI.
- Use a soft crossfade of colour temperature or crop position in the selected-work image to suggest curation without swapping content.

### `finer-living.html`

- Make the transition from product still to making-of video feel tactile: a soft iris or vertical material wipe is preferable to a basic opacity crossfade.
- Start videos only when the figure is intentionally hovered, focused, or sufficiently visible; pause them when the interaction ends or they leave view.
- Let material names respond with a fine line and slight letter-spacing change instead of positional movement.
- Use the collection preview as a calm finale with a long, subtle texture drift rather than another large reveal.

### `projects.html`

- Make each project preview feel like opening a portfolio folio: the image curtain reveals while its project name stays anchored.
- Add a minimal viewport progress marker such as `01 / 02` that changes as each existing project enters; do not add a conventional carousel or filter UI.
- The four Marsa Al Arab detail images can enter in a deliberate stagger based on their asymmetrical composition, not simultaneously.

### `marsa-al-arab.html`

- This page already has the strongest cinematic structure. Refine chapter transitions so the outgoing image darkens slightly before the next curtain reveals, producing a film-cut rhythm.
- Let chapter numbers travel a short vertical distance at a slower rate than headings to create depth.
- In the final gallery, reveal crops from alternating edges and keep captions still; avoid hover zoom on every image.
- Make the next-project transition carry the image into the Waldorf page if a page-transition system is approved.

### `waldorf-astoria-osaka.html`

- Use more precise, quieter motion than Marsa Al Arab: vertical reveals, slower number drift, and reduced image scale suit the Japanese craft narrative.
- A fine brass-toned line can trace into view beneath chapter labels as each chapter settles.
- Keep gallery movement symmetrical and disciplined rather than alternating dramatically.
- Make the previous-project transition reverse the Marsa transition direction, reinforcing navigation spatially.

### `about.html`

- Begin with a very slow portrait reveal from the centre outward, like opening editorial pages, while the two headline lines arrive independently.
- In `Two perspectives`, let Alex and Malika's columns come into focus sequentially through opacity and rule movement—not sliding cards.
- Give the three global images different but tiny drift rates to create depth while preserving the candid, family-led tone.
- Reveal each principle by drawing its divider and then settling the text; avoid count-up or timeline effects.

### `contact.html`

- Keep this page minimal. Use focus transitions as the luxury interaction: labels lift slightly, the underline grows smoothly, and inactive fields soften without disappearing.
- Let the enquiry image reveal only after the headline begins, producing a calmer editorial sequence.
- On successful mock submission, replace the form in place with a quiet thank-you state instead of using an alert or modal. Only implement once the intended form behavior is agreed.

### `privacy.html` and `terms.html`

- These pages should remain calm and highly readable. Luxury should come from polished reading behavior, not cinematic effects.
- Add a subtle active-section state to the existing sticky contents index, driven by scroll position.
- Draw a short rule above each section heading as it enters and use gentle anchor scrolling with correct fixed-header offsets.
- Do not animate legal paragraphs individually.

### Recommended implementation order

If the user approves implementation, start with one reusable motion language across `index.html`, `our-work.html`, and one service page. Validate it before propagating. Then refine Projects and project-detail pages, About and Contact, and finally add only minimal reading aids to the legal pages. This avoids twelve pages accumulating unrelated effects.

## Validation after changes

Check every embedded script, not only the edited page:

```sh
for f in *.html; do
  node -e 'const fs=require("fs"),s=fs.readFileSync(process.argv[1],"utf8"),m=s.match(/<script>([\s\S]*?)<\/script>/g);if(m)for(const x of m)new Function(x.replace(/^<script>|<\/script>$/g,""))' "$f" || exit 1
done
```

Check local assets:

```sh
for f in *.html; do
  rg -o 'assets/[A-Za-z0-9._-]+' "$f" | sort -u | while read asset; do
    test -f "$asset" || echo "$f Missing: $asset"
  done
done
```

Also verify that every relative `.html` link resolves, inspect remaining `href="#"` values, and visually test at representative desktop, tablet, and narrow-phone widths. Pay special attention to headline masks, italics, side indents, mobile menus, the homepage preloader, the shrinking wordmark, and scroll-linked sections.

## Best next steps

- Perform a visual desktop/mobile QA pass across all 12 pages, especially typography clipping and scroll animations.
- Obtain client confirmation for the two unverified numeric claims.
- Replace the placeholder testimonial with an approved named quotation.
- Confirm Finer Living launch and availability wording.
- Supply and connect the LinkedIn URL, contact destination, newsletter platform, and form handlers.
- Have legal counsel replace or approve the placeholder Privacy Policy and Terms.
- Polish individual pages only after preserving the current restrained visual system and connected navigation.

## Deployment diagnosis — cinematic portfolio Featured section (2026-08-13)

The deployed URL `https://finer-things.pages.dev/mockup-cinematic-portfolio` was reported to show the Featured heading, introduction, and button but none of the four sticky project chapters. No code was changed during this diagnosis.

- The deployed HTML and local `mockup-cinematic-portfolio.html` have the same SHA-256 hash, so this is not a stale or different deployment.
- All eight images used by the four chapters return HTTP `200`; missing assets are not the cause.
- Embedded JavaScript passes a syntax check.
- The fragile point is the fail-closed reveal: `.project-chapter` starts fully hidden with `clip-path: inset(0 0 100% 0)` and becomes visible only after its `IntersectionObserver` adds `.in-view`. If that observer is not delivered or the page's script encounters a runtime/environment problem, the chapters remain permanently clipped while the independently revealed Featured heading still appears.
- Recommended repair when approved: make the chapters visible by default, apply the initial clipping only after JavaScript marks the document as motion-ready, use a low/zero observer threshold, reveal already-visible chapters immediately, and add a short safety fallback that removes the clipping if observation does not run. Preserve the sticky stacking and reduced-motion behavior.

### Implemented fix

The fail-safe repair is now implemented in the parent-level `mockup-cinematic-portfolio.html`:

- Project chapters are visible in the base CSS rather than permanently depending on JavaScript.
- JavaScript applies the clipped entrance only after adding `motion-ready` and `awaiting-reveal` states.
- Any chapter already visible during initialization is revealed immediately.
- The observer threshold is now `0.01`, with a small positive bottom root margin, so partially visible sticky chapters trigger reliably.
- A 2.2-second fail-open fallback reveals any chapter still awaiting an observer callback.
- Browsers without `IntersectionObserver` and reduced-motion visitors receive fully visible chapters.
- The sticky project cascade and image drift are preserved.
- Embedded JavaScript syntax and all referenced local assets were validated after the edit.

## Proposed production architecture — 2026-08-12 (guidance only, not implemented)

The user is considering rebuilding the approved standalone HTML studies as a headless WordPress site with a Next.js frontend. The recommended production direction is a template-controlled CMS, not a free-form WordPress page builder. Next.js should own layouts, typography, motion, responsive behavior, navigation, and transitions; WordPress should own structured copy, project/service records, images, SEO fields, and global business information. This keeps the luxury art direction consistent while allowing the client to edit content safely.

Recommended shape:

- Public frontend: Next.js App Router on `www` (Vercel is the simplest deployment choice).
- CMS: managed WordPress on a separate `cms` subdomain.
- Content API: native WordPress REST API with ACF Pro fields exposed to REST. For this site's modest, predictable content model, REST is simpler than adding WPGraphQL. Reconsider GraphQL only if nested querying or a larger catalog makes it materially useful.
- Rendering: Server Components by default. Use small Client Components only for menus, forms, video behavior, and motion/scroll interactions.
- Publishing: cache public content in Next.js and have a signed WordPress publish webhook call a Next.js Route Handler that invalidates content tags. Use Next.js Draft Mode for authenticated previews.
- Media: WordPress Media Library backed by an image CDN/object storage when production hosting is chosen; configure `next/image` remote patterns. Keep substantial video on a video/CDN service if the library grows.
- Forms: submit through a server-side Next.js Route Handler to the chosen email/CRM/newsletter provider, with validation, spam protection, and rate limiting. Do not expose provider or WordPress credentials in browser code.

Suggested WordPress content model:

- `project`: project name, slug, property/location, hero, introduction, structured chapters, gallery, related/next project, and SEO.
- `service`: title, number, hero, introduction, scope rows, editorial media, materials/layers, process steps, selected-project relation, and CTA.
- `collection_item`: use only if Finer Living will become a real editable collection/catalog; include still, making-of media, maker/material details, status, and related CTA.
- WordPress Pages: About, Contact introduction, Privacy Policy, and Terms.
- Global options: header/navigation, footer, contact details, social links, newsletter copy, CTA defaults, and approved proof numbers/testimonial.

Do not let editors rearrange arbitrary visual blocks on the main pages. If limited flexibility is required later, offer a small allow-list of designed editorial modules with locked field structures. Keep factual status explicit in the CMS: `100+` artisans, `50` destinations, the testimonial, and Finer Living availability remain unverified until the client confirms them.

Suggested Next.js organization:

- `app/` for route layouts and page templates.
- `components/layout/` for the single shared header, menu, footer, page transition, and CTA.
- `components/sections/` for reusable editorial sections.
- `components/motion/` for the restrained shared motion vocabulary and reduced-motion handling.
- `lib/wordpress/` for the API client, endpoint queries, normalization, runtime validation, preview handling, and cache tags.
- `types/` for normalized CMS models; page components should not consume raw WordPress responses directly.

Estimated effort for one experienced developer, assuming the design and content are substantially settled: approximately 3–5 weeks for the frontend conversion, WordPress model/admin, content migration, previews/revalidation, forms/SEO, and responsive/performance/accessibility QA. Allow roughly 5–8 weeks if the developer is learning Next.js or headless WordPress during the build. The CMS itself is moderate; matching the current cinematic motion and responsive visual quality is the harder part.
