<x-app-layout
    title="HTML Sitemap | Deep Trace Detective Agency"
    description="Complete directory of all pages, 24 investigation services, 8 city bureaus, case studies, and intelligence articles on Deep Trace Detective Agency."
    :breadcrumbs="[['name' => 'HTML Sitemap', 'url' => route('html-sitemap')]]"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[['name' => 'HTML Sitemap', 'url' => route('html-sitemap')]]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        badge="Complete Web Directory"
        title="HTML <span class='text-blue-600'>Sitemap</span>"
        subtitle="Full hierarchical navigation of all investigation services, city offices, intelligence articles, case studies, and corporate policies."
        cta-primary-text="Free Case Consultation"
        cta-secondary-text="Direct Phone Helpline"
    />

    <!-- Section 3: Main Directory -->
    <section class="bg-slate-50 py-16 lg:py-24 border-b border-slate-200">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <!-- Col 1: Core Pages -->
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-3">
                    <h2 class="font-serif text-lg font-bold text-slate-900 border-b border-slate-100 pb-2">Institutional Pages</h2>
                    <ul class="space-y-2 text-xs">
                        <li><a href="{{ route('home') }}" class="text-slate-600 hover:text-blue-600">Home Page</a></li>
                        <li><a href="{{ route('about') }}" class="text-slate-600 hover:text-blue-600">About Us (Senior Case Director)</a></li>
                        <li><a href="{{ route('why-choose-us') }}" class="text-slate-600 hover:text-blue-600">Why Choose Us</a></li>
                        <li><a href="{{ route('how-we-work') }}" class="text-slate-600 hover:text-blue-600">How We Work (Process)</a></li>
                        <li><a href="{{ route('case-studies.index') }}" class="text-slate-600 hover:text-blue-600">Case Studies Directory</a></li>
                        <li><a href="{{ route('testimonials') }}" class="text-slate-600 hover:text-blue-600">Client Testimonials</a></li>
                        <li><a href="{{ route('faq') }}" class="text-slate-600 hover:text-blue-600">Frequently Asked Questions</a></li>
                        <li><a href="{{ route('consultation') }}" class="text-slate-600 hover:text-blue-600">Book Free Consultation</a></li>
                        <li><a href="{{ route('contact') }}" class="text-slate-600 hover:text-blue-600">Contact Us (Indore HQ)</a></li>
                        <li><a href="{{ route('careers') }}" class="text-slate-600 hover:text-blue-600">Careers</a></li>
                        <li><a href="{{ route('privacy-policy') }}" class="text-slate-600 hover:text-blue-600">Privacy Policy</a></li>
                        <li><a href="{{ route('terms-and-conditions') }}" class="text-slate-600 hover:text-blue-600">Terms & Conditions</a></li>
                        <li><a href="{{ route('disclaimer-compliance') }}" class="text-slate-600 hover:text-blue-600">Disclaimer & Compliance</a></li>
                    </ul>
                </div>

                <!-- Col 2: 24 Services -->
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-3 lg:col-span-2">
                    <h2 class="font-serif text-lg font-bold text-slate-900 border-b border-slate-100 pb-2">24 Investigation Services</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-2 text-xs">
                        @foreach($services as $srv)
                            <div>
                                <a href="{{ route('services.show', $srv->slug) }}" class="text-slate-600 hover:text-blue-600">
                                    {{ $srv->title }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Col 3: Cities & Blog -->
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-6">
                    <div class="space-y-3">
                        <h2 class="font-serif text-lg font-bold text-slate-900 border-b border-slate-100 pb-2">City Bureaus</h2>
                        <ul class="space-y-2 text-xs">
                            @foreach($cities as $cty)
                                <li>
                                    <a href="{{ route('cities.show', $cty->slug) }}" class="text-slate-600 hover:text-blue-600">
                                        Detective Agency in {{ $cty->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="space-y-3 pt-4 border-t border-slate-100">
                        <h2 class="font-serif text-lg font-bold text-slate-900 border-b border-slate-100 pb-2">Intelligence Articles</h2>
                        <ul class="space-y-2 text-xs">
                            @foreach($posts->take(6) as $p)
                                <li>
                                    <a href="{{ route('blog.show', $p->slug) }}" class="text-slate-600 hover:text-blue-600 line-clamp-1">
                                        {{ $p->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <x-sections.final-cta />
</x-app-layout>
