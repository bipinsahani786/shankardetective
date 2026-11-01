@props([
    'title' => 'What We Investigate & Verify',
    'subtitle' => 'Granular parameters analyzed during our deep-dive inquiries. Click any area to explore the specialized investigation service.',
    'items' => [],
])

@php
    $defaultItems = [
        [
            'title' => 'Career & Actual Compensation Authenticity',
            'url' => route('services.show', 'pre-employment-screening'),
            'badge' => 'Pre-Employment'
        ],
        [
            'title' => 'Prior Legal Marriages & Divorce Records',
            'url' => route('services.show', 'pre-matrimonial-investigation'),
            'badge' => 'Matrimonial'
        ],
        [
            'title' => 'Criminal & Civil Court Litigation History',
            'url' => route('services.show', 'litigation-support'),
            'badge' => 'Legal Records'
        ],
        [
            'title' => 'True Ownership of Claimed Properties & Assets',
            'url' => route('services.show', 'property-land-verification'),
            'badge' => 'Asset & Title'
        ],
        [
            'title' => 'Habitual Conduct, Lifestyle & Personal Character',
            'url' => route('services.show', 'surveillance-services'),
            'badge' => 'Field Surveillance'
        ],
        [
            'title' => 'Social Standing & Native Place Reputation',
            'url' => route('services.show', 'background-verification'),
            'badge' => 'Background Check'
        ],
        [
            'title' => 'Concealed Debts & Financial Insolvency Checks',
            'url' => route('services.show', 'asset-tracing'),
            'badge' => 'Asset Tracing'
        ],
        [
            'title' => 'Corporate Directorships & Competing Interests',
            'url' => route('services.show', 'business-due-diligence'),
            'badge' => 'Due Diligence'
        ],
    ];
    $investigationList = count($items) > 0 ? $items : $defaultItems;
@endphp

<section class="bg-white py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Verification Parameters</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($investigationList as $param)
                @php
                    $isAssoc = is_array($param);
                    $paramTitle = $isAssoc ? ($param['title'] ?? $param['name'] ?? '') : $param;
                    $paramUrl = $isAssoc && !empty($param['url']) ? $param['url'] : route('services.index');
                    $paramBadge = $isAssoc ? ($param['badge'] ?? 'Verified') : 'Verified';
                @endphp
                <a href="{{ $paramUrl }}"
                   class="group flex flex-col justify-between rounded-xl border border-slate-200 bg-slate-50/70 p-5 shadow-2xs hover:border-blue-600 hover:bg-white hover:shadow-md hover:-translate-y-0.5 transition-all block">
                    <div class="flex items-start gap-3">
                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg bg-blue-100 text-blue-700 mt-0.5 font-bold group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </span>
                        <div>
                            <span class="text-xs font-bold text-slate-800 group-hover:text-blue-700 transition-colors leading-relaxed block">
                                {{ $paramTitle }}
                            </span>
                        </div>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-200/60 flex items-center justify-between text-[11px] font-semibold text-slate-500 group-hover:text-blue-700">
                        <span class="text-[10px] uppercase font-bold text-slate-400 group-hover:text-blue-600">{{ $paramBadge }}</span>
                        <span class="flex items-center gap-1 font-bold">
                            <span>Service Scope</span>
                            <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
