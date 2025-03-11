<?php

namespace App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena1Resource\Pages;

use App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNilaiKuisMenulisAksaraNgalagena1 extends EditRecord
{
    protected static string $resource = NilaiKuisMenulisAksaraNgalagena1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
