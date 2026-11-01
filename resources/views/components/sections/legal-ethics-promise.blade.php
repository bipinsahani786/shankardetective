@props([
    'title' => 'Our Legal & Ethical Commitment',
    'subtitle' => 'Operating with total fidelity to Indian law, constitutional privacy boundaries, and judicial standards.',
])

<section class="bg-white py-16 lg:py-20 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl border border-slate-200 bg-slate-50 p-8 sm:p-12 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8">
                    <span class="inline-flex items-center gap-2 rounded-full border border-emerald-300 bg-emerald-50 px-3.5 py-1 text-xs font-bold text-emerald-800 mb-4">
                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                        100% Lawful & Court-Admissible
                    </span>
                    <h2 class="font-serif text-2xl sm:text-3xl font-bold text-slate-900">
                        {{ $title }}
                    </h2>
                    <p class="mt-4 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Deep Trace Detective, led by Principal Investigator, operates strictly under the legal parameters established by the Constitution of India, the Digital Personal Data Protection (DPDP) Act 2023, the Bharatiya Nyaya Sanhita (BNS), the Information Technology Act 2000, and the Bharatiya Sakshya Adhiniyam (BSA) 2023.
                    </p>

                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                        <div class="rounded-xl border border-emerald-200 bg-white p-4 shadow-xs">
                            <span class="font-bold text-emerald-700 block mb-1">What We Do Lawfully</span>
                            <p class="text-slate-600">Public space visual observations, civic marriage registrar and court searches, corporate MCA filings, open-source intelligence (OSINT), and certified investigator affidavits under Section 63 BSA.</p>
                        </div>

                        <div class="rounded-xl border border-rose-200 bg-white p-4 shadow-xs">
                            <span class="font-bold text-rose-700 block mb-1">What We Strictly Reject (Policy & Ethics)</span>
                            <p class="text-slate-600">Strictly NO phone wiretapping, NO CDR (Call Detail Record) procurement, NO illegal device hacking or spyware, NO spatial intrusion into private residential quarters.</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 text-center lg:text-right">
                    <div class="inline-block rounded-2xl border border-blue-200 bg-white p-6 text-center shadow-md">
                        <span class="font-serif text-3xl font-bold text-blue-700 block">Sec 63 BSA</span>
                        <span class="text-xs uppercase tracking-wider text-slate-800 font-bold mt-1 block">Certified Evidence</span>
                        <p class="text-[11px] text-slate-500 mt-2">All electronic documentation and photographic evidence formatted for lawful submission in Family, District, and High Courts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
