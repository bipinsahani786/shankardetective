<x-app-layout
    title="Why Choose Deep Trace Detective | Integrity & Results"
    description="Discover why clients trust Deep Trace Detective: 12+ years experience led by Senior Case Director, court-admissible evidence, Indore HQ, and zero leak record."
    :breadcrumbs="[['name' => 'Why Choose Us', 'url' => route('why-choose-us')]]"
    :faqs="$faqs"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[['name' => 'Why Choose Us', 'url' => route('why-choose-us')]]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        badge="100% Confidential & Professional"
        title="Why Choose <span class='text-blue-700'>Deep Trace Detective</span>?"
        subtitle="When truth and privacy matter most, Deep Trace Detective offers 12+ years of experience, complete confidentiality, and honest facts without false promises. Led by Senior Case Director."
        cta-primary-text="Book Free Consultation"
        cta-secondary-text="Call +91 9004145251"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: Stats Counter -->
    <x-sections.stats-counter />

    <!-- Section 5: Why Choose Us Grid -->
    <x-sections.why-choose-us />

    <!-- Section 6: Institutional Comparison Table -->
    <x-sections.comparison-table />

    <!-- Section 7: Mid-Page CTA Banner 1 -->
    <x-sections.cta-banner
        title="Make Informed Decisions with Verified Facts"
        subtitle="Speak directly with Principal Investigator for a free case review and upfront quote."
        button-text="Book Free Case Consultation"
    />

    <!-- Section 8: Legal & Ethics Promise -->
    <x-sections.legal-ethics-promise />

    <!-- Section 9: 100% Confidentiality Guarantee -->
    <x-sections.confidentiality-guarantee />

    <!-- Section 10: Tools & Methods -->
    <x-sections.tools-methods />

    <!-- Section 11: 4-Stage Methodology -->
    <x-sections.process-timeline />

    <!-- Section 12: Transparent Engagement Models -->
    <x-sections.engagement-models />

    <!-- Section 13: Split Image Text -->
    <x-sections.split-image-text
        variant="left"
        tag="Clear Evidence"
        title="Clear Evidence You and Your Lawyer Can Rely On"
        description="We collect genuine, unedited photographs, time-stamped video logs, and official records that can be submitted in court with zero dispute."
        image="/images/services/corporate-due-diligence.jpg"
    />

    <!-- Section 14: Mid-Page CTA Banner 2 -->
    <x-sections.cta-banner
        title="Ready to Discuss Your Case with Total Discretion?"
        subtitle="Speak directly with Principal Investigator."
        button-text="Call Direct: +91 9004145251"
        :button-url="'tel:' . config('agency.phone')"
    />

    <!-- Section 15: Who Needs This -->
    <x-sections.who-needs-this />

    <!-- Section 16: What We Investigate -->
    <x-sections.what-we-investigate />

    <!-- Section 17: Visual Fieldcraft Gallery -->
    <x-sections.gallery />

    <!-- Section 18: Explainer Video -->
    <x-sections.video-explainer />

    <!-- Section 19: Verified Client Testimonials -->
    <x-sections.testimonials-slider :testimonials="$testimonials" />

    <!-- Section 20: Proven Case Studies -->
    <x-sections.case-study-cards :case-studies="$caseStudies" />

    <!-- Section 21: Institutional Certifications -->
    <x-sections.certifications />

    <!-- Section 23: Pan-India Operational Bureaus -->
    <x-sections.cities-served />

    <!-- Section 24: FAQ Accordion -->
    <x-sections.faq-accordion :faqs="$faqs" />

    <!-- Section 25: Secure Lead Form -->
    <x-sections.lead-form />

    <!-- Section 26: Final Action CTA -->
    <x-sections.final-cta />
</x-app-layout>
