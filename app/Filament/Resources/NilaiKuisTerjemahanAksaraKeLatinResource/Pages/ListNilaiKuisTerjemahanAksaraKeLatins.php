<?php

namespace App\Filament\Resources\NilaiKuisTerjemahanAksaraKeLatinResource\Pages;

use App\Filament\Resources\NilaiKuisTerjemahanAksaraKeLatinResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNilaiKuisTerjemahanAksaraKeLatins extends ListRecords
{
    protected static string $resource = NilaiKuisTerjemahanAksaraKeLatinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
