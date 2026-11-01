@props([
    'badge' => 'Who We Are',
    'title' => 'Uncompromising Discretion, Undeniable Truth',
    'leadText' => 'Directed by Senior Case Director, Deep Trace Detective is a licensed confidential verification and risk advisory institution.',
    'paragraphs' => [],
    'points' => [],
    'ctaText' => 'Schedule a Confidential Consultation',
    'ctaUrl' => null,
])

@php
    $actionUrl = $ctaUrl ?? route('consultation');
    $contentParagraphs = count($paragraphs) > 0 ? $paragraphs : [
        'Headquartered at 6, Vijay Nagar, Near Domino’s in Indore with active investigative presence across Madhya Pradesh, Mumbai, Delhi NCR, Pune, Ahmedabad, and major Indian cities, our firm brings together seasoned field operatives, forensic analysts, and senior legal counsel.',
        'Whether assisting families with discreet matrimonial verification or helping businesses with vendor due diligence and fraud risk mitigation, our guiding mission remains unchanged: delivering objective, courtroom-admissible truth while maintaining ironclad confidentiality.'
    ];

    $pillarPoints = count($points) > 0 ? $points : [
        '100% Confidential handling and strict client privacy protocols.',
        'Direct case supervision by Principal Investigator.',
        'Encrypted evidence storage with post-case data purge protocols.',
        'Pan-India operational reach with rapid response mobilization.'
    ];
@endphp

<section class="bg-white py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12">
            <!-- Left Narrative -->
            <div class="lg:col-span-7">
                <span class="inline-block text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200 mb-3">
                    {{ $badge }}
                </span>
                <h2 class="mt-2 font-serif text-2xl sm:text-4xl font-bold tracking-tight text-slate-900 leading-snug">
                    {{ $title }}
                </h2>
                <p class="mt-4 text-base font-semibold text-blue-800 leading-relaxed">
                    {{ $leadText }}
                </p>

                <div class="mt-4 space-y-3 text-sm text-slate-600 leading-relaxed">
                    @foreach($contentParagraphs as $para)
                        <p>{{ $para }}</p>
                    @endforeach
                </div>

                <div class="mt-6 pt-6 border-t border-slate-200">
                    <a href="{{ $actionUrl }}" class="inline-flex items-center gap-2 rounded-xl bg-blue-700 px-6 py-3.5 text-xs font-bold uppercase tracking-wider text-white hover:bg-blue-800 transition-all shadow-md">
                        <span>{{ $ctaText }}</span>
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Right Key Pillars Card -->
            <div class="lg:col-span-5">
                <div class="rounded-3xl border border-slate-200 bg-slate-50/70 p-8 shadow-card">
                    <h3 class="font-serif text-lg font-bold text-slate-900 flex items-center gap-2 mb-6">
                        <span class="h-2.5 w-2.5 rounded-full bg-blue-700"></span>
                        Our Foundational Pillars
                    </h3>

                    <ul class="space-y-4 text-xs text-slate-700">
                        @foreach($pillarPoints as $pt)
                            <li class="flex items-start gap-3">
                                <span class="h-5 w-5 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">&check;</span>
                                <span class="leading-relaxed font-medium">{{ $pt }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <div class="mt-8 pt-6 border-t border-slate-200 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-medium">Head Office: Indore</span>
                        <span class="font-bold text-blue-700">+91 9004145251</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
