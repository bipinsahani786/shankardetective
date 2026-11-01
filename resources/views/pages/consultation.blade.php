<x-app-layout
    title="Book a Free Confidential Consultation | Deep Trace Detective"
    description="Book a 100% confidential case consultation with Deep Trace Detective led by Senior Case Director. Case review, legal advisory, and transparent quotes in Indore."
    :breadcrumbs="[['name' => 'Book Free Consultation', 'url' => route('consultation')]]"
    :faqs="$faqs"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[['name' => 'Book Free Consultation', 'url' => route('consultation')]]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        badge="Zero Cost • Zero Obligation • 100% Confidential"
        title="Book Your Confidential <span class='text-blue-700'>Case Consultation</span>"
        subtitle="Uncertainty costs more than truth. Consult with Principal Investigator, explore legal avenues, and understand exact costs with complete peace of mind."
        cta-primary-text="Jump to Intake Form"
        cta-primary-url="#lead-form"
        cta-secondary-text="Call +91 9004145251"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: Direct Lead Form -->
    <x-sections.lead-form
        title="Confidential Case Assessment Request"
        subtitle="Provide the basic context of your matter. Our senior case director will respond discreetly via your preferred contact channel."
    />

    <!-- Section 5: Stats Counter -->
    <x-sections.stats-counter />

    <!-- Section 6: Process Timeline -->
    <x-sections.process-timeline />

    <!-- Section 7: Mid-Page CTA Banner -->
    <x-sections.cta-banner
        title="Need Immediate Guidance on an Active Situation?"
        subtitle="Our emergency response unit operates across Indore, Madhya Pradesh, and major metropolitan corridors."
        button-text="Call Hotline Now"
        :button-url="'tel:' . config('agency.phone')"
        secondary-text="WhatsApp Investigator"
    />

    <!-- Section 8: Confidentiality Guarantee -->
    <x-sections.confidentiality-guarantee />

    <!-- Section 9: Transparent Engagement Models -->
    <x-sections.engagement-models />

    <!-- Section 10: Legal & Ethics Promise -->
    <x-sections.legal-ethics-promise />

    <!-- Section 11: FAQ Accordion -->
    <x-sections.faq-accordion :faqs="$faqs" />

    <!-- Section 12: Final CTA -->
    <x-sections.final-cta />
</x-app-layout>
