---
name: modern-frontend
description: Master frontend engineering skill for modern Laravel Blade, Tailwind CSS, and Alpine.js websites with high-converting UI/UX, responsive design, accessibility, and noir detective aesthetics.
---

# Modern Frontend Engineering Skill

## 1. Aesthetic & Design System (Noir Detective Theme)
- **Palette**:
  - `primary-dark`: `#0B1220` (Dark Navy background)
  - `surface-dark`: `#111A2E` (Card and panel backgrounds)
  - `surface-elevated`: `#17233D` (Elevated card background on hover)
  - `accent-gold`: `#C9A227` (Brand gold accent, primary buttons, badges)
  - `accent-gold-light`: `#E5C358` (Gold hover highlights, active borders)
  - `accent-gold-dark`: `#9A7815` (Subtle borders and muted gold details)
  - `text-main`: `#F8FAFC` (High contrast text)
  - `text-muted`: `#94A3B8` (Secondary text, subtitles, captions)
  - `border-dark`: `rgba(201, 162, 39, 0.15)` (Subtle gold-tinted hairline borders)
- **Typography**:
  - Headings: `font-serif` -> **Playfair Display** (Sophisticated, authoritative, classic detective heritage)
  - Body & UI: `font-sans` -> **Inter** (Crisp, clean, legible at all resolutions)
- **Visual Polish**:
  - Sleek glassmorphism (`backdrop-blur-md bg-navy-950/80 border border-gold/15`).
  - Subtle gold glows on cards (`hover:shadow-[0_0_25px_rgba(201,162,39,0.12)]`).
  - Floating action buttons with gentle pulse rings.
  - Clean 8px spatial grid, generous whitespace, alternating dark and rich contrast sections.

## 2. Component Architecture (Blade Components)
- Every component must use `@props` with sensible defaults.
- Must support slot composition or structured data props.
- Mobile first: `w-full`, `text-sm sm:text-base`, `grid-cols-1 md:grid-cols-2 lg:grid-cols-3`.
- No hardcoded absolute widths that trigger horizontal scrolling.
- Accessible ARIA attributes on interactive toggles (`aria-expanded`, `aria-controls`, `role="region"`).

## 3. Alpine.js Interactive Patterns
- **Accordion / FAQ**: Smooth height transition, keyboard navigation (Enter/Space), proper ARIA tags.
- **Mobile Drawer**: Slide-in from right/left with dimmed overlay, lock body scroll when open, close on Escape key.
- **Form Validation**: Immediate inline error indicators, client-side phone number and required field checks, clear submission progress states.
- **Tabs & Sliders**: Active state indicators with gold underlining and transitions.

## 4. Performance & Core Web Vitals
- Lazy load all below-the-fold images (`loading="lazy"`).
- Hero image prioritized (`fetchpriority="high"`, no lazy load on LCP element).
- Provide explicit `width` and `height` (or aspect-ratio classes like `aspect-video`) to avoid Cumulative Layout Shift (CLS).
- Modern WebP and SVG formats.
- Self-hosted or pre-connected font endpoints.

