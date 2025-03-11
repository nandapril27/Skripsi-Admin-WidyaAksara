<?php

namespace App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena3Resource\Pages;

use App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNilaiKuisMenulisAksaraNgalagena3s extends ListRecords
{
    protected static string $resource = NilaiKuisMenulisAksaraNgalagena3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
