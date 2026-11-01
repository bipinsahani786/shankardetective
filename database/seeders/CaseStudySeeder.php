<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class CaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $cases = [
            [
                'title' => 'Uncovering Hidden First Marriage & Loan Defaults in Pune-Bangalore Matrimonial Proposal',
                'slug' => 'uncovering-hidden-first-marriage-pune-bangalore',
                'service_category' => 'Pre-Matrimonial Investigation',
                'client_challenge' => 'A family in Pune was arranging their daughter’s marriage to a groom who claimed to be a senior tech manager in Bengaluru earning ₹45 Lakhs annually, with ancestral commercial land. Before finalizing, the family sensed inconsistencies in his background.',
                'investigation_approach' => 'Our Bengaluru operatives verified his employment details with his alleged company and checked municipal marriage registrar records. Meanwhile, our Pune team discreetly visited the residential neighborhood and verified property documents at the local registrar office.',
                'outcome_verdict' => 'We discovered the individual was already married 3 years prior without any legal divorce. Furthermore, he had left his tech job 5 months earlier and had heavy personal loan defaults against his parents\' home. The client safely called off the wedding with concrete proof.',
                'key_evidence_type' => 'Certified Municipal Marriage Record & Verified Employer Relieving Document',
                'timeline_days' => 6,
                'meta_title' => 'Case Study: Pre-Matrimonial Check Unveils Hidden Marriage | Deep Trace Detective',
                'meta_description' => 'How Deep Trace Detective verified a groom’s real marital history and job status across Pune and Bengaluru within 6 days.',
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'title' => 'Solving ₹3.8 Crore Industrial Cargo Theft on Mumbai-Pune-Ahmedabad Highway',
                'slug' => 'corporate-cargo-theft-mumbai-pune-ahmedabad',
                'service_category' => 'Corporate Investigation',
                'client_challenge' => 'A major consumer goods company suffered recurring product shortages worth ₹3.8 Crores across transport trucks travelling between manufacturing plants in Ahmedabad and distribution hubs in Pune and Mumbai.',
                'investigation_approach' => 'Deep Trace Detective placed undercover operatives within the supply chain and tracked vehicle routes along the Western Express corridor. Our team correlated route deviations with unauthorized warehouse stops.',
                'outcome_verdict' => 'We identified a coordinated group of drivers diverting sealed cargo to a clandestine warehouse outside Panvel. Full photographic and invoice evidence was handed to law enforcement, leading to the recovery of stolen goods and prosecution.',
                'key_evidence_type' => 'Time-stamped Video Evidence, GPS Corridor Logs, and Buyer Invoices',
                'timeline_days' => 16,
                'meta_title' => 'Case Study: ₹3.8 Crore Logistics Theft Solved in Maharashtra & Gujarat | Deep Trace',
                'meta_description' => 'How Deep Trace Detective solved an organized supply chain theft ring between Mumbai, Pune, and Ahmedabad.',
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'title' => 'Tracing Concealed Commercial Assets in High-Conflict Custody & Alimony Proceeding',
                'slug' => 'tracing-concealed-commercial-assets-alimony',
                'service_category' => 'Divorce & Child Custody Evidence',
                'client_challenge' => 'During a divorce and maintenance trial in court, a spouse submitted an affidavit claiming to have zero income and complete unemployment to avoid paying child support.',
                'investigation_approach' => 'Our financial investigators checked MCA company filings, traced undisclosed business directorships registered under distant family members, and conducted discreet on-ground visits to commercial outlets.',
                'outcome_verdict' => 'We proved direct ownership in two profitable fitness clubs and three commercial rental shops generating over ₹4.5 Lakhs every month. The court accepted the proof under Section 63 BSA, ensuring a fair child maintenance order.',
                'key_evidence_type' => 'MCA Directorship Filings, Bank Transaction Traces, Photo/Video Documentation',
                'timeline_days' => 12,
                'meta_title' => 'Case Study: Uncovering Hidden Assets in Courtroom Custody Case | Deep Trace Detective',
                'meta_description' => 'How our financial investigators documented undisclosed commercial holdings in an Indian Family Court maintenance trial.',
                'is_featured' => true,
                'order' => 3,
            ],
            [
                'title' => 'Detecting Rogue Listening Devices & Boardroom Bug Sweeping for Corporate Enterprise',
                'slug' => 'rogue-listening-devices-bug-sweeping-corporate',
                'service_category' => 'Bug Sweeping (TSCM)',
                'client_challenge' => 'A large corporate enterprise in Mumbai and Bangalore noticed their confidential tender bids and pricing strategies were being leaked to competitors before official announcements.',
                'investigation_approach' => 'Our technical countermeasures team scanned the executive boardroom, private cabins, and teleconference systems using radio-frequency spectrum analyzers, non-linear junction detectors, and thermal imaging cameras.',
                'outcome_verdict' => 'We discovered an active GSM transmitter hidden inside a conference room power strip and a concealed microphone in a ceiling HVAC duct. All devices were safely deactivated and secure room protocols were established.',
                'key_evidence_type' => 'Physical RF Bug Units, Spectrum Frequency Logs, Thermal Analysis Photos',
                'timeline_days' => 2,
                'meta_title' => 'Case Study: Corporate Bug Sweeping & Boardroom Security | Deep Trace Detective',
                'meta_description' => 'How Deep Trace Detective located active audio transmitters inside an executive boardroom in under 48 hours.',
                'is_featured' => true,
                'order' => 4,
            ],
        ];

        foreach ($cases as $c) {
            CaseStudy::updateOrCreate(['slug' => $c['slug']], $c);
        }
    }
}
