<x-app-layout
    :title="$case->meta_title ?? ($case->title . ' | Deep Trace Detective Case Study')"
    :description="$case->meta_description ?? Str::limit($case->client_challenge, 150)"
    :breadcrumbs="[
        ['name' => 'Case Studies', 'url' => route('case-studies.index')],
        ['name' => Str::limit($case->title, 35), 'url' => route('case-studies.show', $case->slug)]
    ]"
    :faqs="$faqs"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[
        ['name' => 'Case Studies', 'url' => route('case-studies.index')],
        ['name' => Str::limit($case->title, 35), 'url' => route('case-studies.show', $case->slug)]
    ]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        :badge="'Redacted Case File • ' . $case->service_category . ' • ' . $case->timeline_days . ' Days Ops'"
        :title="$case->title"
        :subtitle="'A detailed case analysis of our tactical investigative methodology and verified factual outcome.'"
        cta-primary-text="Inquire About Similar Case"
        cta-primary-url="#lead-form"
        cta-secondary-text="Direct Phone Helpline"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: Stats Counter -->
    <x-sections.stats-counter />

    <!-- Section 5: Case Narrative Breakdown -->
    <section class="bg-slate-50 py-16 lg:py-20 border-b border-slate-200">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl border border-slate-200 bg-white p-8 sm:p-12 shadow-card space-y-10">
                <!-- Challenge -->
                <div class="space-y-3">
                    <div class="flex items-center gap-2">
                        <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-rose-50 text-rose-700 font-bold text-xs border border-rose-200">01</span>
                        <h2 class="font-serif text-xl sm:text-2xl font-bold text-slate-900">The Client Challenge</h2>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed pl-9">
                        {{ $case->client_challenge }}
                    </p>
                </div>

                <!-- Approach -->
                <div class="space-y-3 border-t border-slate-100 pt-8">
                    <div class="flex items-center gap-2">
                        <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-blue-50 text-blue-700 font-bold text-xs border border-blue-200">02</span>
                        <h2 class="font-serif text-xl sm:text-2xl font-bold text-slate-900">Tactical Investigation Approach</h2>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed pl-9">
                        {{ $case->investigation_approach }}
                    </p>
                </div>

                <!-- Outcome Verdict -->
                <div class="space-y-3 border-t border-slate-100 pt-8">
                    <div class="flex items-center gap-2">
                        <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-emerald-50 text-emerald-700 font-bold text-xs border border-emerald-200">03</span>
                        <h2 class="font-serif text-xl sm:text-2xl font-bold text-slate-900">Outcome & Verified Verdict</h2>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed pl-9">
                        {{ $case->outcome_verdict }}
                    </p>
                </div>

                <!-- Meta Box: Timeline & Key Evidence -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 border-t border-slate-100 pt-8 pl-9">
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-blue-700 block mb-1">Key Evidence Procured</span>
                        <span class="text-xs text-slate-800 font-medium">{{ $case->key_evidence_type }}</span>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-blue-700 block mb-1">Investigation Timeline</span>
                        <span class="text-xs text-slate-800 font-medium">{{ $case->timeline_days }} Days Total Turnaround</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: Split Image Text -->
    <x-sections.split-image-text
        variant="right"
        tag="Verified Precedent"
        title="Unshakeable Evidence in High-Stakes Legal Contexts"
        description="Our case files have formed the cornerstone of successful litigation outcomes across Indian Family Courts, High Courts, and commercial tribunals."
    />

    <!-- Section 7: Tools & Methods -->
    <x-sections.tools-methods />

    <!-- Section 8: Process Timeline -->
    <x-sections.process-timeline />

    <!-- Section 9: Mid-Page CTA Banner 1 -->
    <x-sections.cta-banner
        :title="'Facing a Similar Situation to ' . $case->title . '?'"
        subtitle="Speak directly with our senior case director. Strict written NDA protection."
        button-text="Request Free Case Assessment"
        button-url="#lead-form"
    />

    <!-- Section 10: Legal & Ethics Promise -->
    <x-sections.legal-ethics-promise />

    <!-- Section 11: Comparison Table -->
    <x-sections.comparison-table />

    <!-- Section 12: Why Choose Us -->
    <x-sections.why-choose-us />

    <!-- Section 13: Confidentiality Guarantee -->
    <x-sections.confidentiality-guarantee />

    <!-- Section 14: Engagement Models -->
    <x-sections.engagement-models />

    <!-- Section 15: Certifications -->
    <x-sections.certifications />

    <!-- Section 16: Other Case Studies -->
    <x-sections.case-study-cards
        :case-studies="$relatedCases"
        title="More Solved Case Files"
        subtitle="Review additional investigations handled by our operatives."
    />

    <!-- Section 17: Related Services Grid -->
    <x-sections.services-grid
        :services="$relatedServices"
        title="Services Related to This Case"
        subtitle="Explore the capabilities utilized during this operation."
    />

    <!-- Section 18: Visual Gallery -->
    <x-sections.gallery />

    <!-- Section 19: Video Explainer -->
    <x-sections.video-explainer />

    <!-- Section 20: Cities Served -->
    <x-sections.cities-served />

    <!-- Section 21: FAQ Accordion -->
    <x-sections.faq-accordion :faqs="$faqs" />

    <!-- Section 22: Lead Form -->
    <x-sections.lead-form
        :title="'Inquire Under ' . $case->service_category"
        subtitle="Submit your inquiry in confidence. Our case director will respond within 2 hours."
        :service-preset="$case->service_category"
    />

    <!-- Section 23: Final Action CTA -->
    <x-sections.final-cta />
</x-app-layout>

