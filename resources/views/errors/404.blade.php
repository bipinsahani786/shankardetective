<x-app-layout
    title="Case Not Found (404) | Shankar Detective Agency"
    description="The requested page or dossier could not be located on Shankar Detective Agency. Return to the secure home page or contact our 24/7 hotline."
>
    <section class="min-h-[70vh] flex items-center justify-center bg-navy-950 py-20 border-b border-gold-500/15">
        <div class="mx-auto max-w-2xl px-4 text-center">
            <span class="font-mono text-5xl sm:text-7xl font-extrabold text-gold-400 block mb-4">
                404
            </span>
            <span class="inline-block rounded-full bg-rose-500/10 px-4 py-1 text-xs font-bold uppercase tracking-wider text-rose-400 border border-rose-500/20 mb-4">
                Classified / File Not Found
            </span>
            <h1 class="font-serif text-2xl sm:text-4xl font-bold text-slate-100 mb-4">
                The Requested Dossier Does Not Exist
            </h1>
            <p class="text-xs sm:text-sm text-slate-300 leading-relaxed mb-8">
                The URL you followed may be expired, classified, or moved to our secure archives. Please return to our main directory or connect directly with our case desk.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('home') }}" class="w-full sm:w-auto rounded-xl bg-gold-500 px-6 py-3 text-xs font-bold uppercase tracking-wider text-navy-950 hover:bg-gold-400 transition-all shadow-md">
                    Return to Home Base
                </a>
                <a href="{{ route('services.index') }}" class="w-full sm:w-auto rounded-xl border border-gold-500/30 bg-navy-900 px-6 py-3 text-xs font-bold uppercase tracking-wider text-slate-200 hover:border-gold-400 hover:text-gold-300 transition-colors">
                    Browse All 24 Services
                </a>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <x-sections.final-cta />
</x-app-layout>

