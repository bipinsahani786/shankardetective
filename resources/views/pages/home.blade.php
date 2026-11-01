<x-app-layout
    title="Deep Trace Detective | Premier Private Detective Agency Indore"
    description="Premier private detective agency in Indore led by Senior Case Director. Confidential matrimonial background checks, corporate due diligence & fraud probes. Call +91 9004145251."
    :faqs="$faqs"
>
    <!-- Section 1: Hero -->
    <x-sections.hero
        badge="100% Confidential • Trusted Investigation Services"
        title="Get the Real Facts. <span class='text-blue-700'>Protect Your Peace of Mind.</span>"
        subtitle="Led by Principal Investigator. Trusted pre-matrimonial checks, personal background verification, and business due diligence across Indore, Pune, Mumbai, Ahmedabad, and Bangalore."
        cta-primary-text="Book Free Consultation"
        cta-secondary-text="Call +91 9004145251"
    />

    <!-- Section 2: Trust Badges Bar -->
    <x-sections.trust-bar />

    <!-- Section 3: Stats Counters -->
    <x-sections.stats-counter />

    <!-- Section 4: Intro & Agency Overview -->
    <x-sections.intro />

    <!-- Section 5: Practice Highlights -->
    <x-sections.service-highlights />

    <!-- Section 6: Mid-Page CTA Banner 1 -->
    <x-sections.cta-banner
        title="Need Objective, Unbiased Facts for Your Peace of Mind?"
        subtitle="Speak directly with Principal Investigator under complete Non-Disclosure Agreement."
        button-text="Request Consultation"
    />

    <!-- Section 7: Services Grid -->
    <x-sections.services-grid
        :services="$featuredServices"
        title="Our Core Investigation Practices"
        subtitle="Explore our specialized forensic, surveillance, and corporate capabilities."
    />

    <!-- Section 8: Why Choose Us -->
    <x-sections.why-choose-us />

    <!-- Section 9: 4-Stage Process Timeline -->
    <x-sections.process-timeline />

    <!-- Section 10: Split Image & Intelligence Overview -->
    <x-sections.split-image-text
        variant="right"
        tag="Precision Intelligence"
        title="When Assumptions Are Costly, Proof Is Priceless"
        description="Whether navigating complex marital doubts, multi-crore corporate vendor risks, or asset ownership conflicts, our operatives deliver clear, unedited truth so you can take confident legal and personal action."
    />

    <!-- Section 11: Who Needs This Service -->
    <x-sections.who-needs-this />

    <!-- Section 12: What We Investigate -->
    <x-sections.what-we-investigate />

    <!-- Section 13: Tools & Methodology -->
    <x-sections.tools-methods />

    <!-- Section 14: Mid-Page CTA Banner 2 -->
    <x-sections.cta-banner
        title="Facing a Time-Sensitive Inquiry? Our Operatives Mobilize Fast"
        subtitle="Call our confidential case desk in Indore for immediate field operative deployment."
        button-text="Call Helpline Now"
        :button-url="'tel:' . config('agency.phone')"
        secondary-text="WhatsApp Case Desk"
    />

    <!-- Section 15: Legal & Ethics Promise -->
    <x-sections.legal-ethics-promise />

    <!-- Section 16: Comparison Table -->
    <x-sections.comparison-table />

    <!-- Section 17: Transparent Engagement Models -->
    <x-sections.engagement-models />

    <!-- Section 18: Verified Client Testimonials -->
    <x-sections.testimonials-slider :testimonials="$testimonials" />

    <!-- Section 19: Proven Case Studies -->
    <x-sections.case-study-cards :case-studies="$caseStudies" />

    <!-- Section 20: Institutional Certifications -->
    <x-sections.certifications />

    <!-- Section 22: FAQ Accordion -->
    <x-sections.faq-accordion :faqs="$faqs" />

    <!-- Section 23: Visual Fieldcraft Gallery -->
    <x-sections.gallery />

    <!-- Section 24: Explainer Block -->
    <x-sections.video-explainer />

    <!-- Section 25: Cities We Serve -->
    <x-sections.cities-served />

    <!-- Section 26: 100% Confidentiality Guarantee -->
    <x-sections.confidentiality-guarantee />

    <!-- Section 27: Related Knowledge Articles -->
    <x-sections.related-blogs :posts="$latestPosts" />

    <!-- Section 28: Secure Lead Capture Form -->
    <x-sections.lead-form />

    <!-- Section 29: Final Action CTA -->
    <x-sections.final-cta />
</x-app-layout>
