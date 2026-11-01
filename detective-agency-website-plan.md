# Detective Agency Website: Plan aur Antigravity Prompt

Laravel 11 + Blade + Tailwind based, SEO-friendly, mobile responsive website. 35+ pages, har page par 20+ sections, floating WhatsApp/Call buttons, address + styled Google Map.

---

## 1. Tech Stack

- **Laravel 11 + Blade**, Tailwind CSS (Vite), Alpine.js, AOS ya GSAP (animations)
- **MySQL**: services, blogs, categories, FAQs, testimonials, leads
- **Admin panel:** Filament (blogs, services, leads manage karne ke liye)
- **Images:** Unsplash, Pexels, Pixabay (free license). Download karke local `public/images` mein WebP format mein rakho.
- **Fonts:** Playfair Display (headings) + Inter (body)
- **Theme:** Dark navy + gold + white. "Noir detective" feel, lekin clean aur modern.

---

## 2. Pages ki List (35+ pages)

### Core pages (10)
1. Home
2. About Us
3. Why Choose Us
4. How We Work (process)
5. Contact Us
6. Book Free Consultation
7. FAQ
8. Case Studies (index)
9. Testimonials
10. Our Team

### Services (1 index + 24 dedicated pages)
- `/services` (index)
1. Pre-Matrimonial Investigation
2. Post-Matrimonial Investigation
3. Extramarital / Infidelity Investigation
4. Divorce and Child Custody Evidence
5. Background Verification
6. Pre-Employment Screening
7. Employee Verification and Misconduct Probe
8. Corporate Investigation
9. Business Due Diligence and Partner Verification
10. Insurance Claim Fraud Investigation
11. Property and Land Verification
12. Missing Person Tracing
13. Surveillance Services
14. Cyber Crime and Digital Forensics
15. Bug Sweeping (TSCM)
16. Asset Tracing
17. Financial Fraud Investigation
18. Tenant and Domestic Staff Verification
19. Matrimonial Profile Verification
20. Pre-Relationship Verification
21. Litigation Support and Evidence Collection
22. IP and Counterfeit Investigation
23. Competitor and Market Intelligence (legal)
24. Witness and Court Process Support

### Blog (dedicated)
- `/blog` (index: search, categories, pagination)
- `/blog/{slug}` (detail page)
- `/blog/category/{slug}`
- `/blog/tag/{slug}`
- Seed mein 12 SEO blog posts

### Location pages (local SEO)
- `/detective-agency-in-{city}`: Patna, Delhi, Mumbai, Kolkata, Lucknow, Ranchi, Bengaluru, Hyderabad. Har city ka unique content.

### Utility aur legal
- Privacy Policy
- Terms and Conditions
- Disclaimer and Legal Compliance
- Careers
- 404 page
- HTML Sitemap
- `sitemap.xml` aur `robots.txt`

---

## 3. Sections Library (30 reusable Blade components)

Har content page mein in 30 mein se kam se kam 20 sections.

| # | Section | # | Section |
|---|---|---|---|
| 1 | Hero + CTA buttons | 16 | Pricing / engagement models |
| 2 | Breadcrumb | 17 | Testimonials slider |
| 3 | Trust badges bar | 18 | Case study cards |
| 4 | Stats counters | 19 | Team grid |
| 5 | Intro / overview | 20 | Awards and certifications |
| 6 | Services grid | 21 | FAQ accordion (with schema) |
| 7 | Service highlights (icons) | 22 | Related blogs |
| 8 | Why choose us | 23 | Image gallery |
| 9 | Process timeline | 24 | Video / explainer block |
| 10 | Image + text split (x3 variants) | 25 | Cities we serve |
| 11 | Who needs this service | 26 | Confidentiality guarantee |
| 12 | What we investigate | 27 | Mid-page CTA banner |
| 13 | Tools and methods | 28 | Lead form section |
| 14 | Legal and ethical promise | 29 | Office address + styled Google Map |
| 15 | Comparison table | 30 | Final CTA + footer |

