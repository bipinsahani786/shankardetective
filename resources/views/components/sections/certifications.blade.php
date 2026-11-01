@props([
    'title' => 'Professional Credentials & Standards',
    'subtitle' => 'Adhering to recognized institutional standards in digital evidence, forensic integrity, and tradecraft.',
])

<section class="bg-slate-50 py-16 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Institutional Standards</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-3xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Cert 1 -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-xs hover:border-blue-500 transition-all">
                <span class="font-serif text-2xl font-bold text-blue-700 block mb-1">ISO 27037</span>
                <span class="text-xs font-bold text-slate-800 block">Digital Evidence Standards</span>
                <p class="text-[11px] text-slate-500 mt-1">Chain of custody preservation</p>
            </div>

            <!-- Cert 2 -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-xs hover:border-blue-500 transition-all">
                <span class="font-serif text-2xl font-bold text-blue-700 block mb-1">Cyber Forensics</span>
                <span class="text-xs font-bold text-slate-800 block">Forensic Analysts</span>
                <p class="text-[11px] text-slate-500 mt-1">Electronic data integrity & audits</p>
            </div>

            <!-- Cert 3 -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-xs hover:border-blue-500 transition-all">
                <span class="font-serif text-2xl font-bold text-emerald-700 block mb-1">Sec 63 BSA</span>
                <span class="text-xs font-bold text-slate-800 block">Courtroom Admissibility</span>
                <p class="text-[11px] text-slate-500 mt-1">Electronic certificate verification</p>
            </div>

            <!-- Cert 4 -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-xs hover:border-blue-500 transition-all">
                <span class="font-serif text-2xl font-bold text-amber-600 block mb-1">Registered</span>
                <span class="text-xs font-bold text-slate-800 block">Licensed Indian Agency</span>
                <p class="text-[11px] text-slate-500 mt-1">Central Bureau in Indore, M.P.</p>
            </div>
        </div>
    </div>
</section>
