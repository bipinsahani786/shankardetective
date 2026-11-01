<x-app-layout
    :title="$post->meta_title ?? ($post->title . ' | Deep Trace Detective Blog')"
    :description="$post->meta_description ?? $post->excerpt"
    :article="$post"
    :breadcrumbs="[
        ['name' => 'Blog', 'url' => route('blog.index')],
        ['name' => $post->category?->name ?? 'Articles', 'url' => $post->category ? route('blog.category', $post->category->slug) : route('blog.index')],
        ['name' => Str::limit($post->title, 30), 'url' => route('blog.show', $post->slug)]
    ]"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[
        ['name' => 'Blog', 'url' => route('blog.index')],
        ['name' => $post->category?->name ?? 'Articles', 'url' => $post->category ? route('blog.category', $post->category->slug) : route('blog.index')],
        ['name' => Str::limit($post->title, 30), 'url' => route('blog.show', $post->slug)]
    ]" />

    <!-- Article Header -->
    <header class="bg-slate-50 py-16 border-b border-slate-200">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
            @if($post->category)
                <a href="{{ route('blog.category', $post->category->slug) }}" class="inline-block rounded-full bg-blue-50 px-4 py-1 text-xs font-bold uppercase tracking-wider text-blue-800 border border-blue-200 mb-4 hover:bg-blue-100">
                    {{ $post->category->name }}
                </a>
            @endif

            <h1 class="font-serif text-2xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-slate-900 leading-tight">
                {{ $post->title }}
            </h1>

            <div class="mt-6 flex flex-wrap items-center justify-center gap-4 text-xs text-slate-500 font-medium">
                <span class="flex items-center gap-1.5 font-bold text-slate-800">
                    <svg class="h-4 w-4 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    {{ $post->author_name }} ({{ $post->author_title }})
                </span>
                <span>•</span>
                <span>{{ $post->published_at?->format('F d, Y') ?? 'Recently Published' }}</span>
                <span>•</span>
                <span class="font-mono text-blue-700 font-bold">{{ $post->reading_time_minutes }} Min Read</span>
            </div>
        </div>
    </header>

    <!-- Main Content & Sidebar Layout -->
    <div class="bg-white py-16 border-b border-slate-200">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Main Article Content -->
                <main class="lg:col-span-8">
                    <!-- Excerpt Lead Box -->
                    <div class="rounded-2xl border border-blue-200 bg-blue-50/60 p-6 text-sm text-blue-950 leading-relaxed font-medium mb-10 italic">
                        {{ $post->excerpt }}
                    </div>

                    <!-- Article Body with Clean Typography -->
                    <div class="prose prose-slate max-w-none text-slate-700 leading-relaxed text-sm sm:text-base space-y-6">
                        {!! Str::markdown($post->content) !!}
                    </div>

                    <!-- Tags -->
                    @if($post->tags->count() > 0)
                        <div class="mt-10 pt-6 border-t border-slate-200 flex flex-wrap items-center gap-2">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Tags:</span>
                            @foreach($post->tags as $tag)
                                <a href="{{ route('blog.tag', $tag->slug) }}" class="rounded-lg bg-slate-100 px-3 py-1 text-xs text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-colors font-medium">
                                    #{{ $tag->name }}
                                </a>
                            @endforeach
                        </div>
                    @endif

                    <!-- Author Bio Card -->
                    <div class="mt-10 rounded-2xl border border-slate-200 bg-slate-50 p-6 flex flex-col sm:flex-row items-center gap-5">
                        <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-blue-700 text-white font-serif text-xl font-bold">
                            {{ substr($post->author_name, 0, 2) }}
                        </div>
                        <div>
                            <span class="text-[10px] font-bold uppercase tracking-wider text-blue-700 block">Published By</span>
                            <h3 class="font-serif text-base font-bold text-slate-900">{{ $post->author_name }}</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                                Principal Investigator at Deep Trace Detective. Providing licensed risk intelligence, matrimonial verification, and court-admissible evidence across India.
                            </p>
                        </div>
                    </div>
                </main>

                <!-- Sidebar -->
                <aside class="lg:col-span-4 space-y-8">
                    <!-- Direct CTA Card -->
                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-7 shadow-xs">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-blue-700 block mb-2">Private Consultation</span>
                        <h3 class="font-serif text-lg font-bold text-slate-900 mb-2">Need Guidance on This Matter?</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-6">
                            Speak with Principal Investigator directly in 100% confidence.
                        </p>
                        <a href="{{ route('consultation') }}" class="block w-full text-center rounded-xl bg-blue-700 py-3 text-xs font-bold uppercase tracking-wider text-white hover:bg-blue-800 transition-all shadow-md">
                            Book Free Case Review
                        </a>
                        <a href="tel:{{ config('agency.phone') }}" class="block w-full text-center rounded-xl border border-slate-300 bg-white py-3 text-xs font-bold text-slate-800 hover:border-blue-600 hover:text-blue-700 transition-all mt-3">
                            Call: {{ config('agency.phone_display') }}
                        </a>
                    </div>

                    <!-- Related Services -->
                    <div class="rounded-3xl border border-slate-200 bg-white p-7 shadow-xs">
                        <h4 class="font-serif text-base font-bold text-slate-900 mb-4 border-b border-slate-100 pb-2">
                            Related Practices
                        </h4>
                        <ul class="space-y-3 text-xs">
                            <li><a href="{{ route('services.show', 'pre-matrimonial-investigation') }}" class="text-slate-700 hover:text-blue-700 block transition-colors font-medium">• Pre-Matrimonial Verification</a></li>
                            <li><a href="{{ route('services.show', 'corporate-investigation') }}" class="text-slate-700 hover:text-blue-700 block transition-colors font-medium">• Corporate Intelligence & Fraud</a></li>
                            <li><a href="{{ route('services.show', 'cyber-crime-digital-forensics') }}" class="text-slate-700 hover:text-blue-700 block transition-colors font-medium">• Cyber Forensics & Audits</a></li>
                            <li><a href="{{ route('services.show', 'asset-tracing') }}" class="text-slate-700 hover:text-blue-700 block transition-colors font-medium">• Asset Tracing & Solvency</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <!-- Section: Related Blogs -->
    <x-sections.related-blogs :posts="$relatedPosts" />

    <!-- Section: Final CTA -->
    <x-sections.final-cta />
</x-app-layout>
