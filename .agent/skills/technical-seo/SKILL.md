---
name: technical-seo
description: Master technical and on-page SEO skill for Laravel websites, including JSON-LD schema injection, OpenGraph, dynamic sitemaps, robots.txt, local SEO geo-targeting, semantic HTML, and Core Web Vitals optimization.
---

# Technical & Local SEO Master Skill

## 1. On-Page Metadata Standards
- **Title Tag**:
  - Maximum 60 characters.
  - Formula: `{Primary Keyword} | {Brand Name}` or `{Service/City} - {Value Proposition} | {Brand}`.
  - Strictly unique across all 35+ pages.
- **Meta Description**:
  - 140–155 characters.
  - Action-oriented copy with phone/consultation CTA and primary keyword.
  - Strictly unique per page.
- **Canonical Tags**:
  - Self-referencing absolute canonical URLs on every indexable page: `<link rel="canonical" href="{{ url()->current() }}" />`.
- **OpenGraph & Social Tags**:
  - `og:site_name`, `og:type`, `og:title`, `og:description`, `og:url`, `og:image`, `og:locale` (`en_IN`).
  - `twitter:card` (`summary_large_image`), `twitter:title`, `twitter:description`, `twitter:image`.
- **Robots Meta**:
  - Default: `index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1`.
  - Utility/search/thank-you: `noindex, follow`.

## 2. Structured Data (JSON-LD Schemas)
- Output valid, rich `<script type="application/ld+json">` tags in the `<head>` or via dedicated Blade components.
- **Organization & LocalBusiness / ProfessionalService**:
  - Name, legalName, alternateName, url, logo, image, telephone, email.
  - Full `address` (PostalAddress: streetAddress, addressLocality, addressRegion, postalCode, addressCountry: IN).
  - `geo` (GeoCoordinates: latitude, longitude).
  - `openingHoursSpecification` (Days and times).
  - `areaServed` (List of target Indian cities/states).
  - `priceRange` (e.g. `₹₹ - ₹₹₹`).
  - `hasOfferCatalog` or list of services.
- **Service Schema** (On all 24 service pages):
  - `@type`: `Service`.
  - `name`: Service title.
  - `serviceType`: Investigation category.
  - `provider`: Reference to agency Organization.
  - `areaServed`: Country/Cities.
  - `description`: 150+ character detailed summary.
- **FAQPage Schema** (On every page with an FAQ section):
  - Array of `Question` and `acceptedAnswer` with clean plain text.
- **BreadcrumbList Schema** (On all pages):
  - Ordered `itemListElement` items with position, name, and item URL.
- **Article / BlogPosting Schema** (On blog detail pages):
  - `headline`, `image`, `datePublished`, `dateModified`, `author` (Person/Organization), `publisher`.

## 3. Local SEO & Geo-Targeting (Indian Market)
- Strict NAP (Name, Address, Phone) consistency across footer, contact page, schemas, and location pages.
- Dedicated local landing pages (`/detective-agency-in-{city}`):
  - Unique localized copy (neighborhoods, local legal context, court procedures, office/consultation info).
  - Geo-targeted FAQs (e.g., "How much does a private detective cost in Pune?").
  - Google Map embed targeting local landmarks.

## 4. Crawlability & Architecture
- **Sitemap**: Clean, dynamic `sitemap.xml` listing all core, service, blog, and city pages with `<lastmod>`, `<changefreq>`, and `<priority>`.
- **Robots.txt**: Clean configuration allowing search engine bots to crawl public pages, disallowing admin, internal search, and private storage.
- **Internal Linking**:
  - Cross-link related services (e.g. Pre-Matrimonial <-> Background Verification).
  - Link blog posts to relevant service and location pages using contextual anchor text.
  - Mega-menu and footer site directory covering all service clusters.
- **Headings Hierarchy**:
  - Exactly one `<h1>` per page matching the page focus.
  - Sequential `<h2>` for major sections and `<h3>` for cards/sub-sections.

