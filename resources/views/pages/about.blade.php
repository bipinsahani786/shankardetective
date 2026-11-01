<x-app-layout
    title="About Deep Trace Detective | Premier Private Investigators Indore"
    description="Learn about Deep Trace Detective's 12+ years heritage, Principal Investigator's leadership, ethical standards, and Indore HQ."
    :breadcrumbs="[['name' => 'About Us', 'url' => route('about')]]"
    :faqs="$faqs"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[['name' => 'About Us', 'url' => route('about')]]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        badge="Led by Senior Case Director • 12+ Years Experience"
        title="About <span class='text-blue-700'>Deep Trace Detective</span>"
        subtitle="Founded and led by Principal Investigator. We help families and businesses discover the clear truth with 100% confidentiality across Indore, Pune, Mumbai, Ahmedabad, and Bangalore."
        cta-primary-text="Book Free Consultation"
        cta-secondary-text="Call +91 9004145251"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: Stats Counter -->
    <x-sections.stats-counter
        headline="Over 12 Years of Proven Truth & Confidentiality"
        subheadline="Over 100+ successfully resolved verification inquiries for families and businesses across India."
    />

    <!-- Section 5: Intro Narrative -->
    <x-sections.intro
        badge="Our Story"
        title="Dedicated to Truth, Discretion, and Ethical Investigations"
        lead-text="Deep Trace Detective was established by Senior Case Director to provide honest, reliable, and legally compliant private investigation services."
    />

    <!-- Section 6: Split Image Text -->
    <x-sections.split-image-text
        variant="left"
        tag="Experienced Leadership"
        title="Guided by 12+ Years of Practical Investigation Experience"
        description="Our case operations are supervised directly by Senior Case Director. We gather real, unmanipulated evidence and verified public records so you can move forward with complete peace of mind."
        image="/images/services/corporate-due-diligence.jpg"
    />

    <!-- Section 7: Why Choose Us -->
    <x-sections.why-choose-us />

    <!-- Section 8: Mid-Page CTA Banner 1 -->
    <x-sections.cta-banner
        title="Have Confidential Questions About Your Situation?"
        subtitle="Principal Investigator listens without judgment and advises on legal, effective next steps."
        button-text="Speak to Senior Case Director"
    />

    <!-- Section 9: 4-Stage Methodology -->
    <x-sections.process-timeline />

    <!-- Section 10: Certifications -->
    <x-sections.certifications />

    <!-- Section 12: Legal & Ethics Promise -->
    <x-sections.legal-ethics-promise />

    <!-- Section 13: Comparison Table -->
    <x-sections.comparison-table />

    <!-- Section 14: Tools & Methodology -->
    <x-sections.tools-methods />

    <!-- Section 15: Visual Fieldcraft Gallery -->
    <x-sections.gallery />

    <!-- Section 16: Explainer Block -->
    <x-sections.video-explainer />

    <!-- Section 17: Transparent Engagement Models -->
    <x-sections.engagement-models />

    <!-- Section 18: Mid-Page CTA Banner 2 -->
    <x-sections.cta-banner
        title="Start Your Confidential Inquiry with Total Anonymity"
        subtitle="Call directly: +91 9004145251 or connect via WhatsApp for an immediate consultation."
        button-text="Call Detective Directly"
        :button-url="'tel:' . config('agency.phone')"
    />

    <!-- Section 19: Who Needs This -->
    <x-sections.who-needs-this />

    <!-- Section 20: What We Investigate -->
    <x-sections.what-we-investigate />

    <!-- Section 21: Client Testimonials -->
    <x-sections.testimonials-slider :testimonials="$testimonials" />

    <!-- Section 22: Case Studies -->
    <x-sections.case-study-cards :case-studies="$caseStudies" />

    <!-- Section 23: Pan-India Operational Bureaus -->
    <x-sections.cities-served />

    <!-- Section 24: 100% Confidentiality Guarantee -->
    <x-sections.confidentiality-guarantee />

    <!-- Section 25: Secure Lead Capture Form -->
    <x-sections.lead-form />

    <!-- Section 26: Final Action CTA -->
    <x-sections.final-cta />
</x-app-layout>
