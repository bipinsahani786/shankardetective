<x-app-layout
    title="Disclaimer & Legal Compliance | Deep Trace Detective Agency"
    description="Statutory legal compliance statement of Deep Trace Detective Agency. Adhering strictly to ethical investigative codes and complete client confidentiality."
    :breadcrumbs="[['name' => 'Legal Compliance & Disclaimer', 'url' => route('disclaimer-compliance')]]"
>
    <x-sections.breadcrumb :items="[['name' => 'Legal Compliance & Disclaimer', 'url' => route('disclaimer-compliance')]]" />

    <section class="bg-slate-50 py-16 lg:py-20 border-b border-slate-200">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 uppercase tracking-wider">
                Statutory Notice
            </span>
            <h1 class="mt-3 font-serif text-3xl sm:text-4xl font-bold text-slate-900">Disclaimer & Legal Compliance Statement</h1>
            <p class="mt-2 text-xs text-slate-500">Strict Operating Guidelines under the Laws of India • Year 2026 • Deep Trace Detective Agency Indore</p>

            <div class="mt-10 space-y-8 text-xs sm:text-sm text-slate-700 leading-relaxed bg-white p-8 sm:p-12 rounded-3xl border border-slate-200 shadow-sm">
                <!-- Highlight Box -->
                <div class="rounded-2xl border-2 border-blue-200 bg-blue-50/60 p-6 text-slate-800">
                    <span class="font-bold text-blue-950 text-sm block mb-2">OUR COMMITMENT TO LAWFUL & ETHICAL INVESTIGATION:</span>
                    <p class="text-slate-700 leading-relaxed">Deep Trace Detective Agency operates as a premier confidential private investigation and verification agency. All services—including pre-matrimonial background checks, corporate due diligence, asset tracing, and discrete field observation—are conducted strictly through lawful information gathering, public registries, physical surveillance in public spaces, and open-source intelligence. Our agency maintains the highest ethical standards of client privacy, non-disclosure, and court admissibility.</p>
                </div>

                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">1. Constitutional & Statutory Boundaries</h2>
                    <p>Our operations respect Article 21 of the Constitution of India. Verification and observation are conducted exclusively in public spaces, public thoroughfares, and commercial premises where there is no reasonable expectation of spatial privacy. Private residential quarters are never entered or filmed.</p>
                </div>

                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">2. Digital Ethics & Device Integrity</h2>
                    <p>All verification and digital forensic inquiries are conducted strictly on client-consented systems, corporate assets, or publicly accessible registries. We adhere to ethical industry standards and legitimate investigative methodologies, delivering factual reports with intact chain of custody.</p>
                </div>

                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">3. Section 63 Bharatiya Sakshya Adhiniyam (BSA)</h2>
                    <p>All electronic evidence generated during investigations (photographs, video files, audio interviews) is processed in strict compliance with Section 63 BSA standards, ensuring unbroken chain of custody, unmanipulated metadata, and certified examiner affidavits for courtroom presentation.</p>
                </div>

                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">4. Disclaimer on Outcome Guarantees</h2>
                    <p>Deep Trace Detective Agency acts as an objective, unbiased fact-finder. We report verifiable truth as it exists on the ground. We make no misleading promises of pre-determined outcomes. Truth is our only client.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <x-sections.final-cta />
</x-app-layout>
