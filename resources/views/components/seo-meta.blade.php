@props([
    'title' => null,
    'description' => null,
    'canonical' => null,
    'ogImage' => null,
    'type' => 'website',
    'breadcrumbs' => [],
    'service' => null,
    'article' => null,
    'faqs' => [],
])

@php
    $siteName = config('agency.name', 'Shankar Detective Agency');
    $defaultTitle = $siteName . ' | Premier Confidential Private Investigation Agency';
    $defaultDescription = config('agency.description');
    
    $pageTitle = $title ? (Str::length($title) <= 60 ? $title : Str::limit($title, 57)) : $defaultTitle;
    $metaDescription = $description ? (Str::length($description) <= 155 ? $description : Str::limit($description, 152)) : Str::limit($defaultDescription, 152);
    $canonicalUrl = $canonical ?? url()->current();
    $imageUrl = $ogImage ?? asset('images/og-preview.jpg');
@endphp

<!-- Primary Meta Tags -->
<title>{{ $pageTitle }}</title>
<meta name="title" content="{{ $pageTitle }}">
<meta name="description" content="{{ $metaDescription }}">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<link rel="canonical" href="{{ $canonicalUrl }}" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $type }}">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:title" content="{{ $pageTitle }}">
<meta property="og:description" content="{{ $metaDescription }}">
<meta property="og:image" content="{{ $imageUrl }}">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:locale" content="en_IN">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ $canonicalUrl }}">
<meta name="twitter:title" content="{{ $pageTitle }}">
<meta name="twitter:description" content="{{ $metaDescription }}">
<meta name="twitter:image" content="{{ $imageUrl }}">

<!-- JSON-LD Structured Data: Organization & LocalBusiness -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Organization", "LocalBusiness", "ProfessionalService"],
      "@id": "{{ url('/') }}#organization",
      "name": "{{ config('agency.name') }}",
      "legalName": "{{ config('agency.legal_name') }}",
      "url": "{{ url('/') }}",
      "logo": {
        "@type": "ImageObject",
        "url": "{{ asset('images/logo.png') }}"
      },
      "telephone": "{{ config('agency.phone') }}",
      "email": "{{ config('agency.email') }}",
      "priceRange": "₹₹ - ₹₹₹",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "{{ config('agency.address.street') }}",
        "addressLocality": "{{ config('agency.address.city') }}",
        "addressRegion": "{{ config('agency.address.state') }}",
        "postalCode": "{{ config('agency.address.pincode') }}",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "{{ config('agency.geo.latitude') }}",
        "longitude": "{{ config('agency.geo.longitude') }}"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          "opens": "09:30",
          "closes": "19:30"
        }
      ],
      "areaServed": [
        @foreach(config('agency.top_cities') as $c)
        {
          "@type": "City",
          "name": "{{ $c['name'] }}"
        }@if(!$loop->last),@endif
        @endforeach
      ],
      "sameAs": [
        "{{ config('agency.social.facebook') }}",
        "{{ config('agency.social.linkedin') }}",
        "{{ config('agency.social.instagram') }}",
        "{{ config('agency.social.twitter') }}"
      ]
    }
    @if(count($breadcrumbs) > 0)
    ,{
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "{{ url('/') }}"
        }
        @foreach($breadcrumbs as $index => $item)
        ,{
          "@type": "ListItem",
          "position": {{ $index + 2 }},
          "name": "{{ $item['name'] }}",
          "item": "{{ $item['url'] }}"
        }
        @endforeach
      ]
    }
    @endif
    @if($service)
    ,{
      "@type": "Service",
      "name": "{{ $service->title }}",
      "serviceType": "{{ $service->category }}",
      "description": "{{ $service->short_description }}",
      "provider": {
        "@id": "{{ url('/') }}#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "India"
      }
    }
    @endif
    @if($article)
    ,{
      "@type": "Article",
      "headline": "{{ $article->title }}",
      "description": "{{ $article->excerpt }}",
      "datePublished": "{{ $article->published_at?->toIso8601String() }}",
      "dateModified": "{{ $article->updated_at?->toIso8601String() }}",
      "author": {
        "@type": "Person",
        "name": "{{ $article->author_name }}"
      },
      "publisher": {
        "@id": "{{ url('/') }}#organization"
      }
    }
    @endif
    @if(count($faqs) > 0)
    ,{
      "@type": "FAQPage",
      "mainEntity": [
        @foreach($faqs as $f)
        {
          "@type": "Question",
          "name": "{{ is_array($f) ? ($f['q'] ?? $f['question'] ?? '') : ($f->question ?? '') }}",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "{{ is_array($f) ? ($f['a'] ?? $f['answer'] ?? '') : ($f->answer ?? '') }}"
          }
        }@if(!$loop->last),@endif
        @endforeach
      ]
    }
    @endif
  ]
}
</script>

