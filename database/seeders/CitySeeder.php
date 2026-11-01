<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        City::truncate();

        $cities = [
            [
                'name' => 'Indore',
                'slug' => 'indore',
                'state' => 'Madhya Pradesh',
                'is_hq' => true,
                'hero_title' => 'Top Private Detective Agency in Indore (Headquarters)',
                'hero_subtitle' => 'Confidential pre-matrimonial verification, personal background checks, and business investigations in Indore. Led by Senior Case Director.',
                'meta_title' => 'Best Detective Agency in Indore | Deep Trace Central Headquarters',
                'meta_description' => 'Looking for a private detective in Indore? Deep Trace Detective at Vijay Nagar offers 100% confidential matrimonial checks, asset tracing & corporate probes. Call +91 9004145251.',
                'local_overview' => 'Welcome to Deep Trace Detective’s central headquarters in Indore. Headed personally by Principal Investigator, our Indore team has helped hundreds of local families and business owners get the clear truth they need. Whether you want to verify a marriage proposal, check a spouse’s honesty, find hidden assets, or run a background check on a business partner, we provide real, verified proof with total privacy. Our main office is conveniently located at 6, Vijay Nagar near Domino’s, and we serve clients across all of Indore, Pithampur, Dewas, and Ujjain.',
                'popular_services' => [
                    'Pre-Matrimonial Background Check',
                    'Post-Matrimonial & Spousal Verification',
                    'Corporate Partner Due Diligence',
                    'Asset & Property Title Verification',
                    'Employee Background Screening',
                ],
                'local_landmarks' => [
                    'Vijay Nagar (Near Domino\'s)',
                    'Palasia & New Palasia',
                    'AB Road Commercial Hub',
                    'Super Corridor IT Belt',
                    'Bhawarkua & Sapna Sangeeta',
                    'Chappan Dukan',
                    'Pithampur Industrial Area',
                    'Rau & Silicon City',
                ],
                'office_address' => '6, Vijay Nagar, Near Domino\'s, Indore, Madhya Pradesh - 452010',
                'phone' => '+91 9004145251',
                'email' => 'info@deepdetective.com',
                'map_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.336496814324!2d75.8912!3d22.7533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396302af40300001%3A0x6b53dbd7beec8757!2sVijay%20Nagar%2C%20Indore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin',
                'local_faq' => [
                    [
                        'q' => 'Where can I meet Lead Detective in Indore?',
                        'a' => 'Our central office is located at 6, Vijay Nagar, Near Domino\'s, Indore. To protect your personal privacy, we take client meetings strictly by prior appointment. You can call +91 9004145251 to book your private slot.',
                    ],
                    [
                        'q' => 'What kinds of cases do you handle most in Indore?',
                        'a' => 'In Indore, our most common requests are pre-wedding family background checks, verifying salary and character claims, post-matrimonial loyalty checks, and business background checks for merchants and manufacturers in Pithampur and Sanwer Road.',
                    ],
                    [
                        'q' => 'Will anyone know that I hired a detective in Indore?',
                        'a' => 'Never. We sign a written Non-Disclosure Agreement (NDA). Your identity is kept 100% secret, and our field operatives work silently without the other person ever finding out.',
                    ],
                    [
                        'q' => 'How much does an investigation in Indore cost?',
                        'a' => 'Every case is unique depending on the number of days, location, and type of proof needed. We provide an honest, upfront quote during your free consultation with no hidden fees.',
                    ],
                ],
                'order' => 1,
            ],
            [
                'name' => 'Pune',
                'slug' => 'pune',
                'state' => 'Maharashtra',
                'is_hq' => false,
                'hero_title' => 'Top Private Detective Agency in Pune',
                'hero_subtitle' => 'Trusted matrimonial background checks, IT employee screening, and confidential family investigations across Pune.',
                'meta_title' => 'Best Detective Agency in Pune | Pre-Matrimonial & Corporate Verification',
                'meta_description' => 'Need a trustworthy detective in Pune? Deep Trace Detective handles pre-matrimonial checks, IT background checks & marital inquiries in Hinjewadi, Baner, Kothrud & Viman Nagar.',
                'local_overview' => 'Pune is one of India\'s biggest IT and educational hubs, but it also sees a growing number of fake profiles, hidden marriages, and exaggerated career claims. At Deep Trace Detective, our Pune bureau helps you uncover the honest truth before you make a lifelong commitment. We specialize in verifying matrimonial proposals for families in Pune, checking IT salary and job claims in Hinjewadi and Magarpatta, investigating spousal dishonesty, and conducting employee background checks for tech startups. Our team knows every lane in Pune—from Baner and Aundh to Kothrud and Kalyani Nagar.',
                'popular_services' => [
                    'IT Professional Matrimonial Check',
                    'Pre-Wedding Family Background Verification',
                    'Post-Matrimonial & Loyalty Inquiries',
                    'Corporate Moonlighting & Resume Fraud',
                    'Child Custody & Divorce Evidence',
                ],
                'local_landmarks' => [
                    'Hinjewadi Infotech Park (Phases 1, 2, 3)',
                    'Wakad & Pimple Saudagar',
                    'Baner & Balewadi High Street',
                    'Kothrud & Karve Nagar',
                    'Magarpatta City & Kharadi EON IT Park',
                    'Kalyani Nagar & Koregaon Park',
                    'Viman Nagar',
                    'Senapati Bapat Road & Shivaji Nagar',
                ],
                'office_address' => 'Senapati Bapat Road, Shivaji Nagar, Pune, Maharashtra - 411016',
                'phone' => '+91 9004145251',
                'email' => 'info@deepdetective.com',
                'map_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121059.04367980314!2d73.7929267!3d18.5246165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin',
                'local_faq' => [
                    [
                        'q' => 'Can you verify someone working in Pune\'s Hinjewadi or Magarpatta IT parks?',
                        'a' => 'Yes. We regularly verify job titles, actual salary brackets, company tenures, active employment status, and residential addresses for tech workers across all Pune tech parks.',
                    ],
                    [
                        'q' => 'How do you conduct pre-matrimonial checks in Pune?',
                        'a' => 'We discreetly check family background, past marital history, lifestyle, habits, financial standing, and community reputation without ever letting the prospect or their family know.',
                    ],
                    [
                        'q' => 'How soon can your operatives start working on a case in Pune?',
                        'a' => 'Our local Pune operatives can start within 4 to 6 hours after your case briefing and approval.',
                    ],
                    [
                        'q' => 'Is the evidence you provide accepted in Pune Family Courts?',
                        'a' => 'Yes. All photo, video, and documentary evidence is collected lawfully with exact timestamps and authentic public records, so your advocate can present it in court without problems.',
                    ],
                ],
                'order' => 2,
            ],
            [
                'name' => 'Mumbai',
                'slug' => 'mumbai',
                'state' => 'Maharashtra',
                'is_hq' => false,
                'hero_title' => 'Top Private Detective Agency in Mumbai',
                'hero_subtitle' => 'High-profile matrimonial background checks, corporate fraud investigations, and asset tracing across Mumbai & MMR.',
                'meta_title' => 'Best Detective Agency in Mumbai | Confidential Private Investigator',
                'meta_description' => 'Looking for a private investigator in Mumbai? Deep Trace Detective provides discreet matrimonial checks, asset searches & corporate fraud probes in BKC, Bandra, Andheri & South Mumbai.',
                'local_overview' => 'In a fast-paced metropolis like Mumbai, finding the genuine truth behind someone\'s claims requires deep street smarts, advanced skills, and absolute discretion. Deep Trace Detective\'s Mumbai team handles sensitive family matters, high-net-worth pre-wedding verifications, corporate embezzlement probes, and asset discovery across Mumbai and Navi Mumbai. From corporate boardrooms in BKC and Nariman Point to residential pockets in Bandra, Juhu, Andheri, Powai, and Thane, we give you concrete facts and photographic proof so you can make informed decisions.',
                'popular_services' => [
                    'High-Net-Worth Matrimonial Verification',
                    'Corporate Fraud & Partner Due Diligence',
                    'Spousal Fidelity & Lifestyle Checks',
                    'Asset Tracing for Divorce & Court Cases',
                    'Undercover Employee & Vendor Audits',
                ],
                'local_landmarks' => [
                    'Bandra Kurla Complex (BKC)',
                    'Nariman Point & Colaba',
                    'Bandra West & Carter Road',
                    'Juhu & Andheri West',
                    'Lower Parel Commercial Towers',
                    'Powai Hiranandani',
                    'Thane & Navi Mumbai Vashi',
                    'Goregaon & Malad IT Corridor',
                ],
                'office_address' => 'Bandra Kurla Complex (BKC), Bandra East, Mumbai, Maharashtra - 400051',
                'phone' => '+91 9004145251',
                'email' => 'info@deepdetective.com',
                'map_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609823277!2d72.741098!3d19.0821978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin',
                'local_faq' => [
                    [
                        'q' => 'Can you track hidden commercial properties and assets in Mumbai?',
                        'a' => 'Yes. We legally check registrar property records, corporate shareholdings, director listings, and market holdings to identify undisclosed assets during divorce or financial disputes.',
                    ],
                    [
                        'q' => 'How do you handle sensitive family cases in South Mumbai and Bandra?',
                        'a' => 'We deploy senior undercover operatives experienced in handling delicate high-profile situations with 100% client anonymity. Your identity is never compromised.',
                    ],
                    [
                        'q' => 'What is the turnaround time for a Mumbai pre-matrimonial investigation?',
                        'a' => 'Standard pre-matrimonial checks typically take 4 to 7 working days. For urgent requirements, our team can accelerate priority inquiries within 72 hours.',
                    ],
                    [
                        'q' => 'Can I meet an investigator in Mumbai before making a decision?',
                        'a' => 'Yes. We can meet you at a quiet, private location of your choice or arrange a video briefing with Principal Investigator under full NDA protection.',
                    ],
                ],
                'order' => 3,
            ],
            [
                'name' => 'Ahmedabad',
                'slug' => 'ahmedabad',
                'state' => 'Gujarat',
                'is_hq' => false,
                'hero_title' => 'Top Private Detective Agency in Ahmedabad, Gujarat',
                'hero_subtitle' => 'Trusted matrimonial background checks, NRI wedding verification, and business due diligence across Ahmedabad & Gandhinagar.',
                'meta_title' => 'Best Detective Agency in Ahmedabad | Matrimonial & Business Due Diligence',
                'meta_description' => 'Top detective agency in Ahmedabad. Confidential pre-matrimonial checks, NRI bride/groom verifications & business fraud probes on SG Highway, Prahlad Nagar & GIFT City.',
                'local_overview' => 'Ahmedabad is Gujarat\'s commercial engine, where business integrity and family trust mean everything. Deep Trace Detective\'s Ahmedabad bureau provides specialized investigative services tailored specifically for Gujarat\'s business and family communities. We specialize in business partner due diligence before investments or joint ventures, NRI matrimonial background checks (verifying claims of grooms and brides in the USA, Canada, and the UK), and uncovering marital infidelity. Our operatives operate across SG Highway, Prahlad Nagar, Bodakdev, Satellite, Maninagar, and GIFT City Gandhinagar.',
                'popular_services' => [
                    'Gujarati Family Pre-Matrimonial Check',
                    'NRI Matrimonial Background Verification',
                    'Business Partner & Investor Due Diligence',
                    'Factory & Vendor Fraud Investigation',
                    'Ancestral Land & Property Checks',
                ],
                'local_landmarks' => [
                    'SG Highway Commercial Corridor',
                    'Prahlad Nagar & Anand Nagar',
                    'Bodakdev & Sindhu Bhavan Road',
                    'Satellite & Vastrapur',
                    'GIFT City Gandhinagar',
                    'Maninagar & Kankaria',
                    'Navrangpura & Ashram Road',
                    'Sanand & Changodar Industrial Area',
                ],
                'office_address' => 'SG Highway, Bodakdev, Ahmedabad, Gujarat - 380054',
                'phone' => '+91 9004145251',
                'email' => 'info@deepdetective.com',
                'map_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117498.44111364539!2d72.4839815!3d23.0204978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin',
                'local_faq' => [
                    [
                        'q' => 'Can you verify an NRI marriage proposal for an Ahmedabad family?',
                        'a' => 'Yes. NRI proposals are very common in Gujarat. We verify the person\'s real visa status, overseas employment, past divorce or marriage, and family background through our global associates in the USA, UK, and Canada.',
                    ],
                    [
                        'q' => 'How do you check a prospective business partner in Ahmedabad or Gandhinagar?',
                        'a' => 'We check MCA company filings, bank defaults, market credit reputation, factory operations, and ongoing court litigations to ensure you invest safely.',
                    ],
                    [
                        'q' => 'Will the inquiry stay confidential within the community?',
                        'a' => 'Yes, 100%. In close-knit communities, discretion is critical. We use discreet methods so not even neighbors or relatives suspect that an inquiry is underway.',
                    ],
                    [
                        'q' => 'Do you serve other cities in Gujarat like Surat, Vadodara, and Rajkot?',
                        'a' => 'Yes. Our Ahmedabad field team handles cases across all major cities of Gujarat, including Surat, Vadodara, Rajkot, and Bhavnagar.',
                    ],
                ],
                'order' => 4,
            ],
            [
                'name' => 'Bengaluru',
                'slug' => 'bengaluru',
                'state' => 'Karnataka',
                'is_hq' => false,
                'hero_title' => 'Top Private Detective Agency in Bengaluru (Bangalore)',
                'hero_subtitle' => 'Pre-matrimonial background checks, tech startup founder vetting, and confidential personal inquiries in Silicon Valley.',
                'meta_title' => 'Best Detective Agency in Bangalore (Bengaluru) | Private Investigator',
                'meta_description' => 'Premier private detectives in Bangalore. Discreet pre-matrimonial checks, tech employee background verification & corporate probes in Koramangala, Indiranagar & Whitefield.',
                'local_overview' => 'As India\'s Silicon Valley, Bengaluru attracts ambitious people from all over the country and abroad. However, high mobility also brings fake resumes, dual employment, hidden first marriages, and startup partner deception. Deep Trace Detective\'s Bengaluru bureau provides crisp, verified facts for tech professionals, startup founders, and families. Whether you need to verify a bride or groom living in Whitefield, run a background check on a co-founder in Koramangala, or investigate a suspicious spouse, our local team operates silently and swiftly across Bengaluru.',
                'popular_services' => [
                    'Tech Professional Matrimonial Verification',
                    'Startup Co-Founder & Partner Background Check',
                    'Dual Employment (Moonlighting) Investigation',
                    'Pre-Wedding Habit & Lifestyle Verification',
                    'Cyber Crime & Boardroom Bug Sweeping',
                ],
                'local_landmarks' => [
                    'Koramangala 1st to 8th Blocks',
                    'Indiranagar 100 Feet & 12th Main Roads',
                    'Whitefield ITPL & EPIP Zone',
                    'Electronic City (Phases 1 & 2)',
                    'HSR Layout & Bellandur Outer Ring Road',
                    'MG Road & Residency Road',
                    'Malleshwaram & Rajajinagar',
                    'Jayanagar & JP Nagar',
                ],
                'office_address' => 'Residency Road, Ashok Nagar, Bengaluru, Karnataka - 560025',
                'phone' => '+91 9004145251',
                'email' => 'info@deepdetective.com',
                'map_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.8865390924!2d77.4908522!3d12.95396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin',
                'local_faq' => [
                    [
                        'q' => 'Can you verify someone living in Whitefield or Electronic City?',
                        'a' => 'Yes. Our local Bangalore team checks actual job positions, company email credentials, salary estimates, residential addresses, and daily routines with complete discretion.',
                    ],
                    [
                        'q' => 'Can you help identify dual employment (moonlighting) in Bangalore tech firms?',
                        'a' => 'Yes. We ethically verify secondary company directorships, freelance agency operations, and parallel payrolls without violating privacy laws.',
                    ],
                    [
                        'q' => 'How discreet are your pre-matrimonial checks in Bengaluru?',
                        'a' => 'Completely secret. We never contact the subject directly. We verify claims through documented public registers, neighborhood checks, and lawful fact-finding.',
                    ],
                    [
                        'q' => 'Can I receive reports electronically with password protection?',
                        'a' => 'Yes. We share final investigation dossiers as password-protected, encrypted PDF files directly with you on your private WhatsApp or secure email.',
                    ],
                ],
                'order' => 5,
            ],
            [
                'name' => 'Bhopal',
                'slug' => 'bhopal',
                'state' => 'Madhya Pradesh',
                'is_hq' => false,
                'hero_title' => 'Top Private Detective Agency in Bhopal',
                'hero_subtitle' => 'Discreet matrimonial checks, background verifications, and family investigations across Bhopal.',
                'meta_title' => 'Best Detective Agency in Bhopal | Deep Trace Detective',
                'meta_description' => 'Top private detective agency in Bhopal. Matrimonial background checks, corporate fraud probes, and asset verification across MP. Call +91 9004145251.',
                'local_overview' => 'Our Bhopal operations bureau provides rapid background verification and sensitive matrimonial inquiries across Madhya Pradesh’s capital. With seasoned field operatives covering MP Nagar, Arera Colony, Kolar Road, and Bairagarh, we handle family verifications and business due diligence with strict confidentiality.',
                'popular_services' => [
                    'Pre-Matrimonial Background Checks',
                    'Post-Matrimonial & Loyalty Checks',
                    'Corporate Fraud Investigation',
                    'Asset Tracing & Title Check',
                ],
                'local_landmarks' => ['MP Nagar', 'Arera Colony', 'Bittan Market', 'Kolar Road', 'Hoshangabad Road', 'Shahpura'],
                'office_address' => 'MP Nagar Zone II, Bhopal, Madhya Pradesh - 462011',
                'phone' => '+91 9004145251',
                'email' => 'info@deepdetective.com',
                'map_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117362.47648375836!2d77.3402772!3d23.2584857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin',
                'local_faq' => [
                    [
                        'q' => 'How quickly can operatives start an inquiry in Bhopal?',
                        'a' => 'Our field operatives in Bhopal can mobilize within 4 hours of your initial consultation and approval.',
                    ],
                    [
                        'q' => 'Is confidentiality guaranteed in Bhopal inquiries?',
                        'a' => 'Yes. Every client engagement is protected under a legally binding Non-Disclosure Agreement (NDA).',
                    ],
                ],
                'order' => 6,
            ],
            [
                'name' => 'Delhi NCR',
                'slug' => 'delhi',
                'state' => 'Delhi',
                'is_hq' => false,
                'hero_title' => 'Top Private Detective Agency in Delhi NCR',
                'hero_subtitle' => 'Corporate risk intelligence, matrimonial verification & digital forensics across Delhi, Gurgaon, and Noida.',
                'meta_title' => 'Top Detective Agency in Delhi NCR | Deep Trace Detective',
                'meta_description' => 'Premier private detectives in Delhi NCR. High-profile matrimonial verification, corporate fraud investigations, employee screening in Delhi, Gurgaon & Noida.',
                'local_overview' => 'Our Delhi NCR bureau provides rapid intelligence gathering in the national capital region. With field operatives across Connaught Place, Cyber City Gurgaon, and Noida Sector 62, we handle intricate corporate due diligence and pre-wedding background checks.',
                'popular_services' => ['Corporate Investigation', 'Pre-Matrimonial Background Checks', 'Cyber Forensics', 'TSCM Bug Sweeping'],
                'local_landmarks' => ['Connaught Place', 'Cyber City Gurgaon', 'Noida Sector 62', 'South Extension', 'Dwarka'],
                'office_address' => 'Barakhamba Road, Connaught Place, New Delhi - 110001',
                'phone' => '+91 9004145251',
                'email' => 'info@deepdetective.com',
                'map_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224345.83923192776!2d77.0688975!3d28.5272803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin',
                'local_faq' => [
                    [
                        'q' => 'Can you verify prospective partners living in Gurgaon or Noida?',
                        'a' => 'Yes, our NCR team conducts detailed corporate employment and residential verification across Delhi, Gurgaon, and Noida.',
                    ],
                ],
                'order' => 7,
            ],
            [
                'name' => 'Jaipur',
                'slug' => 'jaipur',
                'state' => 'Rajasthan',
                'is_hq' => false,
                'hero_title' => 'Top Detective Agency in Jaipur, Rajasthan',
                'hero_subtitle' => 'Ancestral property verification, matrimonial background checks & asset tracing across Rajasthan.',
                'meta_title' => 'Best Detective Agency in Jaipur | Deep Trace Detective',
                'meta_description' => 'Top private detective agency in Jaipur. Pre-matrimonial background verification, property title verification & asset tracing in Rajasthan. Call +91 9004145251.',
                'local_overview' => 'Our Jaipur operations bureau specializes in ancestral lineage verification, real estate title searches, and confidential matrimonial checks across C-Scheme, Malviya Nagar, and Mansarovar.',
                'popular_services' => ['Property Title Verification', 'Pre-Matrimonial Investigation', 'Corporate Due Diligence', 'Missing Person Tracing'],
                'local_landmarks' => ['C-Scheme', 'Malviya Nagar', 'Vaishali Nagar', 'Mansarovar', 'Tonk Road', 'Raja Park'],
                'office_address' => 'Ashok Nagar, C-Scheme, Jaipur, Rajasthan - 302001',
                'phone' => '+91 9004145251',
                'email' => 'info@deepdetective.com',
                'map_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.38256244795!2d75.6504696!3d26.8854479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin',
                'local_faq' => [
                    [
                        'q' => 'Can you verify land records and property claims in Rajasthan?',
                        'a' => 'Yes, our investigative legal team scrutinizes municipal mutation records, encumbrances, and revenue titles lawfully.',
                    ],
                ],
                'order' => 8,
            ],
        ];

        foreach ($cities as $c) {
            City::create($c);
        }
    }
}
