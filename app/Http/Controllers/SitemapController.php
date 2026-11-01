<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\City;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function sitemap(): Response
    {
        $services = Service::all();
        $cities = City::all();
        $posts = Post::published()->get();
        $caseStudies = CaseStudy::all();

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Core Pages
        $corePages = [
            ['url' => route('home'), 'priority' => '1.0', 'freq' => 'daily'],
            ['url' => route('services.index'), 'priority' => '0.9', 'freq' => 'weekly'],
            ['url' => route('about'), 'priority' => '0.8', 'freq' => 'monthly'],
            ['url' => route('why-choose-us'), 'priority' => '0.8', 'freq' => 'monthly'],
            ['url' => route('how-we-work'), 'priority' => '0.8', 'freq' => 'monthly'],
            ['url' => route('case-studies.index'), 'priority' => '0.8', 'freq' => 'weekly'],
            ['url' => route('testimonials'), 'priority' => '0.7', 'freq' => 'monthly'],
            ['url' => route('faq'), 'priority' => '0.8', 'freq' => 'monthly'],
            ['url' => route('blog.index'), 'priority' => '0.9', 'freq' => 'daily'],
            ['url' => route('contact'), 'priority' => '0.9', 'freq' => 'monthly'],
            ['url' => route('consultation'), 'priority' => '0.9', 'freq' => 'monthly'],
            ['url' => route('privacy-policy'), 'priority' => '0.3', 'freq' => 'yearly'],
            ['url' => route('terms-and-conditions'), 'priority' => '0.3', 'freq' => 'yearly'],
            ['url' => route('disclaimer-compliance'), 'priority' => '0.4', 'freq' => 'yearly'],
            ['url' => route('careers'), 'priority' => '0.4', 'freq' => 'monthly'],
            ['url' => route('html-sitemap'), 'priority' => '0.5', 'freq' => 'monthly'],
        ];

        foreach ($corePages as $page) {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars($page['url']) . '</loc>';
            $xml .= '<changefreq>' . $page['freq'] . '</changefreq>';
            $xml .= '<priority>' . $page['priority'] . '</priority>';
            $xml .= '</url>';
        }

        // 24 Services
        foreach ($services as $service) {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars(route('services.show', $service->slug)) . '</loc>';
            $xml .= '<lastmod>' . $service->updated_at->toAtomString() . '</lastmod>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.9</priority>';
            $xml .= '</url>';
        }

        // 8 Cities
        foreach ($cities as $city) {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars(route('cities.show', $city->slug)) . '</loc>';
            $xml .= '<lastmod>' . $city->updated_at->toAtomString() . '</lastmod>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.85</priority>';
            $xml .= '</url>';
        }

        // Blog Posts
        foreach ($posts as $post) {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars(route('blog.show', $post->slug)) . '</loc>';
            $xml .= '<lastmod>' . $post->updated_at->toAtomString() . '</lastmod>';
            $xml .= '<changefreq>monthly</changefreq>';
            $xml .= '<priority>0.7</priority>';
            $xml .= '</url>';
        }

        // Case Studies
        foreach ($caseStudies as $case) {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars(route('case-studies.show', $case->slug)) . '</loc>';
            $xml .= '<lastmod>' . $case->updated_at->toAtomString() . '</lastmod>';
            $xml .= '<changefreq>monthly</changefreq>';
            $xml .= '<priority>0.7</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }

    public function robots(): Response
    {
        $content = "User-agent: *\n";
        $content .= "Allow: /\n";
        $content .= "Disallow: /admin\n";
        $content .= "Disallow: /admin/*\n";
        $content .= "Disallow: /storage/*.pdf\n";
        $content .= "\n";
        $content .= "Sitemap: " . url('/sitemap.xml') . "\n";

        return response($content, 200)->header('Content-Type', 'text/plain');
    }
}
