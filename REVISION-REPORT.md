# Drain Masters of the Palm Beaches — Revision round 1 report (28 Sep 2026)

Client request (Luis Noda, 27 Sep): blue / white / light-grey colours, his logo as the backdrop of the first screen, photos that match their descriptions.
Work is on `main`, committed in steps and **not pushed or deployed**. Preview (noindexed): https://preview-drain-masters-of-the-palm-beaches.pageone.cloud/

Commits: `83807e8` palette · `317023d` logo hero + header · `6248232` photo re-assignment · navy hero overlay · logo rename + photo fallbacks · this report.

---

## 1. Colour theme: blue, white, light grey

The blues are sampled from Luis's logo (royal blue `#052393`, navy `#02166F`, mid blue `#3557B1`). The palette lives in the `:root` tokens in `assets/css/framework.css` and in the minified copy in `includes/critical.css`. The two files were changed identically, and the layout was not touched.

| Token | Before (charcoal / orange / warm paper) | After |
|---|---|---|
| `--color-primary` | `#1f2428` charcoal | `#052393` logo royal blue |
| `--color-secondary` | `#5a6570` slate | `#3557b1` logo mid blue |
| `--color-accent` | `#c8461a` burnt orange | `#1d5fd1` bright blue |
| `--color-accent-bright` (on dark) | orange 80% | `#99b7ea` light blue |
| `--color-paper` (page ground) | `#f6f3ec` warm cream | `#ffffff` white |
| `--color-paper-2` (alternating sections, cards) | cream mix | `#f1f4f7` light grey |
| `--color-paper-3` | cream mix | `#e6ebf1` |
| `--color-ink` (text) | `#1b2320` | `#0f1c36` navy slate |
| `--color-line` | warm grey | cool blue-grey |
| `--color-dark` (dark bands, footer, mobile menu, interior heroes) | `#14181a` near-black | `#03165e` navy |
| on-dark body text | `#edf0ea` | `#eef3fb` |

Other colour changes:
- `.btn-accent` now uses white text; the old orange buttons used dark text.
- The photo-hero overlay (service pages, `/services/`) changed from a black gradient to a navy gradient.
- `favicon.svg` and the 16/32 PNGs were redrawn in `#052393`.
- The blog-post CSS fallback RGB was changed from orange to blue.
- `$colors` in `config.php` and `$cssVersion` were bumped from 1 to 2.
- There was no `meta theme-color` and no manifest in the repo, so nothing needed changing there.
- The orange hexes were grepped across `*.php`, `*.css`, `*.js`, `*.svg` and `*.json`, and none are left.

**Header:** the header is still the white glass bar. I did not make it blue, because the logo is artwork on a white background and its navy lettering disappears on blue. Blue shows in the bar through the logo itself, the blue "Free Estimate" button and the blue active-link underline. The footer, the dark bands and the mobile menu are navy.

**Contrast (WCAG, computed):**

| Pair | Ratio |
|---|---|
| Body ink on white | 16.9:1 |
| Body ink on `#f1f4f7` | 15.4:1 |
| Muted text on white | 7.3:1 |
| Muted text on `#f1f4f7` | 6.6:1 |
| White on primary buttons | 12.6:1 |
| White on accent buttons | 5.8:1 |
| White on hover state | 14.9:1 |
| Accent-dark link text on white | 11.9:1 |
| Accent text on grey | 5.3:1 |
| Light-blue eyebrows on navy | 8.1:1 |
| White on navy | 16.4:1 |

## 2. Logo as the first-screen backdrop

- **Source:** Luis's upload `8174807E-75BD-480E-A191-D4CCCBD1CF28.png` (1536×1024), one of the 29 `client_upload` images from 28 Sep. It is the full business-card-style logo: DRAIN MASTERS, four icon badges, "Of The Palm Beaches", "Your Plumbing Service Experts", phone, email, "LIC. & INS.", "SE HABLA ESPAÑOL".
- **Processing:**
  - The white background was knocked out to transparency with a corner flood-fill.
  - For the hero, it was cropped to wordmark + badges + "Of The Palm Beaches" + tagline. The phone, email and **"LIC. & INS."** line were cropped off, so the site makes no licence/insurance claim through the image.
  - Files: `logo-hero-v2-{480,960,1600}.{avif,webp}` plus a PNG fallback. Largest: 1600 avif 109KB, webp 124KB, both ≤150KB.
  - The hero uses `fetchpriority="high"` with an avif `imagesrcset` preload.
