@props([
    'title' => 'Anonymized Case Dossiers & Investigation Outcomes',
    'subtitle' => 'Real-world challenges solved through disciplined field intelligence and forensic evidence.',
    'limit' => 3,
    'caseStudies' => null,
])

@php
    $cases = $caseStudies ?? \App\Models\CaseStudy::featured()->take($limit)->get();
@endphp

<section class="bg-white py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 reveal">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Track Record of Success</span>
                <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">{{ $title }}</h2>
                <p class="mt-2 text-sm text-slate-600 max-w-2xl">{{ $subtitle }}</p>
            </div>
            <div class="mt-4 md:mt-0">
                <a href="{{ route('case-studies.index') }}" class="text-xs font-bold uppercase tracking-wider text-blue-700 hover:text-blue-800 flex items-center gap-1">
                    <span>View All Case Studies</span>
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($cases as $case)
                <div class="group relative rounded-3xl border border-slate-200 bg-slate-50/70 p-7 shadow-xs hover:bg-white hover:border-blue-500 hover:shadow-card-hover hover-lift transition-all flex flex-col justify-between reveal stagger-{{ $loop->iteration }} cursor-pointer">
                    <!-- Stretched Link -->
                    <a href="{{ route('case-studies.show', $case->slug) }}" class="absolute inset-0 z-10" aria-label="{{ $case->title }}"></a>

                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="rounded bg-blue-50 px-2.5 py-0.5 text-[10px] font-bold uppercase text-blue-800 border border-blue-200">
                                {{ $case->service_category }}
                            </span>
                            <span class="text-[11px] text-slate-500 font-mono">{{ $case->timeline_days }} Days Ops</span>
                        </div>

                        <h3 class="font-serif text-base font-bold text-slate-900 group-hover:text-blue-700 transition-colors mb-3 leading-snug">
                            {{ $case->title }}
                        </h3>

                        <div class="space-y-3 text-xs text-slate-700">
                            <div>
                                <span class="font-bold text-slate-900 block mb-0.5">The Challenge:</span>
                                <p class="line-clamp-2 text-slate-600">{{ $case->client_challenge }}</p>
                            </div>
                            <div>
                                <span class="font-bold text-emerald-700 block mb-0.5">Outcome Verdict:</span>
                                <p class="line-clamp-2 text-slate-600">{{ $case->outcome_verdict }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-200/60 flex items-center justify-between">
                        <span class="text-[10px] text-slate-500 truncate max-w-[170px]">{{ $case->key_evidence_type }}</span>
                        <span class="text-xs font-bold text-blue-700 group-hover:text-blue-800 flex items-center gap-1">
                            <span>Read Dossier</span>
                            <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
