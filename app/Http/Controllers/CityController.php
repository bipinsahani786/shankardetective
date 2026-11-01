<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\City;
use App\Models\Post;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Contracts\View\View;

class CityController extends Controller
{
    public function show(string $city): View
    {
        $cityModel = City::where('slug', $city)->firstOrFail();
        $popularServices = Service::orderBy('order', 'asc')->take(6)->get();
        $testimonials = Testimonial::featured()->take(3)->get();
        $caseStudies = CaseStudy::featured()->take(3)->get();
        $latestPosts = Post::published()->take(3)->get();

        return view('cities.show', compact(
            'cityModel',
            'popularServices',
            'testimonials',
            'caseStudies',
            'latestPosts'
        ));
    }
}
