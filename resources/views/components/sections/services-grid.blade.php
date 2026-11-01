@props([
    'title' => 'Our Core Verification & Investigation Services',
    'subtitle' => 'Specialized investigative capabilities backed by forensic precision, legal compliance, and fieldcraft.',
    'category' => null,
    'limit' => 6,
    'showAllLink' => true,
    'services' => null,
])

@php
    if ($services !== null) {
        $serviceList = $services;
    } else {
        $query = \App\Models\Service::query()->orderBy('order', 'asc');
        if ($category) {
            $query->where('category', $category);
        }
        $serviceList = $query->take($limit)->get();
    }
@endphp

<section id="services" class="bg-white py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">
                    Capabilities Directory
                </span>
                <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">
                    {{ $title }}
                </h2>
                <p class="mt-2 text-sm text-slate-600 max-w-2xl">
                    {{ $subtitle }}
                </p>
            </div>
            @if($showAllLink)
                <div class="mt-4 md:mt-0">
                    <a href="{{ route('services.index') }}" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-blue-700 hover:text-blue-800">
                        <span>Browse All 24 Services</span>
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            @endif
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($serviceList as $srv)
                <div class="group relative rounded-2xl border border-slate-200 bg-slate-50/70 p-7 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:bg-white hover:border-blue-500 hover:shadow-card-hover flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="rounded-lg bg-blue-50 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-blue-800 border border-blue-200">
                                {{ $srv->category }}
                            </span>
                            <span class="text-slate-400 text-xs font-mono">#0{{ $srv->order }}</span>
                        </div>

                        <h3 class="font-serif text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors">
                            <a href="{{ route('services.show', $srv->slug) }}">
                                {{ $srv->title }}
                            </a>
                        </h3>

                        <p class="mt-3 text-xs leading-relaxed text-slate-600">
                            {{ Str::limit($srv->short_description, 140) }}
                        </p>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-200/60 flex items-center justify-between">
                        <a href="{{ route('services.show', $srv->slug) }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-700 hover:text-blue-800 group-hover:translate-x-0.5 transition-transform">
                            <span>Service Scope</span>
                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                        <a href="{{ route('consultation') }}" class="text-[11px] font-semibold text-slate-500 hover:text-blue-700">
                            Inquire &rarr;
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
