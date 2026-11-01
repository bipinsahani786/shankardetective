<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            // General
            [
                'question' => 'Is hiring a private detective legal in India?',
                'answer' => 'Yes, hiring a private investigator in India is completely legal. Private detectives operate as fact-finders and evidence gatherers. At Deep Trace Detective, all investigations are conducted strictly within the boundaries of the Constitution of India, the Digital Personal Data Protection (DPDP) Act 2023, the Bharatiya Nyaya Sanhita (BNS), and the Information Technology Act 2000.',
                'category' => 'Legal & Ethics',
                'order' => 1,
                'is_featured' => true,
            ],
            [
                'question' => 'How do you guarantee 100% confidentiality of my case?',
                'answer' => 'Client confidentiality is our absolute sacred principle. All interactions are protected under ironclad Non-Disclosure Agreements (NDAs). Case files are encrypted with military-grade AES-256 protocols, client identifiers are pseudonymized with case codes, and operatives in the field only know need-to-know details without ever seeing the client’s identity.',
                'category' => 'General',
                'order' => 2,
                'is_featured' => true,
            ],
            [
                'question' => 'Do you tap phones or provide WhatsApp chat records / CDR?',
                'answer' => 'STRICTLY NO. Under Indian law (Indian Telegraph Act and IT Act), unauthorized phone tapping, wiretapping, WhatsApp interception, and obtaining Call Detail Records (CDR) without authorized judicial/police warrants is illegal. Deep Trace Detective NEVER engages in phone tapping or unauthorized data hacking. We uncover verifiable truths through lawful human intelligence, physical surveillance, public registrar forensics, and digital open-source footprint analysis.',
                'category' => 'Legal & Ethics',
                'order' => 3,
                'is_featured' => true,
            ],
            [
                'question' => 'Is the evidence gathered admissible in an Indian court of law?',
                'answer' => 'Yes. Our evidence documentation—including time-stamped photographs, unedited video footage, forensic audits, public registry filings, and certified investigator affidavits—is compiled strictly under Section 63 (electronic records) and related provisions of the Bharatiya Sakshya Adhiniyam / Indian Evidence Act, making it solid for matrimonial, civil, and criminal proceedings.',
                'category' => 'Legal & Ethics',
                'order' => 4,
                'is_featured' => true,
            ],
            [
                'question' => 'How much does an investigation cost and what are your payment terms?',
                'answer' => 'Each investigation is unique in scope, location, and operational complexity. Pre-matrimonial checks usually operate on flat packages, whereas dynamic surveillance and corporate fraud audits are billed based on days, operative deployment, and technical equipment required. We provide transparent, itemized quotes with zero hidden charges after our free initial consultation.',
                'category' => 'Pricing & Process',
                'order' => 5,
                'is_featured' => true,
            ],
            [
                'question' => 'How long does a typical investigation take?',
                'answer' => 'Pre-matrimonial and background verifications typically conclude within 5 to 7 working days. Physical surveillance cases run between 3 to 10 days depending on the subject’s schedule. Complex corporate due diligence or missing person tracing may take 2 to 4 weeks. Interim status briefings are provided regularly.',
                'category' => 'Pricing & Process',
                'order' => 6,
                'is_featured' => true,
            ],
            [
                'question' => 'What parameters are checked in a Pre-Matrimonial verification?',
                'answer' => 'Our comprehensive pre-matrimonial inquiry verifies: (1) Employment, salary, and company reputation; (2) Educational qualifications; (3) Family background and social standing; (4) Financial standing, assets, and liabilities; (5) Past marriages, hidden engagements, or civil suits; (6) Daily habits, social circle, and lifestyle integrity.',
                'category' => 'Matrimonial',
                'order' => 7,
                'is_featured' => true,
            ],
            [
                'question' => 'Will the subject ever find out that they are being investigated?',
                'answer' => 'No. Our operatives are senior intelligence specialists with background in defense, state police, and tactical surveillance. We operate at extreme stand-off distances, use decoy vehicles and civilian identities, and maintain zero contact with the subject or their immediate associates.',
                'category' => 'General',
                'order' => 8,
                'is_featured' => true,
            ],
            [
                'question' => 'What corporate investigation services do you provide?',
                'answer' => 'For corporate clients, we provide: C-suite executive background checks, pre-employment screening, inventory theft and embezzlement probes, counterfeit goods/IP infringement sting operations, competitor intelligence (legal open-source & market inquiry), and Technical Surveillance Counter-Measures (TSCM / bug sweeping).',
                'category' => 'Corporate',
                'order' => 9,
                'is_featured' => true,
            ],
            [
                'question' => 'Can you handle cases across Pune, Mumbai, Ahmedabad, Bangalore, and Indore?',
                'answer' => 'Yes. Deep Trace Detective has active operational field teams across Indore (Headquarters), Pune, Mumbai, Ahmedabad, and Bangalore. For NRI matrimonial checks and cross-border verifications, we also coordinate with verified international partners in the USA, UK, UAE, and Canada.',
                'category' => 'General',
                'order' => 10,
                'is_featured' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
