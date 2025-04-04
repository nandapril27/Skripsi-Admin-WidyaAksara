<?php

namespace App\Filament\Pages;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;

class AdminProfile extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static string $view = 'filament.pages.admin-profile';
    protected static ?string $navigationLabel = 'Profil Saya';
    protected static ?string $slug = 'profil-admin';
    
    public function getAdminData()
    {
        return Auth::user(); // Ambil data admin yang sedang login
    }
}
