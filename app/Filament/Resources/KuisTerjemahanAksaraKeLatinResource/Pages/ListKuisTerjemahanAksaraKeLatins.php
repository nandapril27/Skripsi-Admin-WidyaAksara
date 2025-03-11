<?php

namespace App\Filament\Resources\KuisTerjemahanAksaraKeLatinResource\Pages;

use App\Filament\Resources\KuisTerjemahanAksaraKeLatinResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKuisTerjemahanAksaraKeLatins extends ListRecords
{
    protected static string $resource = KuisTerjemahanAksaraKeLatinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
