@props([
    'title' => 'Request a Confidential Case Consultation',
    'subtitle' => 'Share your inquiry in strict confidence. Principal Investigator or a senior case director will respond within 2 hours.',
    'servicePreset' => null,
    'cityPreset' => null,
])

@php
    $errors ??= new \Illuminate\Support\ViewErrorBag;
@endphp

<section id="lead-form" class="bg-slate-50 py-16 lg:py-24 border-b border-slate-200">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl border border-slate-200 bg-white p-8 sm:p-12 shadow-xl">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-50 px-3.5 py-1 text-xs font-bold text-blue-800 border border-blue-200 mb-3">
                    <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Protected by Ironclad NDA • 100% Client Anonymity
                </span>
                <h2 class="font-serif text-2xl sm:text-3xl font-bold text-slate-900">{{ $title }}</h2>
                <p class="mt-2 text-xs sm:text-sm text-slate-600">{{ $subtitle }}</p>
            </div>

            <!-- Client-Side Validated Alpine.js Form -->
            <form action="{{ route('leads.store') }}" method="POST"
                  x-data="{
                      name: '',
                      phone: '',
                      city: '{{ $cityPreset ?? '' }}',
                      service: '{{ $servicePreset ?? '' }}',
                      method: 'Phone',
                      urgency: 'Within 24 Hours',
                      message: '',
                      submitting: false,
                      validatePhone() {
                          return this.phone.length >= 10;
                      }
                  }"
                  @submit="submitting = true"
                  class="space-y-6">
                @csrf

                <!-- Honeypot Field for anti-spam bots -->
                <div class="hidden" aria-hidden="true">
                    <input type="text" name="_hp" tabindex="-1" autocomplete="off">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                            Your Name / Alias <span class="text-rose-500">*</span>
                        </label>
                        <input type="text" id="name" name="name" x-model="name" required
                               placeholder="e.g. Rahul S. (Alias is acceptable)"
                               class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-xs text-slate-900 placeholder-slate-400 focus:border-blue-600 focus:ring-1 focus:ring-blue-600 outline-none">
                        @error('name')
                            <span class="mt-1 block text-[11px] text-rose-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label for="phone" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                            Direct Phone Number <span class="text-rose-500">*</span>
                        </label>
                        <input type="tel" id="phone" name="phone" x-model="phone" required
                               placeholder="+91 90041 45251"
                               class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-xs text-slate-900 placeholder-slate-400 focus:border-blue-600 focus:ring-1 focus:ring-blue-600 outline-none">
                        @error('phone')
                            <span class="mt-1 block text-[11px] text-rose-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- City -->
                    <div>
                        <label for="city" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                            City / Location <span class="text-rose-500">*</span>
                        </label>
                        <input type="text" id="city" name="city" x-model="city" required
                               placeholder="e.g. Indore, Bhopal, Mumbai, Delhi..."
                               class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-xs text-slate-900 placeholder-slate-400 focus:border-blue-600 focus:ring-1 focus:ring-blue-600 outline-none">
                        @error('city')
                            <span class="mt-1 block text-[11px] text-rose-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Service Requested -->
                    <div>
                        <label for="service_requested" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                            Service Needed <span class="text-rose-500">*</span>
                        </label>
                        <select id="service_requested" name="service_requested" x-model="service" required
                                class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-xs text-slate-900 focus:border-blue-600 focus:ring-1 focus:ring-blue-600 outline-none">
                            <option value="" disabled selected>Select an Investigation Area</option>
                            <optgroup label="Personal & Matrimonial Verification">
                                <option value="Pre-Matrimonial Investigation">Pre-Matrimonial Background Check</option>
                                <option value="Post-Matrimonial Investigation">Post-Matrimonial Verification</option>
                                <option value="Infidelity Investigation">Spousal Discretion Probe</option>
                                <option value="Divorce Evidence">Divorce & Child Custody Evidence</option>
                                <option value="Matrimonial Profile Verification">Matrimonial Profile Verification</option>
                                <option value="Pre-Relationship Verification">Pre-Relationship Background Check</option>
                            </optgroup>
                            <optgroup label="Corporate & Due Diligence">
                                <option value="Corporate Investigation">Corporate Intelligence & Fraud</option>
                                <option value="Business Due Diligence">Business Partner Due Diligence</option>
                                <option value="Pre-Employment Screening">Pre-Employment Screening</option>
                                <option value="Employee Misconduct Probe">Employee Misconduct & Moonlighting</option>
                                <option value="IP & Counterfeit Investigation">IP Infringement & Counterfeits</option>
                                <option value="Competitor Intelligence">Market Intelligence</option>
                            </optgroup>
                            <optgroup label="Financial, Forensic & Field Support">
                                <option value="Asset Tracing">Asset Tracing & Solvency Check</option>
                                <option value="Financial Fraud Investigation">Financial Fraud & Embezzlement</option>
                                <option value="Insurance Claim Fraud">Insurance Claim Verification</option>
                                <option value="Cyber Forensics">Cyber Forensics & Threat Assessment</option>
                                <option value="Bug Sweeping TSCM">TSCM Bug Sweeping & Countermeasures</option>
                                <option value="Missing Person Tracing">Skip Tracing & Missing Person Locating</option>
                                <option value="Surveillance Services">Discreet Field Surveillance</option>
                                <option value="Background Verification">Comprehensive Background Verification</option>
                                <option value="Property Land Verification">Property & Land Title Check</option>
                                <option value="Litigation Support">Court Evidence & Litigation Support</option>
                            </optgroup>
                        </select>
                        @error('service_requested')
                            <span class="mt-1 block text-[11px] text-rose-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Preferred Contact Method -->
                    <div>
                        <label for="preferred_contact_method" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                            Preferred Response Method
                        </label>
                        <select id="preferred_contact_method" name="preferred_contact_method" x-model="method"
                                class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-xs text-slate-900 focus:border-blue-600 focus:ring-1 focus:ring-blue-600 outline-none">
                            <option value="Phone">Phone Call (Discreet & Private)</option>
                            <option value="WhatsApp">WhatsApp Encrypted Chat</option>
                            <option value="Email">Encrypted Email</option>
                        </select>
                    </div>

                    <!-- Urgency Level -->
                    <div>
                        <label for="urgency" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                            Case Urgency
                        </label>
                        <select id="urgency" name="urgency" x-model="urgency"
                                class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-xs text-slate-900 focus:border-blue-600 focus:ring-1 focus:ring-blue-600 outline-none">
                            <option value="Standard">Standard (Within 24-48 Hours)</option>
                            <option value="Urgent">Urgent (Within 6-12 Hours)</option>
                            <option value="Immediate Emergency">Critical (Immediate Deployment)</option>
                        </select>
                    </div>
                </div>

                <!-- Brief Message -->
                <div>
                    <label for="message" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                        Brief Outline of Inquiry <span class="text-slate-400 font-normal">(Do not include sensitive passwords)</span>
                    </label>
                    <textarea id="message" name="message" rows="4" x-model="message"
                              placeholder="Describe your verification requirements or primary concerns. Strict confidentiality guaranteed."
                              class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-xs text-slate-900 placeholder-slate-400 focus:border-blue-600 focus:ring-1 focus:ring-blue-600 outline-none"></textarea>
                    @error('message')
                        <span class="mt-1 block text-[11px] text-rose-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Legal Consent & Disclaimer -->
                <div class="rounded-xl bg-slate-50 border border-slate-200 p-4 text-[11px] text-slate-600 leading-relaxed">
                    <p class="flex items-start gap-2">
                        <svg class="h-4 w-4 text-emerald-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <span>
                            <strong>Legal Compliance Declaration:</strong> All inquiries submitted to Deep Trace Detective are processed in accordance with the Digital Personal Data Protection (DPDP) Act 2023. We do NOT provide illegal wiretapping, call recording procurement (CDR), or unauthorized hacking.
                        </span>
                    </p>
                </div>

                <!-- Submit Button -->
                <div class="text-center pt-2">
                    <button type="submit"
                            :disabled="submitting"
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-xl bg-blue-700 px-10 py-4 text-xs font-bold uppercase tracking-wider text-white shadow-md hover:bg-blue-800 transition-all cursor-pointer">
                        <svg class="h-4 w-4 text-amber-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        <span x-text="submitting ? 'Submitting Confidentially...' : 'Submit Confidential Consultation Request'">Submit Confidential Consultation Request</span>
                    </button>
                    <p class="mt-2 text-[11px] text-slate-500">
                        Prefer an immediate conversation? Call directly: <a href="tel:{{ config('agency.phone') }}" class="font-bold text-blue-700 underline">{{ config('agency.phone_display') }}</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>
