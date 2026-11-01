<!-- Top Announcement & Contact Bar -->
<div class="bg-[#0B132B] text-slate-300 text-xs border-b border-slate-800/80 hidden md:block">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-2 sm:px-6 lg:px-8">
        <div class="flex items-center gap-6">
            <!-- Office Address in Indore -->
            <div class="flex items-center gap-2 hover:text-white transition-colors">
                <svg class="h-3.5 w-3.5 text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <span class="tracking-wide">6, Vijay Nagar, Near Domino's, Indore, M.P. - 452010</span>
            </div>

            <!-- Confidential Bureau Badge -->
            <div class="hidden lg:flex items-center gap-2 text-slate-400">
                <span class="h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                <span class="text-slate-300 font-medium">100% Confidential Private Investigation Bureau</span>
            </div>
        </div>

        <div class="flex items-center gap-6">
            <!-- Timing -->
            <div class="hidden lg:flex items-center gap-1.5 text-slate-400">
                <svg class="h-3.5 w-3.5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Mon - Sat: 9:00 AM - 8:00 PM</span>
            </div>

            <!-- Phone -->
            <a href="tel:{{ config('agency.phone') }}" class="flex items-center gap-1.5 text-white font-semibold hover:text-amber-400 transition-colors">
                <svg class="h-3.5 w-3.5 text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <span>{{ config('agency.phone_display', '+91 9004145251') }}</span>
            </a>

            <!-- WhatsApp -->
            <a href="https://wa.me/{{ config('agency.whatsapp') }}?text={{ urlencode(config('agency.whatsapp_message')) }}" target="_blank" rel="noopener noreferrer" class="flex items-center gap-1.5 text-emerald-400 hover:text-emerald-300 font-semibold transition-colors">
                <svg class="h-3.5 w-3.5 fill-current" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.301-.15-1.777-.877-2.052-.977-.276-.101-.476-.15-.677.15-.2.3-.776.977-.951 1.177-.175.2-.351.226-.652.075-1.527-.764-2.529-1.365-3.541-3.102-.266-.457.266-.425.761-1.413.084-.175.042-.326-.021-.476-.063-.15-.677-1.63-.927-2.233-.243-.587-.49-.508-.677-.518-.175-.009-.376-.01-.577-.01-.2 0-.526.075-.802.376-.276.301-1.053 1.028-1.053 2.507 0 1.479 1.078 2.908 1.229 3.108.15.2 2.122 3.24 5.141 4.544.718.31 1.278.496 1.715.635.722.23 1.379.197 1.898.12.578-.087 1.777-.727 2.028-1.429.251-.702.251-1.304.175-1.429-.075-.126-.276-.201-.577-.352zM12.04 2C6.516 2 2.026 6.49 2.026 12.015c0 1.954.561 3.784 1.536 5.343L2 22l4.808-1.523a9.98 9.98 0 005.232 1.468h.005c5.523 0 10.013-4.49 10.013-10.016C22.058 6.49 17.568 2 12.04 2z"/>
                </svg>
                <span>WhatsApp</span>
            </a>
        </div>
    </div>
</div>

