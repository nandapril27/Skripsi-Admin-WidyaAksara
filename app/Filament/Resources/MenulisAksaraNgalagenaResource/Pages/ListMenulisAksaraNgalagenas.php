<?php

namespace App\Filament\Resources\MenulisAksaraNgalagenaResource\Pages;

use App\Filament\Resources\MenulisAksaraNgalagenaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMenulisAksaraNgalagenas extends ListRecords
{
    protected static string $resource = MenulisAksaraNgalagenaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
