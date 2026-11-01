<x-app-layout
    title="Privacy Policy | Deep Trace Detective Agency"
    description="Privacy Policy of Deep Trace Detective Agency. Adhering strictly to client data encryption standards, non-disclosure protocols, and complete anonymity."
    :breadcrumbs="[['name' => 'Privacy Policy', 'url' => route('privacy-policy')]]"
>
    <x-sections.breadcrumb :items="[['name' => 'Privacy Policy', 'url' => route('privacy-policy')]]" />

    <section class="bg-slate-50 py-16 lg:py-20 border-b border-slate-200">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 uppercase tracking-wider">
                Legal Document
            </span>
            <h1 class="mt-3 font-serif text-3xl sm:text-4xl font-bold text-slate-900">Privacy Policy & Client Data Protection</h1>
            <p class="mt-2 text-xs text-slate-500">Effective Date: November 1, 2024 • Last Revised: 2026 • Deep Trace Detective Agency</p>

            <div class="mt-10 space-y-8 text-xs sm:text-sm text-slate-700 leading-relaxed bg-white p-8 sm:p-12 rounded-3xl border border-slate-200 shadow-sm">
                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">1. Commitment to Absolute Privacy</h2>
                    <p>Deep Trace Detective Agency ("Deep Trace Detective", "we", "us", or "our"), directed by Senior Case Director, regards client privacy and confidentiality as the foundational tenet of our enterprise. This Privacy Policy outlines our strict protocols regarding the collection, processing, encryption, and secure disposal of personal data in accordance with the Information Technology Act 2000 and ethical investigation guidelines.</p>
                </div>

                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">2. Information Collected Confidentially</h2>
                    <p>When you contact us for an inquiry, consultation, or retain our investigation services, we collect only necessary data including: your contact name or alias, phone number, email address, city, and background context provided voluntarily. We assign an encrypted, pseudonymized case code to all inquiries so your true identity is never exposed to field operatives.</p>
                </div>

                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">3. Non-Disclosure & Anti-Leak Policy</h2>
                    <p>All consultations are protected under binding Non-Disclosure Agreements (NDAs). We strictly never sell, rent, disclose, or trade client information to any commercial advertisers or unauthorized third parties. Case details are shared strictly on a need-to-know basis among authorized case directors.</p>
                </div>

                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">4. Cryptographic Storage & Post-Case Purging</h2>
                    <p>All investigation media, electronic photographs, and report drafts are stored on air-gapped, encrypted servers utilizing AES-256 standards. Upon completion of the investigation and confirmed receipt of the final dossier by the client, all intermediate operational recordings and draft files are permanently erased and overwritten according to Department of Defense (DoD) sanitization standards.</p>
                </div>

                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">5. Data Protection Officer (DPO) Contact</h2>
                    <p>For any privacy queries, grievance redressal, or data erasure requests, please contact our Data Protection Officer at: <a href="mailto:info@deeptracedetective.com" class="text-blue-600 underline font-medium">info@deeptracedetective.com</a> or via postal correspondence to our registered headquarters at <strong>6, Vijay Nagar, Near Domino's, Indore, Madhya Pradesh - 452010</strong>.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <x-sections.final-cta />
</x-app-layout>
