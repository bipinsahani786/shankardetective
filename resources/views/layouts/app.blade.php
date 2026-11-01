@props([
    'title' => null,
    'description' => null,
    'canonical' => null,
    'ogImage' => null,
    'type' => 'website',
    'breadcrumbs' => [],
    'service' => null,
    'article' => null,
    'faqs' => [],
    'includeMap' => true,
])

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Fonts Preconnect & Display Swap -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">

    <!-- SEO Meta & Structured Data Schema -->
    <x-seo-meta
        :title="$title"
        :description="$description"
        :canonical="$canonical"
        :ogImage="$ogImage"
        :type="$type"
        :breadcrumbs="$breadcrumbs"
        :service="$service"
        :article="$article"
        :faqs="$faqs"
    />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased selection:bg-blue-600 selection:text-white pb-16 sm:pb-0 min-h-screen">

    <!-- Scroll Reading Progress Bar -->
    <div id="scroll-progress-bar" class="fixed top-0 left-0 h-[3px] bg-gradient-to-r from-blue-700 via-amber-500 to-blue-600 z-50 transition-all duration-75 w-0 pointer-events-none"></div>

    <!-- Global Header with Mega-Menu -->
    <x-header />

    <!-- Session Flash Notification Toast (High-Trust Light Corporate Card) -->
    @if(session('success'))
        <div x-data="{ show: true, progress: 100 }"
             x-show="show"
             x-init="
                let start = Date.now();
                let duration = 7500;
                let interval = setInterval(() => {
                    let elapsed = Date.now() - start;
                    progress = Math.max(0, 100 - (elapsed / duration) * 100);
                    if (progress <= 0) {
                        clearInterval(interval);
                        show = false;
                    }
                }, 50);
             "
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-4 scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 scale-100"
             x-transition:leave-end="opacity-0 -translate-y-4 scale-95"
             class="fixed top-18 sm:top-24 left-3 right-3 sm:left-auto sm:right-6 sm:max-w-md z-50 overflow-hidden rounded-2xl border-2 border-emerald-500 bg-white p-4 sm:p-5 shadow-2xl shadow-emerald-950/15 text-slate-900"
             role="alert"
             aria-live="assertive">
            <div class="flex items-start gap-3.5">
                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-600 shadow-xs">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <div class="flex-1 pr-1 min-w-0">
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-bold text-slate-900 text-sm sm:text-base leading-tight">
                            Inquiry Confirmed Confidentially
                        </h4>
                    </div>
                    <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                        {{ session('success') }}
                    </p>
                    <div class="mt-3 flex flex-wrap items-center gap-2 pt-2.5 border-t border-slate-100 text-[11px] font-semibold text-emerald-800">
                        <span class="inline-flex items-center gap-1 bg-emerald-50 px-2 py-0.5 rounded-md border border-emerald-200">
                            <svg class="h-3 w-3 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            100% NDA Protected
                        </span>
                        <a href="tel:{{ config('agency.phone') }}" class="text-blue-700 hover:underline">
                            📞 Direct Desk: {{ config('agency.phone_display') }}
                        </a>
                    </div>
                </div>
                <button @click="show = false" class="shrink-0 rounded-lg p-1 text-slate-400 hover:text-slate-700 hover:bg-slate-100 transition-colors" aria-label="Dismiss alert">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <!-- Auto-dismiss countdown bar -->
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-slate-100">
                <div class="h-full bg-emerald-500 transition-all duration-75" :style="`width: ${progress}%`"></div>
            </div>
        </div>
    @endif

    <!-- Main Content Area -->
    <main id="main-content">
        {{ $slot }}
    </main>

    <!-- Global Pre-Footer Office Map Section -->
    @if($includeMap)
        <x-sections.office-map />
    @endif

    <!-- Global Footer -->
    <x-footer />

    <!-- Global Floating Action Buttons (Call, WhatsApp, Mobile Sticky Bar) -->
    <x-floating-actions :page-title="$title ?? null" />

    <!-- Smooth Back to Top Button -->
    <button id="back-to-top-btn"
            type="button"
            aria-label="Scroll back to top"
            class="fixed bottom-24 sm:bottom-8 right-6 z-40 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-700 text-white shadow-lg shadow-blue-900/30 transition-all duration-300 opacity-0 pointer-events-none translate-y-4 hover:bg-blue-800 hover:scale-110 hover:shadow-xl focus:outline-none">
        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <!-- Global Confidential Consultation Modal -->
    <x-consultation-modal />

</body>
</html>

