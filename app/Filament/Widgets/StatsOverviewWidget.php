<?php

namespace App\Filament\Widgets;

use App\Models\CaseStudy;
use App\Models\City;
use App\Models\Lead;
use App\Models\Service;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected static bool $isLazy = false;

    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        $totalLeads = Lead::count();
        $newLeads = Lead::where('status', 'new')->count();
        $services = Service::count();
        $cities = City::count();
        $cases = CaseStudy::count();

        return [
            Stat::make('Client Intake Inquiries', $totalLeads)
                ->description($newLeads > 0 ? "{$newLeads} new awaiting assignment" : 'All inquiries reviewed')
                ->descriptionIcon(Heroicon::OutlinedInboxStack)
                ->color($newLeads > 0 ? 'warning' : 'primary')
                ->chart([3, 6, 9, 14, 18, 24, max(28, $totalLeads)]),

            Stat::make('Active Practice Areas', "{$services} Services")
                ->description('Matrimonial, Corporate & Asset Forensics')
                ->descriptionIcon(Heroicon::OutlinedShieldCheck)
                ->color('primary'),

            Stat::make('Regional Bureaus', "{$cities} Cities")
                ->description('Indore HQ • Pune • Mumbai • Ahmedabad')
                ->descriptionIcon(Heroicon::OutlinedMapPin)
                ->color('success'),

            Stat::make('Verified Proof Dossiers', "{$cases} Studies")
                ->description('Court-admissible forensic precedents')
                ->descriptionIcon(Heroicon::OutlinedClipboardDocumentCheck)
                ->color('warning'),
        ];
    }
}
