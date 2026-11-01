@props([
    'title' => 'Why Families & Businesses Trust Deep Trace Detective',
    'subtitle' => 'When sensitive personal matters or business risks arise, you need clear facts, complete privacy, and an experienced team you can trust.',
])

<section class="bg-slate-50 py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14 reveal">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Why Choose Us</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <a href="{{ route('about') }}" class="group relative rounded-2xl border border-slate-200 bg-white p-7 shadow-sm hover:border-blue-500 hover:shadow-md hover:-translate-y-1 transition-all reveal stagger-1 flex flex-col justify-between block">
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-700 mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </span>
                    <h3 class="font-serif text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors">Direct Guidance by Senior Case Director</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Your matter is personally supervised by Principal Investigator <strong>Senior Case Director</strong> with 12+ years of field experience. No junior middlemen or false guarantees.
                    </p>
                </div>
                <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-blue-700 group-hover:text-blue-800">
                    <span>Directorate Profile</span>
                    <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                </div>
            </a>

            <!-- Feature 2 -->
            <a href="{{ route('privacy-policy') }}" class="group relative rounded-2xl border border-slate-200 bg-white p-7 shadow-sm hover:border-blue-500 hover:shadow-md hover:-translate-y-1 transition-all reveal stagger-2 flex flex-col justify-between block">
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-700 mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    </span>
                    <h3 class="font-serif text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors">100% Privacy & Non-Disclosure (NDA)</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Your identity is protected under a written Non-Disclosure Agreement. We use case codes so your name is never revealed to anyone in the field.
                    </p>
                </div>
                <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-blue-700 group-hover:text-blue-800">
                    <span>NDA & Privacy Protocol</span>
                    <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                </div>
            </a>

            <!-- Feature 3 -->
            <a href="{{ route('how-we-work') }}" class="group relative rounded-2xl border border-slate-200 bg-white p-7 shadow-sm hover:border-blue-500 hover:shadow-md hover:-translate-y-1 transition-all reveal stagger-3 flex flex-col justify-between block">
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-700 mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                    </span>
                    <h3 class="font-serif text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors">Legally Admissible Proof</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        We collect genuine, unedited photos, video recordings, and official public records with exact time logs that your advocate can present in court with confidence.
                    </p>
                </div>
                <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-blue-700 group-hover:text-blue-800">
                    <span>How We Work (5 Steps)</span>
                    <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                </div>
            </a>

            <!-- Feature 4 -->
            <a href="{{ route('cities.show', 'indore') }}" class="group relative rounded-2xl border border-slate-200 bg-white p-7 shadow-sm hover:border-blue-500 hover:shadow-md hover:-translate-y-1 transition-all reveal stagger-4 flex flex-col justify-between block">
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-700 mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </span>
                    <h3 class="font-serif text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors">Local Presence in Indore, Pune & Metros</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Headquartered at <strong>6, Vijay Nagar, Indore</strong>, with active field operative teams ready to deploy in Pune, Mumbai, Ahmedabad, and Bangalore.
                    </p>
                </div>
                <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-blue-700 group-hover:text-blue-800">
                    <span>Indore HQ Bureau</span>
                    <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                </div>
            </a>

            <!-- Feature 5 -->
            <a href="{{ route('services.show', 'surveillance-services') }}" class="group relative rounded-2xl border border-slate-200 bg-white p-7 shadow-sm hover:border-blue-500 hover:shadow-md hover:-translate-y-1 transition-all reveal stagger-5 flex flex-col justify-between block">
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-700 mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                    </span>
                    <h3 class="font-serif text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors">Professional Investigative Gear</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        We use telephoto optical cameras, secure GPS loggers, and TSCM radio frequency detectors to observe and document real facts without alerting anyone.
                    </p>
                </div>
                <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-blue-700 group-hover:text-blue-800">
                    <span>Surveillance Standards</span>
                    <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                </div>
            </a>

            <!-- Feature 6 -->
            <a href="{{ route('consultation') }}" class="group relative rounded-2xl border border-slate-200 bg-white p-7 shadow-sm hover:border-blue-500 hover:shadow-md hover:-translate-y-1 transition-all reveal stagger-6 flex flex-col justify-between block">
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-700 mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <h3 class="font-serif text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors">Clear & Honest Pricing</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        No hidden charges or surprise bills. You receive a clear, written quotation during your free initial case briefing before any field work starts.
                    </p>
                </div>
                <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-blue-700 group-hover:text-blue-800">
                    <span>Free Case Estimate</span>
                    <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                </div>
            </a>
        </div>
    </div>
</section>
