<?php

namespace App\Filament\Resources\AksaraSwaraResource\Pages;

use App\Filament\Resources\AksaraSwaraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAksaraSwara extends EditRecord
{
    protected static string $resource = AksaraSwaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
