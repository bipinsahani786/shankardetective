<x-app-layout
    title="Real-World Case Studies & Verified Results | Deep Trace Detective"
    description="Explore anonymized case studies solved by Deep Trace Detective led by Senior Case Director: matrimonial verification, corporate cargo fraud, and asset discovery."
    :breadcrumbs="[['name' => 'Case Studies', 'url' => route('case-studies.index')]]"
    :faqs="$faqs"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[['name' => 'Case Studies', 'url' => route('case-studies.index')]]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        badge="Redacted Real-World Operations &bull; 100% Verified Verdicts"
        title="Proven <span class='text-blue-700'>Case Studies</span>"
        subtitle="Detailed reviews of complex personal, corporate, and digital investigations resolved with court-admissible electronic evidence across India. Directed by Senior Case Director."
        cta-primary-text="Explore Case Directory"
        cta-primary-url="#cases"
        cta-secondary-text="Call +91 9004145251"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: Stats Counter -->
    <x-sections.stats-counter />

    <!-- Section 5: All Case Studies Grid -->
    <div id="cases">
        <x-sections.case-study-cards
            :case-studies="$caseStudies"
            title="All Investigated Cases"
            subtitle="Click on any case dossier below to examine client challenges, field methodology, and verified legal outcomes."
            :limit="10"
        />
    </div>

    <!-- Section 6: Intro Narrative -->
    <x-sections.intro
        badge="Methodological Rigor"
        title="Every Case is Handled with Military Precision"
        lead-text="In our line of work, assumptions and speculation have zero legal value. Our findings are grounded in undeniable evidence."
    />

    <!-- Section 7: Split Image Text -->
    <x-sections.split-image-text
        variant="right"
        tag="Judicial Standard"
        title="Evidence Admitted Without Objection in Court"
        description="Our case dossiers are formatted to comply with Section 63 BSA standards, enabling advocates to enter photographs and video logs into evidence smoothly."
    />

    <!-- Section 8: Why Choose Us -->
    <x-sections.why-choose-us />

    <!-- Section 9: 4-Stage Process Timeline -->
    <x-sections.process-timeline />

    <!-- Section 10: Mid-Page CTA Banner 1 -->
    <x-sections.cta-banner
        title="Facing a Similar Dispute or Suspicion?"
        subtitle="Speak with our case director today. We will assess your facts and formulate an effective strategy."
        button-text="Request Confidential Evaluation"
    />

    <!-- Section 11: Who Needs This -->
    <x-sections.who-needs-this />

    <!-- Section 12: What We Investigate -->
    <x-sections.what-we-investigate />

    <!-- Section 13: Tools & Methods -->
    <x-sections.tools-methods />

    <!-- Section 14: Legal & Ethics Promise -->
    <x-sections.legal-ethics-promise />

    <!-- Section 15: Comparison Table -->
    <x-sections.comparison-table />

    <!-- Section 16: Engagement Models -->
    <x-sections.engagement-models />

    <!-- Section 17: Testimonials Slider -->
    <x-sections.testimonials-slider :testimonials="$testimonials" />

    <!-- Section 18: Certifications -->
    <x-sections.certifications />

    <!-- Section 19: Confidentiality Guarantee -->
    <x-sections.confidentiality-guarantee />

    <!-- Section 20: Visual Gallery -->
    <x-sections.gallery />

    <!-- Section 21: Video Explainer -->
    <x-sections.video-explainer />

    <!-- Section 22: Cities We Serve -->
    <x-sections.cities-served />

    <!-- Section 23: FAQ Accordion -->
    <x-sections.faq-accordion :faqs="$faqs" />

    <!-- Section 24: Lead Form -->
    <x-sections.lead-form />

    <!-- Section 25: Final Action CTA -->
    <x-sections.final-cta />
</x-app-layout>

