<!-- Top Announcement & Contact Bar -->
<div class="bg-slate-900 text-slate-300 text-xs border-b border-slate-800 hidden md:block">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-2 sm:px-6 lg:px-8">
        <div class="flex items-center gap-6">
            <!-- Office Address in Indore -->
            <div class="flex items-center gap-1.5 hover:text-white transition-colors">
                <svg class="h-3.5 w-3.5 text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <span>6, Vijay Nagar, Near Domino's, Indore, M.P. - 452010</span>
            </div>

            <!-- Confidential Bureau Badge -->
            <div class="hidden xl:flex items-center gap-1.5 text-slate-400">
                <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                <span class="text-slate-300 font-semibold">100% Confidential Private Investigation Bureau</span>
            </div>
        </div>

        <div class="flex items-center gap-5">
            <!-- Timing -->
            <div class="hidden lg:flex items-center gap-1.5 text-slate-400">
                <svg class="h-3.5 w-3.5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Mon - Sat: 9:00 AM - 8:00 PM</span>
            </div>

            <!-- Phone -->
            <a href="tel:{{ config('agency.phone') }}" class="flex items-center gap-1.5 text-white font-medium hover:text-amber-400 transition-colors">
                <svg class="h-3.5 w-3.5 text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <span>{{ config('agency.phone_display', '+91 9004145251') }}</span>
            </a>

            <!-- WhatsApp -->
            <a href="https://wa.me/{{ config('agency.whatsapp') }}?text={{ urlencode(config('agency.whatsapp_message')) }}" target="_blank" rel="noopener noreferrer" class="flex items-center gap-1.5 text-emerald-400 hover:text-emerald-300 font-medium transition-colors">
                <svg class="h-3.5 w-3.5 fill-current" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.301-.15-1.777-.877-2.052-.977-.276-.101-.476-.15-.677.15-.2.3-.776.977-.951 1.177-.175.2-.351.226-.652.075-1.527-.764-2.529-1.365-3.541-3.102-.266-.457.266-.425.761-1.413.084-.175.042-.326-.021-.476-.063-.15-.677-1.63-.927-2.233-.243-.587-.49-.508-.677-.518-.175-.009-.376-.01-.577-.01-.2 0-.526.075-.802.376-.276.301-1.053 1.028-1.053 2.507 0 1.479 1.078 2.908 1.229 3.108.15.2 2.122 3.24 5.141 4.544.718.31 1.278.496 1.715.635.722.23 1.379.197 1.898.12.578-.087 1.777-.727 2.028-1.429.251-.702.251-1.304.175-1.429-.075-.126-.276-.201-.577-.352zM12.04 2C6.516 2 2.026 6.49 2.026 12.015c0 1.954.561 3.784 1.536 5.343L2 22l4.808-1.523a9.98 9.98 0 005.232 1.468h.005c5.523 0 10.013-4.49 10.013-10.016C22.058 6.49 17.568 2 12.04 2z"/>
                </svg>
                <span>WhatsApp</span>
            </a>
        </div>
    </div>
</div>

