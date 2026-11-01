<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            // 1. Pre-Matrimonial Investigation
            [
                'title' => 'Pre-Matrimonial Investigation',
                'slug' => 'pre-matrimonial-investigation',
                'category' => 'Personal & Matrimonial',
                'icon' => 'heart-search',
                'short_description' => 'Comprehensive background verification of prospective brides or grooms before marriage. Verifying job status, salary, past marriages, family reputation, and lifestyle habits with 100% discretion.',
                'hero_headline' => 'Discreet & Thorough Pre-Matrimonial Background Checks in India',
                'hero_subheadline' => 'Protect your family from matrimonial fraud, concealed debts, previous marriages, and false credentials with court-verifiable intelligence.',
                'overview' => 'An arranged marriage is one of the most consequential commitments a family undertakes in India. Unfortunately, reliance on matrimonial portals, newspaper advertisements, and casual references has led to a surge in matrimonial misrepresentation—ranging from inflated salaries and non-existent MNC jobs to concealed first marriages and severe debt burdens. Deep Trace Detective conducts discreet, dignified, and 100% confidential pre-matrimonial background investigations across India.',
                'why_needed' => [
                    'Confirm authenticity of claimed job, actual monthly remuneration, and employer reputation.',
                    'Check for undisclosed previous legal marriages, ongoing divorce suits, or children.',
                    'Verify family ancestral roots, financial solvency, and social standing.',
                    'Observe personal habits, substance dependencies, social circle, and moral integrity.'
                ],
                'investigation_scope' => [
                    'Corporate HR employment verification and relieving letter scrutiny.',
                    'Civic marriage registrar and local court record searches.',
                    'Neighborhood reputation and native place ancestral verification.',
                    'Discreet visual surveillance to map daily routines and lifestyle.',
                    'Credit standing and property title checks (within legal consent frameworks).'
                ],
                'methods_tools' => [
                    'Discreet undercover inquiries by senior operatives.',
                    'Civic and municipal records cross-referencing.',
                    'Open Source Intelligence (OSINT) and digital footprint checks.',
                    'Stand-off photographic and videographic documentation in public spaces.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Confidential Consultation', 'desc' => 'We review the bio-data, photographs, and key concerns under a strict Non-Disclosure Agreement (NDA).'],
                    ['step' => '2', 'title' => 'Field Operative Deployment', 'desc' => 'Discreet operatives deploy in the subject’s residential, workplace, and social vicinities.'],
                    ['step' => '3', 'title' => 'Documentary Cross-Verification', 'desc' => 'Education, employment, and civil records are independently verified through legitimate channels.'],
                    ['step' => '4', 'title' => 'Final Dossier Delivery', 'desc' => 'A comprehensive, photographic, and factual dossier is securely presented directly to the client.']
                ],
                'legal_compliance_text' => 'Conducted strictly in compliance with the DPDP Act 2023, Bharatiya Nyaya Sanhita, and constitutional privacy boundaries. Strictly no illegal wiretaps or unauthorized data hacking.',
                'deliverables' => [
                    'Complete Verified Background Profile Report.',
                    'Time-stamped photographic and video evidence in public spaces.',
                    'Official employment and education credential verification summary.',
                    'Confidential investigator certification.'
                ],
                'faq_items' => [
                    ['q' => 'Will the prospective partner or their family ever discover this inquiry?', 'a' => 'Never. Our investigators work with extreme discretion from stand-off distances using covert intelligence protocols.'],
                    ['q' => 'How long does a pre-matrimonial investigation take?', 'a' => 'Standard pre-matrimonial inquiries are completed within 5 to 7 working days. Expedited 72-hour checks are available for urgent wedding dates.'],
                    ['q' => 'What happens if we find contradictory information?', 'a' => 'We provide objective, unedited documentation (certified records, photographs) so you can make confident, informed family decisions.']
                ],
                'meta_title' => 'Pre-Matrimonial Investigation Services India | Deep Trace Detective',
                'meta_description' => 'Discreet pre-matrimonial background checks across India. Verify job, salary, past marriages, debts, and lifestyle reputation with 100% confidentiality.',
                'is_featured' => true,
                'order' => 1,
            ],

            // 2. Post-Matrimonial Investigation
            [
                'title' => 'Post-Matrimonial Investigation',
                'slug' => 'post-matrimonial-investigation',
                'category' => 'Personal & Matrimonial',
                'icon' => 'user-check',
                'short_description' => 'Uncovering the truth in troubled marriages. Discreet verification of behavioral changes, suspicious absences, hidden financial assets, and domestic cruelty.',
                'hero_headline' => 'Truth, Clarity & Objective Evidence in Marital Complications',
                'hero_subheadline' => 'Find peace of mind with verifiable facts. We document unexplained routines, financial secrecy, and matrimonial misconduct with utmost sensitivity.',
                'overview' => 'Living under perpetual marital suspicion drains emotional health and damages families. When communication breaks down and a spouse begins exhibiting uncharacteristic secrecy, unexpected travel, or hostile evasion, intuitive doubts require objective verification. Deep Trace Detective handles post-matrimonial cases with deep empathy and uncompromising confidentiality.',
                'why_needed' => [
                    'Sudden emotional detachment and unexplained daily absences.',
                    'Unexplained financial drains, secret accounts, or suspicious lifestyle expenses.',
                    'Suspicions of second concealed households or bigamous relationships.',
                    'Need for factual clarity before deciding between marriage counseling or legal separation.'
                ],
                'investigation_scope' => [
                    'Covert physical surveillance to establish daily itineraries and associates.',
                    'Public space photographic and high-definition video documentation.',
                    'Identification of undisclosed residences, vehicles, or commercial activities.',
                    'Fact-gathering regarding domestic behavior and social circle interactions.'
                ],
                'methods_tools' => [
                    'Multi-vehicle mobile surveillance teams to prevent compromise.',
                    'Time-stamped ultra-telephoto optical equipment.',
                    'Public record registry searches and corporate asset cross-checks.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Case Intake & Strategy', 'desc' => 'We map typical timelines, suspect routines, and operational risk factors in confidence.'],
                    ['step' => '2', 'title' => 'Field Reconnaissance', 'desc' => 'Operatives survey transit points and daily commute routes without arousing suspicion.'],
                    ['step' => '3', 'title' => 'Discreet Surveillance', 'desc' => 'Gathering indisputable, time-stamped visual proof during target hours.'],
                    ['step' => '4', 'title' => 'Objective Debrief', 'desc' => 'Comprehensive factual findings presented in encrypted format to the client.']
                ],
                'legal_compliance_text' => 'All operations are conducted in public spaces strictly within the bounds of Indian law. No trespassing or illegal telephone bugging is ever deployed.',
                'deliverables' => [
                    'Time-stamped high-definition surveillance video footage.',
                    'Daily activity logs with exact geographical timestamps.',
                    'Identity profiles of unknown third-party contacts met.',
                    'Factual case debrief report.'
                ],
                'faq_items' => [
                    ['q' => 'Is surveillance evidence admissible in Family Court?', 'a' => 'Yes, time-stamped video and photographic evidence taken in public places accompanied by investigator certification is admissible under Section 63 BSA.'],
                    ['q' => 'How do you prevent the spouse from noticing surveillance?', 'a' => 'We utilize alternating operatives, decoy vehicles, and strategic standoff positions to ensure 100% operational invisibility.']
                ],
                'meta_title' => 'Post-Matrimonial Investigation Services | Deep Trace Detective',
                'meta_description' => 'Confidential post-matrimonial investigations. Verify unexplained absences, hidden relationships, and conduct with court-admissible proof.',
                'is_featured' => true,
                'order' => 2,
            ],

            // 3. Extramarital / Infidelity Investigation
            [
                'title' => 'Extramarital / Infidelity Investigation',
                'slug' => 'extramarital-infidelity-investigation',
                'category' => 'Personal & Matrimonial',
                'icon' => 'heart-crack',
                'short_description' => 'Unquestionable photographic and videographic proof of infidelity. Eliminate doubts with indisputable, discreet surveillance conducted by veteran field detectives.',
                'hero_headline' => 'Uncover the Truth of Extramarital Affairs with Discretion',
                'hero_subheadline' => 'Replace agonizing uncertainty with undeniable photographic and video evidence. 100% confidential and handled with compassionate professionalism.',
                'overview' => 'Suspecting your spouse of infidelity is an agonizing experience that paralyzes your personal life and peace of mind. Gaslighting and false assurances often leave you questioning your own intuition. Deep Trace Detective provides unequivocal, courtroom-standard proof that confirms or refutes infidelity allegations once and for all.',
                'why_needed' => [
                    'Extreme secretiveness with phones, laptops, and messaging apps.',
                    'Unexplained weekend business trips or extended evening hours.',
                    'Unaccounted credit card expenditures at hotels, dining, and jewelry outlets.',
                    'Need for undeniable evidence to eliminate doubt or confront legal separation.'
                ],
                'investigation_scope' => [
                    'Continuous covert physical tracking during suspect departure windows.',
                    'Documentation of rendezvous points, hotels, and private residences.',
                    'Photographic and videographic capture of physical intimacy and interaction.',
                    'Identification and background check of the involved paramour.'
                ],
                'methods_tools' => [
                    'High-definition night-vision and telephoto optics.',
                    'GPS-assisted tactical vehicle tracking teams.',
                    'Undercover infiltration into public venues, dining establishments, and clubs.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Pattern Identification', 'desc' => 'Pinpoint specific days, hours, and travel excuses most prone to suspicious activity.'],
                    ['step' => '2', 'title' => 'Covert Tailing', 'desc' => 'Maintain unbroken physical visual observation using multi-point operatives.'],
                    ['step' => '3', 'title' => 'Visual Evidence Capture', 'desc' => 'Capture clear facial profiles, timestamps, and behavioral context in public spaces.'],
                    ['step' => '4', 'title' => 'Secure Handover', 'desc' => 'Provide encrypted media files directly to the client with complete post-case deletion.']
                ],
                'legal_compliance_text' => 'Evidence is obtained strictly in public places or commercial hospitality common areas adhering to Indian legal evidence standards without intrusive wiretaps.',
                'deliverables' => [
                    'Date and time-stamped 4K video clips and high-resolution stills.',
                    'Detailed chronological log of movements, addresses, and vehicles.',
                    'Paramour identification report (name, occupation, residence where feasible).'
                ],
                'faq_items' => [
                    ['q' => 'Can you hack their WhatsApp or read deleted text messages?', 'a' => 'No. Hacking messaging applications is a severe violation of the IT Act. Instead, we obtain real-world photographic proof of meetings and intimacy that carry far greater judicial weight.'],
                    ['q' => 'What if the investigation shows no infidelity?', 'a' => 'A clean bill of conduct brings immense relief and saves relationships. Our reports are 100% objective—we document only verifiable reality.']
                ],
                'meta_title' => 'Infidelity & Cheating Spouse Investigation | Deep Trace Detective',
                'meta_description' => 'Uncover the truth of extramarital affairs. Discrete 4K video surveillance, identity verification, and 100% confidential reporting across India.',
                'is_featured' => true,
                'order' => 3,
            ],

            // 4. Divorce and Child Custody Evidence
            [
                'title' => 'Divorce and Child Custody Evidence',
                'slug' => 'divorce-child-custody-evidence',
                'category' => 'Personal & Matrimonial',
                'icon' => 'scale',
                'short_description' => 'Gathering legally admissible evidence under Section 63 BSA for divorce petitions, maintenance disputes, parental fitness, and child custody hearings.',
                'hero_headline' => 'Court-Admissible Evidence for Divorce, Custody & Maintenance',
                'hero_subheadline' => 'Equip your legal counsel with undeniable documentation of parental fitness, cruelty, desertion, and concealed financial income.',
                'overview' => 'In Indian Family Courts, outcomes are decided on documentary evidence rather than emotional arguments. In custody battles, the judicial doctrine of the "Best Interest of the Child" requires concrete proof of a parent’s suitability, lifestyle stability, and emotional safety. Deep Trace Detective works in close coordination with your legal counsel to gather evidence that meets strict judicial standards.',
                'why_needed' => [
                    'Opposing spouse under-declaring income or claiming total bankruptcy to evade maintenance.',
                    'Proving domestic cruelty, substance addiction, or moral endangerment in custody trials.',
                    'Documenting cohabitation or adulterous conduct where grounds for divorce require substantiation.',
                    'Establishing parental neglect or unsafe domestic environments for minors.'
                ],
                'investigation_scope' => [
                    'Financial lifestyle profiling: luxury vehicles, high-end travel, and concealed business directorships.',
                    'Parental fitness surveillance: observing interaction with children, alcohol/substance habits, and neglect.',
                    'Verification of actual residential conditions and caregiver support systems.',
                    'Civic and corporate filing searches to expose undisclosed commercial assets.'
                ],
                'methods_tools' => [
                    'Time-stamped photographic and video surveillance.',
                    'Corporate registrar (MCA) and municipal property index searches.',
                    'Investigator affidavits in compliance with Section 63 BSA.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Advocate Consultation', 'desc' => 'Align investigation objectives with your lawyer’s legal strategy and court petition.'],
                    ['step' => '2', 'title' => 'Targeted Fact-Gathering', 'desc' => 'Document income indicators, living conditions, or neglectful behavior.'],
                    ['step' => '3', 'title' => 'Evidence Verification', 'desc' => 'Ensure all digital recordings contain unedited metadata and verifiable timestamps.'],
                    ['step' => '4', 'title' => 'Legal Dossier Submission', 'desc' => 'Deliver an organized evidence file formatted for filing in Family Court.']
                ],
                'legal_compliance_text' => 'Strictly adheres to Section 63 BSA standards for electronic evidence. All documentation is gathered ethically without violating court contempt or trespassing rules.',
                'deliverables' => [
                    'Court-ready electronic evidence bundle with hash verification.',
                    'Investigator testimony and sworn affidavit (when requested by counsel).',
                    'Comprehensive lifestyle and asset intelligence dossier.'
                ],
                'faq_items' => [
                    ['q' => 'Will your detective appear in court as a witness?', 'a' => 'Yes, our senior investigators can submit affidavits and testify regarding the provenance of evidence gathered upon counsel instruction.']
                ],
                'meta_title' => 'Divorce & Child Custody Evidence Collection | Deep Trace Detective',
                'meta_description' => 'Gather court-admissible evidence for divorce, alimony defense, and child custody battles under Section 63 BSA. Consult our senior detectives.',
                'is_featured' => true,
                'order' => 4,
            ],

            // 5. Background Verification
            [
                'title' => 'Background Verification',
                'slug' => 'background-verification',
                'category' => 'Personal & Matrimonial',
                'icon' => 'shield-check',
                'short_description' => 'Exhaustive background checks for individuals, tenants, domestic staff, business associates, and civil acquaintances. Verifying identity, police history, and character.',
                'hero_headline' => 'Comprehensive Background Verification Services across India',
                'hero_subheadline' => 'Verify identity, criminal litigation records, financial standing, and residential authenticity with verified on-ground field intelligence.',
                'overview' => 'Whether you are welcoming a domestic worker into your private residence, entering a joint financial venture, or validating an acquaintance’s claims, assumptions can be hazardous. Deep Trace Detective conducts rigorous, multi-tier background checks combining public registry audits with discrete on-ground physical inquiries.',
                'why_needed' => [
                    'Verifying credentials of domestic workers, caretakers, drivers, and security guards.',
                    'Screening potential business partners, co-founders, and real estate buyers.',
                    'Validating identity and checking for criminal court cases under BNS / IPC.',
                    'Confirming financial solvency and debt default track records.'
                ],
                'investigation_scope' => [
                    'District, High Court, and e-Courts litigation docket scrutiny.',
                    'Physical permanent address and police station neighborhood check.',
                    'Verification of identity documents (Aadhaar/PAN within legal consent frameworks).',
                    'Discrete reference checks with past associates and employers.'
                ],
                'methods_tools' => [
                    'On-ground field verification operatives across 8+ metropolitan bureaus.',
                    'Legal docket search algorithms spanning all Indian district courts.',
                    'Civic municipal and voter registry cross-referencing.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Document Submission', 'desc' => 'Receive target identifiers, claimed addresses, and specific verification requirements.'],
                    ['step' => '2', 'title' => 'Registry & Court Audit', 'desc' => 'Screen civil, criminal, and financial default registries.'],
                    ['step' => '3', 'title' => 'On-Ground Physical Check', 'desc' => 'Operatives visit native and current addresses to evaluate character.'],
                    ['step' => '4', 'title' => 'Verification Report', 'desc' => 'Deliver an authenticated, tamper-proof background check report.']
                ],
                'legal_compliance_text' => 'Compliant with the Digital Personal Data Protection Act 2023. Verification conducted using lawful open records and consented reference checks.',
                'deliverables' => [
                    'Background Verification Authenticity Certificate.',
                    'Civil/Criminal litigation search results extract.',
                    'Photographic confirmation of residential premises.'
                ],
                'faq_items' => [
                    ['q' => 'Can you run a check on someone across different states in India?', 'a' => 'Yes, our agency operates pan-India with dedicated field bureaus in major cities.']
                ],
                'meta_title' => 'Comprehensive Background Verification India | Deep Trace Detective',
                'meta_description' => 'Fast, reliable background checks for individuals, partners, and domestic staff. Court litigation checks, address verification, and financial status.',
                'is_featured' => false,
                'order' => 5,
            ],

            // 6. Pre-Employment Screening
            [
                'title' => 'Pre-Employment Screening',
                'slug' => 'pre-employment-screening',
                'category' => 'Corporate & Business',
                'icon' => 'briefcase-check',
                'short_description' => 'Protecting corporate integrity. Rigorous pre-employment verification for executives, managers, and sensitive personnel: education, past employers, integrity, and dual employment.',
                'hero_headline' => 'Institutional-Grade Pre-Employment Screening for Enterprises',
                'hero_subheadline' => 'Safeguard your organization from resume inflation, forged certificates, undisclosed conflicts, moonlighting, and fraudulent executives.',
                'overview' => 'A bad hire costs an organization far more than recruitment fees—it compromises proprietary trade secrets, workplace safety, and company valuation. Deep Trace Detective partners with multinational corporations, tech unicorns, and industrial houses to provide rigorous pre-employment integrity checks that automated software platforms fail to catch.',
                'why_needed' => [
                    'Detecting fabricated employment records from fake shell companies.',
                    'Uncovering dual employment (moonlighting) in IT and remote work setups.',
                    'Validating educational degrees with primary university registrars.',
                    'Screening for undisclosed disciplinary dismissals, sexual harassment complaints, or embezzlement.'
                ],
                'investigation_scope' => [
                    'Direct HR-to-HR past employer verification with primary source documentation.',
                    'Educational degree verification directly with university examination cells.',
                    'Comprehensive e-Courts search for criminal and civil cases.',
                    'Directorship check to detect undisclosed competing companies.'
                ],
                'methods_tools' => [
                    'MCA corporate database cross-referencing.',
                    'Primary university registrar outreach.',
                    'Professional reference interviews with former direct supervisors.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Candidate Data Onboarding', 'desc' => 'Collect signed candidate consent and claimed credentials.'],
                    ['step' => '2', 'title' => 'Primary Source Verification', 'desc' => 'Direct outreach to educational institutions and past HR departments.'],
                    ['step' => '3', 'title' => 'Integrity & Conflict Audit', 'desc' => 'Screen for active business directorships and legal disputes.'],
                    ['step' => '4', 'title' => 'Candidate Rating Report', 'desc' => 'Deliver red/amber/green status report with all supporting exhibits.']
                ],
                'legal_compliance_text' => '100% compliant with corporate governance norms and DPDP Act 2023 consent protocols.',
                'deliverables' => [
                    'Executive Pre-Employment Due Diligence Dossier.',
                    'Direct employer and university confirmation receipts.',
                    'Court record clearance report.'
                ],
                'faq_items' => [
                    ['q' => 'Can you detect fake experience certificates from shell companies?', 'a' => 'Yes. We physically inspect claimed employer addresses and check GST/MCA registrations to identify fake certificate rackets.']
                ],
                'meta_title' => 'Corporate Pre-Employment Screening India | Deep Trace Detective',
                'meta_description' => 'Protect your enterprise with verified pre-employment background screening. Detect fake experience, moonlighting, and criminal records.',
                'is_featured' => true,
                'order' => 6,
            ],

            // 7. Employee Verification and Misconduct Probe
            [
                'title' => 'Employee Verification and Misconduct Probe',
                'slug' => 'employee-verification-misconduct',
                'category' => 'Corporate & Business',
                'icon' => 'alert-triangle',
                'short_description' => 'Investigating internal corporate malpractice: inventory leakage, data theft, kickback schemes, fake sick leave, and sabotage.',
                'hero_headline' => 'Discreet Workplace Investigations & Employee Misconduct Probes',
                'hero_subheadline' => 'Identify bad actors, procurement kickbacks, intellectual property leaks, and organized internal fraud with indisputable proof.',
                'overview' => 'Internal employee fraud accounts for billions of rupees in losses across Indian businesses every year. When employees collude with vendors, funnel sales leads to competing ventures, or embezzle warehouse inventory, conventional internal audits rarely pierce the veil. Deep Trace Detective deploys seasoned undercover operatives and digital forensic experts to uncover the truth.',
                'why_needed' => [
                    'Procurement managers taking under-the-table kickbacks from favored vendors.',
                    'Employees siphoning confidential client leads to run parallel side businesses.',
                    'Suspicion of warehouse inventory shrinkage and organized cargo pilferage.',
                    'Need for courtroom and disciplinary committee-standard evidence.'
                ],
                'investigation_scope' => [
                    'Undercover placement within logistics, retail, or office operations.',
                    'Covert physical surveillance of employees suspected of competitor collaboration.',
                    'Forensic analysis of authorized work devices and corporate email communications.',
                    'Financial lifestyle audits comparing lavish expenditures with declared salary.'
                ],
                'methods_tools' => [
                    'Covert field operatives acting as logistics handlers or employees.',
                    'Forensic data extraction and communications metadata analysis.',
                    'Vendor entity cross-ownership checks.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Malpractice Briefing', 'desc' => 'Evaluate known inventory discrepancies, suspicious transactions, or leaked bids.'],
                    ['step' => '2', 'title' => 'Covert Infiltration', 'desc' => 'Deploy undercover operatives or exterior surveillance.'],
                    ['step' => '3', 'title' => 'Evidence Consolidation', 'desc' => 'Capture incontrovertible video, delivery receipts, and transaction records.'],
                    ['step' => '4', 'title' => 'Executive Action Dossier', 'desc' => 'Provide a watertight report enabling immediate termination and police action.']
                ],
                'legal_compliance_text' => 'Conducted strictly within labor law parameters and authorized company policies to guarantee admissible evidence in industrial tribunals and police FIRs.',
                'deliverables' => [
                    'Full workplace misconduct investigation report.',
                    'Supporting video recordings and supplier audit trails.',
                    'Recommendations for internal control tightening.'
                ],
                'faq_items' => [
                    ['q' => 'Can you investigate procurement kickback schemes?', 'a' => 'Yes, we map hidden relationships between employees and vendor promoters, including shell bank accounts and luxury gifts.']
                ],
                'meta_title' => 'Employee Misconduct & Fraud Investigation | Deep Trace Detective',
                'meta_description' => 'Uncover corporate embezzlement, kickbacks, and data leakage. Professional workplace investigations with actionable evidence across India.',
                'is_featured' => false,
                'order' => 7,
            ],

            // 8. Corporate Investigation
            [
                'title' => 'Corporate Investigation',
                'slug' => 'corporate-investigation',
                'category' => 'Corporate & Business',
                'icon' => 'building-office',
                'short_description' => 'End-to-end commercial intelligence: competitor espionage defense, supply chain integrity, regulatory risk, and board-level risk mitigation.',
                'hero_headline' => 'Premier Corporate Investigation & Intelligence Services',
                'hero_subheadline' => 'Safeguard your corporate valuation, intellectual capital, and market dominance with discreet, actionable risk intelligence.',
                'overview' => 'Modern enterprises operate in high-friction environments characterized by hostile competitor maneuvers, regulatory scrutiny, and complex supply chain networks. Deep Trace Detective provides specialized corporate investigation services that protect enterprise value, shareholder trust, and executive leadership.',
                'why_needed' => [
                    'Protecting commercial tenders from unauthorized competitor espionage.',
                    'Investigating organized counterfeiting and gray-market brand dilution.',
                    'Uncovering sabotage and hostile infiltration within partner firms.',
                    'Boardroom intelligence prior to major mergers, acquisitions, or joint ventures.'
                ],
                'investigation_scope' => [
                    'Comprehensive corporate risk assessment and counter-intelligence.',
                    'Supply chain audits and third-party logistics tracking.',
                    'Whistleblower claim investigation and forensic fact-finding.',
                    'Identification of competitor intelligence networks.'
                ],
                'methods_tools' => [
                    'Senior corporate intelligence analysts with defense backgrounds.',
                    'Advanced OSINT and corporate entity graph modeling.',
                    'Discrete human source inquiries across commercial distribution networks.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Executive Consultation', 'desc' => 'Understand the strategic commercial threats facing the board.'],
                    ['step' => '2', 'title' => 'Intelligence Gathering', 'desc' => 'Deploy multi-source human and digital investigative channels.'],
                    ['step' => '3', 'title' => 'Fact Verification', 'desc' => 'Corroborate leads through verifiable financial, physical, and digital evidence.'],
                    ['step' => '4', 'title' => 'Strategic Briefing', 'desc' => 'Deliver comprehensive intelligence dossier directly to the Board or General Counsel.']
                ],
                'legal_compliance_text' => 'All intelligence gathering adheres to Indian competition law, corporate governance codes, and the Information Technology Act.',
                'deliverables' => [
                    'Comprehensive Corporate Intelligence Report.',
                    'Evidence exhibits, supplier contracts, and transaction traces.',
                    'Strategic mitigation roadmaps.'
                ],
                'faq_items' => [
                    ['q' => 'How do you ensure discretion when investigating senior leadership?', 'a' => 'Cases are handled exclusively by senior partners under strict need-to-know protocols with encrypted reporting channels.']
                ],
                'meta_title' => 'Corporate Investigation & Intelligence India | Deep Trace Detective',
                'meta_description' => 'Protect your enterprise with strategic corporate investigations. Supply chain audits, tender defense, and executive risk intelligence.',
                'is_featured' => true,
                'order' => 8,
            ],

            // 9. Business Due Diligence and Partner Verification
            [
                'title' => 'Business Due Diligence and Partner Verification',
                'slug' => 'business-due-diligence',
                'category' => 'Corporate & Business',
                'icon' => 'file-search',
                'short_description' => 'Unmasking real balance sheets, hidden litigations, and shell companies before investments, M&A transactions, or commercial partnerships.',
                'hero_headline' => 'In-Depth Business Due Diligence & Partner Scrutiny',
                'hero_subheadline' => 'Never sign a commercial joint venture or investment contract based solely on glossy pitch decks and audited self-declarations.',
                'overview' => 'Every year, investors and companies commit crores of rupees to partnerships based on audited balance sheets that mask massive undisclosed debts, fictitious sales, and active criminal proceedings. Deep Trace Detective conducts forensic on-ground due diligence that reveals the authentic financial reality behind business entities.',
                'why_needed' => [
                    'Verifying true operational capacity of manufacturing facilities and inventory.',
                    'Uncovering undisclosed bank defaults, NCLT insolvency petitions, and DRT suits.',
                    'Investigating track records, past bankruptcies, and integrity of founding promoters.',
                    'Validating authenticity of customer contracts, distributor networks, and revenue claims.'
                ],
                'investigation_scope' => [
                    'Ministry of Corporate Affairs (MCA) 10-year directorship and charge analysis.',
                    'On-ground physical audit of manufacturing plants, warehouses, and offices.',
                    'Interviews with former vendors, distributors, and creditors.',
                    'Comprehensive litigation checks across High Courts, NCLT, and Supreme Court.'
                ],
                'methods_tools' => [
                    'Forensic accounting analysis of registrar filings and statutory charges.',
                    'Discreet physical site visits by undercover commercial auditors.',
                    'Credit default and vendor sentiment mapping.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Scope Definition', 'desc' => 'Identify target entity, promoters, and critical deal risk factors.'],
                    ['step' => '2', 'title' => 'Corporate Registry Forensics', 'desc' => 'Scrutinize shareholding structures, hidden charges, and related-party deals.'],
                    ['step' => '3', 'title' => 'On-Ground Physical Verification', 'desc' => 'Inspect physical infrastructure, machinery, and daily operational health.'],
                    ['step' => '4', 'title' => 'Due Diligence Dossier', 'desc' => 'Provide a comprehensive commercial risk score and red-flag report.']
                ],
                'legal_compliance_text' => 'Conducted through legitimate commercial registries, public records, and consensual market surveys strictly under Indian commercial statutes.',
                'deliverables' => [
                    'Executive Commercial Due Diligence Report.',
                    'Litigation profile spanning civil, criminal, and commercial tribunals.',
                    'Photographic evidence of operational sites.'
                ],
                'faq_items' => [
                    ['q' => 'Can you verify physical factories and operations in tier-2/tier-3 cities?', 'a' => 'Yes, our pan-India network allows us to physically inspect facilities anywhere in India within 48 to 72 hours.']
                ],
                'meta_title' => 'Business Due Diligence & Partner Verification | Deep Trace Detective',
                'meta_description' => 'Unmask the true financial standing of partners and acquisitions. On-ground facility checks, NCLT litigation searches, and promoter vetting.',
                'is_featured' => false,
                'order' => 9,
            ],

            // 10. Insurance Claim Fraud Investigation
            [
                'title' => 'Insurance Claim Fraud Investigation',
                'slug' => 'insurance-claim-fraud',
                'category' => 'Legal & Fraud',
                'icon' => 'clipboard-document-check',
                'short_description' => 'Uncovering staged accidents, fabricated death certificates, exaggerated medical claims, and arson for insurance providers and legal counsel.',
                'hero_headline' => 'Insurance Fraud Investigation & Claim Verification',
                'hero_subheadline' => 'Protect underwriting reserves with forensic verification of high-value life, motor, health, and commercial property insurance claims.',
                'overview' => 'Insurance fraud costs the Indian insurance industry thousands of crores annually. Organized syndicates routinely forge hospital records, stage traffic accidents, and fabricate municipal death certificates to claim substantial life insurance payouts. Deep Trace Detective acts as a trusted investigation partner for leading general and life insurance underwriters.',
                'why_needed' => [
                    'Detecting fabricated death claims and locating "deceased" policyholders living under aliases.',
                    'Verifying staged motor accident theft and catastrophic loss claims.',
                    'Investigating suspicious industrial fire, warehouse arson, and water damage claims.',
                    'Hospital bed verification and billing audit for health insurance claims.'
                ],
                'investigation_scope' => [
                    'Hospital admission records, treating physician interviews, and pharmacy audit.',
                    'Municipal death register cross-referencing and cremation/burial ground verification.',
                    'On-ground accident site reconstruction and witness testimony collection.',
                    'Discreet surveillance to document physical mobility in exaggerated disability claims.'
                ],
                'methods_tools' => [
                    'Forensic document examination of medical and municipal papers.',
                    'Accident scene photo-documentation and local informant interviews.',
                    'Telephoto video surveillance to document physical capability.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Claim File Analysis', 'desc' => 'Scrutinize policy history, suspicious timing, and discrepancies in claimant statements.'],
                    ['step' => '2', 'title' => 'Field Verification', 'desc' => 'Deploy operatives to hospitals, accident locations, and claimant residences.'],
                    ['step' => '3', 'title' => 'Corroborative Evidence', 'desc' => 'Obtain municipal records, witness declarations, and visual evidence.'],
                    ['step' => '4', 'title' => 'Repudiation Dossier', 'desc' => 'Deliver legally sustainable findings for claim approval or legal repudiation.']
                ],
                'legal_compliance_text' => 'Operates in full coordination with IRDAI guidelines, Indian Penal Code / BNS provisions against fraud and forgery.',
                'deliverables' => [
                    'Insurance Fraud Assessment Report.',
                    'Attested statements from treating doctors and municipal authorities.',
                    'Time-stamped photographic and video evidence.'
                ],
                'faq_items' => [
                    ['q' => 'Can you locate policyholders who have claimed death benefits fraudulently?', 'a' => 'Yes, our trace operatives have successfully located numerous subjects living under assumed identities in different states.']
                ],
                'meta_title' => 'Insurance Claim Fraud Investigation | Deep Trace Detective',
                'meta_description' => 'Specialized insurance claim investigations. Uncover staged accidents, fake death certificates, and exaggerated disability claims across India.',
                'is_featured' => false,
                'order' => 10,
            ],

            // 11. Property and Land Verification
            [
                'title' => 'Property and Land Verification',
                'slug' => 'property-land-verification',
                'category' => 'Legal & Fraud',
                'icon' => 'home-modern',
                'short_description' => '30-year title search, revenue record verification (Khasra/Khatauni), physical possession checks, and dispute screening before property purchase.',
                'hero_headline' => 'Title Search & On-Ground Land Verification in India',
                'hero_subheadline' => 'Safeguard your multi-lakh real estate investments against forged deeds, multiple sale registrations, and concealed ancestral disputes.',
                'overview' => 'Buying land or commercial real estate across Pune, Mumbai, Ahmedabad, Indore, and major growth corridors carries significant legal and title risks. Unscrupulous sellers routinely exploit forged Power of Attorney documents, sell land under active civil litigation, or conceal co-heir inheritance claims. Deep Trace Detective provides rigorous on-ground and legal registry verification.',
                'why_needed' => [
                    'Prevent buying land trapped in ongoing court stay orders or partition suits.',
                    'Confirm that the seller holds authentic, marketable, and unencumbered title.',
                    'Verify physical boundary demarcation and actual on-ground possession.',
                    'Confirm that the land is not earmarked for government acquisition or green belt zones.'
                ],
                'investigation_scope' => [
                    '30-year unbroken chain search at the Sub-Registrar office.',
                    'Tehsil and Circle office verification of Khasra, Khatauni, and Jamabandi records.',
                    'Physical on-site inspection and interviews with neighboring landholders.',
                    'District Court, High Court, and Revenue Court litigation searches.'
                ],
                'methods_tools' => [
                    'Senior revenue and real estate legal researchers.',
                    'Physical boundary verification with GPS coordinate mapping.',
                    'Sub-registrar index I & II record audits.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Document Intake', 'desc' => 'Review sale deeds, mutation papers, and claimed ownership documents.'],
                    ['step' => '2', 'title' => 'Registrar & Revenue Search', 'desc' => 'Track 30-year ownership transitions and encumbrance certificates.'],
                    ['step' => '3', 'title' => 'Physical Site Inspection', 'desc' => 'Operatives inspect the plot, confirm possession, and interview neighbors.'],
                    ['step' => '4', 'title' => 'Title Clearance Report', 'desc' => 'Deliver comprehensive legal clearance opinion and risk advisory.']
                ],
                'legal_compliance_text' => 'Conducted in strict compliance with the Transfer of Property Act, Registration Act, and state revenue land codes.',
                'deliverables' => [
                    'Comprehensive 30-Year Title Search Report.',
                    'Encumbrance & Litigation Status Certificate.',
                    'On-ground physical possession photo dossier.'
                ],
                'faq_items' => [
                    ['q' => 'Can you verify agricultural and commercial land outside metro cities?', 'a' => 'Yes, our revenue and legal researchers visit local Tehsil and Sub-Registrar offices directly across Maharashtra, Gujarat, and Madhya Pradesh to verify original land records.']
                ],
                'meta_title' => 'Property & Land Title Verification India | Deep Trace Detective',
                'meta_description' => 'Protect your real estate investment. 30-year title searches, 7/12 extract verification, and physical possession checks across Pune, Mumbai, Ahmedabad, Indore & beyond.',
                'is_featured' => true,
                'order' => 11,
            ],

            // 12. Missing Person Tracing
            [
                'title' => 'Missing Person Tracing',
                'slug' => 'missing-person-tracing',
                'category' => 'Personal & Matrimonial',
                'icon' => 'user-minus',
                'short_description' => 'Rapid field response for locating runaway teens, missing family members, absconding commercial debtors, and estranged relatives across India.',
                'hero_headline' => 'Swift & Discrete Missing Person Tracing Operations',
                'hero_subheadline' => 'Every hour matters. Our specialized tracing task force combines ground human intelligence, transit tracking, and digital footprint analysis.',
                'overview' => 'When a loved one disappears or an individual with substantial financial liabilities vanishes without a trace, the uncertainty can be overwhelming. While law enforcement agencies face severe bandwidth constraints, Deep Trace Detective’s dedicated Missing Person Unit deploys rapid field operations to track leads, interview contacts, and locate individuals safely.',
                'why_needed' => [
                    'Tracing runaway minors, vulnerable teenagers, and estranged family members.',
                    'Locating elderly family members who have wandered away due to dementia or memory loss.',
                    'Tracking absconding commercial debtors, fraudulent promoters, or defaulting tenants.',
                    'Reconnecting with long-lost relatives and childhood acquaintances.'
                ],
                'investigation_scope' => [
                    'Immediate transit hub, railway terminal, and highway toll surveillance.',
                    'Digital open-source footprint analysis (social media, messaging traces).',
                    'Neighborhood inquiry at last known addresses and communication nodes.',
                    'Informant network deployment across hotels, transport operators, and transit cities.'
                ],
                'methods_tools' => [
                    'Rapid deployment mobile operative teams.',
                    'Open Source Intelligence (OSINT) and geolocation correlation.',
                    'Close coordination with local administrative authorities where authorized.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Emergency Intake', 'desc' => 'Collect last known location, photo identifiers, social circle, and transit options.'],
                    ['step' => '2', 'title' => 'Radius & Lead Mapping', 'desc' => 'Map geographic escape routes, transport booking habits, and associate networks.'],
                    ['step' => '3', 'title' => 'Field Mobilization', 'desc' => 'Deploy operatives to check transit nodes, lodges, and suspected sanctuaries.'],
                    ['step' => '4', 'title' => 'Location & Safe Recovery', 'desc' => 'Confirm identity, ensure subject safety, and alert client immediately.']
                ],
                'legal_compliance_text' => 'Conducted in strict compliance with Indian laws regarding personal liberty, assisting families and authorized legal guardians lawfully.',
                'deliverables' => [
                    'Verified current location and residence details.',
                    'Photographic confirmation of identity and physical well-being.',
                    'Chronological timeline of movements.'
                ],
                'faq_items' => [
                    ['q' => 'How soon should we hire a private detective after someone goes missing?', 'a' => 'Immediately. The first 48 to 72 hours are critical before physical transit leads grow cold and digital traces fade.']
                ],
                'meta_title' => 'Missing Person Tracing Services India | Deep Trace Detective',
                'meta_description' => 'Fast, confidential missing person tracing. Locating runaway teens, elderly family members, and absconding debtors across India. Call our 24/7 helpline.',
                'is_featured' => true,
                'order' => 12,
            ],

            // 13. Surveillance Services
            [
                'title' => 'Surveillance Services',
                'slug' => 'surveillance-services',
                'category' => 'Personal & Matrimonial',
                'icon' => 'eye',
                'short_description' => 'Professional physical and mobile surveillance. Discreet tailing, activity logging, and high-definition photo/video evidence captured without detection.',
                'hero_headline' => 'Elite Covert Physical & Mobile Surveillance Operations',
                'hero_subheadline' => 'Masterful tactical observation by veteran intelligence operatives. Indisputable video proof captured from stand-off distances without detection.',
                'overview' => 'Surveillance is the fundamental backbone of private investigation. Executing effective surveillance requires immense discipline, tactical patience, advanced optical equipment, and seamless team coordination. Deep Trace Detective operates elite surveillance teams led by retired defense and law enforcement intelligence specialists.',
                'why_needed' => [
                    'Documenting a subject’s daily routine, unannounced stops, and associates.',
                    'Gathering visual proof of matrimonial infidelity, secret relationships, or bigamy.',
                    'Tracking corporate executives suspected of selling trade secrets to competitors.',
                    'Monitoring children or teenagers suspected of falling into dangerous peer groups.'
                ],
                'investigation_scope' => [
                    'Round-the-clock physical static surveillance at residential and workplace exits.',
                    'Mobile vehicular tailing utilizing two-wheelers and four-wheelers.',
                    'High-definition video and photography in public and commercial places.',
                    'Detailed chronological minute-by-minute activity logs.'
                ],
                'methods_tools' => [
                    'Ultra-telephoto 4K optical cameras and low-light sensor arrays.',
                    'Decoy vehicles and changing operative personnel to prevent burn.',
                    'Secure tactical radio communications between team operatives.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Reconnaissance', 'desc' => 'Survey target locations, choke points, and egress routes.'],
                    ['step' => '2', 'title' => 'Operational Deployment', 'desc' => 'Position static and mobile units in discreet stand-off formations.'],
                    ['step' => '3', 'title' => 'Visual Acquisition', 'desc' => 'Capture clear facial profiles, timestamps, and geographic landmarks.'],
                    ['step' => '4', 'title' => 'Evidence Debrief', 'desc' => 'Deliver encrypted daily footage and activity summaries.']
                ],
                'legal_compliance_text' => 'Operates strictly in public spaces without physical trespass, wiretaps, or violations of privacy laws under Article 21.',
                'deliverables' => [
                    'Time-stamped high-definition video files with GPS coordinates.',
                    'Chronological daily surveillance logs.',
                    'Still photographic exhibits of critical encounters.'
                ],
                'faq_items' => [
                    ['q' => 'What happens if the subject enters a private residence or club?', 'a' => 'We maintain external observation of entry and exit times. We strictly never trespass on private residential property without legal authorization.']
                ],
                'meta_title' => 'Professional Surveillance Services India | Deep Trace Detective',
                'meta_description' => 'Discreet physical and mobile surveillance across India. Time-stamped 4K video evidence, activity logging, and 100% covert operations.',
                'is_featured' => true,
                'order' => 13,
            ],

            // 14. Cyber Crime and Digital Forensics
            [
                'title' => 'Cyber Crime and Digital Forensics',
                'slug' => 'cyber-crime-digital-forensics',
                'category' => 'Cyber & Security',
                'icon' => 'computer-desktop',
                'short_description' => 'Digital evidence retrieval, online blackmail and extortion probes, social media impersonation, phishing forensics, and Section 63 BSA compliance.',
                'hero_headline' => 'Expert Cyber Crime Investigation & Digital Forensics',
                'hero_subheadline' => 'Unmask online harassers, track financial cyber scams, recover erased digital evidence, and compile court-admissible forensic reports.',
                'overview' => 'As daily life and commercial transactions migrate to the digital sphere, cyber crimes—ranging from deepfake extortion and WhatsApp blackmail to corporate data theft—have multiplied exponentially. Deep Trace Detective houses a dedicated cyber forensics laboratory equipped with certified forensic examiners (CHFI, CEH) who trace digital footprints back to real-world actors.',
                'why_needed' => [
                    'Investigating online blackmail, sextortion, and morphed photo harassment.',
                    'Tracing fake social media profiles and defamatory smear campaigns.',
                    'Forensic analysis of corporate laptops following data theft or employee sabotage.',
                    'Tracing financial cyber fraud, phishing relays, and spoofed payment portals.'
                ],
                'investigation_scope' => [
                    'Email header inspection, IP relay tracking, and domain infrastructure attribution.',
                    'Forensic data extraction and deleted file recovery from storage drives.',
                    'Digital evidence preservation adhering to ISO 27037 standards.',
                    'Section 63 BSA certificate generation for courtroom electronic submission.'
                ],
                'methods_tools' => [
                    'Industry-standard forensic software suites.',
                    'Hardware write-blockers ensuring non-destructive evidence capture.',
                    'Dark-web and OSINT threat intelligence databases.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Evidence Triage', 'desc' => 'Secure digital devices, message exports, and communication logs.'],
                    ['step' => '2', 'title' => 'Forensic Image Extraction', 'desc' => 'Create bit-by-bit forensic clone using hardware write-blockers.'],
                    ['step' => '3', 'title' => 'Digital Footprint Analysis', 'desc' => 'Reconstruct deleted artifacts, registry entries, and network packets.'],
                    ['step' => '4', 'title' => 'Forensic Certificate Dossier', 'desc' => 'Deliver comprehensive forensic report ready for court or police FIR.']
                ],
                'legal_compliance_text' => 'Operates strictly in compliance with the Information Technology Act 2000, DPDP Act 2023, and Indian Evidence Act electronic standards.',
                'deliverables' => [
                    'Certified Forensic Examiner Report.',
                    'Section 63 BSA Electronic Admissibility Certificate.',
                    'Digital evidence exhibits with cryptographic SHA-256 hash proofs.'
                ],
                'faq_items' => [
                    ['q' => 'Can you identify who created an anonymous Instagram or WhatsApp account harassing me?', 'a' => 'Yes, through metadata correlation, OSINT tracking, and forensic analysis of digital traces, we assist in identifying anonymous perpetrators.']
                ],
                'meta_title' => 'Cyber Crime & Digital Forensics India | Deep Trace Detective',
                'meta_description' => 'Certified digital forensics and cyber crime investigation. Social media harassment, online blackmail, corporate data theft, and Section 63 BSA reports.',
                'is_featured' => true,
                'order' => 14,
            ],

            // 15. Bug Sweeping (TSCM)
            [
                'title' => 'Bug Sweeping (TSCM)',
                'slug' => 'bug-sweeping-tscm',
                'category' => 'Cyber & Security',
                'icon' => 'signal',
                'short_description' => 'Technical Surveillance Counter-Measures (TSCM). Detecting hidden cameras, GSM listening bugs, RF transmitters, and audio taps in offices and residences.',
                'hero_headline' => 'Professional TSCM Bug Sweeping & Electronic Counter-Measures',
                'hero_subheadline' => 'Neutralize electronic eavesdropping. Detect hidden pinhole cameras, wireless listening bugs, and unauthorized trackers in boardrooms and VIP residences.',
                'overview' => 'In an era of miniaturized surveillance technology, covert listening devices, hidden optical lenses, and GSM transmitters can be purchased online for nominal amounts and concealed within mundane fixtures—like electrical wall sockets, smoke detectors, and desk ornaments. Deep Trace Detective provides military-grade Technical Surveillance Counter-Measures (TSCM).',
                'why_needed' => [
                    'Boardroom sweeps before high-stakes tender decisions, M&A discussions, or executive meetings.',
                    'Screening executive residences, hotel suites, and VIP guest rooms for illicit optical devices.',
                    'Suspecting leaked conversations where no human breach explains the disclosure.',
                    'Vehicle sweeps for concealed GPS tracking units and audio bugs.'
                ],
                'investigation_scope' => [
                    'RF Spectrum analysis from 10 kHz to 24 GHz to detect active transmissions.',
                    'Non-Linear Junction Detection (NLJD) to uncover electronic chips even when powered off.',
                    'Thermal infrared imaging to detect micro-heat emitted by hidden bug power supplies.',
                    'Physical disassembly of electrical sockets, junction boxes, and ceiling panels.'
                ],
                'methods_tools' => [
                    'Specialized RF spectrum analyzers and digital receiver suites.',
                    'Non-Linear Junction Detectors (NLJD) for dormant electronics.',
                    'Thermal imaging cameras and optical lens reflection locators.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Threat Consultation', 'desc' => 'Conduct off-site confidential briefing to avoid alerting suspected eavesdroppers.'],
                    ['step' => '2', 'title' => 'Electronic & RF Sweep', 'desc' => 'Scan electromagnetic spectrum and analyze ambient wireless signals.'],
                    ['step' => '3', 'title' => 'Physical & Optical Inspection', 'desc' => 'Examine physical fixtures, ceiling cavities, and telecommunication lines.'],
                    ['step' => '4', 'title' => 'Sanitization Report', 'desc' => 'Deliver room clearance certificate and strategic physical security recommendations.']
                ],
                'legal_compliance_text' => '100% legal protective counter-measure service conducted on client-owned or leased premises to safeguard privacy rights under Indian law.',
                'deliverables' => [
                    'TSCM Clearance & Bug Sweep Certificate.',
                    'Spectrum capture logs and thermal anomaly reports.',
                    'Physical security hardening blueprint.'
                ],
                'faq_items' => [
                    ['q' => 'Can you detect bugs that are switched off or dormant?', 'a' => 'Yes. Our Non-Linear Junction Detectors (NLJD) detect the silicon semiconductors present in all electronic circuits regardless of whether they are powered on.']
                ],
                'meta_title' => 'TSCM Bug Sweeping & Hidden Camera Detection | Deep Trace Detective',
                'meta_description' => 'Sweep boardrooms, homes, and luxury vehicles for hidden cameras, GSM listening bugs, and GPS trackers. Advanced RF spectrum & NLJD sweeps across India.',
                'is_featured' => true,
                'order' => 15,
            ],

            // 16. Asset Tracing
            [
                'title' => 'Asset Tracing',
                'slug' => 'asset-tracing',
                'category' => 'Legal & Fraud',
                'icon' => 'currency-rupee',
                'short_description' => 'Locating concealed properties, benami bank accounts, shell company holdings, and luxury assets for debt recovery and divorce enforcement.',
                'hero_headline' => 'Strategic Asset Tracing & Wealth Discovery in India',
                'hero_subheadline' => 'Unmask hidden real estate holdings, benami business interests, and concealed luxury assets to enforce court decrees and debt recovery.',
                'overview' => 'Securing a legal decree or arbitration award in your favor is futile if the judgment debtor fraudulently transfers assets into family members’ names or hides behind labyrinthine corporate shell structures. Deep Trace Detective specializes in uncovering concealed wealth, identifying benami real estate, and mapping business assets nationwide.',
                'why_needed' => [
                    'Enforcing High Court or commercial arbitration recovery awards against defaulting debtors.',
                    'Uncovering hidden assets of a spouse claiming zero income in alimony/maintenance proceedings.',
                    'Assisting banks and financial institutions with recovery of NPA accounts.',
                    'Identifying undisclosed commercial assets during contested inheritance battles.'
                ],
                'investigation_scope' => [
                    'Ministry of Corporate Affairs directorship, shareholding, and debenture analysis.',
                    'Sub-registrar municipal property indexing across target geographies.',
                    'On-ground lifestyle and asset correlation (luxury vehicles, commercial tenancies).',
                    'Mapping extended family holdings to identify suspected benami ownership.'
                ],
                'methods_tools' => [
                    'Corporate graph mapping tools linking directorships and registered addresses.',
                    'Field reconnaissance of commercial premises and residential holdings.',
                    'Open Source Financial Intelligence (OSINT).'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Profile Formulation', 'desc' => 'Analyze subject profile, known financial history, and suspected asset jurisdictions.'],
                    ['step' => '2', 'title' => 'Corporate & Property Search', 'desc' => 'Scrutinize registrar filings, land deeds, and corporate shareholdings.'],
                    ['step' => '3', 'title' => 'Ground Verification', 'desc' => 'Physically inspect properties, commercial establishments, and luxury assets.'],
                    ['step' => '4', 'title' => 'Asset Dossier Handover', 'desc' => 'Deliver an actionable, court-admissible asset dossier for legal attachment.']
                ],
                'legal_compliance_text' => 'Conducted through legitimate public records, registrar searches, and open-source intelligence strictly within the Benami Transactions Act and DPDP Act.',
                'deliverables' => [
                    'Comprehensive Asset Discovery Dossier.',
                    'Certified land registry extract references and corporate filing records.',
                    'Photographic evidence of identified physical assets.'
                ],
                'faq_items' => [
                    ['q' => 'Can assets held under relatives’ names be traced?', 'a' => 'Yes, our forensic investigators map corporate links and acquisition timelines to identify beneficial ownership held through nominees.']
                ],
                'meta_title' => 'Asset Tracing & Wealth Discovery Services | Deep Trace Detective',
                'meta_description' => 'Uncover hidden real estate, benami holdings, and corporate assets across India. Enforce court decrees, recovery orders, and divorce settlements.',
                'is_featured' => true,
                'order' => 16,
            ],

            // 17. Financial Fraud Investigation
            [
                'title' => 'Financial Fraud Investigation',
                'slug' => 'financial-fraud-investigation',
                'category' => 'Legal & Fraud',
                'icon' => 'banknotes',
                'short_description' => 'Forensic accounting, embezzlement detection, Ponzi scheme investigations, invoice manipulation, and banking scam resolution.',
                'hero_headline' => 'Comprehensive Financial Fraud & Embezzlement Probes',
                'hero_subheadline' => 'Follow the money. Unravel complex financial fraud, procurement kickbacks, fake invoices, and Ponzi schemes with forensic precision.',
                'overview' => 'Financial crimes are becoming increasingly sophisticated, utilizing multi-layered banking transactions, fictitious vendor invoicing, and offshore entities to conceal stolen capital. Deep Trace Detective combines certified forensic auditing with on-ground field surveillance to trace misappropriated funds and identify dishonest conspirators.',
                'why_needed' => [
                    'Detecting internal embezzlement and false billing within corporate accounting teams.',
                    'Investigating fraudulent investment funds, Ponzi operators, and unapproved NBFC schemes.',
                    'Uncovering vendor kickback schemes and inflated procurement contracts.',
                    'Gathering evidence to initiate criminal recovery under the Bharatiya Nyaya Sanhita.'
                ],
                'investigation_scope' => [
                    'Forensic reconstruction of doctored accounting books and supplier ledgers.',
                    'Background checks and lifestyle audits of suspected financial personnel.',
                    'Identification of fictitious vendor addresses and ghost payroll beneficiaries.',
                    'Mapping flow of funds across commercial entities.'
                ],
                'methods_tools' => [
                    'Forensic ledger analysis and discrepancy detection.',
                    'Physical address verification of suspected vendor entities.',
                    'Digital communications forensic keyword auditing.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Anomaly Assessment', 'desc' => 'Examine audit red flags, suspicious bank outflows, and accounting discrepancies.'],
                    ['step' => '2', 'title' => 'Forensic Deep-Dive', 'desc' => 'Audit vendor contracts, approval signatures, and transaction flows.'],
                    ['step' => '3', 'title' => 'Field Verification', 'desc' => 'Physically verify suspicious suppliers, bank branches, and beneficiary identities.'],
                    ['step' => '4', 'title' => 'Criminal Evidence File', 'desc' => 'Submit forensic dossier formatted for police FIR and insurance claims.']
                ],
                'legal_compliance_text' => 'Compliant with Indian criminal procedure standards and corporate governance guidelines.',
                'deliverables' => [
                    'Forensic Financial Audit Report.',
                    'Fictitious supplier verification proofs.',
                    'Actionable evidence summary for law enforcement submission.'
                ],
                'faq_items' => [
                    ['q' => 'Can you help recover stolen funds?', 'a' => 'While private detectives do not seize assets directly, we locate hidden funds and provide police and courts with the documentation required for attachment.']
                ],
                'meta_title' => 'Financial Fraud & Embezzlement Investigation | Deep Trace Detective',
                'meta_description' => 'Investigate corporate embezzlement, invoice fraud, and Ponzi schemes. Forensic accounting and field intelligence to trace misappropriated funds.',
                'is_featured' => false,
                'order' => 17,
            ],

            // 18. Tenant and Domestic Staff Verification
            [
                'title' => 'Tenant and Domestic Staff Verification',
                'slug' => 'tenant-domestic-staff-verification',
                'category' => 'Personal & Matrimonial',
                'icon' => 'user-group',
                'short_description' => 'Fast, verified security checks for housemaids, cooks, drivers, security guards, and residential tenants before granting access to your home.',
                'hero_headline' => 'Tenant & Domestic Staff Verification for Family Safety',
                'hero_subheadline' => 'Never compromise family safety. Verify identity, criminal court history, past employment, and permanent addresses of domestic workers and tenants.',
                'overview' => 'Welcoming a domestic worker into your home or handing residential keys to a new tenant without verification exposes your family and property to severe security risks—including theft, property encroachment, and violent crime. Deep Trace Detective offers fast, dependable verification packages tailored for families and residential societies.',
                'why_needed' => [
                    'Screening maid, cook, nanny, driver, and elderly caretaker candidates.',
                    'Verifying credentials of residential tenants to avoid squatting or criminal tenants.',
                    'Detecting fake or forged Aadhaar cards and fabricated reference phone numbers.',
                    'Fulfilling mandatory police tenant verification requirements smoothly.'
                ],
                'investigation_scope' => [
                    'Permanent address physical check at the subject’s native village/town.',
                    'Screening national e-Courts database for pending criminal trials or FIRs.',
                    'Direct contact and verification with previous residential employers.',
                    'Aadhaar / Voter ID authentication.'
                ],
                'methods_tools' => [
                    'Local field operative network across Indore, Pune, Mumbai, Ahmedabad, Bangalore, and major metros.',
                    'Court docket search databases.',
                    'Discrete reference interview protocols.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Submit Information', 'desc' => 'Provide candidate identity copies, photo, and claimed addresses.'],
                    ['step' => '2', 'title' => 'Database & Court Screening', 'desc' => 'Screen criminal records and civil litigation filings.'],
                    ['step' => '3', 'title' => 'Native Address Check', 'desc' => 'Field operative verifies physical permanent residence and reputation.'],
                    ['step' => '4', 'title' => 'Clearance Report', 'desc' => 'Deliver verification certificate within 48 to 72 hours.']
                ],
                'legal_compliance_text' => 'Operates in accordance with local municipal tenancy rules and DPDP Act 2023 consent requirements.',
                'deliverables' => [
                    'Domestic Staff / Tenant Verification Certificate.',
                    'Criminal litigation search confirmation.',
                    'Photographic evidence of permanent residence.'
                ],
                'faq_items' => [
                    ['q' => 'How quickly can a domestic maid verification be completed?', 'a' => 'Our standard turnaround is 48 to 72 hours for local and native place checks.']
                ],
                'meta_title' => 'Tenant & Domestic Staff Verification | Deep Trace Detective',
                'meta_description' => 'Verify maids, drivers, cooks, and tenants before hiring. Native address checks, criminal record verification, and reference authentication.',
                'is_featured' => false,
                'order' => 18,
            ],

            // 19. Matrimonial Profile Verification
            [
                'title' => 'Matrimonial Profile Verification',
                'slug' => 'matrimonial-profile-verification',
                'category' => 'Personal & Matrimonial',
                'icon' => 'identification',
                'short_description' => 'Validating online matrimony profiles across Shaadi.com, BharatMatrimony, and Jeevansathi. Catching fake profiles, fake photos, and matrimonial scammers.',
                'hero_headline' => 'Online Matrimonial Profile & Scammer Verification',
                'hero_subheadline' => 'Verify the reality behind online matchmaking profiles. Protect against romance scammers, fake NRI profiles, and fabricated wealth claims.',
                'overview' => 'Online matrimonial websites have revolutionized how Indians search for life partners, but they have also become fertile ground for seasoned scammers who create fake NRI identities, display stolen photographs, and fabricate careers at top consulting or tech firms. Deep Trace Detective conducts rapid authentication of digital matrimonial profiles.',
                'why_needed' => [
                    'Verifying whether an online matrimonial profile is authentic or a fraudulent setup.',
                    'Confirming that the individual pictured is indeed the person operating the account.',
                    'Verifying claimed overseas citizenship, foreign employment, or high-income status.',
                    'Protecting families from romance extortion and emergency fund scams.'
                ],
                'investigation_scope' => [
                    'Reverse image forensics to check for stolen photographs and stock models.',
                    'Digital OSINT to map actual social media activity, real friends, and timeline.',
                    'Discrete employer check to confirm authentic employment status.',
                    'Physical address verification of the claimed Indian contact point.'
                ],
                'methods_tools' => [
                    'Advanced reverse image search algorithms and metadata analysis.',
                    'Digital open-source intelligence profiling.',
                    'Rapid on-ground physical confirmation by local operatives.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Profile Intake', 'desc' => 'Provide profile screenshots, bio-data, phone numbers, and photos.'],
                    ['step' => '2', 'title' => 'Digital Forensics', 'desc' => 'Verify image provenance, phone carrier attribution, and digital footprints.'],
                    ['step' => '3', 'title' => 'Physical Validation', 'desc' => 'Operatives confirm workplace and claimed residential presence.'],
                    ['step' => '4', 'title' => 'Risk Assessment', 'desc' => 'Deliver authenticity score and detailed factual report.']
                ],
                'legal_compliance_text' => 'Compliant with Indian digital data ethics and open-source intelligence methodologies.',
                'deliverables' => [
                    'Profile Authenticity Assessment Report.',
                    'Image provenance and reverse search findings.',
                    'Verified employment and residential status overview.'
                ],
                'faq_items' => [
                    ['q' => 'Can you tell if an NRI groom profile is fake?', 'a' => 'Yes, within 48 to 72 hours our digital forensics and overseas affiliate network can verify whether the individual genuinely resides and works abroad.']
                ],
                'meta_title' => 'Matrimonial Profile Verification & Scam Defense | Deep Trace Detective',
                'meta_description' => 'Verify online matrimony profiles on Shaadi.com and BharatMatrimony. Catch fake NRI profiles, fake salaries, and romance scammers with 100% discretion.',
                'is_featured' => false,
                'order' => 19,
            ],

            // 20. Pre-Relationship Verification
            [
                'title' => 'Pre-Relationship Verification',
                'slug' => 'pre-relationship-verification',
                'category' => 'Personal & Matrimonial',
                'icon' => 'sparkles',
                'short_description' => 'Discreet background inquiry before committing to serious dating, romantic partnerships, or cohabitation. Verifying marital status, debts, and true identity.',
                'hero_headline' => 'Discreet Pre-Relationship Verification for Modern Dating',
                'hero_subheadline' => 'Dating in the modern era requires caution. Validate identities, active marriages, hidden children, and true intentions before committing emotionally.',
                'overview' => 'Dating apps and modern social environments provide exciting ways to meet people, but they also present significant risks. It is increasingly common for people to misrepresent their relationship status, conceal active legal marriages, or disguise severe financial distress. Deep Trace Detective helps individuals make safe, informed romantic decisions.',
                'why_needed' => [
                    'Confirming whether a dating partner is legally single or secretly married with children.',
                    'Verifying true professional career, actual source of income, and educational credentials.',
                    'Checking for criminal history, domestic violence complaints, or civil fraud suits.',
                    'Peace of mind before moving in together or making substantial joint financial commitments.'
                ],
                'investigation_scope' => [
                    'Civic marriage registrar and municipal marriage records search.',
                    'Physical address and living arrangement verification.',
                    'Screening for civil and criminal court proceedings.',
                    'Discreet visual observation of social circle and weekend lifestyle.'
                ],
                'methods_tools' => [
                    'Undercover discrete inquiries.',
                    'Digital open-source lifestyle verification.',
                    'Civic registry cross-checks.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Confidential Intake', 'desc' => 'Share partner details, concerns, and claimed personal bio.'],
                    ['step' => '2', 'title' => 'Identity & Marital Audit', 'desc' => 'Cross-reference legal marriage registries and court databases.'],
                    ['step' => '3', 'title' => 'Lifestyle Observation', 'desc' => 'Discreetly observe social patterns and daily integrity.'],
                    ['step' => '4', 'title' => 'Truth Debrief', 'desc' => 'Deliver confidential findings directly to the client.']
                ],
                'legal_compliance_text' => 'Conducted with strict respect for constitutional privacy rights and non-intrusive legal inquiry standards.',
                'deliverables' => [
                    'Relationship Clarity Profile Report.',
                    'Verified marital status and litigation extract.',
                    'Lifestyle observation summary.'
                ],
                'faq_items' => [
                    ['q' => 'Will my partner ever find out I hired a detective?', 'a' => 'No. All inquiries are conducted covertly with zero direct contact with your partner.']
                ],
                'meta_title' => 'Pre-Relationship Background Checks | Deep Trace Detective',
                'meta_description' => 'Verify someone before serious dating or marriage commitment. Check true marital status, criminal record, debts, and lifestyle integrity confidentially.',
                'is_featured' => false,
                'order' => 20,
            ],

            // 21. Litigation Support and Evidence Collection
            [
                'title' => 'Litigation Support and Evidence Collection',
                'slug' => 'litigation-support',
                'category' => 'Legal & Fraud',
                'icon' => 'document-magnifying-glass',
                'short_description' => 'Partnering with advocates and law firms to gather court-admissible evidence, locate reluctant witnesses, verify asset declarations, and establish facts.',
                'hero_headline' => 'Professional Litigation Support & Evidence Gathering for Legal Counsel',
                'hero_subheadline' => 'Strengthen your legal petitions and court trials with verifiable electronic evidence, certified affidavits, and on-ground fact-finding.',
                'overview' => 'Advocates often struggle with the physical limitations of legal practice—lawyers draft brilliant legal arguments, but winning cases requires concrete, verifiable facts. Deep Trace Detective serves as the investigative arm for leading civil, criminal, and commercial law firms across India, supplying admissible evidence compliant with the Bharatiya Sakshya Adhiniyam.',
                'why_needed' => [
                    'Procuring indisputable evidence under Section 63 BSA for electronic admissibility.',
                    'Locating witnesses, serving difficult legal notices, and conducting preliminary interviews.',
                    'Uncovering undisclosed assets to support execution petitions and maintenance warrants.',
                    'Countering fabricated allegations with verified chronological alibi evidence.'
                ],
                'investigation_scope' => [
                    'Forensic collection and chain-of-custody preservation of electronic media.',
                    'Document authentication and witness tracking nationwide.',
                    'Field reconnaissance to capture photographic evidence of property status or violations.',
                    'Preparation of formal investigator affidavits.'
                ],
                'methods_tools' => [
                    'Evidence collection adhering to judicial admissibility protocols.',
                    'GPS-verified photography and tamper-evident digital timestamps.',
                    'Specialized skip-tracing methodologies.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Advocate Briefing', 'desc' => 'Coordinate with legal counsel to understand trial strategy and evidentiary gaps.'],
                    ['step' => '2', 'title' => 'Evidentiary Fieldwork', 'desc' => 'Deploy operatives to gather documentation, photos, and witness leads.'],
                    ['step' => '3', 'title' => 'Chain of Custody', 'desc' => 'Preserve metadata and issue statutory Section 63 certificates.'],
                    ['step' => '4', 'title' => 'Court-Ready File', 'desc' => 'Deliver an organized evidence file formatted for filing before the bench.']
                ],
                'legal_compliance_text' => 'Conducted in strict harmony with the Bharatiya Sakshya Adhiniyam and the Advocates Act.',
                'deliverables' => [
                    'Litigation Support Evidence Bundle.',
                    'Section 63 BSA Electronic Admissibility Certificate.',
                    'Witness tracking reports and sworn investigator affidavits.'
                ],
                'faq_items' => [
                    ['q' => 'Can you serve legal court notices to evasive individuals?', 'a' => 'Yes, our skip-tracing team can locate evasive respondents and assist process servers with precise residential and workplace timings.']
                ],
                'meta_title' => 'Litigation Support & Evidence Collection | Deep Trace Detective',
                'meta_description' => 'Comprehensive litigation support for law firms and litigants. Court-admissible evidence under Section 63 BSA, witness tracing, and asset discovery.',
                'is_featured' => true,
                'order' => 21,
            ],

            // 22. IP and Counterfeit Investigation
            [
                'title' => 'IP and Counterfeit Investigation',
                'slug' => 'ip-counterfeit-investigation',
                'category' => 'Corporate & Business',
                'icon' => 'tag',
                'short_description' => 'Protecting brand equity. Infiltrating counterfeit syndicates, identifying illicit manufacturing factories, and coordinating police enforcement raids.',
                'hero_headline' => 'Intellectual Property Protection & Counterfeit Goods Infiltration',
                'hero_subheadline' => 'Defend brand equity and consumer safety. Locate clandestine counterfeit factories, trace distribution networks, and coordinate enforcement raids.',
                'overview' => 'Counterfeiting and trademark infringement inflict immense financial damage on brand owners while endangering consumers in sectors like pharmaceuticals, FMCG, electronics, and automotive parts. Deep Trace Detective operates an elite IP protection division that infiltrates supply chains and exposes counterfeit operations at the root source.',
                'why_needed' => [
                    'Stopping gray-market distribution and unauthorized brand imitation.',
                    'Locating clandestine manufacturing units, packaging printers, and wholesale warehouses.',
                    'Procuring sample counterfeit purchases with verified chain-of-custody for court injunctions.',
                    'Coordinating with local police authorities for successful seizure and FIR registration.'
                ],
                'investigation_scope' => [
                    'Undercover test purchases and chain-of-custody documentation.',
                    'Tracing supply corridors from retail markets back to wholesale hubs and illicit factories.',
                    'Surveillance of logistics transporters moving counterfeit cartons.',
                    'Preparation of comprehensive raid dossiers for police enforcement.'
                ],
                'methods_tools' => [
                    'Undercover operatives posing as wholesale buyers.',
                    'Covert video recording of manufacturing operations.',
                    'Logistics route mapping and warehouse surveillance.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Brand Threat Mapping', 'desc' => 'Analyze counterfeit samples and identify affected retail markets.'],
                    ['step' => '2', 'title' => 'Undercover Purchases', 'desc' => 'Conduct documented test purchases to verify packaging discrepancies.'],
                    ['step' => '3', 'title' => 'Supply Chain Reverse-Trace', 'desc' => 'Follow distribution chains back to manufacturing and printing units.'],
                    ['step' => '4', 'title' => 'Enforcement Raid Action', 'desc' => 'Partner with police for coordinated raids, seizures, and arrests.']
                ],
                'legal_compliance_text' => 'Compliant with the Trade Marks Act 1999, Copyright Act 1957, and BNS criminal provisions against counterfeiting.',
                'deliverables' => [
                    'Comprehensive Counterfeit Supply Chain Dossier.',
                    'Authenticated test purchase samples with vendor invoices.',
                    'Raid coordination report and inventory seizure documentation.'
                ],
                'faq_items' => [
                    ['q' => 'Do you coordinate with the police during enforcement raids?', 'a' => 'Yes, we prepare the police complaint file, assist in obtaining search warrants, and accompany officers to guide them to exact factory locations.']
                ],
                'meta_title' => 'IP Protection & Counterfeit Goods Investigation | Deep Trace Detective',
                'meta_description' => 'Protect your brand from counterfeiting and IP theft. Infiltrate fake goods syndicates, locate illegal factories, and coordinate police raids across India.',
                'is_featured' => false,
                'order' => 22,
            ],

            // 23. Competitor and Market Intelligence (Legal)
            [
                'title' => 'Competitor and Market Intelligence (Legal)',
                'slug' => 'competitor-market-intelligence',
                'category' => 'Corporate & Business',
                'icon' => 'chart-bar',
                'short_description' => 'Ethical, legal market intelligence: competitor capacity audits, distributor sentiment, pricing strategies, and executive movement tracking.',
                'hero_headline' => 'Strategic Competitor & Market Intelligence (100% Legal)',
                'hero_subheadline' => 'Outmaneuver competition with ethical, legally compliant market intelligence. Analyze distribution footprints, expansion plans, and capacity.',
                'overview' => 'In fast-moving commercial markets, strategic decisions require timely, objective field intelligence. Deep Trace Detective provides rigorous, ethical, and 100% legal competitor analysis utilizing open-source intelligence, distributor sentiment surveys, and public regulatory filings to provide your leadership with a distinct competitive advantage.',
                'why_needed' => [
                    'Assessing actual manufacturing output and plant capacity of key competitors.',
                    'Understanding competitor dealer margins, discount structures, and distribution channels.',
                    'Evaluating competitor expansion, new product launches, and supply chain bottlenecks.',
                    'Tracking key executive hires and strategic talent movement.'
                ],
                'investigation_scope' => [
                    'Mystery shopping and distributor feedback across regional markets.',
                    'Analysis of public regulatory filings, patent submissions, and environmental clearances.',
                    'Physical observation of competitor dispatch frequency and logistics throughput.',
                    'Open Source Intelligence (OSINT) mapping of executive recruitment trends.'
                ],
                'methods_tools' => [
                    'Discreet commercial market mystery shopping.',
                    'Public regulatory document audits (MCA, Pollution Control Boards, Patent Offices).',
                    'Logistics dispatch count surveillance.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Intelligence Objectives', 'desc' => 'Define specific market questions and strategic competitor parameters.'],
                    ['step' => '2', 'title' => 'Multi-Source Field Research', 'desc' => 'Engage market distributors, suppliers, and analyze public filings.'],
                    ['step' => '3', 'title' => 'Data Synthesis', 'desc' => 'Filter rumors from verifiable market realities.'],
                    ['step' => '4', 'title' => 'Executive Briefing', 'desc' => 'Deliver an actionable Strategic Competitive Intelligence Dossier.']
                ],
                'legal_compliance_text' => 'Strictly adheres to Indian Competition Act rules, trade secret protection frameworks, and ethical intelligence gathering guidelines. No industrial espionage or illegal eavesdropping.',
                'deliverables' => [
                    'Strategic Market Intelligence Report.',
                    'Pricing and distribution matrix across regional hubs.',
                    'Competitor operational capacity assessment.'
                ],
                'faq_items' => [
                    ['q' => 'Is competitor intelligence legal in India?', 'a' => 'Yes. Gathering information from public registries, market surveys, and open sources is entirely legal and a standard corporate strategy practice worldwide.']
                ],
                'meta_title' => 'Competitor & Market Intelligence India | Deep Trace Detective',
                'meta_description' => 'Ethical, legal competitor intelligence. Analyze market share, distribution networks, pricing models, and plant output across Indian markets.',
                'is_featured' => false,
                'order' => 23,
            ],

            // 24. Witness and Court Process Support
            [
                'title' => 'Witness and Court Process Support',
                'slug' => 'witness-court-support',
                'category' => 'Legal & Fraud',
                'icon' => 'user-plus',
                'short_description' => 'Locating key eyewitnesses, verifying credibility, skip-tracing absconding defendants, and assisting process servers with difficult summons.',
                'hero_headline' => 'Witness Tracing & Legal Process Support Services',
                'hero_subheadline' => 'Locate vital witnesses, skip-trace evasive defendants, and substantiate trial testimony with verified background credibility checks.',
                'overview' => 'A pivotal eyewitness can change the entire trajectory of a civil litigation or criminal trial. However, witnesses frequently move, change phone numbers, or actively avoid court summons out of fear or apathy. Deep Trace Detective specializes in locating hard-to-find witnesses and evaluating their credibility before they take the stand.',
                'why_needed' => [
                    'Locating eyewitnesses who moved away from accident or crime locations.',
                    'Skip-tracing evasive defendants who intentionally avoid court process servers.',
                    'Conducting credibility background checks on opposing witnesses to uncover biases.',
                    'Verifying that an alibi witness’s claims are corroborated by factual records.'
                ],
                'investigation_scope' => [
                    'Skip-tracing nationwide across municipal and professional databases.',
                    'On-ground neighborhood tracing and discreet contact confirmation.',
                    'Witness credibility profiling (litigation history, financial standing, conflicts).',
                    'Process server escort and photographic confirmation of physical summons delivery.'
                ],
                'methods_tools' => [
                    'Advanced skip-tracing methodologies and informant networks.',
                    'Public court docket cross-referencing.',
                    'Discreet residential confirmation by field operatives.'
                ],
                'process_steps' => [
                    ['step' => '1', 'title' => 'Witness Profile Intake', 'desc' => 'Gather historical identifiers, old addresses, and known family ties.'],
                    ['step' => '2', 'title' => 'Skip-Trace Execution', 'desc' => 'Deploy address tracing and localized neighborhood inquiries.'],
                    ['step' => '3', 'title' => 'Location & Credibility Check', 'desc' => 'Confirm current whereabouts and evaluate potential biases.'],
                    ['step' => '4', 'title' => 'Advocate Handover', 'desc' => 'Deliver verified coordinates to client’s legal counsel for formal deposition.']
                ],
                'legal_compliance_text' => 'Conducted in strict compliance with the Code of Civil Procedure, Bharatiya Nagarik Suraksha Sanhita, and ethical legal witness guidelines.',
                'deliverables' => [
                    'Witness Location & Contact Dossier.',
                    'Witness Credibility Assessment Profile.',
                    'Service of process photographic documentation.'
                ],
                'faq_items' => [
                    ['q' => 'Can you locate a witness who has changed states in India?', 'a' => 'Yes, our pan-India network and skip-tracing specialists routinely locate witnesses who have relocated across state boundaries.']
                ],
                'meta_title' => 'Witness Tracing & Court Process Support | Deep Trace Detective',
                'meta_description' => 'Locate key trial witnesses, skip-trace evasive defendants, and verify witness credibility for court trials and litigation proceedings across India.',
                'is_featured' => false,
                'order' => 24,
            ],
        ];

        foreach ($services as $serviceData) {
            Service::updateOrCreate(['slug' => $serviceData['slug']], $serviceData);
        }
    }
}
