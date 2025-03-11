<?php

namespace App\Filament\Resources\KuisTerjemahanLatinKeAksaraResource\Pages;

use App\Filament\Resources\KuisTerjemahanLatinKeAksaraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKuisTerjemahanLatinKeAksaras extends ListRecords
{
    protected static string $resource = KuisTerjemahanLatinKeAksaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
