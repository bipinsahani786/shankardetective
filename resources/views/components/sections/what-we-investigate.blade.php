@props([
    'title' => 'What We Investigate & Verify',
    'subtitle' => 'Granular parameters analyzed during our deep-dive inquiries.',
    'items' => [],
])

@php
    $defaultItems = [
        'Career & Actual Compensation Authenticity',
        'Prior Legal Marriages & Divorce Records',
        'Criminal & Civil Court Litigation History',
        'True Ownership of Claimed Properties & Assets',
        'Habitual Conduct, Lifestyle & Personal Character',
        'Social Standing & Native Place Reputation',
        'Concealed Debts & Financial Insolvency Checks',
        'Corporate Directorships & Competing Interests',
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
                <div class="flex items-start gap-3 rounded-xl border border-slate-200 bg-slate-50/70 p-5 shadow-xs hover:border-blue-500 hover:bg-white transition-all">
                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg bg-blue-100 text-blue-700 mt-0.5 font-bold">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </span>
                    <span class="text-xs font-bold text-slate-800 leading-relaxed">
                        {{ is_array($param) ? ($param['title'] ?? $param['name'] ?? '') : $param }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</section>
