<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class DashboardWelcomeWidget extends Widget
{
    protected static string $view = 'filament.widgets.dashboard-welcome';

    protected function getViewData(): array
    {
        return [
            'logoUniku' => asset('storage/asset_logo_uniku.png'), 
            'logoSmk' => asset('storage/asset_logo_smk3.png'), 
        ];
    }
}
