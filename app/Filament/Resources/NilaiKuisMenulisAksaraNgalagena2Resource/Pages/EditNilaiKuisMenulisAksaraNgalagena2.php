<?php

namespace App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena2Resource\Pages;

use App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNilaiKuisMenulisAksaraNgalagena2 extends EditRecord
{
    protected static string $resource = NilaiKuisMenulisAksaraNgalagena2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
