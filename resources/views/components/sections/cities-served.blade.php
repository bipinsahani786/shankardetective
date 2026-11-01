@props([
    'title' => 'Pan-India Operational Bureaus',
    'subtitle' => 'Headquartered in Indore with active investigative bureaus and rapid field deployment teams across India.',
])

<section id="cities" class="bg-white py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14 reveal">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Nationwide Footprint</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach(config('agency.top_cities') as $c)
                <a href="{{ route('cities.show', $c['slug']) }}"
                   class="group rounded-2xl border border-slate-200 bg-slate-50/70 p-6 shadow-xs hover:bg-white hover:border-blue-500 hover:shadow-card-hover hover-lift transition-all flex flex-col justify-between reveal stagger-{{ $loop->iteration }}">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[10px] font-bold uppercase text-slate-400">{{ $c['state'] }}</span>
                            @if(!empty($c['hq']))
                                <span class="rounded bg-emerald-50 px-2 py-0.5 text-[9px] font-bold text-emerald-700 border border-emerald-200">Main HQ</span>
                            @endif
                        </div>
                        <h3 class="font-serif text-base sm:text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors">
                            {{ $c['name'] }}
                        </h3>
                        <p class="text-[11px] text-slate-500 mt-1">
                            Investigation Bureau & Rapid Verification Teams
                        </p>
                    </div>

                    <div class="mt-5 pt-3 border-t border-slate-200/60 flex items-center justify-between text-xs font-bold text-blue-700 group-hover:text-blue-800">
                        <span>Explore Bureau</span>
                        <svg class="h-3.5 w-3.5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
