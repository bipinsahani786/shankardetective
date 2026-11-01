<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        TeamMember::truncate();

        $members = [
            [
                'name' => 'Principal Investigator',
                'designation' => 'Chief Investigation Officer',
                'bio' => 'Directs confidential investigation operations from the central bureau in Indore. Specialized in complex matrimonial verification, corporate fraud investigation, and courtroom-admissible evidence gathering under Indian evidentiary law.',
                'specializations' => ['Matrimonial Verification', 'Corporate Due Diligence', 'Asset Tracing', 'Courtroom Evidence'],
                'photo_url' => null,
                'experience_years' => '12+ Years',
                'order' => 1,
            ],
            [
                'name' => 'Head of Verification',
                'designation' => 'Corporate Due Diligence Lead',
                'bio' => 'Oversees pre-employment screening, vendor integrity audits, and commercial background checks. Brings extensive experience in background verification standards and data accuracy verification.',
                'specializations' => ['Pre-Employment Screening', 'Vendor Audits', 'Background Verification', 'Risk Advisory'],
                'photo_url' => null,
                'experience_years' => '10+ Years',
                'order' => 2,
            ],
            [
                'name' => 'Senior Legal Counsel',
                'designation' => 'Evidence Admissibility Advisor',
                'bio' => 'Specialized in civil litigation, DPDP Act 2023 compliance, and Bharatiya Sakshya Adhiniyam standards, ensuring all investigative findings strictly adhere to lawful judicial scrutiny.',
                'specializations' => ['Section 63 BSA Compliance', 'DPDP Act 2023', 'Litigation Support', 'Civil Evidence'],
                'photo_url' => null,
                'experience_years' => '14+ Years',
                'order' => 3,
            ],
            [
                'name' => 'TSCM Operations Lead',
                'designation' => 'Technical Forensics Specialist',
                'bio' => 'Directs technical risk assessments, corporate bug sweeping (TSCM), and digital risk audits for corporate boardrooms and industrial facilities.',
                'specializations' => ['TSCM Bug Sweeping', 'Cyber Forensics', 'Risk Auditing', 'Technical Security'],
                'photo_url' => null,
                'experience_years' => '9+ Years',
                'order' => 4,
            ],
        ];

        foreach ($members as $m) {
            TeamMember::create($m);
        }
    }
}
