@props([
    'title' => 'Our Confidentiality & Investigation Principles',
    'subtitle' => 'Gathering clear, verified facts with total discretion, professional integrity, and respect for client privacy.',
])

<section class="bg-white py-16 lg:py-20 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl border border-slate-200 bg-slate-50 p-8 sm:p-12 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8">
                    <span class="inline-flex items-center gap-2 rounded-full border border-emerald-300 bg-emerald-50 px-3.5 py-1 text-xs font-bold text-emerald-800 mb-4">
                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                        100% Confidential & Court-Admissible
                    </span>
                    <h2 class="font-serif text-2xl sm:text-3xl font-bold text-slate-900">
                        {{ $title }}
                    </h2>
                    <p class="mt-4 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Deep Trace Detective operates with strict integrity, professional discipline, and client confidentiality. Every case is supervised directly by Senior Case Directorate to ensure all gathered facts, photographs, and records are authentic, unmanipulated, and dependable for your personal decisions.
                    </p>

                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                        <div class="rounded-xl border border-blue-200 bg-white p-4 shadow-xs">
                            <span class="font-bold text-blue-700 block mb-1">Ground Observation & Activity Logs</span>
                            <p class="text-slate-600">Discrete visual observation in public areas, time-stamped photographs, daily activity reports, and verification of routines without alarming the subject.</p>
                        </div>

                        <div class="rounded-xl border border-emerald-200 bg-white p-4 shadow-xs">
                            <span class="font-bold text-emerald-700 block mb-1">Public Records & Fact Verification</span>
                            <p class="text-slate-600">Official marriage registry audits, corporate MCA director filings, property ownership checks, and educational credential verification.</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 text-center lg:text-right">
                    <div class="inline-block rounded-2xl border border-blue-200 bg-white p-6 text-center shadow-md">
                        <span class="font-serif text-3xl font-bold text-blue-700 block">Court-Ready</span>
                        <span class="text-xs uppercase tracking-wider text-slate-800 font-bold mt-1 block">Verified Evidence</span>
                        <p class="text-[11px] text-slate-500 mt-2">All electronic documentation and photographic evidence formatted clearly for lawful submission and family clarity.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
