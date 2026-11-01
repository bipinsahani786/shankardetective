<x-app-layout
    title="24 Confidential Investigation Services | Deep Trace Detective"
    description="Browse all 24 specialized investigation services offered by Deep Trace Detective led by Senior Case Director. Matrimonial verification, corporate due diligence & forensics."
    :breadcrumbs="[['name' => 'All Services', 'url' => route('services.index')]]"
    :faqs="$faqs"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[['name' => 'All Services', 'url' => route('services.index')]]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        badge="24 Specialized Practices • Pan-India Deployment"
        title="Comprehensive <span class='text-blue-700'>Investigation Services</span>"
        subtitle="Institutional intelligence, discreet verification, cyber forensics, and corporate due diligence tailored for personal and commercial matters. Led by Senior Case Director."
        cta-primary-text="Free Case Evaluation"
        cta-secondary-text="Call +91 9004145251"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: Stats Counter -->
    <x-sections.stats-counter />

    <!-- Section 5: Practice Highlights -->
    <x-sections.service-highlights />

    <!-- Section 6: Category Filter & Search Bar -->
    <div class="bg-white py-6 border-b border-slate-200">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <!-- Pills -->
                <div class="flex items-center gap-2 overflow-x-auto pb-2 w-full md:w-auto">
                    <a href="{{ route('services.index') }}"
                       class="rounded-xl px-4 py-2 text-xs font-bold shrink-0 transition-colors {{ !request('category') ? 'bg-blue-700 text-white shadow-sm' : 'border border-slate-300 bg-white text-slate-700 hover:border-blue-600 hover:text-blue-700' }}">
                        All 24 Practices
                    </a>
                    @foreach($categories as $cat)
                        <a href="{{ route('services.index', ['category' => $cat]) }}"
                           class="rounded-xl px-4 py-2 text-xs font-bold shrink-0 transition-colors {{ request('category') === $cat ? 'bg-blue-700 text-white shadow-sm' : 'border border-slate-300 bg-white text-slate-700 hover:border-blue-600 hover:text-blue-700' }}">
                            {{ $cat }}
                        </a>
                    @endforeach
                </div>

                <!-- Search Input -->
                <form action="{{ route('services.index') }}" method="GET" class="w-full md:w-72">
                    <div class="relative">
                        <input type="text" name="search" value="{{ request('search') }}"
                               placeholder="Search services..."
                               class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2 text-xs text-slate-900 placeholder-slate-400 focus:border-blue-600 outline-none">
                        <button type="submit" class="absolute right-3 top-2 text-slate-500 hover:text-blue-700">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Section 7: Services Grid -->
    <x-sections.services-grid
        :services="$services"
        title="Active Capabilities"
        subtitle="Every inquiry is backed by seasoned operatives, cutting-edge forensics, and legally compliant reporting."
        :show-all-link="false"
    />

    <!-- Section 8: Mid-Page CTA Banner 1 -->
    <x-sections.cta-banner
        title="Unsure Which Investigation Service Fits Your Situation?"
        subtitle="Our senior case director will analyze your situation and outline the most effective, legal approach."
        button-text="Request Diagnostic Consultation"
    />

    <!-- Section 9: Why Choose Us -->
    <x-sections.why-choose-us />

    <!-- Section 10: 4-Stage Methodology -->
    <x-sections.process-timeline />

    <!-- Section 11: Institutional Comparison Table -->
    <x-sections.comparison-table />

    <!-- Section 12: Split Image Text -->
    <x-sections.split-image-text
        variant="right"
        tag="Discreet Fieldwork"
        title="Complete Discretion From Start to Finish"
        description="Our investigators work quietly and professionally in public spaces. The person or entity being verified will never know an inquiry is happening, keeping you protected and your inquiry 100% confidential."
        image="/images/services/surveillance-optics.jpg"
    />

    <!-- Section 13: Tools & Methodology -->
    <x-sections.tools-methods />

    <!-- Section 14: Legal & Ethics Promise -->
    <x-sections.legal-ethics-promise />

    <!-- Section 15: 100% Confidentiality Guarantee -->
    <x-sections.confidentiality-guarantee />

    <!-- Section 16: Transparent Engagement Models -->
    <x-sections.engagement-models />

    <!-- Section 17: Mid-Page CTA Banner 2 -->
    <x-sections.cta-banner
        title="Operatives Deployed Nationwide"
        subtitle="Headquartered in Indore with operational capabilities across Madhya Pradesh and major metros."
        button-text="Call Direct: +91 9004145251"
        :button-url="'tel:' . config('agency.phone')"
    />

    <!-- Section 18: Client Testimonials -->
    <x-sections.testimonials-slider :testimonials="$testimonials" />

    <!-- Section 19: Proven Case Studies -->
    <x-sections.case-study-cards :case-studies="$caseStudies" />

    <!-- Section 20: Institutional Certifications -->
    <x-sections.certifications />

    <!-- Section 22: Visual Fieldcraft Gallery -->
    <x-sections.gallery />

    <!-- Section 23: FAQ Accordion -->
    <x-sections.faq-accordion :faqs="$faqs" />

    <!-- Section 24: Secure Lead Capture Form -->
    <x-sections.lead-form />

    <!-- Section 25: Final Action CTA -->
    <x-sections.final-cta />
</x-app-layout>