<!-- Main Sticky Header -->
<header x-data="{ mobileOpen: false, servicesOpen: false, scrolled: false }"
        @scroll.window="scrolled = (window.pageYOffset > 10)"
        :class="scrolled ? 'bg-white/98 backdrop-blur-md shadow-md border-b border-slate-200' : 'bg-white border-b border-slate-200/90'"
        class="sticky top-0 z-40 w-full transition-all duration-300"
        style="position: -webkit-sticky; position: sticky; top: 0;">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-3 sm:px-6 lg:px-8 h-16 sm:h-20 gap-2">
        <!-- Brand Logo Lockup -->
        <a href="{{ route('home') }}" class="flex items-center gap-2 sm:gap-3.5 shrink min-w-0 group focus:outline-none py-1">
            <span class="flex h-9 w-9 sm:h-11 sm:w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-700 via-blue-800 to-slate-900 text-white shadow-md transition-transform duration-200 group-hover:scale-105 border border-blue-500/30">
                <!-- Deep Trace Emblem -->
                <svg class="h-5 w-5 sm:h-6 sm:w-6 text-amber-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="7"/>
                    <path d="M21 21l-4.35-4.35"/>
                    <circle cx="11" cy="11" r="3" fill="#D97706" stroke="none"/>
                </svg>
            </span>
            <div class="leading-tight min-w-0">
                <div class="flex items-center gap-1 sm:gap-1.5 flex-nowrap">
                    <span class="font-serif text-sm min-[360px]:text-base sm:text-xl lg:text-2xl font-extrabold tracking-tight text-slate-900 group-hover:text-blue-700 transition-colors whitespace-nowrap">
                        DEEP TRACE
                    </span>
                    <span class="font-serif text-sm min-[360px]:text-base sm:text-xl lg:text-2xl font-extrabold tracking-tight text-blue-700 whitespace-nowrap">
                        DETECTIVE
                    </span>
                </div>
                <span class="hidden md:block text-[10px] font-bold uppercase tracking-wider text-slate-500 mt-0.5 whitespace-nowrap">
                    Confidential Verification & Risk Advisory • Indore HQ
                </span>
            </div>
        </a>

        <!-- Desktop Navigation: Spacious, Clean & Authoritative (No Cramping) -->
        <nav class="hidden lg:flex items-center gap-6 xl:gap-8 shrink-0">
            <!-- Home -->
            <a href="{{ route('home') }}"
               class="py-2 text-[15px] font-semibold transition-colors whitespace-nowrap {{ request()->routeIs('home') ? 'text-blue-700 font-bold' : 'text-slate-700 hover:text-blue-700' }}">
                Home
            </a>

            <!-- Services Mega-Menu Dropdown -->
            <div class="relative" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false" @click.outside="servicesOpen = false">
                <button type="button"
                        @click="servicesOpen = !servicesOpen"
                        class="flex items-center gap-1.5 py-2 text-[15px] font-semibold transition-colors whitespace-nowrap {{ request()->is('services*') ? 'text-blue-700 font-bold' : 'text-slate-700 hover:text-blue-700' }}"
                        :aria-expanded="servicesOpen">
                    <span>Services</span>
                    <svg class="h-4 w-4 transition-transform duration-200 text-slate-400" :class="servicesOpen ? 'rotate-180 text-blue-700' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                        <!-- Category 1: Background Verification -->
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

                    <!-- Mega Menu Bottom Bar: Pan-India Operational Bureaus -->
                    <div class="mt-6 pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs">
                        <div class="flex items-center gap-2 text-slate-600">
                            <span class="font-bold text-slate-800 uppercase text-[11px] tracking-wide">Bureaus:</span>
                            <a href="{{ route('cities.show', 'indore') }}" class="text-blue-700 font-bold hover:underline">Indore (HQ)</a>
                            <span class="text-slate-300">•</span>
                            <a href="{{ route('cities.show', 'pune') }}" class="hover:text-blue-700">Pune</a>
                            <span class="text-slate-300">•</span>
                            <a href="{{ route('cities.show', 'mumbai') }}" class="hover:text-blue-700">Mumbai</a>
                            <span class="text-slate-300">•</span>
                            <a href="{{ route('cities.show', 'ahmedabad') }}" class="hover:text-blue-700">Ahmedabad</a>
                            <span class="text-slate-300">•</span>
                            <a href="{{ route('cities.show', 'bengaluru') }}" class="hover:text-blue-700">Bangalore</a>
                        </div>
                        <a href="{{ route('services.index') }}" class="text-blue-700 hover:text-blue-800 font-bold hover:underline shrink-0">
                            View All 24 Specializations &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- About Us -->
            <a href="{{ route('about') }}"
               class="py-2 text-[15px] font-semibold transition-colors whitespace-nowrap {{ request()->routeIs('about') ? 'text-blue-700 font-bold' : 'text-slate-700 hover:text-blue-700' }}">
                About Us
            </a>

            <!-- Case Studies -->
            <a href="{{ route('case-studies.index') }}"
               class="py-2 text-[15px] font-semibold transition-colors whitespace-nowrap {{ request()->routeIs('case-studies.*') ? 'text-blue-700 font-bold' : 'text-slate-700 hover:text-blue-700' }}">
                Case Studies
            </a>

            <!-- Blog -->
            <a href="{{ route('blog.index') }}"
               class="py-2 text-[15px] font-semibold transition-colors whitespace-nowrap {{ request()->routeIs('blog.*') ? 'text-blue-700 font-bold' : 'text-slate-700 hover:text-blue-700' }}">
                Blog
            </a>

            <!-- Contact -->
            <a href="{{ route('contact') }}"
               class="py-2 text-[15px] font-semibold transition-colors whitespace-nowrap {{ request()->routeIs('contact') ? 'text-blue-700 font-bold' : 'text-slate-700 hover:text-blue-700' }}">
                Contact
            </a>
        </nav>

        <!-- Right Action CTAs: High-Converting & Perfectly Spaced -->
        <div class="hidden sm:flex items-center gap-3 shrink-0">
            <!-- Direct Call Pill -->
            <a href="tel:{{ config('agency.phone') }}"
               class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-3.5 py-2 text-xs sm:text-sm font-semibold text-slate-800 shadow-xs hover:border-blue-600 hover:text-blue-700 transition-colors whitespace-nowrap">
                <svg class="h-4 w-4 text-blue-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <span>Call Detective</span>
            </a>

            <!-- Primary Consultation Button -->
            <a href="{{ route('consultation') }}"
               @click.prevent="$dispatch('open-consultation-modal')"
               class="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-blue-700 to-blue-800 px-4 sm:px-5 py-2 text-xs sm:text-sm font-bold text-white shadow-md shadow-blue-700/20 hover:from-blue-800 hover:to-blue-900 hover:shadow-lg transition-all duration-200 whitespace-nowrap cursor-pointer">
                <span>Free Consultation</span>
                <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <button type="button"
                @click="mobileOpen = !mobileOpen"
                class="lg:hidden shrink-0 rounded-xl border border-slate-200 bg-slate-50 p-1.5 sm:p-2 text-slate-700 hover:text-blue-700 focus:outline-none transition-colors"
                aria-label="Toggle navigation menu">
            <svg x-show="!mobileOpen" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="mobileOpen" class="h-5 w-5 sm:h-6 sm:w-6 text-rose-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
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
         class="lg:hidden border-b border-slate-200 bg-white px-3 sm:px-6 py-4 sm:py-5 shadow-2xl space-y-4 max-h-[calc(100vh-4.5rem)] overflow-y-auto w-full"
         style="display: none;">
        
        <!-- Mobile Top Contact Info -->
        <div class="rounded-xl bg-slate-50 p-3.5 text-xs border border-slate-200 space-y-2">
            <div class="font-bold text-slate-900 flex items-center gap-1.5">
                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                Senior Case Directorate — Deep Trace Detective
            </div>
            <div class="text-slate-600">📍 6, Vijay Nagar, Near Domino's, Indore, M.P. - 452010</div>
            <div class="text-slate-900 font-semibold flex items-center gap-3 pt-1">
                <a href="tel:{{ config('agency.phone') }}" class="text-blue-700 font-bold underline flex items-center gap-1">
                    📞 {{ config('agency.phone_display') }}
                </a>
                <span class="text-slate-300">|</span>
                <a href="https://wa.me/{{ config('agency.whatsapp') }}" class="text-emerald-600 font-bold underline">WhatsApp</a>
            </div>
        </div>

        <!-- Navigation Links -->
        <nav class="flex flex-col space-y-2 text-sm font-semibold divide-y divide-slate-100">
            <a href="{{ route('home') }}" class="text-slate-800 hover:text-blue-700 py-2">Home</a>
            <a href="{{ route('services.index') }}" class="text-slate-800 hover:text-blue-700 py-2">All 24 Investigation Services</a>
            <a href="{{ route('about') }}" class="text-slate-800 hover:text-blue-700 py-2">About Deep Trace</a>
            <a href="{{ route('case-studies.index') }}" class="text-slate-800 hover:text-blue-700 py-2">Case Studies</a>
            <a href="{{ route('how-we-work') }}" class="text-slate-800 hover:text-blue-700 py-2">How We Work (5-Step Protocol)</a>
            <a href="{{ route('why-choose-us') }}" class="text-slate-800 hover:text-blue-700 py-2">Why Choose Us</a>
            <a href="{{ route('blog.index') }}" class="text-slate-800 hover:text-blue-700 py-2">Advisory Blog</a>
            <a href="{{ route('contact') }}" class="text-slate-800 hover:text-blue-700 py-2">Contact Bureau</a>
        </nav>

        <!-- City Bureaus Accordion/List for Mobile -->
        <div class="pt-3 border-t border-slate-200">
            <div class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-2">Regional Bureaus:</div>
            <div class="flex flex-wrap gap-2 text-xs">
                <a href="{{ route('cities.show', 'indore') }}" class="px-2.5 py-1 rounded-lg bg-blue-50 text-blue-800 font-bold border border-blue-200">Indore (HQ)</a>
                <a href="{{ route('cities.show', 'pune') }}" class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 hover:bg-blue-50">Pune</a>
                <a href="{{ route('cities.show', 'mumbai') }}" class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 hover:bg-blue-50">Mumbai</a>
                <a href="{{ route('cities.show', 'ahmedabad') }}" class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 hover:bg-blue-50">Ahmedabad</a>
                <a href="{{ route('cities.show', 'bengaluru') }}" class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 hover:bg-blue-50">Bangalore</a>
            </div>
        </div>

        <div class="pt-3 border-t border-slate-200 flex flex-col gap-2">
            <a href="{{ route('consultation') }}"
               @click.prevent="mobileOpen = false; $dispatch('open-consultation-modal')"
               class="w-full text-center rounded-xl bg-blue-700 py-3 text-xs font-bold text-white shadow-md cursor-pointer hover:bg-blue-800 transition-colors">
                Book Confidential Consultation
            </a>
            <a href="tel:{{ config('agency.phone') }}" class="w-full text-center rounded-xl border border-slate-300 bg-white py-3 text-xs font-bold text-slate-800">
                Call Direct: {{ config('agency.phone_display') }}
            </a>
        </div>
    </div>
</header>
