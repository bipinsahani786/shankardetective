<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'Rajesh K. Verma',
                'client_role' => 'Business Owner, Pune',
                'service_rendered' => 'Pre-Matrimonial Investigation',
                'quote' => 'Before finalizing my daughter’s wedding proposal, we sought Deep Trace Detective’s help. Within 6 days, their team uncovered that the prospective groom had concealed a prior registered marriage and severe debt. Their discrete work saved my daughter from immense heartbreak and financial ruin. Truly life-saving service.',
                'rating' => 5,
                'avatar_url' => null,
                'is_verified' => true,
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'client_name' => 'Ananya S.',
                'client_role' => 'Senior Corporate Counsel, Delhi NCR',
                'service_rendered' => 'Divorce & Child Custody Evidence',
                'quote' => 'In a contested custody battle where the other party falsely claimed unemployment to evade maintenance and hide assets, Deep Trace Detective documented undeclared businesses and luxury assets with time-stamped video evidence that was admitted into Family Court without objection.',
                'rating' => 5,
                'avatar_url' => null,
                'is_verified' => true,
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'client_name' => 'Managing Director',
                'client_role' => 'Pharmaceutical Manufacturer, Mumbai',
                'service_rendered' => 'IP & Counterfeit Investigation',
                'quote' => 'Counterfeit batches of our branded wellness formulations were circulating across wholesale markets in Maharashtra and Gujarat. Deep Trace Detective’s undercover operatives traced the supply chain back to an illegal compounding unit in under three weeks, facilitating police enforcement.',
                'rating' => 5,
                'avatar_url' => null,
                'is_verified' => true,
                'is_featured' => true,
                'order' => 3,
            ],
            [
                'client_name' => 'Sunita M.',
                'client_role' => 'NRI Family Member, London / Bengaluru',
                'service_rendered' => 'Matrimonial Profile Verification',
                'quote' => 'Being based in the UK, we could not physically verify credentials of an alliance in Bengaluru. The team at Deep Trace Detective handled everything seamlessly with detailed photos of the family residence, direct verification of the MNC workplace, and social reputation checks.',
                'rating' => 5,
                'avatar_url' => null,
                'is_verified' => true,
                'is_featured' => true,
                'order' => 4,
            ],
            [
                'client_name' => 'Vice President, HR',
                'client_role' => 'Fintech Enterprise, Bengaluru',
                'service_rendered' => 'Executive Background Screening',
                'quote' => 'We retain Deep Trace Detective for all Director and C-level candidate screenings. Their depth goes far beyond basic automated database checks—they uncover undisclosed directorships, conflicts of interest, and reputation concerns that typical vendors miss.',
                'rating' => 5,
                'avatar_url' => null,
                'is_verified' => true,
                'is_featured' => true,
                'order' => 5,
            ],
            [
                'client_name' => 'Dr. P. Narayan',
                'client_role' => 'Senior Physician, Lucknow',
                'service_rendered' => 'Property & Land Title Verification',
                'quote' => 'I was about to invest ₹1.8 Crore in a commercial plot near Lucknow. Deep Trace Detective’s field team discovered that the seller was using fabricated Power of Attorney documents and that the plot was entangled in an active civil dispute. Highly professional and thorough.',
                'rating' => 5,
                'avatar_url' => null,
                'is_verified' => true,
                'is_featured' => true,
                'order' => 6,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
