@props([
    'title' => 'Who Needs This Service?',
    'subtitle' => 'Recognizing when professional intelligence and factual verification become essential.',
    'items' => [],
])

@php
    $defaultItems = [
        ['title' => 'Families & Prospective Spouses', 'desc' => 'Families finalizing matrimonial alliances seeking independent verification of bio-data, career status, past conduct, and financial liabilities.'],
        ['title' => 'Partners Facing Uncertainty', 'desc' => 'Individuals dealing with marital doubt, preparing documentation for legal maintenance and child custody proceedings.'],
        ['title' => 'Corporate HR & Founders', 'desc' => 'Enterprises vetting key executives, investigating internal fraud or kickback rings, and safeguarding proprietary company data.'],
        ['title' => 'Commercial Property Buyers', 'desc' => 'Property buyers needing 30-year title searches, physical possession verification, and litigation checks before committing major capital.'],
    ];
    $scenarioList = count($items) > 0 ? $items : $defaultItems;
@endphp

<section class="bg-slate-50 py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Target Scenarios</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($scenarioList as $sc)
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-card hover:border-blue-500 hover:shadow-card-hover transition-all flex flex-col justify-between">
                    <div>
                        <div class="h-1.5 w-8 rounded-full bg-blue-700 mb-4"></div>
                        <h3 class="font-serif text-base font-bold text-slate-900 mb-2">
                            {{ is_array($sc) ? ($sc['title'] ?? '') : $sc }}
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            {{ is_array($sc) ? ($sc['desc'] ?? '') : '' }}
                        </p>
                    </div>

                    <div class="mt-6 pt-3 border-t border-slate-100">
                        <a href="{{ route('consultation') }}" class="text-[11px] font-bold text-blue-700 hover:text-blue-800 flex items-center gap-1">
                            <span>Request Review</span>
                            <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
