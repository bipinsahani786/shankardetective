@props([
    'title' => 'How We Work: Simple 4-Step Process',
    'subtitle' => 'From your first confidential call to the final evidence report, we keep everything smooth, transparent, and 100% private.',
    'steps' => null,
])

@php
    $processSteps = $steps ?? [
        [
            'num' => '01',
            'title' => 'Free Confidential Call',
            'desc' => 'Speak directly with Lead Detective. Share your situation in complete privacy under a signed Non-Disclosure Agreement (NDA).'
        ],
        [
            'num' => '02',
            'title' => 'Clear Plan & Honest Quote',
            'desc' => 'We create a custom investigation plan, explain the timeline, and give you an upfront, fixed fee quote with no hidden extras.'
        ],
        [
            'num' => '03',
            'title' => 'Discreet Fact-Finding',
            'desc' => 'Our local operatives gather verified facts, photos, and official documents silently without the other person ever finding out.'
        ],
        [
            'num' => '04',
            'title' => 'Complete Evidence Report',
            'desc' => 'You receive a private, password-protected dossier with all photos and records. Once you review it, working draft files are permanently deleted.'
        ],
    ];
@endphp

<section id="process" class="bg-white py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Standard Operating Protocol</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
            @foreach($processSteps as $step)
                <div class="relative rounded-2xl border border-slate-200 bg-slate-50/70 p-7 shadow-xs hover:bg-white hover:border-blue-500 hover:shadow-card-hover transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="font-serif text-3xl font-extrabold text-blue-700 font-mono">
                                {{ $step['num'] ?? $step['step'] }}
                            </span>
                            <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                        </div>

                        <h3 class="font-serif text-lg font-bold text-slate-900 mb-3">
                            {{ $step['title'] }}
                        </h3>

                        <p class="text-xs text-slate-600 leading-relaxed">
                            {{ $step['desc'] }}
                        </p>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-200/60">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-blue-700 flex items-center gap-1">
                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                            Protocol Verified
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
