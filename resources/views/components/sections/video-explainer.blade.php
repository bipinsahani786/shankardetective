@props([
    'title' => 'How Our Confidential Investigation Works',
    'subtitle' => 'A transparent overview of our case handling protocol and strict privacy guarantees led by Senior Case Director.',
])

<section class="bg-white py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl border border-slate-200 bg-slate-50 p-8 sm:p-12 shadow-card relative overflow-hidden">
            <div class="text-center max-w-2xl mx-auto mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Case Handling Briefing</span>
                <h2 class="mt-3 font-serif text-2xl sm:text-3xl font-bold text-slate-900">{{ $title }}</h2>
                <p class="mt-2 text-xs sm:text-sm text-slate-600">{{ $subtitle }}</p>
            </div>

            <!-- Video Frame / Player Graphic -->
            <div class="relative aspect-video w-full rounded-2xl bg-slate-900 border border-slate-800 flex flex-col items-center justify-center p-6 text-center shadow-inner group overflow-hidden">
                <img src="{{ asset('images/office/indore-office.jpg') }}" alt="Deep Trace Detective Briefing Room" class="absolute inset-0 h-full w-full object-cover opacity-40">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent"></div>
                
                <a href="{{ route('consultation') }}"
                   aria-label="Book Case Intake Briefing with Senior Case Director"
                   class="relative z-10 flex h-20 w-20 items-center justify-center rounded-full bg-blue-700 text-white shadow-xl transition-transform duration-300 group-hover:scale-110 cursor-pointer hover:bg-blue-800">
                    <svg class="h-8 w-8 fill-current translate-x-0.5" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                </a>

                <div class="relative z-10 mt-6 text-white">
                    <span class="font-serif text-base sm:text-lg font-bold block">Case Intake Protocol Briefing</span>
                    <span class="text-xs text-amber-400 mt-1 block">Presented by Principal Investigator &bull; 2 Minutes</span>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 text-center text-xs text-slate-700 pt-6 border-t border-slate-200">
                <div><span class="font-bold text-blue-700 block mb-0.5">1. Confidential Consultation</span> Zero cost initial discussion</div>
                <div><span class="font-bold text-blue-700 block mb-0.5">2. Signed Legal NDA</span> 100% Client Anonymity</div>
                <div><span class="font-bold text-blue-700 block mb-0.5">3. Sealed Dossier Delivery</span> Section 63 BSA certified</div>
            </div>
        </div>
    </div>
</section>
