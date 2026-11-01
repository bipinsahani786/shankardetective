@props([
    'title' => 'Specialized Practice Divisions',
    'subtitle' => 'Four core intelligence divisions organized to solve distinctive personal and commercial challenges.',
])

<section class="bg-slate-50 py-16 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 reveal">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Practice Divisions</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-3xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Cluster 1 -->
            <a href="{{ route('services.index', ['category' => 'Personal & Matrimonial']) }}"
               class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-card hover:border-blue-500 hover:shadow-card-hover hover-lift transition-all flex flex-col justify-between reveal-scale stagger-1">
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-700 mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </span>
                    <h3 class="font-serif text-base font-bold text-slate-900 group-hover:text-blue-700 transition-colors">Background Verification</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Pre/post matrimonial checks, family verification, credential audits, and character references handled with empathy and discretion.
                    </p>
                </div>
                <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] font-bold text-blue-700">
                    <span>6 Verified Practices</span>
                    <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                </div>
            </a>

            <!-- Cluster 2 -->
            <a href="{{ route('services.index', ['category' => 'Corporate & Commercial']) }}"
               class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-card hover:border-blue-500 hover:shadow-card-hover hover-lift transition-all flex flex-col justify-between reveal-scale stagger-2">
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-700 mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </span>
                    <h3 class="font-serif text-base font-bold text-slate-900 group-hover:text-blue-700 transition-colors">Corporate Due Diligence</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Executive background screening, partner verification, internal fraud probes, IP enforcement, and supply chain integrity audits.
                    </p>
                </div>
                <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] font-bold text-blue-700">
                    <span>7 Enterprise Solutions</span>
                    <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                </div>
            </a>

            <!-- Cluster 3 -->
            <a href="{{ route('services.index', ['category' => 'Legal & Field Support']) }}"
               class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-card hover:border-blue-500 hover:shadow-card-hover hover-lift transition-all flex flex-col justify-between reveal-scale stagger-3">
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-700 mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                    </span>
                    <h3 class="font-serif text-base font-bold text-slate-900 group-hover:text-blue-700 transition-colors">Legal & Fraud Probes</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Land title verification, asset tracing, insurance claim verification, litigation support, and courtroom witness location.
                    </p>
                </div>
                <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] font-bold text-blue-700">
                    <span>6 Courtroom Practices</span>
                    <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                </div>
            </a>

            <!-- Cluster 4 -->
            <a href="{{ route('services.index', ['category' => 'Financial & Forensic']) }}"
               class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-card hover:border-blue-500 hover:shadow-card-hover hover-lift transition-all flex flex-col justify-between reveal-scale stagger-4">
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-700 mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                    </span>
                    <h3 class="font-serif text-base font-bold text-slate-900 group-hover:text-blue-700 transition-colors">Forensics & Cyber Audit</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Technical bug sweeping (TSCM), corporate eavesdropping detection, cyber risk audits, and forensic data recovery under ISO 27037.
                    </p>
                </div>
                <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] font-bold text-blue-700">
                    <span>5 Technical Forensics</span>
                    <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                </div>
            </a>
        </div>
    </div>
</section>
