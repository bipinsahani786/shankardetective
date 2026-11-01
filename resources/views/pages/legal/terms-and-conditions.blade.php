<x-app-layout
    title="Terms & Conditions | Deep Trace Detective Agency"
    description="Terms and conditions governing investigation mandates, confidentiality agreements, and client engagements with Deep Trace Detective Agency."
    :breadcrumbs="[['name' => 'Terms and Conditions', 'url' => route('terms-and-conditions')]]"
>
    <x-sections.breadcrumb :items="[['name' => 'Terms and Conditions', 'url' => route('terms-and-conditions')]]" />

    <section class="bg-slate-50 py-16 lg:py-20 border-b border-slate-200">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 uppercase tracking-wider">
                Legal Engagement Framework
            </span>
            <h1 class="mt-3 font-serif text-3xl sm:text-4xl font-bold text-slate-900">Terms & Conditions of Engagement</h1>
            <p class="mt-2 text-xs text-slate-500">Last Revised: 2026 &bull; Governing Jurisdiction: Indore, Madhya Pradesh, India &bull; Deep Trace Detective Agency</p>

            <div class="mt-10 space-y-8 text-xs sm:text-sm text-slate-700 leading-relaxed bg-white p-8 sm:p-12 rounded-3xl border border-slate-200 shadow-sm">
                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">1. Legitimate Purpose Mandate</h2>
                    <p>Deep Trace Detective Agency accepts investigative assignments strictly for lawful, legitimate purposes—including family verification, pre-matrimonial background verification, civil/matrimonial dispute fact-finding, fraud prevention, corporate partner due diligence, and litigation evidence. We will immediately refuse and terminate any request intended for criminal extortion, unlawful stalking, harassment, or malicious harm.</p>
                </div>

                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">2. Strict Refusal of Unlawful Activities</h2>
                    <p>In accordance with Indian criminal statutes (Bharatiya Nyaya Sanhita, Indian Telegraph Act, Information Technology Act), Deep Trace Detective Agency strictly will NOT undertake: unauthorized wiretapping, illegal phone call recording, procuring Call Detail Records (CDR) without judicial warrants, or hacking private electronic devices or chat accounts. All evidence is obtained through lawful public observation, open-source intelligence, and statutory registry audits.</p>
                </div>

                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">3. Fees & Payment Terms</h2>
                    <p>Investigation fees are determined based on operational scope, field operative requirements, and duration. A formal, itemized mandate agreement is executed prior to deployment. Advance retainer fees cover logistics, field fuel, and operational costs. Fees are non-refundable once field deployment has commenced.</p>
                </div>

                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">4. Evidence Integrity & Court Testimony</h2>
                    <p>We deliver objective, factual reports documenting real-world reality. We never manufacture, doctor, or manipulate evidence to satisfy pre-determined outcomes. Upon counsel request, our investigators can provide supporting affidavits under Section 63 BSA.</p>
                </div>

                <div>
                    <h2 class="font-serif text-lg font-bold text-slate-900 mb-2">5. Jurisdiction & Dispute Resolution</h2>
                    <p>All engagement contracts and services are governed by the laws of India. Any legal disputes arising out of client mandates shall be subject to the exclusive jurisdiction of the competent courts in Indore, Madhya Pradesh.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <x-sections.final-cta />
</x-app-layout>
