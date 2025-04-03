<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NilaiKuisTerjemahanLatinKeAksaraResource\Pages;
use App\Filament\Resources\NilaiKuisTerjemahanLatinKeAksaraResource\RelationManagers;
use App\Models\NilaiKuisTerjemahanLatinKeAksara;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NilaiKuisTerjemahanLatinKeAksaraResource extends Resource
{
    protected static ?string $model = NilaiKuisTerjemahanLatinKeAksara::class;
    protected static ?string $navigationLabel = 'Nilai Kuis Terjemahan Latin Ke Aksara';
    protected static ?string $navigationGroup = 'Nilai';
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListNilaiKuisTerjemahanLatinKeAksaras::route('/'),
            'create' => Pages\CreateNilaiKuisTerjemahanLatinKeAksara::route('/create'),
            'edit' => Pages\EditNilaiKuisTerjemahanLatinKeAksara::route('/{record}/edit'),
        ];
    }
}