- **Desktop (1440):**
  - The hero keeps its normal height (~690px) and sits on white-to-light-grey.
  - The logo fills the width behind the content at 55% strength.
  - The H1, answer, call link and chips sit on a frosted white panel, and the estimate form on its own white card with a blue top rule. Text contrast is set by those panels and stays ≥ 15:1 whatever part of the logo is behind them.
  - A 4px royal-blue rule closes the hero.
- **Mobile (390):**
  - There is no room behind the copy, so the logo leads the first screen at full strength and the copy follows below it.
  - The location eyebrow is hidden on mobile because the logo already says "Of The Palm Beaches".
  - The primary CTA top is at about 594px, inside the 620px first-screen limit.
- **Header:** the old text logo was replaced with a lockup cut from the same file: the wordmark plus "Of The Palm Beaches", without the badges, which blur at 46px. Files: `logo-mark-v2.{webp,png}`; 46px desktop, 40px scrolled, 38px mobile.
  - On mobile the logo therefore appears twice on the first screen: small in the bar and large in the hero. I judged that acceptable because Luis asked for the logo to be what you see first.
- **OG image:** new `og-image-v2.jpg` (logo on white + a blue strip with service, city and phone). The old text-only OG card was removed.
- **Screenshots** (taken after scrolling, so reveals had fired, and looked at): desktop and mobile home hero were checked at each iteration. The final versions are in the session scratchpad (`final-home-desktop.png`, `final-home-mobile.png`), not committed.

## 3. Photos aligned with their descriptions

I looked at all 29 new uploads and all 8 existing images one by one.

**What was on the site before:**
- The whole site cycled 6 intake photos in rotation.
- 3 of them were finished decorative tile showers/tubs (`owner-img_8933/8946/8947`).
- Captions were generic ("technician completing a sump pump job…", "installing a backflow assembly…") and did not match the pictures.

**What changed:**
- **26 new photos processed:**
  - Auto-oriented and EXIF-stripped.
  - Phone-screenshot UI and black letterbox bars cropped out on 9068, 9070, 9093–9097.
  - Variants built with `image-variants.mjs` (480/960 webp+avif). 1600 variants were added for the hero photos, and a webp-1600 is skipped where it could not get under 150KB.
  - Fallback `.jpg` files are ≤150KB.
- **Alt text in one place:** a `$photoAlt` registry in `includes/config.php` now holds alt text that describes what is actually in each frame, and every page reads from it.
- **Location claims:** only `dm-new-pvc-line-trench` is tied to a city. Its EXIF GPS (26.7071, −80.0520) is West Palm Beach, and that is the only photo used on that city's page with the city named.
- **One photo per service:** a `$servicePhoto` map gives each service one matching photo. It is used for that service's hero and for its card wherever the card appears (home grid, `/services/`, "Other services" cards).
- **Removed:** the unused tile-shower photos, the 408px GBP van crops and the old OG card.

**Photos not used:**
- IMG_7404 (a tiled shower ceiling) and IMG_9098 (a condo interior with an ocean view) show no plumbing work.
- The three intake tile-shower photos show finished tile work rather than a plumbing service on this site.

### Per-page assignments

| Page / slot | Photo (what it shows) |
|---|---|
| **Home** hero | Luis's logo (above) |
| Home "Why Palm Springs homeowners call…" (text about cast iron that scales and corrodes) | `dm-cast-iron-pipe-scale`: cut cast-iron pipe packed with scale |
| Home "A local crew…" (Inspect → Diagnose → Repair → Confirm) | `dm-sewer-camera-screen`: sewer camera monitor inside a pipe |
| Home / `/services/` / related cards | Each service's own photo (next table) |
| `/services/` hero | `dm-camera-and-jetter-reels`: camera reel + jetter hose reel |
| **About**: "Our Story" | `dm-sewer-dig-crew`: two techs digging to a sewer line (was "owner and team", now captioned as what it shows) |
| About, second split | `dm-drain-machine-bathroom`: drain machine set up in a bathroom |
| `/service-areas/` | `dm-service-van`: company van, captioned as the van |
| Palm Springs | `dm-gutted-bathroom-plumbing` |
| Lake Worth | `dm-old-water-heater-removed` |
| West Palm Beach | `dm-new-pvc-line-trench` (GPS-verified WPB) |
| Greenacres | `owner-img_8819` (excavated old cast-iron stub, PVC line, tree roots) |
| Boynton Beach | `dm-electric-tankless-heater` |
| Wellington | `dm-whole-house-water-filter` |
| Lantana | `dm-shower-pan-drain` |
| Royal Palm Beach | `dm-recirculation-pump-copper` |
| Blog: drain-cleaning cost | `dm-shower-drain-cabling` |
| Blog: hurricane prep | `dm-copper-water-line-valves` (outdoor water line with shutoffs) |

