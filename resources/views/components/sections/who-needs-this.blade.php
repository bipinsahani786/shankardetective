@props([
    'title' => 'Who Needs This Service?',
    'subtitle' => 'Recognizing when professional intelligence and factual verification become essential.',
    'items' => [],
])

@php
    $defaultItems = [
        [
            'title' => 'Families & Prospective Spouses',
            'desc' => 'Families finalizing matrimonial alliances seeking independent verification of bio-data, career status, past conduct, and financial liabilities.',
            'url' => route('services.show', 'pre-matrimonial-investigation'),
            'service_name' => 'Pre-Matrimonial Check'
        ],
        [
            'title' => 'Partners Facing Uncertainty',
            'desc' => 'Individuals dealing with marital doubt, preparing documentation for legal maintenance and child custody proceedings.',
            'url' => route('services.show', 'post-matrimonial-investigation'),
            'service_name' => 'Post-Matrimonial Check'
        ],
        [
            'title' => 'Corporate HR & Founders',
            'desc' => 'Enterprises vetting key executives, investigating internal fraud or kickback rings, and safeguarding proprietary company data.',
            'url' => route('services.show', 'corporate-investigation'),
            'service_name' => 'Corporate Fraud Audit'
        ],
        [
            'title' => 'Commercial Property Buyers',
            'desc' => 'Property buyers needing 30-year title searches, physical possession verification, and litigation checks before committing major capital.',
            'url' => route('services.show', 'property-land-verification'),
            'service_name' => 'Property & Land Check'
        ],
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
                @php
                    $isAssoc = is_array($sc);
                    $cardTitle = $isAssoc ? ($sc['title'] ?? '') : $sc;
                    $cardDesc = $isAssoc ? ($sc['desc'] ?? '') : '';
                    $cardUrl = $isAssoc && !empty($sc['url']) ? $sc['url'] : route('services.index');
                    $serviceName = $isAssoc && !empty($sc['service_name']) ? $sc['service_name'] : 'Explore Service';
                @endphp
                <div class="group relative rounded-2xl border border-slate-200 bg-white p-6 shadow-card hover:border-blue-500 hover:shadow-card-hover hover:-translate-y-1 transition-all flex flex-col justify-between cursor-pointer">
                    <!-- Stretched Link -->
                    <a href="{{ $cardUrl }}" class="absolute inset-0 z-10" aria-label="{{ $cardTitle }}"></a>

                    <div>
                        <div class="h-1.5 w-8 rounded-full bg-blue-700 mb-4 group-hover:w-12 transition-all"></div>
                        <h3 class="font-serif text-base font-bold text-slate-900 group-hover:text-blue-700 transition-colors mb-2">
                            {{ $cardTitle }}
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            {{ $cardDesc }}
                        </p>
                    </div>

                    <div class="mt-6 pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] font-bold text-blue-700 group-hover:text-blue-800">
                        <span>{{ $serviceName }}</span>
                        <span class="flex items-center gap-1">
                            <span>Dossier</span>
                            <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
