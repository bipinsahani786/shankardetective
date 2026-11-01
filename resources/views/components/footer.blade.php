<footer class="border-t border-slate-200 bg-slate-900 text-slate-300">
    <!-- Main Footer Content -->
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-5">
            <!-- Col 1: About & NAP -->
            <div class="lg:col-span-2 space-y-4">
                <div class="flex items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-700 text-white shadow-md border border-blue-500/30">
                        <svg class="h-5 w-5 text-amber-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="7"/>
                            <path d="M21 21l-4.35-4.35"/>
                            <circle cx="11" cy="11" r="3" fill="#D97706" stroke="none"/>
                        </svg>
                    </span>
                    <div>
                        <span class="font-serif text-xl font-bold tracking-tight text-white block">
                            DEEP TRACE <span class="text-blue-400">DETECTIVE</span>
                        </span>
                        <span class="text-[10px] uppercase tracking-wider text-slate-400 block font-semibold">
                            Headquarters: Indore, Madhya Pradesh
                        </span>
                    </div>
                </div>
                <p class="text-xs leading-relaxed text-slate-400">
                    Deep Trace Detective is a licensed and trusted private investigation agency led by Principal Investigator <strong>Senior Case Director</strong>. We provide 100% confidential personal background checks, matrimonial inquiries, and corporate due diligence across Central and Western India.
                </p>

                <!-- NAP (Name, Address, Phone) -->
                <div class="space-y-2 border-t border-slate-800 pt-4 text-xs">
                    <div class="flex items-start gap-2.5">
                        <svg class="h-4 w-4 text-amber-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-slate-200"><strong>Head Office:</strong> {{ config('agency.address.full') }}</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <svg class="h-4 w-4 text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:{{ config('agency.phone') }}" class="text-white font-medium hover:text-amber-400 transition-colors">
                            {{ config('agency.phone_display') }} (Confidential Helpline)
                        </a>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <svg class="h-4 w-4 text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:{{ config('agency.email') }}" class="text-slate-300 hover:text-amber-400 transition-colors">
                            {{ config('agency.email') }}
                        </a>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <svg class="h-4 w-4 text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-slate-400">{{ config('agency.working_hours.office') }}</span>
                    </div>
                </div>

                <!-- Social Icons -->
                <div class="flex items-center gap-2.5 pt-2">
                    @if(config('agency.social.facebook'))
                    <a href="{{ config('agency.social.facebook') }}" target="_blank" rel="noopener noreferrer" class="rounded-lg border border-slate-700 p-2 text-slate-400 hover:border-blue-500 hover:text-white transition-colors" aria-label="Facebook">
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.688 5H18V0h-3.808C10.597 0 9 1.582 9 4.615V8z"/></svg>
                    </a>
                    @endif
                    @if(config('agency.social.instagram'))
                    <a href="{{ config('agency.social.instagram') }}" target="_blank" rel="noopener noreferrer" class="rounded-lg border border-slate-700 p-2 text-slate-400 hover:border-pink-500 hover:text-white transition-colors" aria-label="Instagram">
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    @endif
                    @if(config('agency.social.linkedin'))
                    <a href="{{ config('agency.social.linkedin') }}" target="_blank" rel="noopener noreferrer" class="rounded-lg border border-slate-700 p-2 text-slate-400 hover:border-blue-500 hover:text-white transition-colors" aria-label="LinkedIn">
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    @endif
                    @if(config('agency.social.twitter'))
                    <a href="{{ config('agency.social.twitter') }}" target="_blank" rel="noopener noreferrer" class="rounded-lg border border-slate-700 p-2 text-slate-400 hover:border-blue-500 hover:text-white transition-colors" aria-label="Twitter">
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    @endif
                    @if(config('agency.social.youtube'))
                    <a href="{{ config('agency.social.youtube') }}" target="_blank" rel="noopener noreferrer" class="rounded-lg border border-slate-700 p-2 text-slate-400 hover:border-red-500 hover:text-white transition-colors" aria-label="YouTube">
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Col 2: Services -->
            <div>
                <h3 class="text-xs font-bold uppercase tracking-wider text-white border-b border-slate-800 pb-2">
                    Core Specializations
                </h3>
                <ul class="mt-4 space-y-2 text-xs">
                    <li><a href="{{ route('services.show', 'pre-matrimonial-investigation') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Pre-Matrimonial Verification</a></li>
                    <li><a href="{{ route('services.show', 'post-matrimonial-investigation') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Post-Matrimonial Check</a></li>
                    <li><a href="{{ route('services.show', 'corporate-investigation') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Corporate Intelligence</a></li>
                    <li><a href="{{ route('services.show', 'business-due-diligence') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Business Due Diligence</a></li>
                    <li><a href="{{ route('services.show', 'asset-tracing') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Asset Tracing & Solvency</a></li>
                    <li><a href="{{ route('services.show', 'cyber-crime-digital-forensics') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Cyber Forensics Audit</a></li>
                    <li><a href="{{ route('services.show', 'bug-sweeping-tscm') }}" class="text-slate-400 hover:text-blue-400 transition-colors">TSCM Bug Sweeping</a></li>
                    <li><a href="{{ route('services.index') }}" class="text-blue-400 font-bold hover:underline block pt-1">All 24 Services &rarr;</a></li>
                </ul>
            </div>

            <!-- Col 3: Operations Hubs -->
            <div>
                <h3 class="text-xs font-bold uppercase tracking-wider text-white border-b border-slate-800 pb-2">
                    Operations Hubs
                </h3>
                <ul class="mt-4 space-y-2 text-xs">
                    <li><a href="{{ route('cities.show', 'indore') }}" class="text-amber-400 font-bold hover:text-white transition-colors flex items-center gap-1.5"><span class="h-1.5 w-1.5 rounded-full bg-amber-400"></span>Indore (Central HQ)</a></li>
                    <li><a href="{{ route('cities.show', 'pune') }}" class="text-slate-300 hover:text-blue-400 transition-colors">Pune (Maharashtra)</a></li>
                    <li><a href="{{ route('cities.show', 'mumbai') }}" class="text-slate-300 hover:text-blue-400 transition-colors">Mumbai (BKC & MMR)</a></li>
                    <li><a href="{{ route('cities.show', 'ahmedabad') }}" class="text-slate-300 hover:text-blue-400 transition-colors">Ahmedabad (Gujarat)</a></li>
                    <li><a href="{{ route('cities.show', 'bengaluru') }}" class="text-slate-300 hover:text-blue-400 transition-colors">Bengaluru (Bangalore)</a></li>
                    <li><a href="{{ route('cities.show', 'bhopal') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Bhopal (M.P.)</a></li>
                    <li><a href="{{ route('cities.show', 'delhi') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Delhi NCR</a></li>
                    <li><a href="{{ route('cities.show', 'jaipur') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Jaipur (Rajasthan)</a></li>
                </ul>
            </div>

            <!-- Col 4: Institutional & Legal -->
            <div>
                <h3 class="text-xs font-bold uppercase tracking-wider text-white border-b border-slate-800 pb-2">
                    Agency & Legal
                </h3>
                <ul class="mt-4 space-y-2 text-xs">
                    <li><a href="{{ route('about') }}" class="text-slate-400 hover:text-blue-400 transition-colors">About Senior Case Director</a></li>
                    <li><a href="{{ route('why-choose-us') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Why Deep Trace</a></li>
                    <li><a href="{{ route('how-we-work') }}" class="text-slate-400 hover:text-blue-400 transition-colors">5-Step Investigation Protocol</a></li>
                    <li><a href="{{ route('case-studies.index') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Investigation Case Studies</a></li>
                    <li><a href="{{ route('faq') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Client FAQs</a></li>
                    <li><a href="{{ route('privacy-policy') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Privacy Policy</a></li>
                    <li><a href="{{ route('terms-and-conditions') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Terms of Engagement</a></li>
                    <li><a href="{{ route('disclaimer-compliance') }}" class="text-slate-400 hover:text-blue-400 transition-colors">Legal & Compliance Policy</a></li>
                    <li><a href="{{ route('html-sitemap') }}" class="text-slate-400 hover:text-blue-400 transition-colors">HTML Sitemap</a></li>
                </ul>
            </div>
        </div>

        <!-- Confidentiality & Investigation Standards -->
        <div class="mt-12 rounded-2xl border border-slate-800 bg-slate-950 p-5 text-xs text-slate-400 leading-relaxed">
            <div class="flex items-start gap-3">
                <span class="text-amber-400 text-sm mt-0.5 font-bold">&#9878;</span>
                <div>
                    <span class="font-bold text-slate-200 block mb-1">Confidentiality & Ethical Investigation Guarantee</span>
                    {{ config('agency.legal_notice') }}
                </div>
            </div>
        </div>

        <!-- Copyright & Bottom Bar -->
        <div class="mt-8 pt-8 border-t border-slate-800 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4 text-center sm:text-left">
            <p>
                &copy; {{ date('Y') }} {{ config('agency.name') }} (Founder: Senior Case Director). All rights reserved.
            </p>
            <p class="flex flex-wrap items-center justify-center gap-2 sm:gap-4">
                <span>Domain: <strong>{{ config('agency.domain', 'deeptracedetective.com') }}</strong></span>
                <span>•</span>
                <a href="{{ route('privacy-policy') }}" class="hover:text-white transition-colors">Privacy</a>
                <span>•</span>
                <a href="{{ route('terms-and-conditions') }}" class="hover:text-white transition-colors">Terms</a>
                <span>•</span>
                <a href="{{ url('/sitemap.xml') }}" class="hover:text-white transition-colors">XML Sitemap</a>
            </p>
        </div>
    </div>
</footer>
