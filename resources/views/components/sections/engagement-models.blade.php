@props([
    'title' => 'Transparent Engagement Models',
    'subtitle' => 'Flexible, transparent fee structures tailored to personal requirements and commercial enterprise needs.',
])

<section class="bg-slate-50 py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Pricing Transparency</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Model 1 -->
            <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-card hover:border-blue-500 hover:shadow-card-hover transition-all flex flex-col justify-between">
                <div>
                    <span class="rounded-full bg-blue-50 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-blue-800 border border-blue-200">
                        Fixed Scope
                    </span>
                    <h3 class="mt-4 font-serif text-xl font-bold text-slate-900">Verification Package</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Ideal for pre-matrimonial checks, executive employment verification, and property title searches with clearly defined deliverables.
                    </p>

                    <ul class="mt-6 space-y-2.5 text-xs text-slate-700">
                        <li class="flex items-center gap-2"><span class="text-blue-600 font-bold">&check;</span> Fixed, all-inclusive quote</li>
                        <li class="flex items-center gap-2"><span class="text-blue-600 font-bold">&check;</span> 5 to 7 days turnaround</li>
                        <li class="flex items-center gap-2"><span class="text-blue-600 font-bold">&check;</span> Comprehensive certified dossier</li>
                        <li class="flex items-center gap-2"><span class="text-blue-600 font-bold">&check;</span> 100% legal compliance guarantee</li>
                    </ul>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-100">
                    <a href="{{ route('consultation') }}" class="block w-full text-center rounded-xl border border-slate-300 bg-white py-3 text-xs font-bold uppercase tracking-wider text-slate-800 hover:border-blue-600 hover:text-blue-700 transition-colors">
                        Request Quote
                    </a>
                </div>
            </div>

            <!-- Model 2: Featured -->
            <div class="relative rounded-3xl border-2 border-blue-700 bg-white p-8 shadow-xl flex flex-col justify-between">
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 rounded-full bg-blue-700 px-3.5 py-0.5 text-[10px] font-extrabold uppercase tracking-wider text-white shadow-xs">
                    Most Popular
                </div>
                <div>
                    <span class="rounded-full bg-blue-50 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-blue-800">
                        Field Verification
                    </span>
                    <h3 class="mt-4 font-serif text-xl font-bold text-slate-900">Surveillance & Verification Retainer</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Tailored for active family inquiries, asset location, and tactical field checks where operative hours depend on subject movement.
                    </p>

                    <ul class="mt-6 space-y-2.5 text-xs text-slate-700">
                        <li class="flex items-center gap-2"><span class="text-blue-600 font-bold">&check;</span> Dedicated multi-operative team</li>
                        <li class="flex items-center gap-2"><span class="text-blue-600 font-bold">&check;</span> 4K telephoto video & daily logs</li>
                        <li class="flex items-center gap-2"><span class="text-blue-600 font-bold">&check;</span> Real-time operative supervisor briefings</li>
                        <li class="flex items-center gap-2"><span class="text-blue-600 font-bold">&check;</span> Section 63 BSA court certificate</li>
                    </ul>
                </div>

                <div class="mt-8 pt-6 border-t border-blue-100">
                    <a href="{{ route('consultation') }}" class="block w-full text-center rounded-xl bg-blue-700 py-3 text-xs font-bold uppercase tracking-wider text-white hover:bg-blue-800 transition-colors shadow-md">
                        Discuss Retainer Scope
                    </a>
                </div>
            </div>

            <!-- Model 3 -->
            <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-card hover:border-blue-500 hover:shadow-card-hover transition-all flex flex-col justify-between">
                <div>
                    <span class="rounded-full bg-blue-50 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-blue-800 border border-blue-200">
                        Enterprise
                    </span>
                    <h3 class="mt-4 font-serif text-xl font-bold text-slate-900">Corporate Intelligence Retainer</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Designed for corporations, law firms, and financial institutions requiring continuous risk auditing, TSCM sweeps, and fraud mitigation.
                    </p>

                    <ul class="mt-6 space-y-2.5 text-xs text-slate-700">
                        <li class="flex items-center gap-2"><span class="text-blue-600 font-bold">&check;</span> Dedicated senior case director</li>
                        <li class="flex items-center gap-2"><span class="text-blue-600 font-bold">&check;</span> Priority 24/7 incident response</li>
                        <li class="flex items-center gap-2"><span class="text-blue-600 font-bold">&check;</span> Monthly vendor & staff screening</li>
                        <li class="flex items-center gap-2"><span class="text-blue-600 font-bold">&check;</span> Executive boardroom TSCM sweeps</li>
                    </ul>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-100">
                    <a href="{{ route('consultation') }}" class="block w-full text-center rounded-xl border border-slate-300 bg-white py-3 text-xs font-bold uppercase tracking-wider text-slate-800 hover:border-blue-600 hover:text-blue-700 transition-colors">
                        Enterprise Consultation
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
