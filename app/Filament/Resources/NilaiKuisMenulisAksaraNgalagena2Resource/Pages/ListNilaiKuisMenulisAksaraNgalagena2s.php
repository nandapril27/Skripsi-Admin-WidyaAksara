<?php

namespace App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena2Resource\Pages;

use App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNilaiKuisMenulisAksaraNgalagena2s extends ListRecords
{
    protected static string $resource = NilaiKuisMenulisAksaraNgalagena2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
