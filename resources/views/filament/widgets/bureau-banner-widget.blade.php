<x-filament-widgets::widget class="fi-wi-bureau-banner">
    <div class="dt-bureau-banner" style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 60%, #172554 100%); color: #ffffff; border-radius: 1.25rem; padding: 1.75rem 2rem; border: 1px solid rgba(59, 130, 246, 0.25); box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.12); width: 100%; box-sizing: border-box; overflow: hidden; position: relative;">
        
        <!-- Top Status Bar -->
        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 0.75rem; padding-bottom: 1.25rem; border-bottom: 1px solid rgba(255, 255, 255, 0.12);">
            <div style="display: flex; align-items: center; gap: 0.625rem;">
                <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background-color: #10b981; box-shadow: 0 0 10px #10b981;"></span>
                <span style="font-size: 0.75rem; font-weight: 800; letter-spacing: 0.08em; text-transform: uppercase; color: #34d399;">
                    Operational Control Active
                </span>
                <span style="color: rgba(255, 255, 255, 0.3);">|</span>
                <span style="font-size: 0.8125rem; font-weight: 600; color: #bfdbfe;">
                    Senior Case Directorate
                </span>
            </div>

            <div style="display: flex; align-items: center; gap: 0.625rem; font-size: 0.75rem;">
                <span style="padding: 0.3rem 0.75rem; border-radius: 0.5rem; background: rgba(30, 58, 138, 0.5); border: 1px solid rgba(96, 165, 250, 0.3); color: #dbeafe; font-weight: 600;">
                    Indore HQ • 6, Vijay Nagar
                </span>
                <a href="tel:+919004145251" style="padding: 0.3rem 0.75rem; border-radius: 0.5rem; background: rgba(245, 158, 11, 0.2); border: 1px solid rgba(245, 158, 11, 0.4); color: #fde68a; font-weight: 700; text-decoration: none;">
                    📞 +91 9004145251
                </a>
            </div>
        </div>

        <!-- Main Content & Quick Actions -->
        <div style="margin-top: 1.5rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; align-items: center;">
            <div>
                <div style="display: inline-flex; align-items: center; gap: 0.375rem; padding: 0.25rem 0.625rem; border-radius: 9999px; background: rgba(30, 58, 138, 0.4); border: 1px solid rgba(96, 165, 250, 0.3); color: #fbbf24; font-size: 0.7rem; font-weight: 700; margin-bottom: 0.625rem;">
                    ★ Enterprise Case Management Suite
                </div>
                <h2 style="font-family: Georgia, serif; font-size: 1.85rem; font-weight: 800; color: #ffffff; line-height: 1.2; margin: 0 0 0.625rem 0;">
                    Welcome to Deep Trace Directorate
                </h2>
                <p style="font-size: 0.875rem; color: #cbd5e1; line-height: 1.6; margin: 0; max-width: 40rem;">
                    Overseeing confidential matrimonial verifications, corporate due diligence, risk advisory, and forensic field operations across 8 regional hubs.
                </p>

                <!-- Action Buttons -->
                <div style="margin-top: 1.5rem; display: flex; flex-wrap: wrap; gap: 0.75rem; align-items: center;">
                    <a href="{{ route('filament.admin.resources.leads.index') }}" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.55rem 1rem; border-radius: 0.625rem; background: #2563eb; color: #ffffff; font-weight: 700; font-size: 0.8125rem; text-decoration: none; box-shadow: 0 4px 6px -1px rgba(37, 99, 235, 0.3);">
                        <span>Review Intake Inquiries</span>
                        @if($newLeadsCount > 0)
                            <span style="padding: 0.125rem 0.4rem; border-radius: 9999px; background: #f59e0b; color: #020617; font-size: 0.65rem; font-weight: 800;">
                                {{ $newLeadsCount }} NEW
                            </span>
                        @endif
                    </a>

                    <a href="{{ route('filament.admin.resources.services.index') }}" style="display: inline-flex; align-items: center; gap: 0.375rem; padding: 0.55rem 1rem; border-radius: 0.625rem; background: rgba(30, 41, 59, 0.7); border: 1px solid rgba(255, 255, 255, 0.15); color: #e2e8f0; font-weight: 600; font-size: 0.8125rem; text-decoration: none;">
                        <span>24 Services</span>
                    </a>

                    <a href="{{ route('filament.admin.resources.cities.index') }}" style="display: inline-flex; align-items: center; gap: 0.375rem; padding: 0.55rem 1rem; border-radius: 0.625rem; background: rgba(30, 41, 59, 0.7); border: 1px solid rgba(255, 255, 255, 0.15); color: #e2e8f0; font-weight: 600; font-size: 0.8125rem; text-decoration: none;">
                        <span>8 Bureaus</span>
                    </a>

                    <a href="{{ url('/') }}" target="_blank" style="display: inline-flex; align-items: center; gap: 0.375rem; padding: 0.55rem 1rem; border-radius: 0.625rem; background: rgba(30, 58, 138, 0.4); border: 1px solid rgba(96, 165, 250, 0.3); color: #93c5fd; font-weight: 600; font-size: 0.8125rem; text-decoration: none;">
                        <span>Open Public Site ↗</span>
                    </a>
                </div>
            </div>

            <!-- Mini Stats Grid -->
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.75rem;">
                <div style="padding: 1rem 1.25rem; border-radius: 0.75rem; background: rgba(15, 23, 42, 0.55); border: 1px solid rgba(255, 255, 255, 0.12);">
                    <div style="font-size: 0.7rem; font-weight: 700; text-transform: uppercase; color: #93c5fd;">Total Leads</div>
                    <div style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-top: 0.25rem;">{{ $totalLeads }}</div>
                    <div style="font-size: 0.7rem; color: #94a3b8; margin-top: 0.125rem;">Client Inquiries</div>
                </div>

                <div style="padding: 1rem 1.25rem; border-radius: 0.75rem; background: rgba(15, 23, 42, 0.55); border: 1px solid rgba(255, 255, 255, 0.12);">
                    <div style="font-size: 0.7rem; font-weight: 700; text-transform: uppercase; color: #fde68a;">Pending Action</div>
                    <div style="font-size: 1.6rem; font-weight: 800; color: #f59e0b; margin-top: 0.25rem;">{{ $newLeadsCount }}</div>
                    <div style="font-size: 0.7rem; color: #94a3b8; margin-top: 0.125rem;">Awaiting Review</div>
                </div>

                <div style="padding: 1rem 1.25rem; border-radius: 0.75rem; background: rgba(15, 23, 42, 0.55); border: 1px solid rgba(255, 255, 255, 0.12);">
                    <div style="font-size: 0.7rem; font-weight: 700; text-transform: uppercase; color: #a7f3d0;">Bureaus</div>
                    <div style="font-size: 1.6rem; font-weight: 800; color: #34d399; margin-top: 0.25rem;">{{ $citiesCount }} Hubs</div>
                    <div style="font-size: 0.7rem; color: #94a3b8; margin-top: 0.125rem;">Indore HQ + 7 Cities</div>
                </div>

                <div style="padding: 1rem 1.25rem; border-radius: 0.75rem; background: rgba(15, 23, 42, 0.55); border: 1px solid rgba(255, 255, 255, 0.12);">
                    <div style="font-size: 0.7rem; font-weight: 700; text-transform: uppercase; color: #d8b4fe;">Articles</div>
                    <div style="font-size: 1.6rem; font-weight: 800; color: #c084fc; margin-top: 0.25rem;">{{ $postsCount }}</div>
                    <div style="font-size: 0.7rem; color: #94a3b8; margin-top: 0.125rem;">Field Advisories</div>
                </div>
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
