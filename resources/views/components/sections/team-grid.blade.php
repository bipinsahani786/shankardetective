@props([
    'title' => 'Leadership & Senior Investigation Directorate',
    'subtitle' => 'Our verification operations are directed by seasoned investigators, certified forensics analysts, and legal counsel.',
    'members' => null,
])

@php
    $teamList = $members ?? \App\Models\TeamMember::orderBy('order', 'asc')->get();
@endphp

<section class="bg-slate-50 py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Leadership & Experience</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($teamList as $m)
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-card hover:border-blue-500 hover:shadow-card-hover transition-all flex flex-col justify-between">
                    <div>
                        <!-- Member Photo or Monogram Shield -->
                        @if($m->photo_url)
                            <div class="relative overflow-hidden rounded-2xl aspect-square mb-5 border border-slate-200 bg-slate-100">
                                <img src="{{ asset(ltrim($m->photo_url, '/')) }}"
                                     alt="{{ $m->name }}"
                                     class="h-full w-full object-cover">
                            </div>
                        @else
                            <div class="flex h-20 w-20 items-center justify-center rounded-2xl bg-blue-50 border border-blue-200 text-blue-700 mb-5 shadow-xs">
                                <span class="font-serif text-2xl font-bold font-mono">
                                    {{ substr($m->name, 0, 2) }}
                                </span>
                            </div>
                        @endif

                        <span class="text-[10px] font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-2.5 py-0.5 rounded-full inline-block mb-2">
                            {{ $m->experience_years }} Experience
                        </span>
                        <h3 class="font-serif text-lg font-bold text-slate-900 mb-0.5">
                            {{ $m->name }}
                        </h3>
                        <span class="text-xs font-semibold text-slate-500 block mb-3">
                            {{ $m->designation }}
                        </span>

                        <p class="text-xs text-slate-600 leading-relaxed">
                            {{ $m->bio }}
                        </p>
                    </div>

                    @if(!empty($m->specializations) && count($m->specializations) > 0)
                        <div class="mt-5 pt-4 border-t border-slate-100 flex flex-wrap gap-1.5">
                            @foreach($m->specializations as $spec)
                                <span class="rounded bg-slate-100 px-2 py-0.5 text-[10px] text-slate-700 font-medium">
                                    {{ $spec }}
                                </span>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        <div class="mt-10 text-center">
            <p class="text-xs text-slate-500">
                Central Operations Bureau: <strong>6, Vijay Nagar, Near Domino's, Indore</strong> • Contact: <strong>+91 9004145251</strong>
            </p>
        </div>
    </div>
</section>
