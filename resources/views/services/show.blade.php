<x-app-layout
    :title="$service->meta_title ?? ($service->title . ' | Deep Trace Detective')"
    :description="$service->meta_description ?? $service->short_description"
    :service="$service"
    :breadcrumbs="[
        ['name' => 'All Services', 'url' => route('services.index')],
        ['name' => $service->category, 'url' => route('services.index', ['category' => $service->category])],
        ['name' => $service->title, 'url' => route('services.show', $service->slug)]
    ]"
    :faqs="$service->faq_items ?? []"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[
        ['name' => 'All Services', 'url' => route('services.index')],
        ['name' => $service->category, 'url' => route('services.index', ['category' => $service->category])],
        ['name' => $service->title, 'url' => route('services.show', $service->slug)]
    ]" />

    @php
        $serviceImages = [
            'bug-sweeping-tscm' => 'images/services/tscm-bug-sweeping.jpg',
            'cyber-crime-investigation' => 'images/services/cyber-forensics.jpg',
            'digital-forensics-investigation' => 'images/services/cyber-forensics.jpg',
            'social-media-fraud-investigation' => 'images/services/cyber-forensics.jpg',
            'pre-matrimonial-investigation' => 'images/services/pre-matrimonial.jpg',
            'post-matrimonial-investigation' => 'images/services/pre-matrimonial.jpg',
            'loyalty-test-investigation' => 'images/hero/hero-consultation.jpg',
            'divorce-case-investigation' => 'images/hero/hero-consultation.jpg',
            'child-custody-investigation' => 'images/hero/hero-consultation.jpg',
            'missing-person-investigation' => 'images/hero/hero-detective.jpg',
            'shadow-surveillance' => 'images/services/surveillance-optics.jpg',
            'undercover-operations' => 'images/services/surveillance-optics.jpg',
            'employee-background-check' => 'images/services/background-check.jpg',
            'corporate-due-diligence' => 'images/services/corporate-due-diligence.jpg',
            'asset-verification' => 'images/services/asset-tracing.jpg',
            'intellectual-property-theft' => 'images/services/corporate-due-diligence.jpg',
            'fraud-embezzlement-investigation' => 'images/services/corporate-due-diligence.jpg',
            'mystery-shopping-investigation' => 'images/services/surveillance-optics.jpg',
            'tenant-verification' => 'images/services/background-check.jpg',
            'insurance-fraud-investigation' => 'images/services/corporate-due-diligence.jpg',
            'vendor-due-diligence' => 'images/services/corporate-due-diligence.jpg',
            'skip-tracing-investigation' => 'images/hero/hero-detective.jpg',
            'sting-operations' => 'images/services/surveillance-optics.jpg',
            'counterfeit-investigation' => 'images/services/corporate-due-diligence.jpg',
        ];
        $heroImage = $serviceImages[$service->slug] ?? 'images/services/tscm-bug-sweeping.jpg';
    @endphp

    <!-- Section 2: Dedicated Service Header Dossier Hero -->
    <section class="relative overflow-hidden bg-gradient-to-b from-blue-50/50 via-white to-slate-50/60 py-10 lg:py-16 border-b border-slate-200">
        <!-- Subtle Background Dot Pattern -->
        <div class="absolute inset-0 bg-[radial-gradient(#2563EB_1px,transparent_1px)] [background-size:28px_28px] opacity-[0.03] pointer-events-none"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-12 lg:gap-12">
                
                <!-- Left Column (7 Cols): Service Overview & Specs -->
                <div class="lg:col-span-7">
                    <!-- Category & Confidentiality Pill -->
                    <div class="flex flex-wrap items-center gap-2 mb-4">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-100 text-blue-900 border border-blue-200 px-3 py-1 text-xs font-bold uppercase tracking-wider">
                            <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                            {{ $service->category }}
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 text-emerald-800 border border-emerald-200 px-3 py-1 text-xs font-bold">
                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            100% Strict NDA Protection
                        </span>
                        <span class="inline-flex items-center rounded-full bg-slate-100 text-slate-700 border border-slate-200 px-3 py-1 text-xs font-mono font-semibold">
                            Service #0{{ $service->order ?? 1 }}
                        </span>
                    </div>

                    <!-- Main Service Title -->
                    <h1 class="font-serif text-3xl sm:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
                        {{ $service->title }}
                    </h1>

                    <!-- Subheadline -->
                    <p class="mt-4 text-base sm:text-lg text-slate-600 leading-relaxed font-normal">
                        {{ $service->hero_subheadline ?? $service->short_description }}
                    </p>

                    <!-- Service Specifications Matrix -->
                    <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 pt-6 border-t border-slate-200">
                        <div class="rounded-xl border border-slate-200 bg-white p-3.5 shadow-2xs">
                            <div class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Turnaround</div>
                            <div class="text-xs sm:text-sm font-bold text-slate-900 mt-0.5">5 to 7 Days</div>
                            <div class="text-[10px] text-emerald-600 font-semibold mt-0.5">72h Express Priority</div>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-white p-3.5 shadow-2xs">
                            <div class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Confidentiality</div>
                            <div class="text-xs sm:text-sm font-bold text-slate-900 mt-0.5">Binding NDA</div>
                            <div class="text-[10px] text-blue-700 font-semibold mt-0.5">Anonymous Codes</div>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-white p-3.5 shadow-2xs">
                            <div class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Deliverable</div>
                            <div class="text-xs sm:text-sm font-bold text-slate-900 mt-0.5">Official Dossier</div>
                            <div class="text-[10px] text-purple-700 font-semibold mt-0.5">Video & Time Logs</div>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-white p-3.5 shadow-2xs">
                            <div class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Jurisdiction</div>
                            <div class="text-xs sm:text-sm font-bold text-slate-900 mt-0.5">Indore & Pan-India</div>
                            <div class="text-[10px] text-amber-700 font-semibold mt-0.5">8 Regional Hubs</div>
                        </div>
                    </div>

                    <!-- CTAs -->
                    <div class="mt-8 flex flex-wrap items-center gap-3">
                        <a href="{{ route('consultation') }}"
                           @click.prevent="$dispatch('open-consultation-modal', { service: '{{ addslashes($service->title) }}' })"
                           class="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-blue-700 to-blue-800 hover:from-blue-800 hover:to-blue-900 px-6 py-3.5 text-sm font-bold text-white shadow-md shadow-blue-900/20 transition-all cursor-pointer">
                            <span>Book Consultation for This Service</span>
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>

                        <a href="tel:{{ config('agency.phone') }}"
                           class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white hover:border-blue-600 hover:text-blue-700 px-5 py-3.5 text-sm font-bold text-slate-800 shadow-2xs transition-colors">
                            <svg class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>Call Case Desk: {{ config('agency.phone_display') }}</span>
                        </a>
                    </div>
                </div>

                <!-- Right Column (5 Cols): Case Directorate Visual Showcase & Fast Intake -->
                <div class="lg:col-span-5">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <!-- Main Frame -->
                        <div class="overflow-hidden rounded-3xl border border-slate-200/90 bg-white p-3.5 shadow-xl shadow-slate-200/60 transition-all hover:shadow-2xl">
                            <!-- Visual Service Imagery -->
                            <div class="relative overflow-hidden rounded-2xl aspect-[16/10] bg-slate-900 group">
                                <img src="{{ asset($heroImage) }}"
                                     alt="{{ $service->title }} - Deep Trace Detective"
                                     class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                     loading="eager"
                                     fetchpriority="high">
                                
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent"></div>
                                
                                <!-- Top-Left Live Status Badge -->
                                <div class="absolute top-3 left-3 flex items-center gap-1.5 rounded-full bg-slate-900/85 backdrop-blur-md px-3 py-1 text-[11px] font-bold text-white border border-white/10 shadow-sm">
                                    <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                    <span>Live Desk Active</span>
                                </div>

                                <!-- Top-Right Hub Badge -->
                                <div class="absolute top-3 right-3 rounded-full bg-blue-600/90 backdrop-blur-md px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-white border border-blue-400/30">
                                    Indore HQ • 8 Hubs
                                </div>

                                <!-- Bottom Info on Image -->
                                <div class="absolute bottom-3 left-3 right-3 text-white">
                                    <span class="text-[10px] font-bold uppercase tracking-wider text-amber-400 block mb-0.5">
                                        Principal Investigator Directorate
                                    </span>
                                    <h3 class="font-serif text-base sm:text-lg font-bold leading-tight drop-shadow-sm text-white">
                                        {{ $service->title }}
                                    </h3>
                                    <p class="text-[11px] text-slate-300 mt-0.5 line-clamp-1">
                                        Strict NDA Protection • Legal & Court-Admissible Dossier
                                    </p>
                                </div>
                            </div>

                            <!-- Fast-Action Consultation Suite -->
                            <div class="mt-3.5 p-3 rounded-2xl bg-slate-50 border border-slate-200/80 space-y-3">
                                <div class="flex items-center justify-between text-xs">
                                    <span class="font-bold text-slate-800 flex items-center gap-1.5">
                                        <svg class="h-3.5 w-3.5 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Confidential Inquiry Desk
                                    </span>
                                    <span class="text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                                        Direct Response
                                    </span>
                                </div>

                                <!-- 2 Fast Action Buttons -->
                                <div class="grid grid-cols-2 gap-2">
                                    <!-- WhatsApp Direct -->
                                    <a href="https://wa.me/919004145251?text={{ urlencode('Hello Deep Trace Detective, I need confidential assistance regarding ' . $service->title . '.') }}"
                                       target="_blank"
                                       class="inline-flex items-center justify-center gap-1.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white px-3 py-2.5 text-xs font-bold transition shadow-xs">
                                        <svg class="h-4 w-4 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                        </svg>
                                        <span>WhatsApp</span>
                                    </a>

                                    <!-- Phone Direct -->
                                    <a href="tel:{{ config('agency.phone') }}"
                                       class="inline-flex items-center justify-center gap-1.5 rounded-xl bg-blue-700 hover:bg-blue-800 text-white px-3 py-2.5 text-xs font-bold transition shadow-xs">
                                        <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                        <span>Call HQ</span>
                                    </a>
                                </div>

                                <!-- Trust Micro-Badges -->
                                <div class="pt-1 border-t border-slate-200/70 flex items-center justify-between text-[11px] text-slate-500">
                                    <span class="flex items-center gap-1 text-slate-700 font-medium">
                                        <svg class="h-3.5 w-3.5 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                        100% Strict NDA
                                    </span>
                                    <span>•</span>
                                    <span class="flex items-center gap-1 text-slate-700 font-medium">
                                        <svg class="h-3.5 w-3.5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                        Court Proof
                                    </span>
                                    <span>•</span>
                                    <span class="text-amber-800 font-semibold">
                                        Indore HQ
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Radar Badge -->
                        <div class="absolute -bottom-3 -right-3 rounded-2xl border border-blue-200 bg-blue-700 text-white px-3 py-1.5 shadow-lg hidden sm:flex items-center gap-1.5">
                            <img src="{{ asset('images/illustrations/deep-trace-radar.svg') }}" alt="Radar" class="h-4 w-4">
                            <span class="text-[11px] font-bold">Deep Trace Protocol</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 3: 2-Column Content Dossier & Sticky Intake Sidebar -->
    <div class="py-12 lg:py-20 bg-slate-50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                
                <!-- LEFT COLUMN: Comprehensive Service Specifications (8 cols) -->
                <div class="lg:col-span-8 space-y-10">
                    
                    <!-- 1. Executive Summary & Practice Scope -->
                    <div class="rounded-3xl border border-slate-200 bg-white p-7 sm:p-9 shadow-sm">
                        <div class="flex items-center gap-2.5 text-xs font-bold uppercase tracking-wider text-blue-700 mb-3">
                            <span class="flex h-6 w-6 items-center justify-center rounded-lg bg-blue-50 text-blue-700">
                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </span>
                            <span>Service Overview & Investigative Scope</span>
                        </div>
                        <h2 class="font-serif text-2xl sm:text-3xl font-bold text-slate-900 leading-snug">
                            Understanding {{ $service->title }}
                        </h2>
                        <div class="mt-4 text-sm sm:text-base text-slate-700 leading-relaxed space-y-4">
                            <p class="font-medium text-slate-900 bg-blue-50/50 p-4 rounded-xl border border-blue-100">
                                {{ $service->short_description }}
                            </p>
                            @if(!empty($service->overview))
                                <p class="text-slate-600 leading-relaxed">
                                    {{ $service->overview }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <!-- 2. Critical Warning Signs / Why Needed -->
                    @if(!empty($service->why_needed) && count($service->why_needed) > 0)
                        <div class="rounded-3xl border border-slate-200 bg-white p-7 sm:p-9 shadow-sm">
                            <div class="flex items-center gap-2.5 text-xs font-bold uppercase tracking-wider text-amber-700 mb-3">
                                <span class="flex h-6 w-6 items-center justify-center rounded-lg bg-amber-50 text-amber-700">
                                    <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                                </span>
                                <span>When Factual Clarity Becomes Urgent</span>
                            </div>
                            <h2 class="font-serif text-2xl font-bold text-slate-900 leading-snug">
                                Situations That Require {{ $service->title }}
                            </h2>
                            <p class="mt-2 text-xs sm:text-sm text-slate-600">
                                The most frequent triggers that prompt clients to initiate this confidential inquiry:
                            </p>

                            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                @foreach($service->why_needed as $reason)
                                    <div class="rounded-2xl border border-slate-200 bg-slate-50/60 p-4 flex items-start gap-3 hover:border-blue-500 hover:bg-white transition-all shadow-2xs">
                                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg bg-amber-100 text-amber-800 mt-0.5 font-bold text-xs">
                                            &excl;
                                        </span>
                                        <p class="text-xs font-semibold text-slate-800 leading-relaxed">
                                            {{ is_array($reason) ? ($reason['title'] ?? $reason['desc'] ?? '') : $reason }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- 3. Granular Parameters Investigated (Checklist) -->
                    @if(!empty($service->investigation_scope) && count($service->investigation_scope) > 0)
                        <div class="rounded-3xl border border-slate-200 bg-white p-7 sm:p-9 shadow-sm">
                            <div class="flex items-center gap-2.5 text-xs font-bold uppercase tracking-wider text-emerald-700 mb-3">
                                <span class="flex h-6 w-6 items-center justify-center rounded-lg bg-emerald-50 text-emerald-700">
                                    <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </span>
                                <span>Verification Checklist</span>
                            </div>
                            <h2 class="font-serif text-2xl font-bold text-slate-900 leading-snug">
                                Parameters Examined in Every Case
                            </h2>
                            <p class="mt-2 text-xs sm:text-sm text-slate-600">
                                Standard verification elements cross-checked with official documentation and physical field intelligence:
                            </p>

                            <div class="mt-6 grid grid-cols-1 gap-3">
                                @foreach($service->investigation_scope as $scopeItem)
                                    <div class="flex items-start gap-3.5 rounded-xl border border-slate-200 bg-slate-50/40 p-4 hover:bg-white hover:border-emerald-500 transition-colors">
                                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-emerald-700 font-bold text-xs">
                                            ✓
                                        </span>
                                        <div class="text-xs sm:text-sm font-semibold text-slate-800 leading-relaxed">
                                            {{ is_array($scopeItem) ? ($scopeItem['title'] ?? $scopeItem['desc'] ?? '') : $scopeItem }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- 4. Lawful Methodology & Tools -->
                    @if(!empty($service->methods_tools) && count($service->methods_tools) > 0)
                        <div class="rounded-3xl border border-slate-200 bg-white p-7 sm:p-9 shadow-sm">
                            <div class="flex items-center gap-2.5 text-xs font-bold uppercase tracking-wider text-blue-700 mb-3">
                                <span class="flex h-6 w-6 items-center justify-center rounded-lg bg-blue-50 text-blue-700">
                                    <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                                </span>
                                <span>Investigative Standards</span>
                            </div>
                            <h2 class="font-serif text-2xl font-bold text-slate-900 leading-snug">
                                Fieldcraft & Legitimate Methods Used
                            </h2>
                            <p class="mt-2 text-xs sm:text-sm text-slate-600">
                                Operated strictly within the framework of Indian law (DPDP Act 2023 & BSA) without hacking or unauthorized taps:
                            </p>

                            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                @foreach($service->methods_tools as $tool)
                                    <div class="rounded-2xl border border-slate-200 bg-slate-50/60 p-4 flex items-start gap-3">
                                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg bg-blue-100 text-blue-700 mt-0.5">
                                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                        </span>
                                        <p class="text-xs font-semibold text-slate-800 leading-relaxed">
                                            {{ is_array($tool) ? ($tool['title'] ?? $tool['desc'] ?? '') : $tool }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- 5. 4-Stage Execution Protocol -->
                    @if(!empty($service->process_steps) && count($service->process_steps) > 0)
                        <div class="rounded-3xl border border-slate-200 bg-white p-7 sm:p-9 shadow-sm">
                            <div class="flex items-center gap-2.5 text-xs font-bold uppercase tracking-wider text-blue-700 mb-3">
                                <span class="flex h-6 w-6 items-center justify-center rounded-lg bg-blue-50 text-blue-700">
                                    <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </span>
                                <span>Systematic Execution Protocol</span>
                            </div>
                            <h2 class="font-serif text-2xl font-bold text-slate-900 leading-snug">
                                How We Handle Your {{ $service->title }}
                            </h2>

                            <div class="mt-6 space-y-4">
                                @foreach($service->process_steps as $step)
                                    <div class="flex gap-4 p-4 rounded-2xl border border-slate-200 bg-slate-50/60 hover:bg-white hover:border-blue-500 transition-colors">
                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-blue-700 text-white font-extrabold text-sm shadow-xs">
                                            {{ $step['step'] ?? $loop->iteration }}
                                        </div>
                                        <div>
                                            <h3 class="text-sm font-bold text-slate-900">{{ $step['title'] ?? '' }}</h3>
                                            <p class="mt-1 text-xs text-slate-600 leading-relaxed">{{ $step['desc'] ?? '' }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- 6. Deliverables: What You Receive -->
                    @if(!empty($service->deliverables) && count($service->deliverables) > 0)
                        <div class="rounded-3xl border-2 border-blue-800 bg-gradient-to-br from-blue-900 via-blue-950 to-slate-900 text-white p-7 sm:p-9 shadow-lg">
                            <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-amber-400 mb-3">
                                <span>Official Deliverables Dossier</span>
                            </div>
                            <h2 class="font-serif text-2xl sm:text-3xl font-bold text-white">
                                What You Receive at Case Conclusion
                            </h2>
                            <p class="mt-2 text-xs sm:text-sm text-blue-200">
                                Sealed and encrypted evidence package delivered exclusively to you under chain-of-custody protocols:
                            </p>

                            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                @foreach($service->deliverables as $deliverable)
                                    <div class="rounded-xl border border-blue-800/60 bg-white/5 backdrop-blur-xs p-4 flex items-start gap-3">
                                        <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-amber-400 text-slate-950 font-bold text-xs">
                                            ✓
                                        </span>
                                        <p class="text-xs font-medium text-slate-200 leading-relaxed">
                                            {{ is_array($deliverable) ? ($deliverable['title'] ?? '') : $deliverable }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- 7. Service Specific FAQs -->
                    @if(!empty($service->faq_items) && count($service->faq_items) > 0)
                        <div class="rounded-3xl border border-slate-200 bg-white p-7 sm:p-9 shadow-sm" x-data="{ active: null }">
                            <div class="flex items-center gap-2.5 text-xs font-bold uppercase tracking-wider text-blue-700 mb-3">
                                <span class="flex h-6 w-6 items-center justify-center rounded-lg bg-blue-50 text-blue-700 font-bold text-xs">?</span>
                                <span>Specific Clarifications</span>
                            </div>
                            <h2 class="font-serif text-2xl font-bold text-slate-900 leading-snug">
                                FAQs About {{ $service->title }}
                            </h2>

                            <div class="mt-6 space-y-3">
                                @foreach($service->faq_items as $index => $item)
                                    <div class="rounded-2xl border border-slate-200 bg-slate-50/50 overflow-hidden">
                                        <button type="button"
                                                @click="active = (active === {{ $index }} ? null : {{ $index }})"
                                                class="w-full text-left px-5 py-4 flex items-center justify-between text-xs sm:text-sm font-bold text-slate-900 hover:text-blue-700 transition-colors">
                                            <span>{{ $item['q'] ?? '' }}</span>
                                            <span class="text-blue-600 font-bold ml-3 text-base" x-text="active === {{ $index }} ? '−' : '+'"></span>
                                        </button>
                                        <div x-show="active === {{ $index }}" x-collapse class="px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-200/60 pt-3 bg-white">
                                            {{ $item['a'] ?? '' }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- 8. Complementary Investigation Services Grid (Full-card Clickable!) -->
                    @if(!empty($relatedServices) && count($relatedServices) > 0)
                        <div class="pt-6">
                            <div class="flex items-center justify-between mb-6">
                                <div>
                                    <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Complementary Capabilities</span>
                                    <h3 class="font-serif text-xl sm:text-2xl font-bold text-slate-900 mt-1">
                                        Related Investigation Services
                                    </h3>
                                </div>
                                <a href="{{ route('services.index') }}" class="text-xs font-bold text-blue-700 hover:underline">
                                    All 24 Services &rarr;
                                </a>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                                @foreach($relatedServices as $rel)
                                    <a href="{{ route('services.show', $rel->slug) }}"
                                       class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-2xs hover:border-blue-600 hover:shadow-md transition-all flex flex-col justify-between block">
                                        <div>
                                            <span class="rounded bg-blue-50 px-2 py-0.5 text-[10px] font-bold uppercase text-blue-800 border border-blue-200">
                                                {{ $rel->category }}
                                            </span>
                                            <h4 class="font-serif text-sm font-bold text-slate-900 group-hover:text-blue-700 transition-colors mt-3">
                                                {{ $rel->title }}
                                            </h4>
                                            <p class="mt-1.5 text-xs text-slate-500 line-clamp-2">
                                                {{ $rel->short_description }}
                                            </p>
                                        </div>
                                        <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-blue-700 group-hover:text-blue-800">
                                            <span>Explore Dossier</span>
                                            <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>

                <!-- RIGHT COLUMN: Sticky Dedicated Case Intake Sidebar (4 cols) -->
                <div class="lg:col-span-4 space-y-6">
                    <div class="sticky top-24 space-y-6">
                        
                        <!-- 1. Dedicated Case Intake Card -->
                        <div class="rounded-3xl border border-slate-200 bg-white p-6 sm:p-7 shadow-lg shadow-slate-200/50">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                <span class="text-[11px] font-bold uppercase tracking-wider text-emerald-700">
                                    Confidential Priority Intake
                                </span>
                            </div>

                            <h3 class="font-serif text-lg font-bold text-slate-900">
                                Inquire About {{ $service->title }}
                            </h3>
                            <p class="mt-1 text-xs text-slate-500 leading-relaxed">
                                Discuss parameters directly with Senior Case Directorate. 100% confidential under written NDA.
                            </p>

                            <!-- Mini Inline Inquiry Form -->
                            <form action="{{ route('leads.store') }}" method="POST" class="mt-5 space-y-4">
                                @csrf
                                <input type="hidden" name="service_requested" value="{{ $service->title }}">

                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1">Your Name / Confidential Alias *</label>
                                    <input type="text" name="name" required placeholder="e.g., Client / Anonymous"
                                           class="w-full rounded-xl border border-slate-300 bg-slate-50/50 px-3.5 py-2.5 text-xs text-slate-900 focus:bg-white focus:border-blue-600 outline-none">
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1">Direct Phone / WhatsApp *</label>
                                    <input type="tel" name="phone" required placeholder="e.g., +91 98765 43210"
                                           class="w-full rounded-xl border border-slate-300 bg-slate-50/50 px-3.5 py-2.5 text-xs text-slate-900 focus:bg-white focus:border-blue-600 outline-none">
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1">City / Target Location</label>
                                    <input type="text" name="city" placeholder="e.g., Indore, Pune, Mumbai"
                                           class="w-full rounded-xl border border-slate-300 bg-slate-50/50 px-3.5 py-2.5 text-xs text-slate-900 focus:bg-white focus:border-blue-600 outline-none">
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1">Urgency Priority</label>
                                    <select name="urgency" class="w-full rounded-xl border border-slate-300 bg-slate-50/50 px-3.5 py-2.5 text-xs text-slate-900 focus:bg-white focus:border-blue-600 outline-none">
                                        <option value="Standard">Standard (5 to 7 Days)</option>
                                        <option value="Within 24 Hours">Urgent (Within 24 Hours)</option>
                                        <option value="Emergency">Emergency (Immediate Operative Deployment)</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1">Confidential Brief (Optional)</label>
                                    <textarea name="message" rows="2" placeholder="Brief outline of your inquiry..."
                                              class="w-full rounded-xl border border-slate-300 bg-slate-50/50 px-3.5 py-2 text-xs text-slate-900 focus:bg-white focus:border-blue-600 outline-none"></textarea>
                                </div>

                                <button type="submit" class="w-full rounded-xl bg-gradient-to-r from-blue-700 to-blue-800 hover:from-blue-800 hover:to-blue-900 py-3 text-xs font-bold text-white shadow-md shadow-blue-800/20 transition-all cursor-pointer">
                                    Submit Case Brief Confidentially &rarr;
                                </button>
                            </form>

                            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-center gap-1.5 text-[10px] text-slate-500 font-medium">
                                <svg class="w-3.5 h-3.5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                <span>100% Strict NDA • No Third-Party Disclosure</span>
                            </div>
                        </div>

                        <!-- 2. Direct Directorate Helpline Card -->
                        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-2xs space-y-4">
                            <div class="text-xs font-bold uppercase tracking-wider text-slate-400">Direct Case Desk</div>
                            <div class="flex items-center gap-3">
                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-100 text-blue-700 shrink-0 font-bold">
                                    📞
                                </div>
                                <div>
                                    <div class="text-xs text-slate-500">Helpline & WhatsApp</div>
                                    <a href="tel:{{ config('agency.phone') }}" class="text-sm font-bold text-slate-900 hover:text-blue-700">
                                        {{ config('agency.phone_display') }}
                                    </a>
                                </div>
                            </div>

                            <div class="pt-3 border-t border-slate-100 text-xs text-slate-600 space-y-1">
                                <div class="font-bold text-slate-800">Indore Headquarters:</div>
                                <div class="text-[11px] text-slate-500">6, Vijay Nagar, Near Domino's, Indore, M.P. - 452010</div>
                            </div>

                            <a href="https://wa.me/{{ config('agency.whatsapp') }}?text={{ urlencode('Hello, I need confidential consultation regarding ' . $service->title) }}"
                               target="_blank"
                               class="block w-full text-center rounded-xl bg-emerald-600 hover:bg-emerald-700 py-2.5 text-xs font-bold text-white transition-colors">
                                Chat on WhatsApp Confidentially
                            </a>
                        </div>

                        <!-- 3. Regional Bureau Hubs Quick Navigation -->
                        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-2xs">
                            <div class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3">Deployment Hubs</div>
                            <div class="flex flex-wrap gap-1.5 text-xs">
                                <a href="{{ route('cities.show', 'indore') }}" class="px-2.5 py-1 rounded-lg bg-blue-50 text-blue-800 font-bold border border-blue-200 hover:bg-blue-100">Indore HQ</a>
                                <a href="{{ route('cities.show', 'pune') }}" class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 hover:bg-blue-50 hover:text-blue-700">Pune</a>
                                <a href="{{ route('cities.show', 'mumbai') }}" class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 hover:bg-blue-50 hover:text-blue-700">Mumbai</a>
                                <a href="{{ route('cities.show', 'ahmedabad') }}" class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 hover:bg-blue-50 hover:text-blue-700">Ahmedabad</a>
                                <a href="{{ route('cities.show', 'bengaluru') }}" class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 hover:bg-blue-50 hover:text-blue-700">Bangalore</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Final CTA Banner -->
    <x-sections.final-cta />
</x-app-layout>
