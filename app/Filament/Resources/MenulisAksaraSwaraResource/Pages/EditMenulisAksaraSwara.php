<?php

namespace App\Filament\Resources\MenulisAksaraSwaraResource\Pages;

use App\Filament\Resources\MenulisAksaraSwaraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMenulisAksaraSwara extends EditRecord
{
    protected static string $resource = MenulisAksaraSwaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
