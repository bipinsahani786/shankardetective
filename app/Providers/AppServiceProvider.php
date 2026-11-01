<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('settings')) {
                $settings = \App\Models\Setting::all()->pluck('value', 'key');

                if ($settings->isNotEmpty()) {
                    if ($settings->has('facebook_url')) {
                        config(['agency.social.facebook' => $settings->get('facebook_url')]);
                    }
                    if ($settings->has('instagram_url')) {
                        config(['agency.social.instagram' => $settings->get('instagram_url')]);
                    }
                    if ($settings->has('linkedin_url')) {
                        config(['agency.social.linkedin' => $settings->get('linkedin_url')]);
                    }
                    if ($settings->has('twitter_url')) {
                        config(['agency.social.twitter' => $settings->get('twitter_url')]);
                    }
                    if ($settings->has('youtube_url')) {
                        config(['agency.social.youtube' => $settings->get('youtube_url')]);
                    }
                    if ($settings->has('agency_phone')) {
                        config(['agency.phone' => $settings->get('agency_phone')]);
                    }
                    if ($settings->has('agency_phone_display')) {
                        config(['agency.phone_display' => $settings->get('agency_phone_display')]);
                    }
                    if ($settings->has('agency_whatsapp')) {
                        config(['agency.whatsapp' => $settings->get('agency_whatsapp')]);
                    }
                    if ($settings->has('agency_email')) {
                        config(['agency.email' => $settings->get('agency_email')]);
                    }
                    if ($settings->has('agency_address')) {
                        config(['agency.address.full' => $settings->get('agency_address')]);
                    }
                    if ($settings->has('google_maps_embed')) {
                        config(['agency.google_maps_embed' => $settings->get('google_maps_embed')]);
                    }
                }
            }
        } catch (\Throwable $e) {
            // Silently continue if database is not reachable yet
        }
    }
}
