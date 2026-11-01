<x-app-layout
    title="Disclaimer & Legal Compliance | Deep Trace Detective Agency"
    description="Statutory legal compliance statement of Deep Trace Detective Agency. Adhering strictly to Indian DPDP Act 2023, Bharatiya Nyaya Sanhita, and ethical investigative codes."
    :breadcrumbs="[['name' => 'Legal Compliance & Disclaimer', 'url' => route('disclaimer-compliance')]]"
>
    <x-sections.breadcrumb :items="[['name' => 'Legal Compliance & Disclaimer', 'url' => route('disclaimer-compliance')]]" />

    <section class="bg-slate-50 py-16 lg:py-20 border-b border-slate-200">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 uppercase tracking-wider">
                Statutory Notice
            </span>
            <h1 class="mt-3 font-serif text-3xl sm:text-4xl font-bold text-slate-900">Disclaimer & Legal Compliance Statement</h1>
            <p class="mt-2 text-xs text-slate-500">Strict Operating Guidelines under the Laws of India &bull; Year 2026 &bull; Deep Trace Detective Agency Indore</p>

            <div class="mt-10 space-y-8 text-xs sm:text-sm text-slate-700 leading-relaxed bg-white p-8 sm:p-12 rounded-3xl border border-slate-200 shadow-sm">
                <!-- Highlight Box -->
                <div class="rounded-2xl border-2 border-amber-300 bg-amber-50 p-6 text-slate-800">
                    <span class="font-bold text-amber-900 text-sm block mb-2">IMPORTANT NOTICE ON GOOGLE ADS & INDIAN STATUTES COMPLIANCE:</span>
                    <p class="text-amber-950">Deep Trace Detective Agency operates with absolute compliance to Indian law and Google Advertising policies. We DO NOT provide Call Detail Records (CDR), illegal phone wiretaps, WhatsApp tracking, mobile malware, or secret vehicle trackers. Any inquiry demanding illegal surveillance or spyware will be rejected immediately.</p>
                </div>

                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">1. Constitutional & Statutory Boundaries</h2>
                    <p>Our operations respect Article 21 of the Constitution of India as interpreted in *K.S. Puttaswamy v. Union of India (2017)*. Verification and observation are conducted exclusively in public spaces, public roads, and commercial premises where there is no reasonable expectation of spatial privacy. Private homes and bedrooms are never entered or filmed.</p>
                </div>

                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">2. Information Technology Act 2000 Compliance</h2>
                    <p>Under Sections 43 and 66 of the Information Technology Act 2000, unauthorized access, extraction, or interception of computer systems, smartphones, or electronic communications is a punishable offense. We do not deploy spyware, keyloggers, or unauthorized trojans. Our cyber forensics division conducts lawful, defense-oriented analysis on client-owned or consented systems only.</p>
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
