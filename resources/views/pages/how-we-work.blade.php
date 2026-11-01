<x-app-layout
    title="How We Work | Systematic 4-Stage Investigation Process | Deep Trace"
    description="Explore Deep Trace Detective's 4-stage investigation methodology led by Senior Case Director: confidential consultation, field verification, evidence capture, and sealed delivery."
    :breadcrumbs="[['name' => 'How We Work', 'url' => route('how-we-work')]]"
    :faqs="$faqs"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[['name' => 'How We Work', 'url' => route('how-we-work')]]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        badge="Clear, Honest & Confidential Process"
        title="How We Work: <span class='text-blue-700'>Our 4-Step Process</span>"
        subtitle="We keep things simple, transparent, and completely private. Every step is handled lawfully and overseen personally by Senior Case Director."
        cta-primary-text="Schedule Free Consultation"
        cta-secondary-text="Call +91 9004145251"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: 4-Stage Timeline Detailed -->
    <x-sections.process-timeline
        title="From First Call to Delivering Verified Facts"
        subtitle="Here is a clear look at what happens when you work with Deep Trace Detective."
    />

    <!-- Section 5: Split Image Text -->
    <x-sections.split-image-text
        variant="right"
        tag="Verified Documentation"
        title="Clear, Verifiable Proof You Can Rely On"
        description="Every photo, video, and verified document we gather includes exact timestamps and location details. Whether you need clarity for your family or solid proof for legal discussions, our reports are clear, honest, and unshakeable."
        image="/images/services/cyber-forensics.jpg"
    />

    <!-- Section 6: Stats Counter -->
    <x-sections.stats-counter />

    <!-- Section 7: Tools & Methods -->
    <x-sections.tools-methods />

    <!-- Section 8: Mid-Page CTA Banner 1 -->
    <x-sections.cta-banner
        title="Ready to Set Your Investigation in Motion?"
        subtitle="Consultations are strictly confidential and free of obligation. Our directors are available 24/7."
        button-text="Book Free Case Consultation"
    />

    <!-- Section 9: What We Investigate -->
    <x-sections.what-we-investigate />

    <!-- Section 10: Who Needs This -->
    <x-sections.who-needs-this />

    <!-- Section 11: Legal & Ethics Promise -->
    <x-sections.legal-ethics-promise />

    <!-- Section 12: 100% Confidentiality Guarantee -->
    <x-sections.confidentiality-guarantee />

    <!-- Section 13: Institutional Comparison Table -->
    <x-sections.comparison-table />

    <!-- Section 14: Transparent Engagement Models -->
    <x-sections.engagement-models />

    <!-- Section 15: Visual Fieldcraft Gallery -->
    <x-sections.gallery />

    <!-- Section 16: Explainer Video -->
    <x-sections.video-explainer />

    <!-- Section 17: Mid-Page CTA Banner 2 -->
    <x-sections.cta-banner
        title="Questions Regarding Timeline or Pricing?"
        subtitle="Call directly for an immediate case assessment with Principal Investigator."
        button-text="Call: +91 9004145251"
        :button-url="'tel:' . config('agency.phone')"
    />

    <!-- Section 18: Client Testimonials -->
    <x-sections.testimonials-slider :testimonials="$testimonials" />

    <!-- Section 19: Case Studies -->
    <x-sections.case-study-cards :case-studies="$caseStudies" />

    <!-- Section 20: Institutional Certifications -->
    <x-sections.certifications />

    <!-- Section 22: Pan-India Operational Bureaus -->
    <x-sections.cities-served />

    <!-- Section 23: FAQ Accordion -->
    <x-sections.faq-accordion :faqs="$faqs" />

    <!-- Section 24: Secure Lead Form -->
    <x-sections.lead-form />

    <!-- Section 25: Final Action CTA -->
    <x-sections.final-cta />
</x-app-layout>
