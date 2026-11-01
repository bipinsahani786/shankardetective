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
<body class="bg-slate-50 font-sans text-slate-800 antialiased selection:bg-blue-600 selection:text-white pb-16 sm:pb-0">

    <!-- Scroll Reading Progress Bar -->
    <div id="scroll-progress-bar" class="fixed top-0 left-0 h-[3px] bg-gradient-to-r from-blue-700 via-amber-500 to-blue-600 z-50 transition-all duration-75 w-0 pointer-events-none"></div>

    <!-- Global Header with Mega-Menu -->
    <x-header />

    <!-- Session Flash Notification Toast -->
    @if(session('success'))
        <div x-data="{ show: true }"
             x-show="show"
             x-init="setTimeout(() => show = false, 6000)"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 translate-y-2"
             class="fixed top-20 right-6 z-50 flex items-center gap-3 rounded-2xl border border-emerald-500/40 bg-navy-950/95 p-4 shadow-2xl backdrop-blur-md text-emerald-400">
            <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div class="text-xs">
                <span class="font-bold text-slate-100 block">Inquiry Received Confidentially</span>
                <span class="text-slate-300">{{ session('success') }}</span>
            </div>
            <button @click="show = false" class="text-slate-400 hover:text-slate-100 ml-2">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
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

