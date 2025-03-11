<?php

namespace App\Filament\Resources\NilaiKuisMenulisAksaraSwaraResource\Pages;

use App\Filament\Resources\NilaiKuisMenulisAksaraSwaraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNilaiKuisMenulisAksaraSwaras extends ListRecords
{
    protected static string $resource = NilaiKuisMenulisAksaraSwaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
