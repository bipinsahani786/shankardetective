@props([
    'title' => 'Operational Fieldcraft & Forensics Infrastructure',
    'subtitle' => 'An inside look into our technical tools, forensic equipment, and investigation standards.',
])

<section class="bg-slate-50 py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Tools & Infrastructure</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Item 1: Surveillance Optics -->
            <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-3 shadow-card hover:border-blue-500 hover:shadow-card-hover transition-all">
                <div class="relative overflow-hidden rounded-xl aspect-square bg-slate-100">
                    <img src="{{ asset('images/services/surveillance-optics.jpg') }}" alt="4K Optical Telephoto" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-3 left-3 right-3 text-white">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-amber-400 block">Field Surveillance</span>
                        <h4 class="font-serif text-sm font-bold">4K Stand-Off Telephoto Optics</h4>
                        <p class="text-[11px] text-slate-300">Long-range visual recording</p>
                    </div>
                </div>
            </div>

            <!-- Item 2: Cyber Forensics -->
            <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-3 shadow-card hover:border-blue-500 hover:shadow-card-hover transition-all">
                <div class="relative overflow-hidden rounded-xl aspect-square bg-slate-100">
                    <img src="{{ asset('images/services/cyber-forensics.jpg') }}" alt="Digital Forensics Lab" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-3 left-3 right-3 text-white">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-amber-400 block">Digital Evidence</span>
                        <h4 class="font-serif text-sm font-bold">Forensic Verification Lab</h4>
                        <p class="text-[11px] text-slate-300">Write-blocked data analysis</p>
                    </div>
                </div>
            </div>

            <!-- Item 3: TSCM Bug Sweeper -->
            <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-3 shadow-card hover:border-blue-500 hover:shadow-card-hover transition-all">
                <div class="relative overflow-hidden rounded-xl aspect-square bg-slate-100">
                    <img src="{{ asset('images/services/tscm-bug-sweeping.jpg') }}" alt="TSCM Bug Sweepers" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-3 left-3 right-3 text-white">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-amber-400 block">Counter-Surveillance</span>
                        <h4 class="font-serif text-sm font-bold">TSCM Bug Sweeping Gear</h4>
                        <p class="text-[11px] text-slate-300">RF spectrum detection</p>
                    </div>
                </div>
            </div>

            <!-- Item 4: Legal Evidence Dossier -->
            <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-3 shadow-card hover:border-blue-500 hover:shadow-card-hover transition-all">
                <div class="relative overflow-hidden rounded-xl aspect-square bg-slate-100">
                    <img src="{{ asset('images/services/corporate-due-diligence.jpg') }}" alt="Sealed Case Dossier" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-3 left-3 right-3 text-white">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-amber-400 block">Court Documentation</span>
                        <h4 class="font-serif text-sm font-bold">Sealed Case Dossier</h4>
                        <p class="text-[11px] text-slate-300">Court-admissible factual proof</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
