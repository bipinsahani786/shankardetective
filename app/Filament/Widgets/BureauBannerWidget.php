<?php

namespace App\Filament\Widgets;

use App\Models\City;
use App\Models\Lead;
use App\Models\Post;
use App\Models\Service;
use Filament\Widgets\Widget;

class BureauBannerWidget extends Widget
{
    protected static bool $isLazy = false;

    protected static ?int $sort = 1;

    protected int | string | array $columnSpan = 'full';

    protected string $view = 'filament.widgets.bureau-banner-widget';

    public function getViewData(): array
    {
        return [
            'totalLeads' => Lead::count(),
            'newLeadsCount' => Lead::where('status', 'new')->count(),
            'servicesCount' => Service::count(),
            'citiesCount' => City::count(),
            'postsCount' => Post::count(),
        ];
    }
}
