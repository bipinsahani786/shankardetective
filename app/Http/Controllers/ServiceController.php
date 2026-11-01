<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request): View
    {
        $query = Service::query()->orderBy('order', 'asc');

        if ($request->filled('category')) {
            $query->where('category', $request->input('category'));
        }

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%");
            });
        }

        $services = $query->get();
        $categories = Service::select('category')->distinct()->pluck('category');
        $testimonials = Testimonial::featured()->take(3)->get();
        $faqs = Faq::featured()->take(6)->get();
        $caseStudies = CaseStudy::featured()->take(3)->get();
        $teamMembers = \App\Models\TeamMember::orderBy('order', 'asc')->get();

        return view('services.index', compact('services', 'categories', 'testimonials', 'faqs', 'caseStudies', 'teamMembers'));
    }

    public function show(string $slug): View
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $relatedServices = Service::where('id', '!=', $service->id)
            ->where('category', $service->category)
            ->take(3)
            ->get();

        if ($relatedServices->isEmpty()) {
            $relatedServices = Service::where('id', '!=', $service->id)->take(3)->get();
        }

        $testimonials = Testimonial::featured()->take(3)->get();
        $caseStudies = CaseStudy::where('service_category', $service->title)
            ->orWhere('service_category', 'like', "%{$service->category}%")
            ->take(3)
            ->get();

        if ($caseStudies->isEmpty()) {
            $caseStudies = CaseStudy::featured()->take(3)->get();
        }

        $latestPosts = Post::published()->take(3)->get();

        return view('services.show', compact(
            'service',
            'relatedServices',
            'testimonials',
            'caseStudies',
            'latestPosts'
        ));
    }
}
