<x-app-layout
    :title="'#' . $tag->name . ' Articles | Shankar Detective Intelligence'"
    :description="'Intelligence and investigation articles tagged with #' . $tag->name . ' on Shankar Detective Agency.'"
    :breadcrumbs="[
        ['name' => 'Blog', 'url' => route('blog.index')],
        ['name' => '#' . $tag->name, 'url' => route('blog.tag', $tag->slug)]
    ]"
>
    <!-- Breadcrumb -->
    <x-sections.breadcrumb :items="[
        ['name' => 'Blog', 'url' => route('blog.index')],
        ['name' => '#' . $tag->name, 'url' => route('blog.tag', $tag->slug)]
    ]" />

    <!-- Hero -->
    <x-sections.hero
        :badge="'Topic Archive &bull; #' . $tag->name"
        :title="'Articles Tagged <span class=\'text-gold-400\'>#' . $tag->name . '</span>'"
        subtitle="Review specialized intelligence reports, case references, and advisory commentary on this topic."
        cta-primary-text="Browse Articles"
        cta-primary-url="#posts"
        cta-secondary-text="Direct Case Helpline"
    />

    <!-- Trust Bar -->
    <x-sections.trust-bar />

    <!-- Articles Grid -->
    <section id="posts" class="bg-navy-900 py-16 lg:py-24 border-b border-gold-500/15">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <article class="rounded-3xl border border-gold-500/20 bg-navy-850 p-7 shadow-card flex flex-col justify-between hover:border-gold-400/40 hover:-translate-y-1 transition-all">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                @if($post->category)
                                    <span class="rounded bg-gold-500/10 px-2.5 py-0.5 text-[10px] font-bold uppercase text-gold-400 border border-gold-500/20">
                                        {{ $post->category->name }}
                                    </span>
                                @endif
                                <span class="text-[11px] text-slate-400 font-mono">{{ $post->reading_time_minutes }} Min Read</span>
                            </div>

                            <h2 class="font-serif text-lg font-bold text-slate-100 mb-3 leading-snug">
                                <a href="{{ route('blog.show', $post->slug) }}" class="hover:text-gold-300 transition-colors">
                                    {{ $post->title }}
                                </a>
                            </h2>

                            <p class="text-xs text-slate-300 leading-relaxed line-clamp-3">
                                {{ $post->excerpt }}
                            </p>
                        </div>

                        <div class="mt-6 pt-4 border-t border-gold-500/10 flex items-center justify-between text-xs">
                            <span class="text-[11px] text-slate-400">{{ $post->author_name }}</span>
                            <a href="{{ route('blog.show', $post->slug) }}" class="font-semibold text-gold-400 hover:text-gold-300 flex items-center gap-1">
                                <span>Read Full Article</span>
                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        </div>
    </section>

    <!-- Lead Form -->
    <x-sections.lead-form />

    <!-- Final CTA -->
    <x-sections.final-cta />
</x-app-layout>

