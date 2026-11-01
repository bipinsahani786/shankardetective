<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\City;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(): View
    {
        $featuredServices = Service::orderBy('order', 'asc')->take(6)->get();
        $testimonials = Testimonial::featured()->take(3)->get();
        $caseStudies = CaseStudy::featured()->take(3)->get();
        $teamMembers = TeamMember::orderBy('order', 'asc')->take(4)->get();
        $faqs = Faq::featured()->take(6)->get();
        $latestPosts = Post::published()->with('category')->latest('published_at')->take(3)->get();

        return view('pages.home', compact(
            'featuredServices',
            'testimonials',
            'caseStudies',
            'teamMembers',
            'faqs',
            'latestPosts'
        ));
    }

    public function about(): View
    {
        $teamMembers = TeamMember::orderBy('order', 'asc')->get();
        $testimonials = Testimonial::featured()->take(3)->get();
        $caseStudies = CaseStudy::featured()->take(3)->get();
        $faqs = Faq::where('category', 'General')->take(5)->get();

        return view('pages.about', compact('teamMembers', 'testimonials', 'caseStudies', 'faqs'));
    }

    public function whyChooseUs(): View
    {
        $testimonials = Testimonial::featured()->take(3)->get();
        $faqs = Faq::whereIn('category', ['General', 'Legal & Ethics'])->take(6)->get();
        $caseStudies = CaseStudy::featured()->take(3)->get();
        $teamMembers = TeamMember::orderBy('order', 'asc')->get();

        return view('pages.why-choose-us', compact('testimonials', 'faqs', 'caseStudies', 'teamMembers'));
    }

    public function howWeWork(): View
    {
        $faqs = Faq::where('category', 'Pricing & Process')->orWhere('category', 'General')->take(6)->get();
        $caseStudies = CaseStudy::featured()->take(3)->get();
        $testimonials = Testimonial::featured()->take(3)->get();
        $teamMembers = TeamMember::orderBy('order', 'asc')->get();

        return view('pages.how-we-work', compact('faqs', 'caseStudies', 'testimonials', 'teamMembers'));
    }

    public function contact(): View
    {
        $cities = City::orderBy('order', 'asc')->get();
        $faqs = Faq::featured()->take(5)->get();

        return view('pages.contact', compact('cities', 'faqs'));
    }

    public function consultation(): View
    {
        $faqs = Faq::featured()->take(5)->get();

        return view('pages.consultation', compact('faqs'));
    }

    public function faq(Request $request): View
    {
        $query = Faq::query();
        if ($request->filled('category')) {
            $query->where('category', $request->input('category'));
        }
        $faqs = $query->orderBy('order', 'asc')->get();
        $categories = Faq::select('category')->distinct()->pluck('category');

        return view('pages.faq', compact('faqs', 'categories'));
    }

    public function testimonials(): View
    {
        $testimonials = Testimonial::orderBy('order', 'asc')->get();
        $faqs = Faq::featured()->take(5)->get();

        return view('pages.testimonials', compact('testimonials', 'faqs'));
    }

    public function team(): View
    {
        $teamMembers = TeamMember::orderBy('order', 'asc')->get();
        $faqs = Faq::featured()->take(5)->get();

        return view('pages.team', compact('teamMembers', 'faqs'));
    }

    public function privacyPolicy(): View
    {
        return view('pages.legal.privacy-policy');
    }

    public function termsAndConditions(): View
    {
        return view('pages.legal.terms-and-conditions');
    }

    public function disclaimerCompliance(): View
    {
        return view('pages.legal.disclaimer-compliance');
    }

    public function careers(): View
    {
        return view('pages.careers');
    }

    public function htmlSitemap(): View
    {
        $services = Service::orderBy('title', 'asc')->get();
        $cities = City::orderBy('name', 'asc')->get();
        $posts = Post::published()->orderBy('title', 'asc')->get();
        $caseStudies = CaseStudy::orderBy('title', 'asc')->get();

        return view('pages.html-sitemap', compact('services', 'cities', 'posts', 'caseStudies'));
    }
}
