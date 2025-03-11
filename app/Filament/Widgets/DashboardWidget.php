<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\siswa;

class DashboardWidget extends BaseWidget
{
    protected static string $view = 'filament.widgets.dashboard-widget';

    protected function getViewData(): array
    {
        return [
            'logoUniku' => asset('storage/asset_logo_uniku.png'), 
            'logoSmk' => asset('storage/asset_logo_smk3.png'), 
            'totalSiswa' => siswa::count(), // Mengambil jumlah total siswa dari database
        ];
    }
}
