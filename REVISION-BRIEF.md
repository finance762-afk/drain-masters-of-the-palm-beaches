# Drain Masters of the Palm Beaches — draft revision round 1 (28 Sep 2026)

The client (Luis Noda, nodaluis239@gmail.com) sent the draft back with "changes requested" on 27 Sep. His words:
> If the website colors could be changed to blue, white, light grey theme.
> Also wanting to have my logo that I sent over in the bunch of pics to be the back drop for that initial view of
> the website when you enter.
> Lastly just re-arranging some of the photos so they align with the description.

Work in THIS repo on the current branch (`main`); the working tree is served noindexed at
https://preview-drain-masters-of-the-palm-beaches.pageone.cloud. Do NOT push and do NOT deploy — this is a draft.
Standards: `~/crm/references/` (design-system, performance-2026, seo-aeo-2026) and this repo's CLAUDE.md.

## 1. Colour theme: blue, white, light grey
- Re-token the palette in the CSS (colour variables only — keep the layout): a strong blue as primary (buttons,
  links, accents, header/footer), white as the main background, light grey (#f1f4f7-ish) for alternating sections
  and cards, dark slate/navy for text. If the logo uses a specific blue, match it. Remove the old theme colours
  everywhere (inline styles, SVG fills, gradients, meta theme-color, manifest). Check contrast: body text ≥ 4.5:1,
  white text on blue buttons ≥ 4.5:1.

## 2. Logo as the backdrop of the first screen (home hero)
- `inventory/client-photos-all.json` lists every image on file; Luis's new batch is the 29 with
  `"uploaded": "2026-09-28…"` / `"source": "client_upload"`. Download them (curl with a browser UA) and look at
  each; find his logo among them. Make the logo the backdrop of the home hero (the first screen): e.g. the logo large
  and centred/offset behind the hero content with a blue/white overlay so the H1, phone and form stay readable
  (contrast ≥ 4.5:1), or the logo as the hero's visual anchor on a blue background — pick what looks professional
  at both desktop and mobile widths. Also use the logo in the header if it is better than what is there. Keep the
  hero LCP within the performance budget (compress; responsive variants).
- If you genuinely cannot find a logo in his uploads, say so in the report and use the best-quality logo already in
  the repo for the hero backdrop.

## 3. Photos aligned with their descriptions
- Look at every photo used on the site AND the new uploads. Every photo must show what its section / caption / alt
  text says (a drain-cleaning section shows drain work, a backflow section shows a backflow device, a truck photo is
  captioned as the truck, etc.). Re-assign photos so they match; use the new uploads where they fit better; rewrite
  alt text/captions to describe what is actually in the picture. Do not reuse one photo more than twice sitewide.
- Resize/compress and generate 480/960/1600 webp(+avif) with `node ~/crm/scripts/image-variants.mjs assets/images
  <file.jpg …>` (file names WITH extension). Width/height on every <img>.
- Do not add any new claims (licences, insurance, years, warranties, guarantees, same-day/24-7) that are not already
  supported; `grep -rniE "licens|insur|bonded|warrant|guarantee|certified|24/7|same.day"` and list hits in the report.

## QA gate
- `php -l` on every PHP file; render every page via `php -S 127.0.0.1:8092` (never port 8000) → 200, no notices.
- `python3 ~/crm/qa/qa_audit.py . premium --slug drain-masters-of-the-palm-beaches` → grade A (or no worse than
  before), 0 blockers. Re-run after your last change.
- Take desktop + mobile screenshots of the home hero (scroll first so reveal animations fire) and look at them.
- Commit in logical steps. Finish with `REVISION-REPORT.md` (palette before/after, where the logo came from and how
  it is used, photo re-assignments per page, anything unsure) and `touch .revision-done`.
