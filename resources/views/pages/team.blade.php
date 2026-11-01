<x-app-layout
    title="Our Executive Detective Team | Deep Trace Detective Agency"
    description="Meet our investigative leadership led by Senior Case Director: certified cyber forensic analysts, senior legal advisors, and field operatives in Indore."
    :breadcrumbs="[['name' => 'Our Investigation Team', 'url' => route('team')]]"
    :faqs="$faqs"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[['name' => 'Our Investigation Team', 'url' => route('team')]]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        badge="Elite Intelligence & Forensic Directorate"
        title="Our Executive <span class='text-blue-600'>Investigative Team</span>"
        subtitle="Directed by Senior Case Director, seasoned intelligence specialists, certified cyber forensic examiners, and High Court legal advisors."
        cta-primary-text="Consult Our Directorate"
        cta-secondary-text="Direct Phone Helpline"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: Full Team Grid -->
    <x-sections.team-grid
        :members="$teamMembers"
        title="Operations Directorate & Senior Advisors"
        subtitle="Our leadership team sets the tactical and ethical benchmarks for every operation nationwide."
    />

    <!-- Section 5: Stats Counter -->
    <x-sections.stats-counter />

    <!-- Section 6: Certifications -->
    <x-sections.certifications />

    <!-- Section 7: Mid-Page CTA Banner -->
    <x-sections.cta-banner
        title="Consult with Senior Case Directorate"
        subtitle="Every briefing is handled directly by senior leadership under ironclad non-disclosure protection."
        button-text="Book Free Director Consultation"
    />

    <!-- Section 8: Legal & Ethics Promise -->
    <x-sections.legal-ethics-promise />

    <!-- Section 9: 100% Confidentiality Guarantee -->
    <x-sections.confidentiality-guarantee />

    <!-- Section 10: FAQ Accordion -->
    <x-sections.faq-accordion :faqs="$faqs" />

    <!-- Section 11: Lead Form -->
    <x-sections.lead-form />

    <!-- Section 12: Final CTA -->
    <x-sections.final-cta />
</x-app-layout>
