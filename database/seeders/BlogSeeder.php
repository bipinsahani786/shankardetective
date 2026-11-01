<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Matrimonial Investigation', 'slug' => 'matrimonial-investigation', 'description' => 'Pre-wedding background checks, matrimonial profile verification, and infidelity insights.'],
            ['name' => 'Corporate Intelligence', 'slug' => 'corporate-intelligence', 'description' => 'Business risk mitigation, executive screening, asset tracing, and counter-espionage.'],
            ['name' => 'Legal & Court Evidence', 'slug' => 'legal-court-evidence', 'description' => 'Evidence collection standards, DPDP Act compliance, and courtroom litigation support.'],
            ['name' => 'Cyber Forensics & Privacy', 'slug' => 'cyber-forensics-privacy', 'description' => 'Digital evidence retrieval, TSCM bug sweeping, and digital surveillance counter-measures.'],
        ];

        $categoryModels = [];
        foreach ($categories as $cat) {
            $categoryModels[$cat['slug']] = Category::firstOrCreate(['slug' => $cat['slug']], $cat);
        }

        $tags = [
            'Pre-Matrimonial', 'Infidelity', 'Asset Tracing', 'Court Evidence',
            'Corporate Fraud', 'Cyber Forensics', 'TSCM Bug Sweep', 'DPDP Act',
            'Background Check', 'Legal Investigation'
        ];

        $tagModels = [];
        foreach ($tags as $tagName) {
            $tagModels[] = Tag::firstOrCreate(['slug' => Str::slug($tagName)], ['name' => $tagName]);
        }

        $posts = [
            [
                'category_slug' => 'matrimonial-investigation',
                'title' => 'The Ultimate Pre-Matrimonial Investigation Checklist in India: What Every Family Must Verify',
                'slug' => 'pre-matrimonial-investigation-checklist-india',
                'excerpt' => 'Arranged marriages in India require prudent verification. Learn the 6 essential parameters every family should verify before finalizing a matrimonial alliance.',
                'reading_time_minutes' => 7,
                'content' => 'Marriage is one of the most important decisions of your life. In India, arranged marriages bring together not just two people, but two families. Unfortunately, many families face exaggerated claims about jobs, salaries, ancestral wealth, or past relationship history. At Deep Trace Detective, led by Senior Case Director, our team has investigated over 1,800 matrimonial proposals across Indore, Pune, Mumbai, Ahmedabad, and Bangalore. We have created this simple guide to help families verify the facts and protect their loved ones.

### 1. Employment and Professional Verification
One of the most frequent misrepresentations in modern matrimony involves professional status. It is surprisingly common for individuals to claim senior software architect positions at Fortune 500 MNCs when they are in fact on performance improvement plans, contract staffing, or terminated months ago.
- **Official Employment Status:** Directly verifying with corporate HR records via discrete, legitimate channels.
- **Actual Take-Home Compensation:** Confirming salary bands against realistic market standards to uncover inflated earnings.
- **Workplace Reputation:** Discreetly assessing inter-personal conduct, professionalism, and behavioral stability among peer networks.

### 2. Family Background & Social Reputation
A person’s upbringing, family values, and community reputation reflect strongly in long-term matrimonial compatibility.
- Verification of ancestral family residence and standing in native hometowns.
- Identification of undisclosed inter-family feuds, civil disputes, or criminal history under Bharatiya Nyaya Sanhita (formerly IPC).
- Neighborhood checks conducted at extreme stand-off distance to gauge how neighbors perceive the family’s ethics.

### 3. Verification of Marital History & Concealed Relationships
Under Indian law, concealing a prior valid marriage constitutes an offense. Our detectives consistently uncover:
- Undisclosed previous court marriages, mutual consent divorce petitions, or ongoing maintenance battles.
- Active romantic relationships, engagements, or cohabitation arrangements not communicated to prospective in-laws.
- Children from prior relationships that were kept confidential.

### 4. Financial Liabilities and Asset Scrutiny
Often, lavish weddings are funded through unsecured personal debts or dubious borrowing. Our financial investigators check:
- CIBIL/Credit score standing and active loan defaults (conducted within legal consent frameworks).
- True ownership of claimed family properties, agricultural land titles, and business equity versus mortgaged assets.
- Potential pending consumer court or DRT (Debt Recovery Tribunal) summons.

### 5. Habits, Temperament & Lifestyle Integrity
Daily habits heavily influence marital peace. Our licensed surveillance operatives observe:
- Substance dependence, alcoholism, or compulsive gambling behavior.
- Late-night lifestyle patterns and social circle associations.
- Temperament during public interactions, anger management issues, and aggressive behavior.

### 6. Medical and Health Disclosure
While intrusive medical inquiries are avoided, critical disclosures—such as hereditary medical issues, severe psychiatric history, or substance rehabilitation stints—are verified when specifically requested by concerned parents.

### How Deep Trace Detective Conducts Verifications Confidentially
All inquiries conducted by our team are 100% discrete. We never approach the prospective alliance directly or reveal the identity of the client. An exhaustive, documented dossier containing verifiable facts, photographs, and civic registry references is submitted to the client within 5 to 7 business days.',
                'meta_title' => 'Pre-Matrimonial Investigation Checklist India | Deep Trace Detective',
                'meta_description' => 'Discover the 6 crucial things to verify before finalizing an arranged marriage in India: salary, past marriages, debts, and lifestyle reputation.',
            ],
            [
                'category_slug' => 'legal-court-evidence',
                'title' => 'Is Hiring a Private Detective Legal in India? Laws, Ethics, and Court Admissibility',
                'slug' => 'is-hiring-private-detective-legal-in-india',
                'excerpt' => 'A comprehensive legal analysis of private investigations in India under the DPDP Act 2023, Bharatiya Nyaya Sanhita, and Bharatiya Sakshya Adhiniyam.',
                'reading_time_minutes' => 8,
                'content' => 'One of the most frequent questions clients ask when reaching out to our agency is: *"Is hiring a private detective legal in India?"* The answer is an unequivocal YES—provided the agency operates strictly within the constitutional and statutory framework of Indian law.

### The Legal Framework for Private Detectives in India
Unlike the United States or the United Kingdom, where private detectives are licensed under centralized statutes (such as the UK Security Industry Authority), India currently regulates investigative activities under existing civil and criminal codes.
- **Article 19(1)(g) of the Constitution:** Protects the right of private citizens to practice any legitimate profession or business, including investigative consulting and fact-gathering.
- **Right to Privacy & KS Puttaswamy Judgment (2017):** Establishes privacy as a fundamental right under Article 21. Legitimate detectives respect spatial boundaries, avoiding intrusive physical trespass or illicit eavesdropping.
- **Digital Personal Data Protection (DPDP) Act 2023:** Mandates ethical handling of digital information and prohibits unauthorized data harvesting.

### What is Legitimate vs. Strictly Illegal
It is crucial for clients to understand the boundaries separating legitimate intelligence from criminal activity:

| Legitimate Investigation Methods | STRICTLY ILLEGAL (Never Permitted) |
|---|---|
| Public space surveillance and photography | Phone tapping, wiretapping, or call recording |
| Municipal registry & land title verification | Procuring Call Detail Records (CDR) without court warrant |
| Open Source Intelligence (OSINT) & social analysis | Hacking into WhatsApp, email, or social media accounts |
| Workplace and educational credential checks | Installing illegal spyware/keyloggers on personal devices |
| Discreet neighborhood character inquiries | Trespassing onto private residential premises |

### Admissibility of Detective Evidence in Indian Courts
Evidence gathered by reputable private investigators is routinely admitted in Indian Family Courts, Civil Courts, and Commercial Tribunals. Under Section 63 of the Bharatiya Sakshya Adhiniyam (BSA), electronic evidence such as time-stamped digital photographs and unedited surveillance videos are admissible provided the investigator provides an accompanying statutory certificate proving the integrity of the recording media.

### Choosing an Ethical Detective Agency
Clients should always insist on:
1. A formal Non-Disclosure Agreement (NDA).
2. Explicit contractual clauses confirming full compliance with Indian laws.
3. Written operational methodology avoiding illegal phone tapping or hacking promises.',
                'meta_title' => 'Is Hiring a Private Detective Legal in India? | Deep Trace Detective',
                'meta_description' => 'Learn the legal reality of private detectives in India: DPDP Act 2023 compliance, court admissibility of evidence, and what methods are legal vs illegal.',
            ],
            [
                'category_slug' => 'cyber-forensics-privacy',
                'title' => 'How Modern Digital Forensics & Cyber Investigations Trace Online Financial Frauds',
                'slug' => 'digital-forensics-cyber-investigations-financial-fraud',
                'excerpt' => 'From fake investment apps to UPI phishing, discover how certified cyber forensic analysts uncover digital footprints and assist legal recovery.',
                'reading_time_minutes' => 6,
                'content' => 'Cyber financial fraud in India has skyrocketed with the proliferation of digital payments, instant messaging investment scams, and cloned banking portals. According to Indian Cyber Crime Coordination Centre (I4C) data, thousands of citizens lose life savings to sophisticated multi-tier scam operations daily. At Deep Trace Detective, our dedicated cyber forensics division applies cutting-edge digital intelligence to unmask the perpetrators behind digital financial crimes.

### Modern Modus Operandi of Digital Scammers
- **WhatsApp/Telegram Task & Trading Scams:** Victims are enticed with high returns on simulated investment dashboards before funds are frozen and extorted.
- **SIM Swap & Impersonation:** Scammers exploit social engineering to bypass two-factor authentication.
- **Corporate Email Compromise (BEC):** Spoofed vendor invoices directing multi-lakh wire transfers into illicit mule accounts.

### The Role of Private Cyber Forensics
While police cyber cells manage massive backlogs, private forensic investigators provide immediate, surgical tracking:
1. **Header & Metadata Extraction:** Tracing original IP relays and server infrastructure through email header analysis.
2. **Mule Account Mapping:** Tracking funds routed through primary, secondary, and tertiary banking nodes.
3. **OSINT Domain Attribution:** Identifying real-world registrant data, WHOIS history, and hosting geography of fraudulent portals.
4. **Section 63 BSA Digital Dossier:** Compiling a forensic digital evidence report formatted for immediate FIR submission.',
                'meta_title' => 'Digital Forensics & Cyber Fraud Investigation | Deep Trace Detective',
                'meta_description' => 'Understand how certified cyber investigators analyze phishing, investment scams, and digital financial frauds for courtroom and police recovery.',
            ],
            [
                'category_slug' => 'legal-court-evidence',
                'title' => 'Court-Admissible Evidence in Divorce & Child Custody Battles: Legal Standards in India',
                'slug' => 'court-admissible-evidence-divorce-custody-india',
                'excerpt' => 'Family courts require concrete, verifiable evidence. Understand how photographic proof, asset documentation, and lifestyle reports are presented lawfully.',
                'reading_time_minutes' => 7,
                'content' => 'Matrimonial litigation in India—encompassing divorce under the Hindu Marriage Act or Special Marriage Act, maintenance claims under Section 144 of the Bharatiya Nagarik Suraksha Sanhita (formerly CrPC 125), and child custody battles—frequently hinges on factual substantiation rather than mere verbal accusations.

### Documenting Cruelty, Desertion, and Adultery
While adultery is no longer a criminal offense following the historic *Joseph Shine v. Union of India* Supreme Court ruling, it remains a legitimate ground for civil divorce and affects alimony determinations.
- Proof of adultery requires clear, corroborated evidence of intimacy or continuous cohabitation.
- Discrete public-space surveillance documentation—displaying date, time, and location—provides compelling substantiation.

### Exposing Concealed Assets and True Income
One of the most contentious phases of divorce litigation is the maintenance affidavit. Parties frequently suppress business earnings, transfer properties to benami entities, and claim poverty to reduce maintenance obligations.
- Our forensic accounting detectives analyze corporate registrar filings, commercial leases, and vehicle registrations.
- We establish lifestyle proof: upscale residences, international travel records, and premium vehicles utilized daily.

### Child Welfare & Custody Assessments
In custody matters, Indian courts hold the **"Best Interest of the Child"** as the paramount doctrine. Evidence demonstrating parental neglect, domestic violence, substance abuse, or dangerous environments is crucial in ensuring child protection.',
                'meta_title' => 'Divorce & Child Custody Evidence Standards | Deep Trace Detective',
                'meta_description' => 'Explore how private detectives lawfully collect court-admissible evidence for divorce, maintenance, and child custody disputes in Indian Family Courts.',
            ],
            [
                'category_slug' => 'matrimonial-investigation',
                'title' => 'Recognizing Signs of Infidelity: When to Seek Professional Confidential Surveillance',
                'slug' => 'recognizing-signs-of-infidelity-confidential-surveillance',
                'excerpt' => 'Living with suspicion causes severe mental trauma. Learn the common behavioral indicators of marital infidelity and why professional surveillance provides clarity.',
                'reading_time_minutes' => 6,
                'content' => 'Suspecting a spouse of extramarital involvement is one of the most agonizing emotional experiences an individual can face. Unanswered questions, gaslighting, and sudden behavioral shifts often create profound distress. However, confronting a partner without undeniable evidence frequently results in defensive denials, destruction of evidence, and increased secrecy.

### Key Behavioral Indicators of Infidelity
1. **Drastic Changes in Digital Privacy:** Suddenly locking phones with biometric passwords, shielding screens, and clearing chat logs.
2. **Unexplained Schedule Changes:** Frequent sudden "emergency office meetings", weekend business trips with vague itineraries.
3. **Emotional Distance & Defensiveness:** Irritability over innocent questions regarding daily whereabouts.
4. **Unaccounted Financial Withdrawals:** Cash withdrawals or credit card transactions at boutique hotels, restaurants, or luxury retail outlets.
5. **Noticeable Grooming & Wardrobe Upgrades:** Sudden intense interest in gym fitness, designer attire, and cologne without mutual participation.

### Why Professional Surveillance is Essential
Self-investigation often leads to confrontation, safety risks, and compromised evidence. Our licensed surveillance detectives:
- Maintain complete invisibility using tactical mobile surveillance teams.
- Record high-definition, time-stamped video and photographic documentation in public spaces.
- Deliver absolute truth so clients can make empowered decisions regarding reconciliation or legal recourse.',
                'meta_title' => 'Signs of Infidelity & Confidential Surveillance | Deep Trace Detective',
                'meta_description' => 'Identify the telltale behavioral signs of marital infidelity and learn how discrete, legal surveillance provides objective truth.',
            ],
            [
                'category_slug' => 'corporate-intelligence',
                'title' => 'Executive Due Diligence: Why Resume Checks Aren’t Enough for Director-Level Hires',
                'slug' => 'executive-due-diligence-director-level-hires',
                'excerpt' => 'Appointing a C-suite executive without comprehensive due diligence puts company valuation, reputation, and shareholder trust at risk.',
                'reading_time_minutes' => 6,
                'content' => 'When onboarding a CEO, CFO, or Independent Director, standard automated background screening services fall woefully short. Automated database checks cannot detect undisclosed conflicts of interest, corporate governance infractions, hostile competitor ties, or pending civil litigations hidden across regional courts.

### What Executive Due Diligence Uncovers
- **Undisclosed Directorships & Cross-Holdings:** Detecting active directorships in competing entities or undisclosed supplier businesses.
- **Regulatory Infractions:** Scrutinizing SEBI, RBI, and MCA registries for historical bans or disciplinary actions.
- **Reputational Due Diligence:** Interviewing former board members, colleagues, and industry peers to evaluate leadership integrity.
- **Financial Integrity:** Identifying undisclosed personal bankruptcy filings, civil suits, or loan guarantees.',
                'meta_title' => 'Executive Due Diligence for C-Suite Hires | Deep Trace Detective',
                'meta_description' => 'Protect corporate valuation with executive background checks. Uncover conflicts of interest, undisclosed directorships, and legal disputes.',
            ],
            [
                'category_slug' => 'legal-court-evidence',
                'title' => 'Property and Land Title Verification: How to Protect Your Life Savings in Pune, Mumbai, Ahmedabad & Indore',
                'slug' => 'property-land-title-verification-pune-mumbai-ahmedabad-indore',
                'excerpt' => 'Buying real estate or commercial property? Learn how to check 30-year ownership titles, registrar deeds, and court disputes before you invest.',
                'reading_time_minutes' => 6,
                'content' => 'Buying property or agricultural land is one of the largest financial investments you will ever make. However, rapidly growing cities like Pune, Mumbai, Ahmedabad, and Indore witness recurring disputes, forged Power of Attorney documents, and unapproved layout approvals.

### Common Property Scams to Watch Out For
1. **Forged Power of Attorney (PoA):** Unscrupulous sellers pretend to hold legal power on behalf of elderly or overseas family members to sell plots without permission.
2. **Double Registrations:** Selling the same residential or commercial parcel to multiple buyers through forged deed copies.
3. **Hidden Family Disputes:** Selling ancestral land without the knowledge or signature of all legal heirs or sisters.
4. **Active Court Litigations:** Selling properties that are under stay orders in civil court.

### How Deep Trace Detective Verifies Property
- **30-Year Sub-Registrar Search:** We inspect official index registers to confirm an unbroken chain of genuine ownership.
- **Revenue Department Records:** We check local 7/12 extracts, Ferfar entries, and city survey records at local Tehsil offices.
- **Physical Possession Check:** Our field team visits the site in person to verify who actually holds physical possession and boundaries.
- **Court Case Search:** We scan District and High Court records to confirm no active stay orders exist against the land.',
                'meta_title' => 'Property & Land Title Verification in Pune, Mumbai, Ahmedabad & Indore | Deep Trace',
                'meta_description' => 'Avoid forged property deeds and boundary disputes. How our investigators verify 30-year land title chains and registrar records in Pune, Mumbai, Ahmedabad & Indore.',
            ],
            [
                'category_slug' => 'cyber-forensics-privacy',
                'title' => 'Corporate Espionage & TSCM: How Modern Listening Devices Infiltrate Boardrooms',
                'slug' => 'corporate-espionage-tscm-bug-sweeping-boardrooms',
                'excerpt' => 'Trade secrets and tender strategies are billion-dollar assets. Discover how Technical Surveillance Counter-Measures (TSCM) protect executive boardrooms.',
                'reading_time_minutes' => 7,
                'content' => 'In today’s fiercely competitive corporate landscape, confidential bidding numbers, merger announcements, and patented product formulas are vulnerable to illicit surveillance. Industrial espionage is no longer limited to movie fiction; miniaturized GSM bugs, optical cameras, and laser microphones can be purchased online for nominal costs.

### Common Eavesdropping Devices Encountered
- **GSM Audio Transmitters:** Miniature bugs wired into conference room electrical sockets that broadcast audio over cellular networks when dialed.
- **Pinhole Wi-Fi Cameras:** Concealed inside smoke detectors, wall clocks, or electrical conduit outlets.
- **Bluetooth/Wi-Fi Sniffers:** Intercepting unencrypted boardroom presentation screencasts.

### The TSCM Inspection Process
1. **Non-Linear Junction Detection (NLJD):** Locating electronic semiconductor components even if devices are powered down.
2. **Radio Frequency (RF) Spectrum Analysis:** Sweeping from 10 kHz to 24 GHz to detect unauthorized transmissions.
3. **Thermal Infrared Imaging:** Identifying micro-heat signatures emitted by hidden power supplies.
4. **Physical Inspection of Fixtures:** Systematic disassembly of suspect boardroom fixtures and telephone lines.',
                'meta_title' => 'Corporate Bug Sweeping (TSCM) & Espionage Defense | Deep Trace Detective',
                'meta_description' => 'Protect corporate secrets from unauthorized bugs. Professional RF spectrum analysis, NLJD sweeps, and boardroom electronic countermeasures.',
            ],
            [
                'category_slug' => 'matrimonial-investigation',
                'title' => 'NRI Matrimonial Verification: Avoiding Overseas Marriage Traps and Desertion',
                'slug' => 'nri-matrimonial-verification-overseas-marriage-traps',
                'excerpt' => 'Marriage proposals from Non-Resident Indians (NRIs) require specialized overseas verification. Protect Indian brides from abandonment and fraud.',
                'reading_time_minutes' => 6,
                'content' => 'Thousands of Indian families celebrate alliances with grooms residing in the United States, Canada, the United Kingdom, or Gulf nations. Unfortunately, a distressing percentage of these marriages turn into tragedies involving desertion, domestic cruelty, or discovering the groom has an existing foreign spouse.

### Critical Verification Points for NRI Alliances
- **Visa Status & Immigration Category:** Verifying permanent residency (Green Card / PR) versus temporary work permits (H-1B / student visas).
- **Actual Overseas Residence & Standard of Living:** Ensuring the subject does not share cramped accommodations while claiming executive home ownership.
- **Authentic Employment & Tax Filings:** Confirming genuine W-2, T4, or P60 documentation.
- **Marital Status in Destination Country:** Verifying civil marriage registries in foreign jurisdictions.',
                'meta_title' => 'NRI Matrimonial Verification & Overseas Checks | Deep Trace Detective',
                'meta_description' => 'Safeguard your daughter from NRI marriage fraud. Learn how Deep Trace Detective verifies foreign residency, employment, and visa credentials.',
            ],
            [
                'category_slug' => 'legal-court-evidence',
                'title' => 'The Role of Private Investigators in Tracing Missing Persons: Field Ops & Legal Coordination',
                'slug' => 'tracing-missing-persons-field-investigation-india',
                'excerpt' => 'When a loved one goes missing or an absconding debtor vanishes, swift private field operations coordinate with police records to locate them.',
                'reading_time_minutes' => 6,
                'content' => 'Every hour counts when an individual goes missing. Whether the case involves a runaway teenager, an elderly family member suffering from dementia, or a fraudulent debtor absconding with multi-lakh advances, traditional administrative machinery can move slowly. Deep Trace Detective operates a specialized Rapid Response Missing Person Unit.',
                'meta_title' => 'Missing Person Tracing & Field Investigation | Deep Trace Detective',
                'meta_description' => 'How private detectives locate missing loved ones and absconding individuals through field intelligence, digital footprints, and informant networks.',
            ],
            [
                'category_slug' => 'corporate-intelligence',
                'title' => 'Employee Theft & Inventory Embezzlement: Discrete Workplace Integrity Audits',
                'slug' => 'employee-theft-inventory-embezzlement-audits',
                'excerpt' => 'Internal shrinkage costs Indian businesses billions annually. Learn how undercover operatives and forensic audits uncover internal collusion.',
                'reading_time_minutes' => 6,
                'content' => 'Internal employee theft and vendor collusion account for significant losses in manufacturing, retail, and logistics sectors. Standard internal audits often miss collusion between warehouse supervisors and logistics drivers because paperwork is meticulously doctored.',
                'meta_title' => 'Employee Theft & Internal Embezzlement Probes | Deep Trace Detective',
                'meta_description' => 'Uncover workplace theft, procurement kickbacks, and inventory shrinkage through discreet undercover operations and forensic evidence.',
            ],
            [
                'category_slug' => 'corporate-intelligence',
                'title' => 'Asset Tracing in India: How Forensic Detectives Locate Concealed Real Estate & Accounts',
                'slug' => 'asset-tracing-india-locating-concealed-properties',
                'excerpt' => 'Enforcing commercial arbitrations, bank recovery orders, or divorce settlements requires uncovering hidden assets. Discover our investigative process.',
                'reading_time_minutes' => 7,
                'content' => 'Securing a favorable court judgment or arbitration award is only half the battle; actually recovering funds from calculated defaulters who conceal assets under corporate shell entities or family names is often the true challenge. Asset tracing requires meticulous corporate registry forensics, land registry checks, and on-ground lifestyle tracking.',
                'meta_title' => 'Asset Tracing & Wealth Discovery in India | Deep Trace Detective',
                'meta_description' => 'Recover debt and enforce court orders. How our investigators track concealed commercial real estate, corporate holdings, and benami assets.',
            ],
        ];

        foreach ($posts as $postData) {
            $catSlug = $postData['category_slug'];
            unset($postData['category_slug']);
            $postData['category_id'] = $categoryModels[$catSlug]->id ?? null;
            $postData['published_at'] = now()->subDays(rand(1, 45));
            $postData['is_published'] = true;

            $post = Post::updateOrCreate(['slug' => $postData['slug']], $postData);
            $post->tags()->sync([$tagModels[0]->id, $tagModels[1]->id, $tagModels[rand(2, count($tagModels) - 1)]->id]);
        }
    }
}
