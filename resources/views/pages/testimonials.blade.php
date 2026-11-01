<x-app-layout
    title="Client Testimonials & Reviews | Deep Trace Detective Agency"
    description="Read verified client reviews of Deep Trace Detective Agency Indore across matrimonial verification, background checks, corporate due diligence, and legal evidence."
    :breadcrumbs="[['name' => 'Client Testimonials', 'url' => route('testimonials')]]"
    :faqs="$faqs"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[['name' => 'Client Testimonials', 'url' => route('testimonials')]]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        badge="100% Verified Client Feedback"
        title="Client Feedback & <span class='text-blue-600'>Case Testimonials</span>"
        subtitle="Discover how our discreet investigative services brought peace of mind and court-admissible clarity to families and corporate enterprises in Indore and nationwide."
        cta-primary-text="Consult Our Detectives"
        cta-secondary-text="Direct Phone Hotline"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: Stats Counter -->
    <x-sections.stats-counter />

    <!-- Section 5: All Testimonials Grid -->
    <section class="bg-slate-50 py-16 lg:py-24 border-b border-slate-200">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 uppercase tracking-wider">
                    Genuine Client Reviews
                </span>
                <h2 class="mt-3 font-serif text-3xl sm:text-4xl font-bold text-slate-900">
                    Trusted By Families & Corporations
                </h2>
                <p class="mt-2 text-sm text-slate-600">
                    Names are anonymized upon client request to protect personal privacy, in accordance with the DPDP Act 2023.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($testimonials as $t)
                    <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm flex flex-col justify-between hover:shadow-md hover:border-blue-300 transition-all">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-1 text-amber-500">
                                    @for($i = 0; $i < ($t->rating ?? 5); $i++)
                                        <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    @endfor
                                </div>
                                <span class="rounded bg-blue-50 px-2.5 py-0.5 text-[11px] font-semibold text-blue-700 border border-blue-200">
                                    {{ $t->service_rendered }}
                                </span>
                            </div>

                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                                &ldquo;{{ $t->quote }}&rdquo;
                            </p>
                        </div>

                        <div class="mt-6 pt-5 border-t border-slate-100 flex items-center justify-between">
                            <div>
                                <span class="font-bold text-slate-900 text-xs block">{{ $t->client_name }}</span>
                                <span class="text-[11px] text-slate-500">{{ $t->client_role }}</span>
                            </div>
                            <span class="inline-flex items-center gap-1 text-[11px] text-emerald-600 font-semibold">
                                <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                Verified Client
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section 6: Mid-Page CTA Banner -->
    <x-sections.cta-banner
        title="Experience the Same Professional Discretion"
        subtitle="Speak directly with Principal Investigator under total confidentiality."
        button-text="Book Free Consultation"
    />

    <!-- Section 7: Confidentiality Guarantee -->
    <x-sections.confidentiality-guarantee />

    <!-- Section 8: FAQ Accordion -->
    <x-sections.faq-accordion :faqs="$faqs" />

    <!-- Section 9: Lead Form -->
    <x-sections.lead-form />

    <!-- Section 10: Final CTA -->
    <x-sections.final-cta />
</x-app-layout>
