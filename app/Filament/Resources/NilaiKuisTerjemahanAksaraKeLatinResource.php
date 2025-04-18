<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NilaiKuisTerjemahanAksaraKeLatinResource\Pages;
use App\Filament\Resources\NilaiKuisTerjemahanAksaraKeLatinResource\RelationManagers;
use App\Models\NilaiKuisTerjemahanAksaraKeLatin;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NilaiKuisTerjemahanAksaraKeLatinResource extends Resource
{
    protected static ?string $model = NilaiKuisTerjemahanAksaraKeLatin::class;
    protected static ?string $navigationLabel = 'Nilai Kuis Terjemahan Aksara ke Latin';
    protected static ?string $navigationGroup = 'History Nilai';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Select::make('siswa_id')
                ->label('Siswa')
                ->relationship('siswa', 'NAMA') // Ambil nama siswa untuk ditampilkan
                ->required()
                ->searchable(),

            Forms\Components\TextInput::make('Nilai')
                ->label('Nilai')
                ->numeric()
                ->required(),

            Forms\Components\DatePicker::make('Tanggal')
                ->label('Tanggal')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('siswa.NIS') // Ambil NIS dari relasi
                ->label('NIS'),

            Tables\Columns\TextColumn::make('siswa.NAMA') // Ambil Nama dari relasi
                ->label('NAMA'),

            Tables\Columns\TextColumn::make('Nilai')
                ->label('Nilai'),

            Tables\Columns\TextColumn::make('Tanggal')
                ->label('Tanggal'),
        ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                //  Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNilaiKuisTerjemahanAksaraKeLatins::route('/'),
            'create' => Pages\CreateNilaiKuisTerjemahanAksaraKeLatin::route('/create'),
            'edit' => Pages\EditNilaiKuisTerjemahanAksaraKeLatin::route('/{record}/edit'),
        ];
    }
    
    public static function canCreate(): bool
{
    return false;
}

}
