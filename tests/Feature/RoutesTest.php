<?php

namespace Tests\Feature;

use App\Models\CaseStudy;
use App\Models\Category;
use App\Models\City;
use App\Models\Post;
use App\Models\Service;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    public function test_all_institutional_pages_return_successful(): void
    {
        $urls = [
            '/',
            '/about-us',
            '/why-choose-us',
            '/how-we-work',
            '/contact-us',
            '/book-free-consultation',
            '/frequently-asked-questions',
            '/client-testimonials',
            '/our-investigation-team',
            '/careers',
            '/privacy-policy',
            '/terms-and-conditions',
            '/disclaimer-legal-compliance',
            '/sitemap',
            '/services',
            '/case-studies',
            '/blog',
            '/sitemap.xml',
            '/robots.txt',
        ];

        foreach ($urls as $url) {
            $response = $this->get($url);
            $response->assertStatus(200);
        }
    }

    public function test_all_service_pages(): void
    {
        $services = Service::pluck('slug');
        $this->assertNotEmpty($services);

        foreach ($services as $slug) {
            $response = $this->get('/services/' . $slug);
            $response->assertStatus(200);
        }
    }

    public function test_all_city_pages(): void
    {
        $cities = City::pluck('slug');
        $this->assertNotEmpty($cities);

        foreach ($cities as $slug) {
            $response = $this->get('/detective-agency-in-' . $slug);
            $response->assertStatus(200);
        }
    }

    public function test_all_case_study_pages(): void
    {
        $cases = CaseStudy::pluck('slug');
        $this->assertNotEmpty($cases);

        foreach ($cases as $slug) {
            $response = $this->get('/case-studies/' . $slug);
            $response->assertStatus(200);
        }
    }

    public function test_blog_post_and_category_pages(): void
    {
        $post = Post::first();
        if ($post) {
            $this->get('/blog/' . $post->slug)->assertStatus(200);
        }

        $category = Category::first();
        if ($category) {
            $this->get('/blog/category/' . $category->slug)->assertStatus(200);
        }
    }
}

