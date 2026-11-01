@props([
    'title' => 'Client Experiences & Discreet Feedback',
    'subtitle' => 'What clients say about our verification thoroughness, empathy, and uncompromising privacy.',
    'testimonials' => null,
])

@php
    $testimonialList = $testimonials ?? \App\Models\Testimonial::featured()->take(3)->get();
@endphp

<section class="bg-slate-50 py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14 reveal">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Client Feedback</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($testimonialList as $t)
                <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-card hover:border-blue-500 hover:shadow-card-hover hover-lift transition-all flex flex-col justify-between reveal stagger-{{ $loop->iteration }}">
                    <div>
                        <!-- Stars -->
                        <div class="flex items-center gap-1 text-amber-500 mb-4">
                            @for($i = 0; $i < ($t->rating ?? 5); $i++)
                                <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                            <span class="ml-2 rounded bg-blue-50 px-2 py-0.5 text-[10px] font-bold text-blue-700">
                                {{ $t->service_rendered }}
                            </span>
                        </div>

                        <!-- Quote -->
                        <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                            &ldquo;{{ $t->quote }}&rdquo;
                        </p>
                    </div>

                    <!-- Client Info -->
                    <div class="mt-6 pt-5 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="font-bold text-slate-900 text-xs block">{{ $t->client_name }}</span>
                            <span class="text-[11px] text-slate-500">{{ $t->client_role }}</span>
                        </div>
                        <span class="inline-flex items-center gap-1 text-[10px] text-emerald-600 font-semibold">
                            <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            Verified Review
                        </span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-10 text-center">
            <a href="{{ route('testimonials') }}" class="text-xs font-bold text-blue-700 hover:text-blue-800">
                Read More Client Experiences &rarr;
            </a>
        </div>
    </div>
</section>