Area-page alt text no longer says "servicing plumbing system in [City]". It describes the photo and names no city, except West Palm Beach.

| Service | Hero + card photo | "What's included" photo | Gallery |
|---|---|---|---|
| Drain Cleaning | tech holding roots pulled from a drain | drum-machine cable in a shower drain | drain machine in bathroom · clogged toilet · commercial kitchen floor drain |
| Hydro Jetting | van towing a jetter trailer | drain line pouring grease sludge | — |
| Sewer Line Repair | crew digging to a sewer line | excavated old cast-iron stub + PVC + roots | new PVC in trench (WPB) · split cast-iron pipe under slab · scale-packed cast iron |
| Trenchless Sewer | sewer camera monitor | camera + jetter reels | — |
| Leak Detection & Slab Leak | corroded split cast-iron pipe under a slab | night dig along a foundation | — |
| Water Heater | new electric tankless heater | rusted old tank pulled out | — |
| Repiping | new copper at a recirculation pump | gutted bathroom, wall plumbing opened | — |
| Toilet & Faucet | new wall-mounted sink + toilet | exposed toilet flange | tech setting a toilet · new shower valve/fixtures · new bottle-filler fountain |
| Garbage Disposal | drain line pouring grease sludge | commercial kitchen floor drain | — |
| Sump Pump | company van (captioned as the van) | **logo brand panel** | — |
| Gas Line | tankless gas heater with gas piping + meter | **logo brand panel** | — |
| Backflow Prevention | new copper water line with shutoff valves | **logo brand panel** | — |
| Emergency Plumbing | night dig under a work light | clogged toilet | — |

- Galleries are kept only where three genuinely matching photos exist. The others are empty arrays, and the section does not render when a page has fewer than three.
- Gallery headings are now specific ("Recent drain cleaning jobs", etc.) and the figcaptions are the descriptive alt text.

### Reuse ("no more than twice")
Counted over the rendered HTML of all 36 pages:
- Every photo appears in **at most two placements** (hero, split, gallery, area page, about, blog).
- **Exception by design:** each service's own photo also appears on that service's card wherever the card shows up (home grid, `/services/`, and the three "Other services" cards on sibling pages). That is 5–7 appearances for those 13 photos.
- I read the rule as "don't let one photo stand in for unrelated things". The card thumbnail always sits next to the service it shows. Meeting a literal ≤2 would mean removing photos from the required `service-card-with-image` component.
- **This is a judgement call — see "Unsure".**

## 4. Claims check

Command: `grep -rniE "licens|insur|bonded|warrant|guarantee|certified|24/7|same.day"`. Legal pages (privacy, terms, cookie, accessibility) and `references/` are excluded.

- The count is 109 matching lines, the same before and after this round.
- `git diff 9898acb` adds **zero** lines that match, so this revision added no claims.
- "LIC. & INS." exists in the logo artwork and on the van lettering visible in `dm-service-van` / `dm-van-and-jetter-trailer`. It was cropped out of the logo used on the site. It still shows on the van in those two photos.

Hits by term, all pre-existing:

| Term | File (count) |
|---|---|
| **24/7** | `index.php` (1), `services/index.php` (1), `contact/index.php` (2), `llms.txt` (3) |
| **certification** | `services/backflow-prevention/index.php` (6), `services/index.php` (1), `includes/service-init.php` (1, "Annual certification" card bullet), `service-areas/wellington/index.php` (1) |
| **warranted** | `blog/drain-cleaning-cost-palm-springs/index.php` (1, in the sense of "justified") |

