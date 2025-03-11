<?php

namespace App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena1Resource\Pages;

use App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNilaiKuisMenulisAksaraNgalagena1s extends ListRecords
{
    protected static string $resource = NilaiKuisMenulisAksaraNgalagena1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
