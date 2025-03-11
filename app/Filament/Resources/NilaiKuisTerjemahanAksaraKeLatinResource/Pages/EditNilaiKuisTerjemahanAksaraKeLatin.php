<?php

namespace App\Filament\Resources\NilaiKuisTerjemahanAksaraKeLatinResource\Pages;

use App\Filament\Resources\NilaiKuisTerjemahanAksaraKeLatinResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNilaiKuisTerjemahanAksaraKeLatin extends EditRecord
{
    protected static string $resource = NilaiKuisTerjemahanAksaraKeLatinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
