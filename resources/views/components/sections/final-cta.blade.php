@props([
    'title' => 'Ready to Discover the Facts? Speak with Us in Strict Confidence',
    'subtitle' => 'Do not let doubt or unverified claims compromise your family or enterprise. Contact Principal Investigator today for an objective, confidential case assessment.',
])

<section class="relative overflow-hidden bg-gradient-to-b from-slate-50 via-blue-50/50 to-white py-20 lg:py-24 border-t border-slate-200">
    <div class="relative mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 rounded-full border border-blue-200 bg-blue-50 px-4 py-1.5 text-xs font-bold text-blue-800 mb-6 shadow-xs">
            <span class="h-2 w-2 rounded-full bg-blue-600 animate-pulse"></span>
            Direct Helpline: +91 9004145251
        </span>

        <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-slate-900 leading-tight">
            {{ $title }}
        </h2>

        <p class="mt-4 text-sm sm:text-base text-slate-600 max-w-2xl mx-auto leading-relaxed">
            {{ $subtitle }}
        </p>

        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('consultation') }}"
               @click.prevent="$dispatch('open-consultation-modal')"
               class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-xl bg-blue-700 px-8 py-4 text-xs sm:text-sm font-bold uppercase tracking-wider text-white shadow-md hover:bg-blue-800 transition-all hover:scale-105 cursor-pointer">
                <svg class="h-5 w-5 text-amber-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                <span>Book Free Consultation</span>
            </a>

            <a href="tel:{{ config('agency.phone') }}"
               class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-xl border border-slate-300 bg-white px-8 py-4 text-xs sm:text-sm font-bold uppercase tracking-wider text-slate-800 shadow-xs transition-all hover:border-blue-600 hover:text-blue-700">
                <svg class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                <span>Call: {{ config('agency.phone_display') }}</span>
            </a>
        </div>

        <div class="mt-8 flex flex-wrap items-center justify-center gap-6 text-xs text-slate-500 font-medium">
            <span class="flex items-center gap-1.5"><span class="text-blue-600 font-bold">&check;</span> 100% NDA Protection</span>
            <span class="flex items-center gap-1.5"><span class="text-blue-600 font-bold">&check;</span> No Obligation Assessment</span>
            <span class="flex items-center gap-1.5"><span class="text-blue-600 font-bold">&check;</span> Direct Senior Case Lead</span>
            <span class="flex items-center gap-1.5"><span class="text-blue-600 font-bold">&check;</span> Court-Admissible Proof</span>
        </div>
    </div>
</section>
