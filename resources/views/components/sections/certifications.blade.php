@props([
    'title' => 'Our Core Investigation Guarantees',
    'subtitle' => 'What every client can depend on when partnering with Deep Trace Detective.',
])

<section class="bg-slate-50 py-16 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 reveal">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Client Guarantees</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-3xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Guarantee 1 -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-xs hover:border-blue-500 hover-lift transition-all reveal stagger-1">
                <span class="font-serif text-2xl font-bold text-blue-700 block mb-1">100% Privacy</span>
                <span class="text-xs font-bold text-slate-800 block">Ironclad NDA Protection</span>
                <p class="text-[11px] text-slate-500 mt-1">Your identity is strictly anonymous</p>
            </div>

            <!-- Guarantee 2 -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-xs hover:border-blue-500 hover-lift transition-all reveal stagger-2">
                <span class="font-serif text-2xl font-bold text-blue-700 block mb-1">Expert Lead</span>
                <span class="text-xs font-bold text-slate-800 block">Senior Case Directorate</span>
                <p class="text-[11px] text-slate-500 mt-1">No untrained freelance operatives</p>
            </div>

            <!-- Guarantee 3 -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-xs hover:border-blue-500 hover-lift transition-all reveal stagger-3">
                <span class="font-serif text-2xl font-bold text-emerald-700 block mb-1">Court-Ready</span>
                <span class="text-xs font-bold text-slate-800 block">Verified Evidence</span>
                <p class="text-[11px] text-slate-500 mt-1">Time-stamped photos & public records</p>
            </div>

            <!-- Guarantee 4 -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-xs hover:border-blue-500 hover-lift transition-all reveal stagger-4">
                <span class="font-serif text-2xl font-bold text-amber-600 block mb-1">Transparent</span>
                <span class="text-xs font-bold text-slate-800 block">Fixed Clear Pricing</span>
                <p class="text-[11px] text-slate-500 mt-1">Zero hidden costs or sudden bills</p>
            </div>
        </div>
    </div>
</section>
