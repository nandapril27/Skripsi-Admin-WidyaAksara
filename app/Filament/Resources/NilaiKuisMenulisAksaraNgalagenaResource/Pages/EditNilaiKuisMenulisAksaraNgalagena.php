<?php

namespace App\Filament\Resources\NilaiKuisMenulisAksaraNgalagenaResource\Pages;

use App\Filament\Resources\NilaiKuisMenulisAksaraNgalagenaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNilaiKuisMenulisAksaraNgalagena extends EditRecord
{
    protected static string $resource = NilaiKuisMenulisAksaraNgalagenaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
