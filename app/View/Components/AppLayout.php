<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public function __construct(
        public ?string $title = null,
        public ?string $description = null,
        public ?string $canonical = null,
        public ?string $ogImage = null,
        public string $type = 'website',
        public mixed $breadcrumbs = [],
        public mixed $service = null,
        public mixed $article = null,
        public mixed $faqs = [],
        public bool $includeMap = true,
    ) {}

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}

