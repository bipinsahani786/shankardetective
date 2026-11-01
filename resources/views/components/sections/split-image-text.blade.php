@props([
    'variant' => 'right', // 'left', 'right', 'card'
    'tag' => 'Confidential Intelligence',
    'title' => 'Disciplined Verification, Bringing Truth to Light',
    'description' => 'Our private investigators specialize in unravelling complex, high-stakes personal, legal, and commercial disputes across India.',
    'bullets' => [],
    'ctaText' => 'Discuss Your Case in Confidence',
    'ctaUrl' => null,
    'image' => null,
])

@php
    $actionUrl = $ctaUrl ?? route('consultation');
    $defaultBullets = [
        'Zero compromise on client anonymity and data privacy under strict NDA.',
        'Operatives deploy with advanced optical surveillance and forensic tools.',
        'Court-tested evidence strictly complying with Section 63 BSA standards.'
    ];
    $bulletList = count($bullets) > 0 ? $bullets : $defaultBullets;
    $imgSrc = $image ?? ($variant === 'left' ? asset('images/services/corporate-due-diligence.jpg') : asset('images/services/cyber-forensics.jpg'));
@endphp

<section class="bg-white py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            @if($variant === 'left')
                <!-- Left Visual Box -->
                <div class="lg:col-span-5 order-2 lg:order-1">
                    <div class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-3 shadow-xl">
                        <div class="relative overflow-hidden rounded-2xl aspect-[4/3] bg-slate-100">
                            <img src="{{ $imgSrc }}" alt="{{ $title }}" class="h-full w-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-amber-400 block">Confidential Verification</span>
                                <span class="font-serif text-sm font-bold">Tamper-Proof Intelligence Dossier</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Text -->
                <div class="lg:col-span-7 order-1 lg:order-2">
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">{{ $tag }}</span>
                    <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900 leading-snug">{{ $title }}</h2>
                    <p class="mt-4 text-sm text-slate-600 leading-relaxed">{{ $description }}</p>

                    <ul class="mt-6 space-y-3 text-xs text-slate-700">
                        @foreach($bulletList as $b)
                            <li class="flex items-start gap-2.5">
                                <span class="h-5 w-5 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">&check;</span>
                                <span class="font-medium">{{ $b }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <div class="mt-8">
                        <a href="{{ $actionUrl }}" class="inline-flex items-center gap-2 rounded-xl bg-blue-700 px-6 py-3.5 text-xs font-bold uppercase tracking-wider text-white hover:bg-blue-800 transition-all shadow-md">
                            <span>{{ $ctaText }}</span>
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>
            @else
                <!-- Left Text -->
                <div class="lg:col-span-7">
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">{{ $tag }}</span>
                    <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900 leading-snug">{{ $title }}</h2>
                    <p class="mt-4 text-sm text-slate-600 leading-relaxed">{{ $description }}</p>

                    <ul class="mt-6 space-y-3 text-xs text-slate-700">
                        @foreach($bulletList as $b)
                            <li class="flex items-start gap-2.5">
                                <span class="h-5 w-5 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">&check;</span>
                                <span class="font-medium">{{ $b }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <a href="{{ $actionUrl }}" class="inline-flex items-center gap-2 rounded-xl bg-blue-700 px-6 py-3.5 text-xs font-bold uppercase tracking-wider text-white hover:bg-blue-800 transition-all shadow-md">
                            <span>{{ $ctaText }}</span>
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        <a href="tel:{{ config('agency.phone') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-5 py-3.5 text-xs font-bold text-slate-800 hover:border-blue-600 hover:text-blue-700 transition-all">
                            <span>Call: {{ config('agency.phone_display') }}</span>
                        </a>
                    </div>
                </div>

                <!-- Right Visual Box -->
                <div class="lg:col-span-5">
                    <div class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-3 shadow-xl">
                        <div class="relative overflow-hidden rounded-2xl aspect-[4/3] bg-slate-100">
                            <img src="{{ $imgSrc }}" alt="{{ $title }}" class="h-full w-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-amber-400 block">Deep Trace Protocols</span>
                                <span class="font-serif text-sm font-bold">Uncompromising Confidentiality</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
