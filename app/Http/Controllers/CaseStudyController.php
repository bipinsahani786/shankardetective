<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Contracts\View\View;

class CaseStudyController extends Controller
{
    public function index(): View
    {
        $caseStudies = CaseStudy::orderBy('order', 'asc')->get();
        $testimonials = Testimonial::featured()->take(3)->get();
        $faqs = Faq::featured()->take(6)->get();

        return view('case-studies.index', compact('caseStudies', 'testimonials', 'faqs'));
    }

    public function show(string $slug): View
    {
        $case = CaseStudy::where('slug', $slug)->firstOrFail();
        $relatedCases = CaseStudy::where('id', '!=', $case->id)->take(3)->get();
        $relatedServices = Service::take(4)->get();
        $faqs = Faq::featured()->take(4)->get();

        return view('case-studies.show', compact('case', 'relatedCases', 'relatedServices', 'faqs'));
    }
}
