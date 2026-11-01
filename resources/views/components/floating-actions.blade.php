@props([
    'pageTitle' => null,
])

@php
    $title = $pageTitle ?? config('agency.name');
    $phone = config('agency.phone', '+919004145251');
    $phoneDisplay = config('agency.phone_display', '+91 9004145251');
    $whatsappNumber = config('agency.whatsapp', '919004145251');
    $prefilled = 'Hello Deep Trace Detective team, I require a confidential consultation regarding ' . $title;
    $whatsappUrl = 'https://wa.me/' . $whatsappNumber . '?text=' . rawurlencode($prefilled);
@endphp

<!-- Desktop/Tablet Floating Call Button (Bottom-Left) -->
<aside aria-label="Direct Phone Line" class="fixed bottom-6 left-6 z-50 hidden sm:block">
    <a href="tel:{{ $phone }}"
       class="group flex items-center gap-3 rounded-full bg-white border border-slate-300 p-2 pr-5 shadow-xl transition-all duration-300 hover:scale-105 hover:border-blue-600 hover:shadow-2xl">
        <span class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-700 text-white shadow-md animate-pulse group-hover:bg-blue-800">
            <!-- Phone Icon -->
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
        </span>
        <div class="text-left">
            <span class="block text-[11px] font-bold uppercase tracking-wider text-blue-700">Direct Helpline</span>
            <span class="block text-sm font-bold text-slate-900 group-hover:text-blue-700">{{ $phoneDisplay }}</span>
        </div>
    </a>
</aside>

<!-- Desktop/Tablet Floating WhatsApp Button (Bottom-Right) -->
<aside aria-label="Instant WhatsApp Chat" class="fixed bottom-6 right-6 z-50 hidden sm:block">
    <a href="{{ $whatsappUrl }}"
       target="_blank"
       rel="noopener noreferrer"
       class="group flex items-center gap-3 rounded-full bg-white border border-emerald-300 p-2 pr-5 shadow-xl transition-all duration-300 hover:scale-105 hover:border-emerald-500 hover:shadow-2xl">
        <span class="flex h-12 w-12 items-center justify-center rounded-full bg-[#25D366] text-white shadow-md group-hover:scale-105">
            <!-- WhatsApp SVG Icon -->
            <svg class="h-7 w-7 fill-current" viewBox="0 0 24 24">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.599 2.664-.698c.969.581 1.961.914 2.801.914 3.18 0 5.767-2.587 5.767-5.766.001-3.182-2.585-5.77-5.772-5.77zm0-2.172c4.418 0 8 3.582 8 8 0 4.417-3.582 8-8 8-1.396 0-2.732-.361-3.901-1.002l-4.13 1.082 1.101-4.025c-.711-1.229-1.07-2.617-1.07-4.055 0-4.418 3.582-8 8-8zm-1.037 11.238c-.144.24-.52.378-.853.378-.293 0-.645-.102-1.066-.312-1.266-.628-2.091-1.89-2.155-1.975-.062-.086-.511-.68-.511-1.296 0-.616.324-.919.44-.1.042.115.115.144.201.144.086 0 .173-.002.247-.004.078-.002.183-.03.286.219.106.257.362.884.394.949.032.065.053.141.01.227-.042.086-.064.14-.127.214-.064.073-.134.163-.191.22-.064.062-.131.13-.056.259.075.129.334.551.717.892.493.438.908.574 1.037.638.129.064.205.053.28-.032.075-.086.322-.375.408-.504.086-.129.172-.108.289-.065.118.043.748.353.877.417.129.065.215.097.247.151.032.054.032.312-.112.552z"/>
            </svg>
        </span>
        <div class="text-left">
            <span class="block text-[11px] font-bold uppercase tracking-wider text-emerald-600">Discreet Chat</span>
            <span class="block text-sm font-bold text-slate-900 group-hover:text-emerald-600">WhatsApp Us</span>
        </div>
    </a>
</aside>

<!-- Mobile Sticky Bottom Action Bar (Screen < 640px) -->
<nav aria-label="Mobile Contact Bar" class="fixed bottom-0 left-0 right-0 z-50 border-t border-slate-200 bg-white/95 backdrop-blur-md sm:hidden shadow-lg">
    <div class="grid grid-cols-3 divide-x divide-slate-200 py-2.5">
        <!-- Call -->
        <a href="tel:{{ $phone }}" class="flex flex-col items-center justify-center text-slate-700 transition-colors hover:text-blue-700">
            <svg class="h-5 w-5 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <span class="mt-1 text-[11px] font-bold uppercase tracking-tight">Call Now</span>
        </a>

        <!-- WhatsApp -->
        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center justify-center text-slate-700 transition-colors hover:text-emerald-600">
            <svg class="h-5 w-5 text-[#25D366] fill-current" viewBox="0 0 24 24">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.599 2.664-.698c.969.581 1.961.914 2.801.914 3.18 0 5.767-2.587 5.767-5.766.001-3.182-2.585-5.77-5.772-5.77zm0-2.172c4.418 0 8 3.582 8 8 0 4.417-3.582 8-8 8-1.396 0-2.732-.361-3.901-1.002l-4.13 1.082 1.101-4.025c-.711-1.229-1.07-2.617-1.07-4.055 0-4.418 3.582-8 8-8zm-1.037 11.238c-.144.24-.52.378-.853.378-.293 0-.645-.102-1.066-.312-1.266-.628-2.091-1.89-2.155-1.975-.062-.086-.511-.68-.511-1.296 0-.616.324-.919.44-.1.042.115.115.144.201.144.086 0 .173-.002.247-.004.078-.002.183-.03.286.219.106.257.362.884.394.949.032.065.053.141.01.227-.042.086-.064.14-.127.214-.064.073-.134.163-.191.22-.064.062-.131.13-.056.259.075.129.334.551.717.892.493.438.908.574 1.037.638.129.064.205.053.28-.032.075-.086.322-.375.408-.504.086-.129.172-.108.289-.065.118.043.748.353.877.417.129.065.215.097.247.151.032.054.032.312-.112.552z"/>
            </svg>
            <span class="mt-1 text-[11px] font-bold uppercase tracking-tight">WhatsApp</span>
        </a>

        <!-- Consultation Form -->
        <a href="{{ route('consultation') }}" class="flex flex-col items-center justify-center text-slate-700 transition-colors hover:text-blue-700">
            <svg class="h-5 w-5 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="mt-1 text-[11px] font-bold uppercase tracking-tight">Inquire</span>
        </a>
    </div>
</nav>