<!-- Main Sticky Header -->
<header x-data="{ mobileOpen: false, servicesOpen: false, citiesOpen: false, scrolled: false }"
        @scroll.window="scrolled = (window.pageYOffset > 20)"
        :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-md border-b border-slate-200' : 'bg-white border-b border-slate-200/80'"
        class="sticky top-0 z-40 w-full transition-all duration-300">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8 gap-4">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-3 shrink-0 group focus:outline-none">
            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-700 via-blue-800 to-slate-900 text-white shadow-md transition-transform duration-200 group-hover:scale-105 border border-blue-500/30">
                <!-- Deep Trace Emblem -->
                <svg class="h-6 w-6 text-amber-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="7"/>
                    <path d="M21 21l-4.35-4.35"/>
                    <circle cx="11" cy="11" r="3" fill="#D97706" stroke="none"/>
                </svg>
            </span>
            <div class="leading-none">
                <div class="flex items-center gap-1.5">
                    <span class="font-serif text-lg sm:text-xl font-bold tracking-tight text-slate-900 group-hover:text-blue-700 transition-colors">
                        DEEP TRACE
                    </span>
                    <span class="font-serif text-lg sm:text-xl font-bold tracking-tight text-blue-700">
                        DETECTIVE
                    </span>
                </div>
                <span class="block text-[9px] sm:text-[10px] font-bold uppercase tracking-widest text-slate-500 mt-1">
                    Confidential Verification • Indore
                </span>
            </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center gap-1 xl:gap-2 shrink-0">
            <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-semibold rounded-lg transition-colors whitespace-nowrap {{ request()->routeIs('home') ? 'text-blue-700 bg-blue-50/70 font-bold' : 'text-slate-700 hover:text-blue-700 hover:bg-slate-50' }}">
                Home
            </a>

            <!-- Services Mega-Menu Dropdown -->
            <div class="relative" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false" @click.outside="servicesOpen = false">
                <button type="button"
                        @click="servicesOpen = !servicesOpen"
                        class="flex items-center gap-1 px-3 py-2 text-sm font-semibold rounded-lg transition-colors whitespace-nowrap {{ request()->is('services*') ? 'text-blue-700 bg-blue-50/70 font-bold' : 'text-slate-700 hover:text-blue-700 hover:bg-slate-50' }}"
                        :aria-expanded="servicesOpen">
                    <span>Services</span>
                    <svg class="h-4 w-4 transition-transform duration-200" :class="servicesOpen ? 'rotate-180 text-blue-700' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Mega Menu Box -->
                <div x-show="servicesOpen"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 translate-y-2"
                     class="absolute -left-48 top-full mt-2 w-[880px] rounded-2xl border border-slate-200 bg-white p-6 shadow-2xl"
                     style="display: none;">
                    <div class="grid grid-cols-4 gap-6">
                        <!-- Category 1: Background & Matrimonial Verification -->
                        <div>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-blue-800 border-b border-slate-200 pb-2">
                                Background Verification
                            </h3>
                            <ul class="mt-3 space-y-2 text-xs">
                                <li><a href="{{ route('services.show', 'pre-matrimonial-investigation') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Pre-Matrimonial Verification</a></li>
                                <li><a href="{{ route('services.show', 'post-matrimonial-investigation') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Post-Matrimonial Check</a></li>
                                <li><a href="{{ route('services.show', 'extramarital-infidelity-investigation') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Spousal Discretion Probe</a></li>
                                <li><a href="{{ route('services.show', 'divorce-child-custody-evidence') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Child Custody Verification</a></li>
                                <li><a href="{{ route('services.show', 'matrimonial-profile-verification') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Matrimony Profile Audit</a></li>
                                <li><a href="{{ route('services.show', 'pre-relationship-verification') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Pre-Relationship Verification</a></li>
                            </ul>
                        </div>

                        <!-- Category 2: Corporate & Due Diligence -->
                        <div>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-blue-800 border-b border-slate-200 pb-2">
                                Corporate Due Diligence
                            </h3>
                            <ul class="mt-3 space-y-2 text-xs">
                                <li><a href="{{ route('services.show', 'corporate-investigation') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Corporate Fraud Audit</a></li>
                                <li><a href="{{ route('services.show', 'business-due-diligence') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Vendor & Partner Due Diligence</a></li>
                                <li><a href="{{ route('services.show', 'pre-employment-screening') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Pre-Employment Screening</a></li>
                                <li><a href="{{ route('services.show', 'employee-verification-misconduct') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Employee Misconduct Probe</a></li>
                                <li><a href="{{ route('services.show', 'ip-counterfeit-investigation') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">IP & Counterfeit Verification</a></li>
                                <li><a href="{{ route('services.show', 'competitor-market-intelligence') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Market Due Diligence</a></li>
                            </ul>
                        </div>

                        <!-- Category 3: Financial & Forensic -->
                        <div>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-blue-800 border-b border-slate-200 pb-2">
                                Financial & Forensics
                            </h3>
                            <ul class="mt-3 space-y-2 text-xs">
                                <li><a href="{{ route('services.show', 'asset-tracing') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Asset & Solvency Tracing</a></li>
                                <li><a href="{{ route('services.show', 'financial-fraud-investigation') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Financial Fraud Probe</a></li>
                                <li><a href="{{ route('services.show', 'insurance-claim-fraud') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Insurance Claim Verification</a></li>
                                <li><a href="{{ route('services.show', 'cyber-crime-digital-forensics') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Cyber Forensics & Audits</a></li>
                                <li><a href="{{ route('services.show', 'bug-sweeping-tscm') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">TSCM Bug Sweeping</a></li>
                                <li><a href="{{ route('services.show', 'missing-person-tracing') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Skip Tracing & Locating</a></li>
                            </ul>
                        </div>

                        <!-- Category 4: Legal & Field Services -->
                        <div>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-blue-800 border-b border-slate-200 pb-2">
                                Legal & Field Support
                            </h3>
                            <ul class="mt-3 space-y-2 text-xs">
                                <li><a href="{{ route('services.show', 'surveillance-services') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Discreet Field Surveillance</a></li>
                                <li><a href="{{ route('services.show', 'background-verification') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Comprehensive Background Check</a></li>
                                <li><a href="{{ route('services.show', 'property-land-verification') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Property & Land Title Check</a></li>
                                <li><a href="{{ route('services.show', 'tenant-domestic-staff-verification') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Tenant & Staff Verification</a></li>
                                <li><a href="{{ route('services.show', 'litigation-support') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Litigation Evidence Support</a></li>
                                <li><a href="{{ route('services.show', 'witness-court-support') }}" class="text-slate-600 hover:text-blue-700 block transition-colors font-medium">Witness Locate & Court Evidence</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Mega Menu Bottom Bar -->
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                        <span class="flex items-center gap-1.5 text-blue-800 font-semibold">
                            <svg class="h-4 w-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            100% Lawful & Section 63 BSA Court-Admissible Intelligence
                        </span>
                        <a href="{{ route('services.index') }}" class="text-blue-700 hover:text-blue-800 font-bold hover:underline">
                            View All 24 Specializations &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- Cities Dropdown -->
            <div class="relative" @mouseenter="citiesOpen = true" @mouseleave="citiesOpen = false" @click.outside="citiesOpen = false">
                <button type="button"
                        @click="citiesOpen = !citiesOpen"
                        class="flex items-center gap-1 px-3 py-2 text-sm font-semibold rounded-lg transition-colors whitespace-nowrap {{ request()->is('detective-agency-in-*') ? 'text-blue-700 bg-blue-50/70 font-bold' : 'text-slate-700 hover:text-blue-700 hover:bg-slate-50' }}">
                    <span>Locations</span>
                    <svg class="h-4 w-4 transition-transform duration-200" :class="citiesOpen ? 'rotate-180 text-blue-700' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="citiesOpen"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 translate-y-2"
                     class="absolute left-0 top-full mt-2 w-64 rounded-2xl border border-slate-200 bg-white p-3 shadow-xl"
                     style="display: none;">
                    <div class="text-[11px] font-bold uppercase tracking-wider text-blue-800 px-3 py-1.5 border-b border-slate-100">
                        Major Operations Hubs
                    </div>
                    <ul class="mt-2 space-y-1 text-xs">
                        <li><a href="{{ route('cities.show', 'indore') }}" class="flex items-center justify-between px-3 py-2 rounded-lg bg-blue-50/70 text-blue-900 font-bold"><span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-emerald-500"></span>Indore (Central HQ)</span><span class="text-[10px] text-amber-600 font-bold">Vijay Nagar</span></a></li>
                        <li><a href="{{ route('cities.show', 'pune') }}" class="block px-3 py-1.5 rounded-lg hover:bg-blue-50 text-slate-700 hover:text-blue-700 font-medium">Pune (Maharashtra)</a></li>
                        <li><a href="{{ route('cities.show', 'mumbai') }}" class="block px-3 py-1.5 rounded-lg hover:bg-blue-50 text-slate-700 hover:text-blue-700 font-medium">Mumbai (BKC & MMR)</a></li>
                        <li><a href="{{ route('cities.show', 'ahmedabad') }}" class="block px-3 py-1.5 rounded-lg hover:bg-blue-50 text-slate-700 hover:text-blue-700 font-medium">Ahmedabad (Gujarat)</a></li>
                        <li><a href="{{ route('cities.show', 'bengaluru') }}" class="block px-3 py-1.5 rounded-lg hover:bg-blue-50 text-slate-700 hover:text-blue-700 font-medium">Bengaluru (Bangalore)</a></li>
                        <li><a href="{{ route('cities.show', 'bhopal') }}" class="block px-3 py-1.5 rounded-lg hover:bg-blue-50 text-slate-600 hover:text-blue-700 font-medium">Bhopal (M.P.)</a></li>
                        <li><a href="{{ route('cities.show', 'delhi') }}" class="block px-3 py-1.5 rounded-lg hover:bg-blue-50 text-slate-600 hover:text-blue-700 font-medium">Delhi NCR</a></li>
                        <li><a href="{{ route('cities.show', 'jaipur') }}" class="block px-3 py-1.5 rounded-lg hover:bg-blue-50 text-slate-600 hover:text-blue-700 font-medium">Jaipur (Rajasthan)</a></li>
                    </ul>
                </div>
            </div>

            <a href="{{ route('case-studies.index') }}" class="px-3 py-2 text-sm font-semibold rounded-lg transition-colors whitespace-nowrap {{ request()->routeIs('case-studies.*') ? 'text-blue-700 bg-blue-50/70 font-bold' : 'text-slate-700 hover:text-blue-700 hover:bg-slate-50' }}">
                Case Studies
            </a>

            <a href="{{ route('about') }}" class="px-3 py-2 text-sm font-semibold rounded-lg transition-colors whitespace-nowrap {{ request()->routeIs('about') ? 'text-blue-700 bg-blue-50/70 font-bold' : 'text-slate-700 hover:text-blue-700 hover:bg-slate-50' }}">
                About Us
            </a>

            <a href="{{ route('blog.index') }}" class="px-3 py-2 text-sm font-semibold rounded-lg transition-colors whitespace-nowrap {{ request()->routeIs('blog.*') ? 'text-blue-700 bg-blue-50/70 font-bold' : 'text-slate-700 hover:text-blue-700 hover:bg-slate-50' }}">
                Blog
            </a>

            <a href="{{ route('contact') }}" class="px-3 py-2 text-sm font-semibold rounded-lg transition-colors whitespace-nowrap {{ request()->routeIs('contact') ? 'text-blue-700 bg-blue-50/70 font-bold' : 'text-slate-700 hover:text-blue-700 hover:bg-slate-50' }}">
                Contact
            </a>
        </nav>

        <!-- Right Action CTAs -->
        <div class="hidden sm:flex items-center gap-2.5 shrink-0">
            <a href="tel:{{ config('agency.phone') }}"
               class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs font-bold text-slate-800 shadow-xs hover:border-blue-600 hover:text-blue-700 hover:bg-slate-50 transition-all whitespace-nowrap">
                <svg class="h-4 w-4 text-blue-700 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <span>Call Detective</span>
            </a>

            <a href="{{ route('consultation') }}"
               class="inline-flex items-center gap-2 rounded-xl bg-blue-700 px-4 py-2.5 text-xs font-bold text-white shadow-md hover:bg-blue-800 transition-all hover:shadow-lg whitespace-nowrap">
                <span>Free Consultation</span>
                <svg class="h-3.5 w-3.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <button type="button"
                @click="mobileOpen = !mobileOpen"
                class="lg:hidden rounded-xl border border-slate-200 bg-slate-50 p-2 text-slate-700 hover:text-blue-700"
                aria-label="Toggle navigation menu">
            <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Drawer -->
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="lg:hidden border-b border-slate-200 bg-white px-4 py-6 shadow-xl space-y-4"
         style="display: none;">
        
        <!-- Mobile Top Contact Info -->
        <div class="rounded-xl bg-slate-50 p-3 text-xs border border-slate-200 space-y-1.5">
            <div class="font-bold text-slate-900 flex items-center gap-1.5">
                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                Senior Case Director — Principal Investigator
            </div>
            <div class="text-slate-600">📍 6, Vijay Nagar, Near Domino's, Indore</div>
            <div class="text-slate-900 font-semibold flex items-center gap-2 pt-1">
                <a href="tel:{{ config('agency.phone') }}" class="text-blue-700 font-bold underline">📞 {{ config('agency.phone_display') }}</a>
                <span class="text-slate-300">|</span>
                <a href="https://wa.me/{{ config('agency.whatsapp') }}" class="text-emerald-600 font-bold underline">WhatsApp</a>
            </div>
        </div>

        <nav class="flex flex-col space-y-3 text-sm font-semibold">
            <a href="{{ route('home') }}" class="text-slate-800 hover:text-blue-700 py-1">Home</a>
            <a href="{{ route('services.index') }}" class="text-slate-800 hover:text-blue-700 py-1">All 24 Investigation Services</a>
            <a href="{{ route('case-studies.index') }}" class="text-slate-800 hover:text-blue-700 py-1">Case Studies</a>
            <a href="{{ route('about') }}" class="text-slate-800 hover:text-blue-700 py-1">About Deep Trace & Senior Case Director</a>
            <a href="{{ route('how-we-work') }}" class="text-slate-800 hover:text-blue-700 py-1">How We Work (5-Step Protocol)</a>
            <a href="{{ route('why-choose-us') }}" class="text-slate-800 hover:text-blue-700 py-1">Why Choose Us</a>
            <a href="{{ route('blog.index') }}" class="text-slate-800 hover:text-blue-700 py-1">Advisory Blog</a>
            <a href="{{ route('contact') }}" class="text-slate-800 hover:text-blue-700 py-1">Contact Bureau</a>
        </nav>

        <div class="pt-4 border-t border-slate-200 flex flex-col gap-2">
            <a href="{{ route('consultation') }}" class="w-full text-center rounded-xl bg-blue-700 py-3 text-xs font-bold text-white shadow-md">
                Book Confidential Consultation
            </a>
            <a href="tel:{{ config('agency.phone') }}" class="w-full text-center rounded-xl border border-slate-300 bg-white py-3 text-xs font-bold text-slate-800">
                Call Direct: {{ config('agency.phone_display') }}
            </a>
        </div>
    </div>
</header>
