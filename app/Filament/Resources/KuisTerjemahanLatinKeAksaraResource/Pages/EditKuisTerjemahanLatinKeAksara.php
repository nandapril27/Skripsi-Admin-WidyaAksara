<?php

namespace App\Filament\Resources\KuisTerjemahanLatinKeAksaraResource\Pages;

use App\Filament\Resources\KuisTerjemahanLatinKeAksaraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKuisTerjemahanLatinKeAksara extends EditRecord
{
    protected static string $resource = KuisTerjemahanLatinKeAksaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
