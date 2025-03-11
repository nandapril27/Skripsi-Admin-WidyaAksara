<?php

namespace App\Filament\Resources\NilaiKuisMenulisAksaraSwaraResource\Pages;

use App\Filament\Resources\NilaiKuisMenulisAksaraSwaraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNilaiKuisMenulisAksaraSwara extends EditRecord
{
    protected static string $resource = NilaiKuisMenulisAksaraSwaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
