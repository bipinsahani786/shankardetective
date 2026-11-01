<x-app-layout
    title="Contact Deep Trace Detective | 24/7 Helpline Indore"
    description="Contact Deep Trace Detective led by Senior Case Director. 6, Vijay Nagar, Near Domino's, Indore, M.P. Phone/WhatsApp: +91 9004145251. 100% Confidential."
    :breadcrumbs="[['name' => 'Contact Us', 'url' => route('contact')]]"
    :faqs="$faqs"
>
    <!-- Section 1: Breadcrumb -->
    <x-sections.breadcrumb :items="[['name' => 'Contact Us', 'url' => route('contact')]]" />

    <!-- Section 2: Hero -->
    <x-sections.hero
        badge="24/7 Confidential Case Helpline Active"
        title="Contact <span class='text-blue-700'>Deep Trace Detective</span>"
        subtitle="Speak directly with Principal Investigator in total confidence. In-person office consultations in Indore are scheduled strictly by prior appointment."
        cta-primary-text="Schedule Office Appointment"
        cta-secondary-text="Call +91 9004145251"
    />

    <!-- Section 3: Trust Bar -->
    <x-sections.trust-bar />

    <!-- Section 4: Direct Lead Form -->
    <x-sections.lead-form
        title="Submit a Confidential Case Inquiry"
        subtitle="Fill out our secure intake form. All transmissions are encrypted and covered by our strict NDA."
    />

    <!-- Section 5: Stats Counter -->
    <x-sections.stats-counter />

    <!-- Section 6: Confidentiality Guarantee -->
    <x-sections.confidentiality-guarantee />

    <!-- Section 7: Mid-Page CTA Banner -->
    <x-sections.cta-banner
        title="Prefer an Encrypted WhatsApp Chat?"
        subtitle="Our WhatsApp case desk is manned by verified investigators."
        button-text="Initiate WhatsApp Chat"
        :button-url="'https://wa.me/' . config('agency.whatsapp') . '?text=' . rawurlencode('Hello Deep Trace Detective team, I require a confidential consultation.')"
        secondary-text="Call Hotline Now"
        :secondary-url="'tel:' . config('agency.phone')"
    />

    <!-- Section 8: Legal & Ethics Promise -->
    <x-sections.legal-ethics-promise />

    <!-- Section 9: Cities We Serve -->
    <x-sections.cities-served />

    <!-- Section 10: FAQ Accordion -->
    <x-sections.faq-accordion :faqs="$faqs" />

    <!-- Section 11: Final Action CTA -->
    <x-sections.final-cta />
</x-app-layout>
