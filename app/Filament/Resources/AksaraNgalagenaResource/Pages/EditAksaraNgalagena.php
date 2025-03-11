<?php

namespace App\Filament\Resources\AksaraNgalagenaResource\Pages;

use App\Filament\Resources\AksaraNgalagenaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAksaraNgalagena extends EditRecord
{
    protected static string $resource = AksaraNgalagenaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
