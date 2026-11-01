@props([
    'title' => 'Visit Our Office or Schedule a Confidential Meeting',
    'subtitle' => 'In-person consultations are scheduled strictly by prior appointment to protect your privacy.',
    'city' => null,
])

@php
    $address = $city ? ($city->office_address ?? config('agency.address.full')) : config('agency.address.full');
    $phone = $city ? ($city->phone ?? config('agency.phone_display')) : config('agency.phone_display');
    $email = $city ? ($city->email ?? config('agency.email')) : config('agency.email');
    $mapEmbedUrl = $city ? ($city->map_embed_url ?? config('agency.google_maps_embed')) : config('agency.google_maps_embed');
    $cityName = $city ? $city->name : config('agency.address.city');
@endphp

<section class="relative bg-slate-50 py-16 lg:py-24 border-t border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Bureau Coordinates</span>
            <h2 class="mt-3 font-serif text-2xl sm:text-4xl font-bold text-slate-900">{{ $title }}</h2>
            <p class="mt-2 text-xs sm:text-sm text-slate-600">{{ $subtitle }}</p>
        </div>

        <div class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-xl">
            <!-- Designed Styled Google Map Embed -->
            <div class="relative h-[480px] w-full overflow-hidden">
                <iframe
                    src="{{ $mapEmbedUrl }}"
                    class="h-full w-full border-0"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Deep Trace Detective Office Map Location"
                    aria-label="Google Map showing Deep Trace Detective {{ $cityName }} Office">
                </iframe>
            </div>

            <!-- Floating Info Card Overlaid on Map -->
            <div class="absolute bottom-6 left-6 right-6 sm:bottom-8 sm:left-8 sm:right-auto sm:max-w-md rounded-2xl border border-slate-200 bg-white/95 p-6 shadow-2xl backdrop-blur-md">
                <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-800">
                        {{ $cityName }} Bureau Office
                    </span>
                    <span class="rounded bg-emerald-50 border border-emerald-200 px-2.5 py-0.5 text-[10px] font-bold text-emerald-700">
                        Appointment Only
                    </span>
                </div>

                <div class="mt-4 space-y-2.5 text-xs text-slate-700">
                    <p class="flex items-start gap-2.5">
                        <svg class="h-4 w-4 text-blue-700 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                        <span class="font-medium">{{ $address }}</span>
                    </p>

                    <p class="flex items-center gap-2.5">
                        <svg class="h-4 w-4 text-blue-700 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <a href="tel:{{ config('agency.phone') }}" class="font-bold text-slate-900 hover:text-blue-700">{{ $phone }}</a>
                    </p>

                    <p class="flex items-center gap-2.5">
                        <svg class="h-4 w-4 text-blue-700 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-slate-600">{{ config('agency.working_hours.office') }}</span>
                    </p>

                    <p class="flex items-center gap-2.5">
                        <svg class="h-4 w-4 text-emerald-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <span class="text-[11px] text-slate-500">100% Client Anonymity & Strict NDA Protocol</span>
                    </p>
                </div>

                <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                    <a href="https://maps.google.com/?q={{ urlencode($address) }}" target="_blank" rel="noopener noreferrer" class="text-xs font-bold text-blue-700 hover:text-blue-800 flex items-center gap-1">
                        Open in Google Maps &rarr;
                    </a>
                    <a href="{{ route('consultation') }}" class="rounded-lg bg-blue-700 px-3 py-1.5 text-[11px] font-bold text-white hover:bg-blue-800">
                        Book Appointment
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
