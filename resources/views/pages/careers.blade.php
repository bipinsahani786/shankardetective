<x-app-layout
    title="Careers at Deep Trace Detective Agency | Join Our Intelligence Team"
    description="Career opportunities at Deep Trace Detective Agency Indore. Recruiting field verification operatives, cyber forensic analysts, and legal researchers."
    :breadcrumbs="[['name' => 'Careers', 'url' => route('careers')]]"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[['name' => 'Careers', 'url' => route('careers')]]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        badge="Recruitment & Professional Excellence"
        title="Careers in <span class='text-blue-600'>Private Intelligence</span>"
        subtitle="Join Central India’s premier confidential investigation agency based in Indore. We seek disciplined ex-defense personnel, certified cyber forensic examiners, and meticulous legal researchers."
        cta-primary-text="Explore Open Positions"
        cta-primary-url="#positions"
        cta-secondary-text="Direct HR Contact"
        cta-secondary-url="mailto:info@deepdetective.com"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: Open Positions -->
    <section id="positions" class="bg-slate-50 py-16 lg:py-24 border-b border-slate-200">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 uppercase tracking-wider">
                    Current Opportunities
                </span>
                <h2 class="mt-3 font-serif text-3xl sm:text-4xl font-bold text-slate-900">Join Our Operational Ranks</h2>
                <p class="mt-2 text-sm text-slate-600">Strict background checks and integrity screening apply to all applicants.</p>
            </div>

            <div class="space-y-6">
                <!-- Role 1 -->
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:border-blue-300 hover:shadow-md transition-all">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-3">
                        <div>
                            <h3 class="font-serif text-lg font-bold text-slate-900">Senior Field Verification Operative</h3>
                            <span class="text-xs text-blue-600 font-semibold">Indore (HQ) / Bhopal / Delhi NCR • Full-Time</span>
                        </div>
                        <a href="mailto:info@deepdetective.com?subject=Application:%20Field%20Verification%20Operative" class="inline-block rounded-xl bg-blue-600 px-5 py-2 text-xs font-bold uppercase text-white hover:bg-blue-700 transition-colors">
                            Apply via Email
                        </a>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Responsible for discreet public observation, background validation, location audits, and maintaining real-time chronological activity logs. Ex-servicemen and defense veterans preferred.
                    </p>
                </div>

                <!-- Role 2 -->
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:border-blue-300 hover:shadow-md transition-all">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-3">
                        <div>
                            <h3 class="font-serif text-lg font-bold text-slate-900">Cyber Forensics & OSINT Analyst</h3>
                            <span class="text-xs text-blue-600 font-semibold">Indore / Remote • Full-Time</span>
                        </div>
                        <a href="mailto:info@deepdetective.com?subject=Application:%20Cyber%20Forensics%20Analyst" class="inline-block rounded-xl bg-blue-600 px-5 py-2 text-xs font-bold uppercase text-white hover:bg-blue-700 transition-colors">
                            Apply via Email
                        </a>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Conduct digital forensics, data extraction, deleted file recovery, header inspection, and compile court-ready electronic evidence dossiers. CEH or CHFI certification required.
                    </p>
                </div>

                <!-- Role 3 -->
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:border-blue-300 hover:shadow-md transition-all">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-3">
                        <div>
                            <h3 class="font-serif text-lg font-bold text-slate-900">Legal Researcher & Asset Document Specialist</h3>
                            <span class="text-xs text-blue-600 font-semibold">Indore • Full-Time</span>
                        </div>
                        <a href="mailto:info@deepdetective.com?subject=Application:%20Legal%20Researcher" class="inline-block rounded-xl bg-blue-600 px-5 py-2 text-xs font-bold uppercase text-white hover:bg-blue-700 transition-colors">
                            Apply via Email
                        </a>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Conduct 30-year property title searches at Sub-Registrar offices, examine revenue court records (Khasra/Khatauni), and prepare legal clearance summaries. Law graduates preferred.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Legal & Ethics Promise -->
    <x-sections.legal-ethics-promise />

    <!-- Section 6: Final CTA -->
    <x-sections.final-cta />
</x-app-layout>
