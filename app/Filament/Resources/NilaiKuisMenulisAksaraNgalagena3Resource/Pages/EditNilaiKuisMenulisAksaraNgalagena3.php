<?php

namespace App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena3Resource\Pages;

use App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNilaiKuisMenulisAksaraNgalagena3 extends EditRecord
{
    protected static string $resource = NilaiKuisMenulisAksaraNgalagena3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
