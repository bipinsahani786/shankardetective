@props([
    'title' => 'Need Immediate, Discreet Fact-Finding?',
    'subtitle' => 'Connect with Principal Investigator today under 100% confidentiality. No judgment, just objective truth.',
    'buttonText' => 'Book Free Consultation',
    'buttonUrl' => null,
    'secondaryText' => 'WhatsApp Us Now',
    'secondaryUrl' => null,
])

@php
    $primaryUrl = $buttonUrl ?? route('consultation');
    $whatsAppUrl = $secondaryUrl ?? ('https://wa.me/' . config('agency.whatsapp') . '?text=' . rawurlencode('Hello Deep Trace Detective team, I require a confidential consultation.'));
@endphp

<section class="relative overflow-hidden bg-gradient-to-r from-blue-950 via-blue-900 to-slate-900 py-14 shadow-lg">
    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center text-white">
        <span class="inline-block text-xs font-bold uppercase tracking-wider text-amber-400 mb-2">
            24/7 Rapid Response Desk • Indore HQ
        </span>
        <h2 class="font-serif text-2xl sm:text-3xl lg:text-4xl font-bold">
            {{ $title }}
        </h2>
        <p class="mt-3 text-xs sm:text-sm text-slate-300 max-w-2xl mx-auto">
            {{ $subtitle }}
        </p>

        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ $primaryUrl }}"
               class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-xl bg-amber-500 px-7 py-3.5 text-xs font-bold uppercase tracking-wider text-slate-950 shadow-md hover:bg-amber-400 transition-all">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                <span>{{ $buttonText }}</span>
            </a>

            <a href="{{ $whatsAppUrl }}"
               target="_blank"
               rel="noopener noreferrer"
               class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-xl border border-emerald-400 bg-emerald-600/20 px-7 py-3.5 text-xs font-bold uppercase tracking-wider text-emerald-300 hover:bg-emerald-600 hover:text-white transition-all">
                <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.599 2.664-.698c.969.581 1.961.914 2.801.914 3.18 0 5.767-2.587 5.767-5.766.001-3.182-2.585-5.77-5.772-5.77zm0-2.172c4.418 0 8 3.582 8 8 0 4.417-3.582 8-8 8-1.396 0-2.732-.361-3.901-1.002l-4.13 1.082 1.101-4.025c-.711-1.229-1.07-2.617-1.07-4.055 0-4.418 3.582-8 8-8z"/></svg>
                <span>{{ $secondaryText }}</span>
            </a>
        </div>
    </div>
</section>