### Har page par global elements
- Floating WhatsApp button (bottom-right, pulse animation)
- Floating Call button (bottom-left)
- Mobile sticky bottom bar (Call, WhatsApp, Enquire)
- Address + styled Google Map section
- Footer mein NAP (Name, Address, Phone)

---

## 4. Antigravity Prompt (copy-paste)

> Tip: Poora prompt ek saath do, phir har phase ke liye alag message bhejo ("Phase 1 karo", "Phase 2 karo"...). Isse output beech mein cut nahi hota.

```
ROLE
You are a senior Laravel + frontend + technical SEO engineer. Build a production-ready, modern, SEO-optimized website for a PRIVATE DETECTIVE AGENCY in India using Laravel 11, Blade, Tailwind CSS (Vite), Alpine.js, MySQL. Work in the phases below. Finish and verify each phase before starting the next. Do not skip any item.

PLACEHOLDERS (central config in config/agency.php + .env, never hardcode)
name, tagline, phone, whatsapp number, email, full address, city, state, pincode, lat/lng, Google Maps embed URL, working hours, social links, founding year. Use clearly marked dummy values I can replace later.

DESIGN SYSTEM
- Palette: deep navy (#0B1220), gold accent (#C9A227), off-white, slate greys. Dark hero sections, light content sections alternating.
- Fonts: Playfair Display (headings), Inter (body). Self-host or Google Fonts with display=swap.
- Modern UI: rounded cards, soft shadows, glass-effect navbar, subtle AOS scroll animations, hover micro-interactions, gradient overlays on images, consistent 8px spacing scale.
- Fully mobile-first responsive (test 360px, 768px, 1024px, 1440px). No horizontal scroll anywhere.
- Accessible: WCAG AA contrast, focus states, aria labels, semantic HTML5.

GLOBAL LAYOUT (resources/views/layouts/app.blade.php)
- Sticky header with logo, mega-menu for Services (grouped: Personal/Family, Corporate, Legal/Fraud, Cyber/Security), Blog, About, Contact, and a gold "Free Consultation" CTA. Mobile: slide-in hamburger menu.
- Footer: about blurb, quick links, all services links, top cities, latest blogs, NAP, social icons, legal links.
- FLOATING BUTTONS on EVERY page: (1) WhatsApp button fixed bottom-right with pulse animation, prefilled message "Hello, I need a confidential consultation about [page title]"; (2) Call button fixed bottom-left with tel: link. On mobile also add a sticky bottom action bar: Call | WhatsApp | Enquire. Make them Blade components (<x-floating-actions />).
- Include on EVERY page, before footer: <x-office-map /> section showing office address, phone, email, hours, "Get Directions" button, and a DESIGNED Google Map embed: rounded-3xl, gold border, slight grayscale/dark filter that removes on hover, floating info card overlaid on the map, lazy-loaded iframe.

PAGES TO BUILD (use named routes, controllers, clean URLs)
Core: Home, About, Why Choose Us, How We Work, Contact, Book Free Consultation, FAQ, Case Studies, Testimonials, Our Team.
Services: /services index + 24 DEDICATED service pages (/services/{slug}) driven by a Service model + seeder:
pre-matrimonial-investigation, post-matrimonial-investigation, extramarital-infidelity-investigation, divorce-child-custody-evidence, background-verification, pre-employment-screening, employee-verification-misconduct, corporate-investigation, business-due-diligence, insurance-claim-fraud, property-land-verification, missing-person-tracing, surveillance-services, cyber-crime-digital-forensics, bug-sweeping-tscm, asset-tracing, financial-fraud-investigation, tenant-domestic-staff-verification, matrimonial-profile-verification, pre-relationship-verification, litigation-support, ip-counterfeit-investigation, competitor-market-intelligence, witness-court-support.
Blog (dedicated): /blog (search, category filter, pagination), /blog/{slug}, /blog/category/{slug}, /blog/tag/{slug}. Models: Post, Category, Tag. Seed 12 unique, 800+ word posts with featured images, author, read-time, TOC, related posts, share buttons.
Locations: /detective-agency-in-{city} for 8+ cities (Patna, Delhi, Mumbai, Kolkata, Lucknow, Ranchi, Bengaluru, Hyderabad) with UNIQUE local content.
Utility: Privacy Policy, Terms, Disclaimer & Legal Compliance, Careers, HTML Sitemap, custom 404.
Total must exceed 35 pages.

SECTIONS PER PAGE
Create ~30 reusable Blade components in resources/views/components/sections/ (hero, breadcrumb, trust-bar, stats-counter, intro, services-grid, service-highlights, why-choose-us, process-timeline, split-image-text (3 variants), who-needs-this, what-we-investigate, tools-methods, legal-ethics-promise, comparison-table, engagement-models, testimonials-slider, case-study-cards, team-grid, certifications, faq-accordion, related-blogs, gallery, video-explainer, cities-served, confidentiality-guarantee, cta-banner, lead-form, office-map, final-cta).
EVERY content page (home, about, all services, location pages, case studies, etc.) must render AT LEAST 20 sections, with a CTA (button/banner/form) in at least every 3rd section. Service and location content must be UNIQUE per page (stored in DB/seeders/data files), never copy-paste duplicates. Legal pages (privacy/terms/disclaimer) are exempt from the 20-section rule but must still have the header, floating buttons, CTA, and map.

CTAs
Every page: hero CTAs (Call Now + WhatsApp + Free Consultation), mid-page CTA banner, lead form, final CTA. Use action-oriented copy: "Talk to a Detective in Confidence", "Get a Free Case Review", "WhatsApp Us Now".

LEAD FORM
Reusable form (name, phone, city, service dropdown, message), server-side validation, CSRF, honeypot + throttle middleware, saves to leads table, sends email notification, success toast, optional WhatsApp redirect. Include Alpine.js client validation.

IMAGES (open-source only)
Use free-license images from Unsplash/Pexels/Pixabay (investigation, city, office, documents, handshake, surveillance, cyber, family, corporate themes). Download them into public/images/{section}/, convert to WebP, create responsive sizes, use <picture>/srcset, width/height attributes, loading="lazy" (hero: fetchpriority="high"), descriptive keyword-rich alt text. Minimum 8-12 images per page across sections. Add credits/attribution page listing sources. Do NOT use fake photos presented as real staff or clients; mark team/testimonial images as illustrative placeholders.

SEO (technical + on-page)
- Per page: unique <title> (<=60 chars), meta description (<=155 chars), canonical, Open Graph, Twitter Card, robots meta; managed through a SeoMeta Blade component fed by model/config.
- JSON-LD schema: ProfessionalService/LocalBusiness (global), Service (service pages), FAQPage (FAQ sections), BreadcrumbList (all), Article/BlogPosting (blog), Organization, WebSite with SearchAction.
- Exactly one H1 per page, logical H2/H3 hierarchy, keyword-rich but natural content (1200+ words on service pages), LSI keywords, internal linking between related services/blogs/locations, descriptive anchor text.
- Auto-generated sitemap.xml (spatie/laravel-sitemap or custom) and robots.txt, clean slugs, 301 handling, custom 404.
- Performance: Vite build with minify, preload fonts, lazy images, defer JS, critical CSS considerations, gzip/Brotli hints in .htaccess/nginx sample, target Lighthouse 90+ on mobile for Performance/SEO/Accessibility/Best Practices.
- Content language: English with natural Hinglish/Hindi keywords where relevant (e.g., "private detective agency near me", "jasoos", "detective agency in Patna"). Include an optional Hindi toggle structure (do not break English SEO).

LEGAL & ETHICS (important)
Content must state that the agency operates strictly within Indian law: no illegal phone tapping, no call-detail-record (CDR) procurement, no hacking, respects the DPDP Act 2023 and IPC/BNS. Add a Confidentiality Guarantee and Legal Compliance section. Do not make illegal or unrealistic claims ("100% success", "track any number").

BACKEND / ADMIN
Models + migrations + factories + seeders for Service, Post, Category, Tag, Faq, Testimonial, TeamMember, CaseStudy, City, Lead. Install Filament admin to manage all of them and view leads. Use Eloquent eager loading, caching for heavy queries, route model binding, form requests.

PHASES
1. Project setup, design tokens, layout, global components (header, footer, floating buttons, office-map), config/agency.php.
2. Models, migrations, seeders with real unique content.
3. All section components.
4. Home + core pages.
5. 24 service pages + index.
6. Blog system + 12 posts.
7. Location pages + utility/legal pages.
8. SEO layer (meta, schema, sitemap, robots), image optimization.
9. Filament admin, lead form, emails.
10. QA.

QA / ACCEPTANCE CHECKLIST (verify and report at the end)
[ ] 35+ pages load without errors
[ ] each content page has >=20 sections
[ ] floating WhatsApp + Call on all pages
[ ] office address + styled map on all pages
[ ] CTA on every page
[ ] mobile responsive at 360/768/1024/1440
[ ] one H1 per page, unique title + meta
[ ] schema validates
[ ] sitemap.xml + robots.txt present
[ ] images WebP, lazy, with alt
[ ] no broken links
[ ] forms validated and saving leads
[ ] Lighthouse mobile >=90
[ ] README with setup, seed, and "how to replace placeholders" steps
Run php artisan migrate --seed, npm run build, and produce a final summary.
```

