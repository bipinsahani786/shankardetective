@props([
    'title' => 'Frequently Asked Questions',
    'subtitle' => 'Clear, transparent answers regarding legality, confidentiality, evidence, and procedures.',
    'faqs' => null,
    'category' => null,
    'limit' => 6,
])

@php
    if ($faqs !== null) {
        $faqList = $faqs;
    } else {
        $query = \App\Models\Faq::query()->orderBy('order', 'asc');
        if ($category) {
            $query->where('category', $category);
        }
        $faqList = $query->take($limit)->get();
    }
@endphp

<section id="faq" class="bg-slate-50 py-16 lg:py-24 border-b border-slate-200" x-data="{ active: 0 }">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Questions & Answers</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="space-y-4">
            @foreach($faqList as $index => $item)
                @php
                    $q = is_array($item) ? ($item['q'] ?? $item['question'] ?? '') : ($item->question ?? '');
                    $a = is_array($item) ? ($item['a'] ?? $item['answer'] ?? '') : ($item->answer ?? '');
                @endphp
                <div class="rounded-2xl border bg-white shadow-xs transition-colors"
                     :class="active === {{ $index }} ? 'border-blue-500 shadow-sm' : 'border-slate-200 hover:border-slate-300'">
                    <button type="button"
                            @click="active = (active === {{ $index }} ? null : {{ $index }})"
                            class="flex w-full items-center justify-between p-5 text-left text-sm font-semibold text-slate-900 focus:outline-none rounded-2xl"
                            :aria-expanded="active === {{ $index }}">
                        <span class="font-serif text-base text-slate-900 font-bold" :class="active === {{ $index }} ? 'text-blue-700' : ''">
                            {{ $q }}
                        </span>
                        <span class="ml-4 flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-700">
                            <svg class="h-4 w-4 transition-transform duration-200" :class="active === {{ $index }} ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>

                    <div x-show="active === {{ $index }}"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 -translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-1"
                         class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3"
                         style="display: none;">
                        <p>{!! nl2br(e($a)) !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
