<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\siswa;

class DashboardStatsOverview extends BaseWidget
{
    public function getTotalSiswa()
    {
        return siswa::count();
    }
}
