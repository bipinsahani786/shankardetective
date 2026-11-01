<x-app-layout
    title="Investigation Intelligence Blog | Deep Trace Detective"
    description="Articles and legal guides on pre-matrimonial checks, cyber forensics, divorce evidence, corporate due diligence, and asset tracing in India."
    :breadcrumbs="[['name' => 'Blog', 'url' => route('blog.index')]]"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[['name' => 'Blog', 'url' => route('blog.index')]]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        badge="Investigation Knowledge Bureau &bull; Legal Guidance"
        title="Intelligence & <span class='text-blue-700'>Advisory Articles</span>"
        subtitle="In-depth analysis, legal compliance guides, and investigative insights penned by senior private detectives, forensic examiners, and legal advisors led by Senior Case Director."
        cta-primary-text="Explore Articles"
        cta-primary-url="#posts"
        cta-secondary-text="Call +91 9004145251"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: Filter & Search Bar -->
    <div class="bg-white py-6 border-b border-slate-200">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <!-- Category Pills -->
                <div class="flex items-center gap-2 overflow-x-auto pb-2 w-full md:w-auto">
                    <a href="{{ route('blog.index') }}"
                       class="rounded-xl px-4 py-2 text-xs font-bold shrink-0 transition-colors {{ !request('category') ? 'bg-blue-700 text-white shadow-sm' : 'border border-slate-300 bg-white text-slate-700 hover:border-blue-600 hover:text-blue-700' }}">
                        All Articles
                    </a>
                    @foreach($categories as $cat)
                        <a href="{{ route('blog.category', $cat->slug) }}"
                           class="rounded-xl px-4 py-2 text-xs font-bold shrink-0 border border-slate-300 bg-white text-slate-700 hover:border-blue-600 hover:text-blue-700 transition-colors">
                            {{ $cat->name }} ({{ $cat->posts_count }})
                        </a>
                    @endforeach
                </div>

                <!-- Search Input -->
                <form action="{{ route('blog.index') }}" method="GET" class="w-full md:w-72">
                    <div class="relative">
                        <input type="text" name="search" value="{{ request('search') }}"
                               placeholder="Search intelligence topics..."
                               class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2 text-xs text-slate-900 placeholder-slate-400 focus:border-blue-600 outline-none">
                        <button type="submit" class="absolute right-3 top-2 text-slate-500 hover:text-blue-700">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Section 5: Articles Grid -->
    <section id="posts" class="bg-slate-50 py-16 lg:py-24 border-b border-slate-200">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <article class="rounded-3xl border border-slate-200 bg-white p-7 shadow-xs flex flex-col justify-between hover:border-blue-500 hover:shadow-card-hover hover:-translate-y-1 transition-all">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                @if($post->category)
                                    <a href="{{ route('blog.category', $post->category->slug) }}" class="rounded bg-blue-50 px-2.5 py-0.5 text-[10px] font-bold uppercase text-blue-800 border border-blue-200 hover:bg-blue-100">
                                        {{ $post->category->name }}
                                    </a>
                                @endif
                                <span class="text-[11px] text-slate-500 font-mono">{{ $post->reading_time_minutes }} Min Read</span>
                            </div>

                            <h2 class="font-serif text-lg font-bold text-slate-900 mb-3 leading-snug">
                                <a href="{{ route('blog.show', $post->slug) }}" class="hover:text-blue-700 transition-colors">
                                    {{ $post->title }}
                                </a>
                            </h2>

                            <p class="text-xs text-slate-600 leading-relaxed line-clamp-3">
                                {{ $post->excerpt }}
                            </p>
                        </div>

                        <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="text-[11px] text-slate-500 font-medium">{{ $post->author_name }}</span>
                            <a href="{{ route('blog.show', $post->slug) }}" class="font-bold text-blue-700 hover:text-blue-800 flex items-center gap-1">
                                <span>Read Full Article</span>
                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        </div>
    </section>

    <!-- Section 6: Mid-Page CTA Banner -->
    <x-sections.cta-banner
        title="Need Advice Regarding a Matter Discussed Here?"
        subtitle="Speak directly with Principal Investigator under complete NDA protection."
        button-text="Book Free Consultation"
    />

    <!-- Section 7: Final CTA -->
    <x-sections.final-cta />
</x-app-layout>
