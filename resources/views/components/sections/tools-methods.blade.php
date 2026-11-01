@props([
    'title' => 'Verification Methods & Professional Tools',
    'subtitle' => 'Combining lawful field verification with official record searches and courtroom-ready evidence.',
    'tools' => [],
])

@php
    $defaultTools = [
        [
            'name' => 'High-Definition Field Photography',
            'desc' => 'High-resolution, timestamped photos and video documentation captured lawfully in public places to provide unmistakable, factual proof.',
            'url' => route('services.show', 'surveillance-services'),
            'service' => 'Field Surveillance'
        ],
        [
            'name' => 'Counter-Surveillance & Bug Sweeping (TSCM)',
            'desc' => 'Professional electronic sweeping to inspect your corporate offices, boardrooms, and meeting spaces for illicit listening bugs or recording devices.',
            'url' => route('services.show', 'bug-sweeping-tscm'),
            'service' => 'Bug Sweeping (TSCM)'
        ],
        [
            'name' => 'Open-Source Public Intelligence (OSINT)',
            'desc' => 'Ethical digital footprint analysis, corporate directorship mapping, and public registry verification conducted completely within the law.',
            'url' => route('services.show', 'cyber-crime-digital-forensics'),
            'service' => 'Digital Forensics'
        ],
        [
            'name' => 'Civil, Property & Judicial Records Searches',
            'desc' => 'In-depth verification through official e-Courts judicial archives, Ministry of Corporate Affairs (MCA) databases, and municipal property records.',
            'url' => route('services.show', 'property-land-verification'),
            'service' => 'Property & Land Check'
        ],
    ];
    $toolList = count($tools) > 0 ? $tools : $defaultTools;
@endphp

<section class="bg-white py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Our Methodology</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
            @foreach($toolList as $tl)
                @php
                    $isAssoc = is_array($tl);
                    $name = $isAssoc ? ($tl['name'] ?? $tl['title'] ?? '') : $tl;
                    $desc = $isAssoc ? ($tl['desc'] ?? '') : '';
                    $url = $isAssoc && !empty($tl['url']) ? $tl['url'] : route('services.index');
                    $serviceLabel = $isAssoc && !empty($tl['service']) ? $tl['service'] : 'Related Service';
                @endphp
                <a href="{{ $url }}"
                   class="group relative rounded-2xl border border-slate-200 bg-slate-50/70 p-6 sm:p-7 shadow-2xs hover:bg-white hover:border-blue-500 hover:shadow-card-hover hover:-translate-y-0.5 transition-all flex flex-col justify-between block">
                    <div class="flex items-start gap-4 sm:gap-5">
                        <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-700 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                        </span>
                        <div>
                            <h3 class="font-serif text-base font-bold text-slate-900 group-hover:text-blue-700 transition-colors mb-2">
                                {{ $name }}
                            </h3>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                {{ $desc }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-5 pt-3 border-t border-slate-200/60 flex items-center justify-between text-xs font-bold text-blue-700 group-hover:text-blue-800">
                        <span class="text-[10px] uppercase font-bold text-slate-400 group-hover:text-blue-600">{{ $serviceLabel }}</span>
                        <span class="flex items-center gap-1">
                            <span>Explore Capability</span>
                            <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
