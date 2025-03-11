<?php

namespace App\Filament\Resources\NilaiKuisTerjemahanLatinKeAksaraResource\Pages;

use App\Filament\Resources\NilaiKuisTerjemahanLatinKeAksaraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNilaiKuisTerjemahanLatinKeAksara extends EditRecord
{
    protected static string $resource = NilaiKuisTerjemahanLatinKeAksaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
