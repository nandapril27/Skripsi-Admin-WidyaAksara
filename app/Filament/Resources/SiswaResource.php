<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use App\Models\Siswa;
use App\Filament\Resources\SiswaResource\Pages;

class SiswaResource extends Resource
{
    protected static ?string $model = Siswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Kelola Data Siswa';
    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('NIS')
                    ->maxLength(12)
                    ->numeric() // Pastikan hanya boleh angka
                    ->extraAttributes(['maxlength' => 12]) // Laravel Validation Rule untuk batas karakter angka
                    ->placeholder('Masukkan NIS (12 digit)')
                    ->required(),
                TextInput::make('NAMA')
                   // ->rule('regex:/^[^\d]+$/') // Tidak boleh angka
                    ->required()
                    ->minLength(3)
                    ->maxLength(50)
                    ->placeholder('Masukkan nama lengkap'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('NIS')
                    ->label('NIS')
                    ->searchable(),
                TextColumn::make('NAMA')
                    ->label('Nama')
                    ->searchable(),
            ])
            ->filters([
                // Tambahkan filter di sini jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Tambahkan relation managers jika diperlukan
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiswas::route('/'),
            'create' => Pages\CreateSiswa::route('/create'),
            'edit' => Pages\EditSiswa::route('/{record}/edit'),
        ];
    }
}