**same-day** (105 hits):

| File | Count |
|---|---|
| `services/emergency-plumbing` | 13 |
| `index.php` | 11 |
| `llms-full.txt` | 9 |
| `llms.txt` | 5 |
| `services/drain-cleaning` | 5 |
| `about` | 4 |
| `services/garbage-disposal-repair` | 4 |
| `services/water-heater-installation-repair` | 4 |
| `service-areas/lake-worth` | 4 |
| `service-areas/lantana` | 4 |
| `service-areas/palm-springs` | 4 |
| `service-areas/west-palm-beach` | 4 |
| `contact` | 3 |
| `service-areas/boynton-beach` | 3 |
| `service-areas/greenacres` | 3 |
| `service-areas/royal-palm-beach` | 3 |
| `service-areas/wellington` | 3 |
| `faq` | 2 |
| `includes/footer.php` | 2 |
| `services/toilet-faucet-repair-and-installation` | 2 |
| 1 each | `area-body.php`, `config.php`, `service-init.php`, `service-areas/index`, `services/index`, `backflow-prevention`, `gas-line-repair`, `hydro-jetting`, `leak-detection`, `repiping`, `sewer-line`, `sump-pump`, `trenchless` |

No "licensed", "insured", "bonded", "guarantee" or "warranty" claims appear in body copy.

## 5. QA gate

- **PHP lint:** `php -l` passes on every PHP file.
- **Render check:** every page was rendered through `php -S 127.0.0.1:8092`. All 36 pages return 200 (`/404.php` returns 404 as intended), with no PHP warnings or notices. Every `/assets/images/` URL referenced in the HTML exists on disk.
- **`qa_audit.py . premium`:** **0 blockers, PASSED, grade B (93%)**, against **A (96%)** before this round.
  - The drop comes only from the per-file warning check "Image resolution". It flags every image file under 800×500, which includes every required `-480` responsive variant.
  - That check failed 13 files before and 31 now, because the site went from 6 photos to 26.
  - The same six other failures were there before and after (nav-scroll / text-wrap / lazy / alt heuristics, a carousel string in `main.js`, and no CTA band form on blog/about/FAQ). I did not touch them because they are outside this brief.
  - I did not remove photos or responsive variants to recover the letter grade. The logo files were renamed `logo-*`, which the check exempts, and the photo fallbacks were raised to ≥800px on the short side. That brought the result from 91% to 93%.
- `qa-report.json` was regenerated by the audit and is committed.

## 6. Unsure / for CM or Luis

1. **Photo reuse rule.** Service card thumbnails repeat on every card of that service (5–7 times each). If the strict literal ≤2 is wanted, the "Other services" cards need a photo-less variant, or Luis needs to send more photos per service.
2. **No real photo for sump pump, gas-line, backflow or garbage disposal work.**
   - Sump pump shows the van (captioned as the van). Backflow shows a copper water line with shutoffs (not a backflow device). Garbage disposal shows a grease-choked drain line.
   - Sump, gas and backflow use a logo brand panel in "What's included".
   - Ask Luis for photos of a sump pump, an RPZ/backflow assembly, gas piping work and a disposal install.
3. **Header colour.** It is white, not blue (reason in §1). If Luis wants a solid blue bar, we need a white or knock-out version of his logo.
4. **The hero backdrop is a judgement call.** On desktop the logo sits behind frosted panels. On mobile it is shown full-strength above the copy. If Luis wants it even bolder on desktop, raise `--logo-strength` in `index.php`: it is 0.55 now, and 1 shows the logo full colour behind the panels.
5. **The home hero answer paragraph is about 50 words (7 lines on mobile)**, above the v7 "≤30 words / ≤2 lines" target. This is pre-existing copy and I did not edit it (copy changes go through the copywriter).
6. **The logo artwork says "LIC. & INS."** It was cropped from the site logo but is visible on the van photos. Confirm Luis is licensed and insured before any copy claims it.
7. **Unverified photo locations.** IMG_0283 (the electric tankless heater on the Boynton Beach page) has GPS 26.554, −80.060, around north Boynton / Hypoluxo. I did not name a city for it because the location wasn't verified.