---

## 5. Phase-wise Follow-up Messages

Antigravity ko ye messages ek-ek karke bhejo:

1. `Phase 1 karo: project setup, design tokens, layout, header, footer, floating buttons, office-map component, config/agency.php. Poora hone ke baad verify karke batao.`
2. `Phase 2 karo: sab models, migrations, factories, seeders. Services ka content 4 batches mein (6-6) unique likho.`
3. `Phase 3 karo: saare 30 section components banao.`
4. `Phase 4 karo: Home + core pages.`
5. `Phase 5 karo: /services index + 24 service pages.`
6. `Phase 6 karo: blog system + 12 posts.`
7. `Phase 7 karo: location pages + utility/legal pages.`
8. `Phase 8 karo: SEO layer (meta, schema, sitemap, robots) + image optimization.`
9. `Phase 9 karo: Filament admin, lead form, email notifications.`
10. `Phase 10 karo: QA checklist verify karke final report do.`

---

## 6. Zaroori Tips

- **Phases mein chalao:** Ek-ek phase alag message mein do. Quality behtar aati hai.
- **Content ki quality:** 24 service pages ka unique content ek baar mein generate karna mushkil hai. 4 batches (6-6 pages) mein banwao, warna content repeat hota hai aur Google duplicate content maanta hai.
- **Legal safety:** "Call details nikalna" ya "phone tapping" jaisi services website par mat likho. India mein ye illegal hai aur agency par action ho sakta hai.
- **Real details:** Asli phone number, address aur Google Maps embed link `config/agency.php` mein daalo. Google Maps par "Share → Embed a map" se iframe URL milega.
- **Local SEO:** Google Business Profile banao aur wahi NAP (Name, Address, Phone) website par rakho.
- **Real photos:** Stock images se shuru karo, baad mein team aur office ki real photos lagao. Trust zyada banta hai.
- **Image credits:** Unsplash/Pexels/Pixabay ke images ka credits page rakho.

---

## 7. Placeholders jo baad mein badalne hain

| Item | Kahan badalna hai |
|---|---|
| Agency name, tagline | `config/agency.php` |
| Phone, WhatsApp number | `config/agency.php` / `.env` |
| Email | `.env` |
| Address, pincode, lat/lng | `config/agency.php` |
| Google Maps embed URL | `config/agency.php` |
| Social links | `config/agency.php` |
| Team and testimonial photos | `public/images/team`, Filament admin |
| Blog posts, services content | Filament admin / seeders |
