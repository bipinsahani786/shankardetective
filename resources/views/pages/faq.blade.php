<x-app-layout
    title="Investigation FAQs | Deep Trace Detective Agency Indore"
    description="Find transparent answers regarding private investigations in India: confidentiality safeguards, court admissibility of evidence, consultation procedures, and ethical methods."
    :breadcrumbs="[['name' => 'Frequently Asked Questions', 'url' => route('faq')]]"
    :faqs="$faqs"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[['name' => 'Frequently Asked Questions', 'url' => route('faq')]]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        badge="Legal & Operational Clarity"
        title="Frequently Asked <span class='text-blue-600'>Questions</span>"
        subtitle="Transparent answers regarding Indian investigation laws, court admissibility, confidentiality safeguards, and consultation procedures in Indore & nationwide."
        cta-primary-text="Ask Senior Case Director Directly"
        cta-primary-url="#lead-form"
        cta-secondary-text="Call Hotline"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: Category Filter Pills -->
    <div class="bg-slate-100 py-6 border-b border-slate-200">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-2 overflow-x-auto pb-2">
                <a href="{{ route('faq') }}"
                   class="rounded-xl px-4 py-2 text-xs font-semibold transition-colors shrink-0 {{ !request('category') ? 'bg-blue-600 text-white shadow-sm' : 'border border-slate-300 bg-white text-slate-700 hover:border-blue-400' }}">
                    All Categories
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('faq', ['category' => $cat]) }}"
                       class="rounded-xl px-4 py-2 text-xs font-semibold transition-colors shrink-0 {{ request('category') === $cat ? 'bg-blue-600 text-white shadow-sm' : 'border border-slate-300 bg-white text-slate-700 hover:border-blue-400' }}">
                        {{ $cat }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Section 5: Full FAQ Accordion -->
    <x-sections.faq-accordion
        :faqs="$faqs"
        title="Answers From Senior Investigators"
        subtitle="Click any question to view our detailed legal and operational response."
    />

    <!-- Section 6: Mid-Page CTA Banner -->
    <x-sections.cta-banner
        title="Still Wondering About Your Unique Situation?"
        subtitle="Every case presents distinct legal and factual challenges. Let our directors evaluate yours."
        button-text="Speak to Senior Case Director"
    />

    <!-- Section 7: Legal & Ethics Promise -->
    <x-sections.legal-ethics-promise />

    <!-- Section 8: Confidentiality Guarantee -->
    <x-sections.confidentiality-guarantee />

    <!-- Section 9: Lead Form -->
    <x-sections.lead-form
        title="Submit Your Question in Confidence"
        subtitle="Our legal and investigative team will provide a confidential response within 2 hours."
    />

    <!-- Section 10: Final CTA -->
    <x-sections.final-cta />
</x-app-layout>
