@props([
    'badge' => '100% Confidential • Trusted Investigation Services',
    'title' => 'The Truth You Need. <span class="text-blue-700">The Privacy You Deserve.</span>',
    'subtitle' => 'Confidential pre-matrimonial checks, personal background verification, and corporate due diligence across Indore, Pune, Mumbai, Ahmedabad, and Bangalore. Led by Principal Investigator.',
    'ctaPrimaryText' => 'Book Free Consultation',
    'ctaPrimaryUrl' => null,
    'ctaSecondaryText' => 'Call +91 9004145251',
    'ctaSecondaryUrl' => null,
    'stats' => true,
])

@php
    $primaryUrl = $ctaPrimaryUrl ?? route('consultation');
    $secondaryUrl = $ctaSecondaryUrl ?? 'tel:' . config('agency.phone');
@endphp

<section class="relative overflow-hidden bg-gradient-to-b from-blue-50/60 via-slate-50 to-white py-16 lg:py-24 border-b border-slate-200">
    <!-- Subtle Background Dot Pattern -->
    <div class="absolute inset-0 bg-[radial-gradient(#2563EB_1px,transparent_1px)] [background-size:28px_28px] opacity-[0.04] pointer-events-none"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12">
            <!-- Left Text Content -->
            <div class="lg:col-span-7 text-center lg:text-left">
                <!-- Trust Pill Badge -->
                <div class="inline-flex items-center gap-2 rounded-full border border-blue-200 bg-blue-50/80 px-4 py-1.5 text-xs font-bold text-blue-800 mb-5 shadow-xs">
                    <span class="flex h-2 w-2 rounded-full bg-blue-600 animate-pulse"></span>
                    <span>{!! $badge !!}</span>
                    <span class="text-slate-400">|</span>
                    <span class="text-amber-700">Indore HQ</span>
                </div>

                <!-- Main H1 Heading -->
                <h1 class="font-serif text-3xl sm:text-5xl lg:text-5xl font-extrabold tracking-tight text-slate-900 leading-[1.15]">
                    {!! $title !!}
                </h1>

                <!-- Subtitle -->
                <p class="mt-5 text-base sm:text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    {{ $subtitle }}
                </p>

                <!-- Action CTAs -->
                <div class="mt-8 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="{{ $primaryUrl }}"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 rounded-xl bg-blue-700 px-7 py-3.5 text-sm font-bold text-white shadow-md transition-all duration-300 hover:bg-blue-800 hover:shadow-lg hover:scale-[1.02]">
                        <svg class="h-5 w-5 text-amber-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <span>{{ $ctaPrimaryText }}</span>
                    </a>

                    <a href="{{ $secondaryUrl }}"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 rounded-xl border border-slate-300 bg-white px-7 py-3.5 text-sm font-bold text-slate-800 shadow-xs transition-all duration-300 hover:border-blue-600 hover:text-blue-700 hover:bg-blue-50/50">
                        <svg class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>{{ $ctaSecondaryText }}</span>
                    </a>
                </div>

                <!-- Google Ads Safe & Legal Compliance Micro-Tag -->
                <div class="mt-6 flex flex-wrap items-center justify-center lg:justify-start gap-4 text-xs text-slate-500">
                    <span class="flex items-center gap-1.5 font-medium">
                        <svg class="h-4 w-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        DPDP Act 2023 & BNS Compliant
                    </span>
                    <span class="hidden sm:inline text-slate-300">•</span>
                    <span class="flex items-center gap-1.5 font-medium">
                        <svg class="h-4 w-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        100% Strict NDA Protection
                    </span>
                    <span class="hidden sm:inline text-slate-300">•</span>
                    <span class="flex items-center gap-1.5 font-medium">
                        <svg class="h-4 w-4 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Section 63 BSA Court Evidence
                    </span>
                </div>
            </div>

            <!-- Right Visual Graphic with Real Photography & Deep Trace Illustration -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    <!-- Main Card Image -->
                    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white p-3 shadow-2xl">
                        <div class="relative overflow-hidden rounded-2xl aspect-[4/3] bg-slate-100">
                            <img src="{{ asset('images/hero/hero-detective.jpg') }}"
                                 alt="Deep Trace Detective Investigation & Risk Advisory"
                                 class="h-full w-full object-cover"
                                 loading="eager"
                                 fetchpriority="high">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent"></div>
                            
                            <!-- Overlay Badge -->
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-amber-400 block mb-0.5">
                                    Principal Investigator
                                </span>
                                <h3 class="font-serif text-lg font-bold">Senior Case Director</h3>
                                <p class="text-xs text-slate-300">Deep Trace Detective • 6, Vijay Nagar, Indore</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Mini Card (Evidence & Forensics) -->
                    <div class="absolute -bottom-6 -left-6 rounded-2xl border border-slate-200 bg-white p-4 shadow-xl hidden sm:flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-700">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <span class="block text-xs font-bold text-slate-900">Direct Case Lead</span>
                            <span class="block text-[11px] text-slate-500">Call / WhatsApp: +91 9004145251</span>
                        </div>
                    </div>

                    <!-- Floating Radar Emblem Badge -->
                    <div class="absolute -top-5 -right-5 rounded-2xl border border-blue-200 bg-blue-700 text-white p-3 shadow-lg hidden sm:flex items-center gap-2">
                        <img src="{{ asset('images/illustrations/deep-trace-radar.svg') }}" alt="Deep Trace Radar" class="h-7 w-7">
                        <span class="text-xs font-bold">Deep Trace Protocol</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
