<x-app-layout
    :title="$service->meta_title ?? ($service->title . ' | Deep Trace Detective')"
    :description="$service->meta_description ?? $service->short_description"
    :service="$service"
    :breadcrumbs="[
        ['name' => 'Services', 'url' => route('services.index')],
        ['name' => $service->title, 'url' => route('services.show', $service->slug)]
    ]"
    :faqs="$service->faq_items ?? []"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[
        ['name' => 'Services', 'url' => route('services.index')],
        ['name' => $service->title, 'url' => route('services.show', $service->slug)]
    ]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        :badge="'100% Confidential &bull; ' . $service->category"
        :title="$service->hero_headline"
        :subtitle="$service->hero_subheadline"
        cta-primary-text="Book Confidential Case Review"
        cta-primary-url="#lead-form"
        cta-secondary-text="Speak to a Detective"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: Stats Counter -->
    <x-sections.stats-counter />

    <!-- Section 5: Service Overview Intro -->
    <x-sections.intro
        badge="Practice Scope"
        :title="$service->title"
        :lead-text="$service->short_description"
        :paragraphs="[$service->overview]"
        :points="$service->deliverables ?? []"
    />

    <!-- Section 6: Split Image Text -->
    <x-sections.split-image-text
        variant="right"
        tag="Evidence Standard"
        title="Unbiased Verification & Verifiable Facts"
        description="Our investigators collect admissible documentary and visual proof. We never rely on hearsay or speculation—every finding is cross-verified and supported by physical or electronic exhibits."
        :bullets="$service->deliverables ?? []"
    />

    <!-- Section 7: Who Needs This Service -->
    <x-sections.who-needs-this
        title="Who Needs {{ $service->title }}?"
        subtitle="Recognizing the critical warning signs and situations that require professional fact-finding."
        :items="$service->why_needed ?? []"
    />

    <!-- Section 8: What We Investigate -->
    <x-sections.what-we-investigate
        title="Parameters Investigated in {{ $service->title }}"
        subtitle="Comprehensive verification checklist examined during every assignment."
        :items="$service->investigation_scope ?? []"
    />

    <!-- Section 9: Mid-Page CTA Banner 1 -->
    <x-sections.cta-banner
        :title="'Need Confidential Guidance Regarding ' . $service->title . '?'"
        subtitle="Speak directly with our senior case director. Your identity is 100% protected under our binding NDA."
        button-text="Request Confidential Consultation"
        button-url="#lead-form"
    />

    <!-- Section 10: Tools & Methods -->
    <x-sections.tools-methods
        title="Methods & Tools Used for {{ $service->title }}"
        subtitle="Employing legitimate intelligence, forensic tools, and public records."
        :tools="$service->methods_tools ?? []"
    />

    <!-- Section 11: Process Timeline -->
    <x-sections.process-timeline
        title="How We Execute Your {{ $service->title }}"
        subtitle="Our 4-stage systematic protocol from case intake to final sealed delivery."
        :steps="$service->process_steps ?? null"
    />

    <!-- Section 12: Legal & Ethics Promise -->
    <x-sections.legal-ethics-promise />

    <!-- Section 13: Comparison Table -->
    <x-sections.comparison-table />

    <!-- Section 14: Engagement Models -->
    <x-sections.engagement-models />

    <!-- Section 15: Why Choose Us -->
    <x-sections.why-choose-us />

    <!-- Section 16: Mid-Page CTA Banner 2 -->
    <x-sections.cta-banner
        title="24/7 Rapid Response Operatives Available"
        subtitle="Have an emergency or urgent court deadline? Contact our rapid deployment unit."
        button-text="Call Hotline Now"
        :button-url="'tel:' . config('agency.phone')"
        secondary-text="WhatsApp Case Desk"
    />

    <!-- Section 17: Client Testimonials -->
    <x-sections.testimonials-slider :testimonials="$testimonials" />

    <!-- Section 18: Related Case Studies -->
    <x-sections.case-study-cards :case-studies="$caseStudies" />

    <!-- Section 19: Certifications -->
    <x-sections.certifications />

    <!-- Section 20: 100% Confidentiality Guarantee -->
    <x-sections.confidentiality-guarantee />

    <!-- Section 21: Visual Gallery -->
    <x-sections.gallery />

    <!-- Section 22: Video Explainer -->
    <x-sections.video-explainer />

    <!-- Section 23: Cities We Serve -->
    <x-sections.cities-served />

    <!-- Section 24: FAQ Accordion -->
    <x-sections.faq-accordion
        :faqs="$service->faq_items ?? []"
        title="Frequently Asked Questions: {{ $service->title }}"
        subtitle="Important details on duration, deliverables, legality, and reporting."
    />

    <!-- Section 25: Related Services Grid -->
    <x-sections.services-grid
        :services="$relatedServices"
        title="Related Investigation Practices"
        subtitle="Clients seeking {{ $service->title }} frequently require these complementary capabilities."
        :show-all-link="true"
    />

    <!-- Section 26: Related Articles -->
    <x-sections.related-blogs :posts="$latestPosts" />

    <!-- Section 27: Lead Form -->
    <x-sections.lead-form
        :title="'Inquire About ' . $service->title"
        subtitle="Share the parameters of your inquiry. Our case director will respond within 2 hours in strict confidence."
        :service-preset="$service->title"
    />

    <!-- Section 28: Final Action CTA -->
    <x-sections.final-cta />
</x-app-layout>

