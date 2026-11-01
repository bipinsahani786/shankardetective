@props([
    'title' => 'Our 100% Ironclad Confidentiality Guarantee',
    'subtitle' => 'How we ensure your identity and case details remain an impenetrable secret.',
])

<section class="bg-slate-50 py-16 lg:py-20 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl border border-slate-200 bg-white p-8 sm:p-12 shadow-card">
            <div class="text-center max-w-3xl mx-auto mb-10">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Security Architecture</span>
                <h2 class="mt-3 font-serif text-2xl sm:text-3xl font-bold text-slate-900">{{ $title }}</h2>
                <p class="mt-2 text-xs sm:text-sm text-slate-600">{{ $subtitle }}</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Protocol 1 -->
                <div class="rounded-2xl border border-slate-200 bg-slate-50/70 p-5">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-700 mb-3">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </span>
                    <h3 class="font-serif text-sm font-bold text-slate-900 mb-1">Signed NDA Protection</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Every consultation is legally protected by a signed Non-Disclosure Agreement before any personal details are discussed.
                    </p>
                </div>

                <!-- Protocol 2 -->
                <div class="rounded-2xl border border-slate-200 bg-slate-50/70 p-5">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-700 mb-3">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    </span>
                    <h3 class="font-serif text-sm font-bold text-slate-900 mb-1">Anonymous Case Codes</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        We never reveal your true identity to field operatives. All tasks are managed strictly using confidential case reference numbers.
                    </p>
                </div>

                <!-- Protocol 3 -->
                <div class="rounded-2xl border border-slate-200 bg-slate-50/70 p-5">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-700 mb-3">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    </span>
                    <h3 class="font-serif text-sm font-bold text-slate-900 mb-1">Encrypted File Storage</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        All recordings, logs, and photos are saved on encrypted, offline servers that cannot be accessed by unauthorized third parties.
                    </p>
                </div>

                <!-- Protocol 4 -->
                <div class="rounded-2xl border border-slate-200 bg-slate-50/70 p-5">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-700 mb-3">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                    </span>
                    <h3 class="font-serif text-sm font-bold text-slate-900 mb-1">Permanent File Deletion</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Once you receive your final confidential report, all draft notes and temporary operational files are permanently wiped.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
