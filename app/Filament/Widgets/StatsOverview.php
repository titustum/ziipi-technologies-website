<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\Service;
use App\Models\CaseStudy;
use App\Models\TeamMember;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make('Case Studies', CaseStudy::count())
                ->description('Our project highlights')
                ->color('info')
                ->icon(Heroicon::OutlinedBuildingOffice)
                ->chart($this->getWeeklyTrend(CaseStudy::class, 'created_at'))
                ->url(route('filament.admin.resources.case-studies.index')),

            Stat::make('Services', Service::count())
                ->description('Software Dev, Consultacy, AI programs')
                ->color('success')
                ->icon(Heroicon::OutlinedBookOpen)
                ->chart($this->getWeeklyTrend(Service::class, 'created_at'))
                ->url(route('filament.admin.resources.services.index')),
 

            Stat::make('Contacts', Contact::count())
                ->description('Submitted contacts forms')
                ->color('warning')
                ->icon(Heroicon::OutlinedDocumentText)
                ->chart($this->getWeeklyTrend(Contact::class, 'created_at'))
                ->url(route('filament.admin.resources.contacts.index')),
        ];
    }

    /**
     * Returns 7-day trend data for a given model.
     */
    protected function getWeeklyTrend(string $model, string $dateColumn = 'created_at'): array
    {
        $start = now()->subDays(6)->startOfDay();

        $records = $model::query()
            ->whereDate($dateColumn, '>=', $start)
            ->get()
            ->groupBy(fn ($item) => \Illuminate\Support\Carbon::parse($item->$dateColumn)->format('Y-m-d'));

        $trend = [];

        for ($i = 0; $i < 7; $i++) {
            $day = now()->subDays(6 - $i)->format('Y-m-d');
            $trend[] = $records->get($day, collect())->count(); // 👈 safer access
        }

        return $trend;
    }
}
