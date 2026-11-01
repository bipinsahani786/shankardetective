<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Collect all key URLs to test
$urlsToScrape = [
    '/',
    '/about-us',
    '/why-choose-us',
    '/how-we-work',
    '/contact-us',
    '/book-free-consultation',
    '/frequently-asked-questions',
    '/client-testimonials',
    '/careers',
    '/privacy-policy',
    '/terms-and-conditions',
    '/disclaimer-legal-compliance',
    '/sitemap',
    '/services',
    '/case-studies',
    '/blog',
];

foreach (\App\Models\City::all() as $city) {
    $urlsToScrape[] = '/detective-agency-in-' . $city->slug;
}
foreach (\App\Models\Service::take(5)->get() as $service) {
    $urlsToScrape[] = '/services/' . $service->slug;
}
foreach (\App\Models\CaseStudy::all() as $cs) {
    $urlsToScrape[] = '/case-studies/' . $cs->slug;
}
foreach (\App\Models\Post::all() as $post) {
    $urlsToScrape[] = '/blog/' . $post->slug;
}

echo "Scraping " . count($urlsToScrape) . " rendered pages for links...\n";

$allLinks = [];
$brokenLinks = [];
$emptyButtons = [];

foreach ($urlsToScrape as $pageUrl) {
    $request = Illuminate\Http\Request::create($pageUrl, 'GET');
    $response = $kernel->handle($request);
    $html = $response->getContent();
    $kernel->terminate($request, $response);

    if ($response->getStatusCode() !== 200) {
        $brokenLinks[] = ["source" => "Direct", "url" => $pageUrl, "reason" => "Page returned " . $response->getStatusCode()];
        continue;
    }

    // Extract all href attributes
    preg_match_all('/<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*?)<\/a>/si', $html, $matches, PREG_SET_ORDER);
    foreach ($matches as $match) {
        $href = trim($match[2]);
        $text = strip_tags(trim($match[3]));
        $allLinks[$href][] = ["page" => $pageUrl, "text" => substr($text, 0, 30)];
    }

    // Extract all buttons and check if they have type="submit" or @click or x-on:click or onclick
    preg_match_all('/<button\s([^>]*)>(.*?)<\/button>/si', $html, $btnMatches, PREG_SET_ORDER);
    foreach ($btnMatches as $btn) {
        $attrs = $btn[1];
        $text = strip_tags(trim($btn[2]));
        $hasAction = preg_match('/(type=[\"\']submit[\"\']|@click|x-on:click|onclick)/i', $attrs);
        if (!$hasAction) {
            $emptyButtons[] = ["page" => $pageUrl, "button" => substr($text, 0, 30), "attrs" => $attrs];
        }
    }
}

echo "Found " . count($allLinks) . " unique link targets.\n";

// Validate each link target
$testedUrls = [];
$internalBroken = [];

foreach ($allLinks as $url => $sources) {
    if (empty($url) || $url === '#') {
        $internalBroken[] = ["url" => $url, "reason" => "Empty or pure hash href", "sources" => $sources];
        continue;
    }

    // Anchors
    if (str_starts_with($url, '#')) {
        continue;
    }

    // Protocols
    if (str_starts_with($url, 'tel:') || str_starts_with($url, 'mailto:') || str_starts_with($url, 'javascript:')) {
        continue;
    }

    // External
    if (str_starts_with($url, 'http://') || str_starts_with($url, 'https://')) {
        $parsed = parse_url($url);
        $host = $parsed['host'] ?? '';
        if ($host !== 'deeptracedetective.com' && $host !== 'localhost' && !empty($host)) {
            // External domain (e.g. wa.me, twitter.com)
            continue;
        }
        $url = ($parsed['path'] ?? '/') . (!empty($parsed['query']) ? '?' . $parsed['query'] : '');
    }

    // Remove hash from URL
    $cleanUrl = explode('#', $url)[0];
    if (empty($cleanUrl)) {
        continue;
    }

    if (!isset($testedUrls[$cleanUrl])) {
        $req = Illuminate\Http\Request::create($cleanUrl, 'GET');
        $res = $kernel->handle($req);
        $testedUrls[$cleanUrl] = $res->getStatusCode();
        $kernel->terminate($req, $res);
    }

    $status = $testedUrls[$cleanUrl];
    if ($status >= 400) {
        $internalBroken[] = [
            "url" => $url,
            "status" => $status,
            "reason" => "HTTP $status error",
            "sources" => $sources
        ];
    }
}

echo "\n--- AUDIT RESULTS ---\n";
echo "Internal broken links: " . count($internalBroken) . "\n";
foreach ($internalBroken as $ib) {
    echo "  [BROKEN LINK] " . $ib['url'] . " (" . $ib['reason'] . ")\n";
    foreach (array_slice($ib['sources'], 0, 3) as $s) {
        echo "    On page: " . $s['page'] . " (text: " . $s['text'] . ")\n";
    }
}

echo "\nButtons without submit or click handler: " . count($emptyButtons) . "\n";
foreach (array_slice($emptyButtons, 0, 10) as $eb) {
    echo "  [BUTTON] " . $eb['button'] . " on " . $eb['page'] . "\n";
}

if (count($internalBroken) === 0 && count($emptyButtons) === 0) {
    echo "\nPERFECT! 0 broken links and 0 inert buttons found across all audited pages!\n";
}

