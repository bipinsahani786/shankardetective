<!-- Global Confidential Consultation Modal -->
<div x-data="{ open: false, submitting: false, success: false }"
     @open-consultation-modal.window="open = true"
     @keydown.escape.window="open = false"
     x-show="open"
     x-cloak
     class="relative z-50"
     aria-labelledby="modal-title"
     role="dialog"
     aria-modal="true"
     style="display: none;">

    <!-- Backdrop Blur Overlay -->
    <div x-show="open"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="open = false"
         class="fixed inset-0 bg-slate-950/75 backdrop-blur-sm transition-opacity"></div>

    <!-- Modal Panel -->
    <div class="fixed inset-0 z-10 w-screen overflow-y-auto p-4 sm:p-6 md:p-10 flex min-h-full items-center justify-center">
        <div x-show="open"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             @click.outside="open = false"
             class="relative transform overflow-hidden rounded-3xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border border-slate-200">

            <!-- Top Header Banner -->
            <div class="bg-gradient-to-r from-blue-900 to-slate-900 px-6 py-5 text-white flex items-start justify-between">
                <div>
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-800/60 px-3 py-0.5 text-[10px] font-bold text-amber-300 border border-blue-700/60 mb-1.5">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        100% Confidential • Signed NDA Protection
                    </span>
                    <h3 id="modal-title" class="font-serif text-lg sm:text-xl font-bold text-white">
                        Book Confidential Consultation
                    </h3>
                    <p class="text-xs text-slate-300 mt-0.5">
                        Direct callback by Senior Case Director within 2 hours.
                    </p>
                </div>
                <button type="button"
                        @click="open = false"
                        class="rounded-xl p-1.5 text-slate-400 hover:text-white hover:bg-white/10 transition-colors focus:outline-none"
                        aria-label="Close modal">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Form Content -->
            <div class="px-6 py-6 sm:px-8">
                <form action="{{ route('leads.store') }}" method="POST"
                      @submit="submitting = true"
                      class="space-y-4">
                    @csrf

                    <!-- Honeypot -->
                    <div class="hidden" aria-hidden="true">
                        <input type="text" name="_hp" tabindex="-1" autocomplete="off">
                    </div>

                    <!-- Name Field -->
                    <div>
                        <label for="modal-name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                            Your Name / Alias <span class="text-rose-500">*</span>
                        </label>
                        <input type="text" id="modal-name" name="name" required
                               placeholder="e.g. Ankit S. (Alias is fine)"
                               class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 placeholder-slate-400 focus:border-blue-600 focus:ring-1 focus:ring-blue-600 outline-none">
                    </div>

                    <!-- Phone Field -->
                    <div>
                        <label for="modal-phone" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                            Phone / WhatsApp Number <span class="text-rose-500">*</span>
                        </label>
                        <input type="tel" id="modal-phone" name="phone" required
                               placeholder="+91 98765 43210"
                               class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 placeholder-slate-400 focus:border-blue-600 focus:ring-1 focus:ring-blue-600 outline-none">
                    </div>

                    <!-- Grid: City & Service -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                        <div>
                            <label for="modal-city" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                Location / City
                            </label>
                            <select id="modal-city" name="city"
                                    class="w-full rounded-xl border border-slate-300 bg-white px-3 py-2.5 text-xs text-slate-900 focus:border-blue-600 focus:ring-1 focus:ring-blue-600 outline-none">
                                <option value="Indore">Indore (HQ)</option>
                                <option value="Pune">Pune</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Bengaluru">Bangalore</option>
                                <option value="Delhi">Delhi NCR</option>
                                <option value="Bhopal">Bhopal</option>
                                <option value="Jaipur">Jaipur</option>
                                <option value="Other">Other City</option>
                            </select>
                        </div>

                        <div>
                            <label for="modal-service" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                Service Needed
                            </label>
                            <select id="modal-service" name="service"
                                    class="w-full rounded-xl border border-slate-300 bg-white px-3 py-2.5 text-xs text-slate-900 focus:border-blue-600 focus:ring-1 focus:ring-blue-600 outline-none">
                                <option value="Pre-Matrimonial">Pre-Matrimonial Verification</option>
                                <option value="Post-Matrimonial">Post-Matrimonial / Spousal Check</option>
                                <option value="Corporate Due Diligence">Corporate Due Diligence</option>
                                <option value="Employee Verification">Employee Verification</option>
                                <option value="Asset Tracing">Asset & Property Tracing</option>
                                <option value="Field Surveillance">Field Surveillance</option>
                                <option value="Other">Other Confidential Matter</option>
                            </select>
                        </div>
                    </div>

                    <!-- Brief Context (Optional) -->
                    <div>
                        <label for="modal-message" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                            Brief Details / Best Time to Call
                        </label>
                        <textarea id="modal-message" name="message" rows="2"
                                  placeholder="Briefly describe your requirement or best time to reach you discreetly..."
                                  class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2 text-xs text-slate-900 placeholder-slate-400 focus:border-blue-600 focus:ring-1 focus:ring-blue-600 outline-none resize-none"></textarea>
                    </div>

                    <!-- Trust Micro-Text -->
                    <div class="rounded-xl bg-blue-50/70 border border-blue-100 p-2.5 text-[11px] text-blue-900 flex items-center gap-2">
                        <svg class="h-4 w-4 text-emerald-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        <span>Your identity is 100% confidential under signed Non-Disclosure Agreement.</span>
                    </div>

                    <!-- Action Submit Button -->
                    <div class="pt-2">
                        <button type="submit"
                                :disabled="submitting"
                                class="w-full inline-flex items-center justify-center gap-2 rounded-xl bg-blue-700 py-3 text-xs sm:text-sm font-bold uppercase tracking-wider text-white shadow-md hover:bg-blue-800 transition-all btn-shimmer cursor-pointer">
                            <svg class="h-4 w-4 text-amber-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            <span x-text="submitting ? 'Submitting Confidentially...' : 'Request Free Confidential Callback'"></span>
                        </button>
                    </div>

                    <!-- Direct Helpline Alternate -->
                    <div class="text-center pt-1 text-xs text-slate-500">
                        Prefer to speak directly? Call <a href="tel:{{ config('agency.phone') }}" class="font-bold text-blue-700 hover:underline">{{ config('agency.phone_display') }}</a> or WhatsApp.
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

