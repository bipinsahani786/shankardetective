@props([
    'title' => 'Latest Intelligence & Advisory Articles',
    'subtitle' => 'Expert perspectives on Indian investigation law, marital due diligence, and enterprise risk advisory.',
    'posts' => null,
    'limit' => 3,
])

@php
    $blogList = $posts ?? \App\Models\Post::published()->with('category')->latest('published_at')->take($limit)->get();
@endphp

<section class="bg-slate-50 py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Knowledge Bureau</span>
                <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">{{ $title }}</h2>
                <p class="mt-2 text-sm text-slate-600 max-w-2xl">{{ $subtitle }}</p>
            </div>
            <div class="mt-4 md:mt-0">
                <a href="{{ route('blog.index') }}" class="text-xs font-bold uppercase tracking-wider text-blue-700 hover:text-blue-800 flex items-center gap-1">
                    <span>Visit Knowledge Base</span>
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($blogList as $post)
                <article class="group relative rounded-3xl border border-slate-200 bg-white p-7 shadow-xs hover:border-blue-500 hover:shadow-card-hover hover:-translate-y-1 transition-all flex flex-col justify-between cursor-pointer">
                    <!-- Stretched Link -->
                    <a href="{{ route('blog.show', $post->slug) }}" class="absolute inset-0 z-10" aria-label="{{ $post->title }}"></a>

                    <div>
                        <div class="flex items-center justify-between mb-4">
                            @if($post->category)
                                <span class="rounded bg-blue-50 px-2.5 py-0.5 text-[10px] font-bold uppercase text-blue-800 border border-blue-200">
                                    {{ $post->category->name }}
                                </span>
                            @endif
                            <span class="text-[11px] text-slate-500 font-mono">{{ $post->reading_time_minutes }} Min Read</span>
                        </div>

                        <h3 class="font-serif text-base font-bold text-slate-900 group-hover:text-blue-700 transition-colors mb-3 leading-snug">
                            {{ $post->title }}
                        </h3>

                        <p class="text-xs text-slate-600 leading-relaxed line-clamp-3">
                            {{ $post->excerpt }}
                        </p>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-[11px] text-slate-500 font-medium">{{ $post->author_name }}</span>
                        <span class="text-xs font-bold text-blue-700 group-hover:text-blue-800 flex items-center gap-1">
                            <span>Read Article</span>
                            <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                        </span>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
