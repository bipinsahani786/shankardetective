<x-app-layout
    :title="$cityModel->meta_title ?? ('Best Private Detective Agency in ' . $cityModel->name . ' | Deep Trace Detective')"
    :description="$cityModel->meta_description ?? $cityModel->hero_subtitle"
    :breadcrumbs="[
        ['name' => 'Cities', 'url' => route('home') . '#cities'],
        ['name' => 'Detective Agency in ' . $cityModel->name, 'url' => route('cities.show', $cityModel->slug)]
    ]"
    :faqs="$cityModel->local_faq ?? []"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[
        ['name' => 'City Bureaus', 'url' => route('home') . '#cities'],
        ['name' => 'Detective Agency in ' . $cityModel->name, 'url' => route('cities.show', $cityModel->slug)]
    ]" />

    <!-- Section 2: Localized Hero -->
    <x-sections.hero
        :badge="'100% Confidential Bureau &bull; ' . $cityModel->name . ', ' . $cityModel->state"
        :title="$cityModel->hero_title"
        :subtitle="$cityModel->hero_subtitle"
        cta-primary-text="Free Case Assessment"
        cta-primary-url="#lead-form"
        cta-secondary-text="Call Local Bureau"
        :cta-secondary-url="'tel:' . ($cityModel->phone ?? config('agency.phone'))"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: Stats Counter -->
    <x-sections.stats-counter
        :headline="'Proven Results Across ' . $cityModel->name . ' and ' . $cityModel->state"
        subheadline="Over a decade of successful matrimonial, corporate, and civil fact-finding."
    />

    <!-- Section 5: Local Bureau Overview Intro -->
    <x-sections.intro
        badge="Local Presence"
        :title="'Private Investigators Serving ' . $cityModel->name . ' & Surrounding Districts'"
        :lead-text="$cityModel->hero_subtitle"
        :paragraphs="[$cityModel->local_overview]"
        :points="$cityModel->popular_services ?? []"
    />

    <!-- Section 6: Split Image Text -->
    <x-sections.split-image-text
        variant="right"
        tag="Local Experience"
        :title="'Local Knowledge Across ' . $cityModel->name"
        :description="'Our local operatives know the key residential areas, tech hubs, and commercial zones in ' . $cityModel->name . '. We gather real facts quietly without raising suspicion.'"
        :bullets="$cityModel->local_landmarks ?? []"
    />

    <!-- Section 7: Popular Services in City Grid -->
    <x-sections.services-grid
        :services="$popularServices"
        :title="'Most Requested Services in ' . $cityModel->name"
        :subtitle="'Trusted personal, matrimonial, and business verification services across ' . $cityModel->name . '.'"
        :show-all-link="true"
    />

    <!-- Section 8: Service Highlights -->
    <x-sections.service-highlights />

    <!-- Section 9: Why Choose Us -->
    <x-sections.why-choose-us />

    <!-- Section 10: Process Timeline -->
    <x-sections.process-timeline />

    <!-- Section 11: Mid-Page CTA Banner 1 -->
    <x-sections.cta-banner
        :title="'Need a Confidential Detective in ' . $cityModel->name . '?'"
        subtitle="Speak directly with Principal Investigator. 100% private, free case evaluation."
        button-text="Book Free Consultation"
        button-url="#lead-form"
    />

    <!-- Section 12: Who Needs This -->
    <x-sections.who-needs-this />

    <!-- Section 13: What We Investigate -->
    <x-sections.what-we-investigate />

    <!-- Section 14: Tools & Methods -->
    <x-sections.tools-methods />

    <!-- Section 15: Legal & Ethics Promise -->
    <x-sections.legal-ethics-promise />

    <!-- Section 16: Comparison Table -->
    <x-sections.comparison-table />

    <!-- Section 17: Engagement Models -->
    <x-sections.engagement-models />

    <!-- Section 18: Client Testimonials -->
    <x-sections.testimonials-slider :testimonials="$testimonials" />

    <!-- Section 19: Proven Case Studies -->
    <x-sections.case-study-cards :case-studies="$caseStudies" />

    <!-- Section 20: Certifications -->
    <x-sections.certifications />

    <!-- Section 21: Confidentiality Guarantee -->
    <x-sections.confidentiality-guarantee />

    <!-- Section 22: Visual Gallery -->
    <x-sections.gallery />

    <!-- Section 23: Video Explainer -->
    <x-sections.video-explainer />

    <!-- Section 24: Other Cities Served -->
    <x-sections.cities-served />

    <!-- Section 25: Localized FAQ Accordion -->
    <x-sections.faq-accordion
        :faqs="$cityModel->local_faq ?? []"
        :title="'Frequently Asked Questions: ' . $cityModel->name . ' Bureau'"
        subtitle="Specific answers regarding local operations, court evidence, and meeting arrangements."
    />

    <!-- Section 26: Related Articles -->
    <x-sections.related-blogs :posts="$latestPosts" />

    <!-- Section 27: Lead Form -->
    <x-sections.lead-form
        :title="'Schedule Consultation: ' . $cityModel->name . ' Bureau'"
        :subtitle="'Connect directly with our ' . $cityModel->name . ' case director. 100% confidential under Indian DPDP Act.'"
        :city-preset="$cityModel->name"
    />

    <!-- Section 28: Final Action CTA -->
    <x-sections.final-cta />
</x-app-layout>

