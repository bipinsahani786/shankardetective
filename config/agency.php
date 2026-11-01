<?php

return [
    'name' => env('AGENCY_NAME', 'Deep Trace Detective'),
    'legal_name' => env('AGENCY_LEGAL_NAME', 'Deep Trace Detective & Risk Advisory Services'),
    'tagline' => env('AGENCY_TAGLINE', 'Confidential Background Verification, Matrimonial Inquiries & Corporate Due Diligence'),
    'description' => 'Deep Trace Detective provides 100% confidential and trusted personal background checks, matrimonial verification, and corporate due diligence across Indore, Pune, Mumbai, Ahmedabad, and Bangalore.',
    'phone' => env('AGENCY_PHONE', '+919004145251'),
    'phone_display' => env('AGENCY_PHONE_DISPLAY', '+91 9004145251'),
    'whatsapp' => env('AGENCY_WHATSAPP', '919004145251'),
    'whatsapp_message' => env('AGENCY_WHATSAPP_MSG', 'Hello Deep Trace Detective team, I require a confidential consultation.'),
    'email' => env('AGENCY_EMAIL', 'info@deepdetective.com'),
    'domain' => 'deeptracedetective.com',
    'principal_detective' => 'Senior Case Directorate',
    'founding_year' => 2014,
    'experience_years' => '12+',
    'confidentiality_guarantee' => '100% Strict NDA Bound & Confidential',
    'verified_detectives' => 'Licensed & Field-Tested Investigators',

    'address' => [
        'street' => env('AGENCY_STREET', '6, Vijay Nagar'),
        'landmark' => env('AGENCY_LANDMARK', "Near Domino's"),
        'city' => env('AGENCY_CITY', 'Indore'),
        'state' => env('AGENCY_STATE', 'Madhya Pradesh'),
        'pincode' => env('AGENCY_PINCODE', '452010'),
        'country' => 'India',
        'full' => env('AGENCY_FULL_ADDRESS', "6, Vijay Nagar, Near Domino's, Indore, Madhya Pradesh - 452010, India"),
    ],

    'geo' => [
        'latitude' => env('AGENCY_LATITUDE', '22.7533'),
        'longitude' => env('AGENCY_LONGITUDE', '75.8937'),
    ],

    'google_maps_embed' => env('AGENCY_MAP_EMBED', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.336496814324!2d75.8912!3d22.7533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396302af40300001%3A0x6b53dbd7beec8757!2sVijay%20Nagar%2C%20Indore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin'),

    'working_hours' => [
        'helpline' => '24/7 Confidential Case Helpline',
        'office' => 'Monday – Saturday: 9:00 AM – 8:00 PM (Prior Appointment Available)',
        'sunday' => 'Sunday: Special Consultations & Urgent Inquiries',
    ],

    'social' => [
        'facebook' => 'https://facebook.com/deeptracedetective',
        'twitter' => 'https://twitter.com/deeptracedetective',
        'linkedin' => 'https://linkedin.com/company/deeptracedetective',
        'instagram' => 'https://instagram.com/deeptracedetective',
    ],

    'legal_notice' => 'Deep Trace Detective is a premier confidential private investigation and verification agency headquartered in Indore with operational coverage across Pune, Mumbai, Ahmedabad, and Bangalore. All inquiries and client communications are strictly confidential and protected under Non-Disclosure Agreements (NDA). Evidence is gathered through verified physical observations, public records, and lawful factual verification.',

    'top_cities' => [
        ['name' => 'Indore (HQ)', 'slug' => 'indore', 'state' => 'Madhya Pradesh', 'hq' => true],
        ['name' => 'Pune', 'slug' => 'pune', 'state' => 'Maharashtra', 'hq' => false],
        ['name' => 'Mumbai', 'slug' => 'mumbai', 'state' => 'Maharashtra', 'hq' => false],
        ['name' => 'Ahmedabad', 'slug' => 'ahmedabad', 'state' => 'Gujarat', 'hq' => false],
        ['name' => 'Bengaluru', 'slug' => 'bengaluru', 'state' => 'Karnataka', 'hq' => false],
        ['name' => 'Bhopal', 'slug' => 'bhopal', 'state' => 'Madhya Pradesh', 'hq' => false],
        ['name' => 'Delhi NCR', 'slug' => 'delhi', 'state' => 'Delhi', 'hq' => false],
        ['name' => 'Jaipur', 'slug' => 'jaipur', 'state' => 'Rajasthan', 'hq' => false],
    ],
];
