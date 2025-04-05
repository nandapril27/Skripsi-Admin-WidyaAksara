<?php

namespace App\Filament\Resources\MenulisAksaraNgalagenaResource\Pages;

use App\Filament\Resources\MenulisAksaraNgalagenaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMenulisAksaraNgalagena extends EditRecord
{
    protected static string $resource = MenulisAksaraNgalagenaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
