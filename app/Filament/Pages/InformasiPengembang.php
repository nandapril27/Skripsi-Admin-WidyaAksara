<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class InformasiPengembang extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationGroup = 'Informasi';
    protected static ?string $navigationLabel = 'Informasi Pengembang';
    protected static string $view = 'filament.pages.informasi-pengembang';
}
