<?php

namespace App\Filament\Resources\AksaraNgalagenaResource\Pages;

use App\Filament\Resources\AksaraNgalagenaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAksaraNgalagenas extends ListRecords
{
    protected static string $resource = AksaraNgalagenaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
