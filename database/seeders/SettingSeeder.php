<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Social Media Links
            [
                'group' => 'social',
                'key' => 'facebook_url',
                'label' => 'Facebook Page URL',
                'value' => 'https://facebook.com/deeptracedetective',
            ],
            [
                'group' => 'social',
                'key' => 'instagram_url',
                'label' => 'Instagram Profile URL',
                'value' => 'https://instagram.com/deeptracedetective',
            ],
            [
                'group' => 'social',
                'key' => 'linkedin_url',
                'label' => 'LinkedIn Company Page URL',
                'value' => 'https://linkedin.com/company/deeptracedetective',
            ],
            [
                'group' => 'social',
                'key' => 'twitter_url',
                'label' => 'Twitter / X Profile URL',
                'value' => 'https://twitter.com/deeptracedetective',
            ],
            [
                'group' => 'social',
                'key' => 'youtube_url',
                'label' => 'YouTube Channel URL',
                'value' => 'https://youtube.com/@deeptracedetective',
            ],

            // Contact & Agency Information
            [
                'group' => 'contact',
                'key' => 'agency_phone',
                'label' => 'Direct Calling Number (tel)',
                'value' => '+919004145251',
            ],
            [
                'group' => 'contact',
                'key' => 'agency_phone_display',
                'label' => 'Phone Number Display Text',
                'value' => '+91 9004145251',
            ],
            [
                'group' => 'contact',
                'key' => 'agency_whatsapp',
                'label' => 'WhatsApp Number',
                'value' => '919004145251',
            ],
            [
                'group' => 'contact',
                'key' => 'agency_email',
                'label' => 'Official Agency Email',
                'value' => 'info@deeptracedetective.com',
            ],
            [
                'group' => 'contact',
                'key' => 'agency_address',
                'label' => 'Full Headquarter Address',
                'value' => "6, Vijay Nagar, Near Domino's, Indore, Madhya Pradesh - 452010, India",
            ],
            [
                'group' => 'contact',
                'key' => 'google_maps_embed',
                'label' => 'Google Maps Embed iframe URL',
                'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.336496814324!2d75.8912!3d22.7533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396302af40300001%3A0x6b53dbd7beec8757!2sVijay%20Nagar%2C%20Indore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin',
            ],
        ];

        foreach ($settings as $item) {
            Setting::updateOrCreate(
                ['key' => $item['key']],
                $item
            );
        }
    }
}

