<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KuisTerjemahanLatinKeAksaraResource\Pages;
use App\Filament\Resources\KuisTerjemahanLatinKeAksaraResource\RelationManagers;
use App\Models\KuisTerjemahanLatinKeAksara;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;



class KuisTerjemahanLatinKeAksaraResource extends Resource
{
    protected static ?string $model = KuisTerjemahanLatinKeAksara::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Latin ke Aksara';
    protected static ?string $navigationGroup = 'Kelola Kuis Terjemahan';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('soal')
                    ->required() // Wajib diisi
                    ->label('Soal'),
                FileUpload::make('A')
                    ->image()
                    ->label('Pilihan A'),
                FileUpload::make('B')
                    ->image()
                    ->label('Pilihan B'),
                FileUpload::make('C')
                    ->image()
                    ->label('Pilihan C'),
                FileUpload::make('D')
                    ->image()
                    ->label('Pilihan D'),
                TextInput::make('jawaban')
                    ->required()
                    ->label('Jawaban yang Benar'),
            ]);
    }    

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('soal')->label('Soal'),
            Tables\Columns\ImageColumn::make('A')->label('Pilihan A'),
            Tables\Columns\ImageColumn::make('B')->label('Pilihan B'),
            Tables\Columns\ImageColumn::make('C')->label('Pilihan C'),
            Tables\Columns\ImageColumn::make('D')->label('Pilihan D'),
            Tables\Columns\TextColumn::make('jawaban')->label('Jawaban'),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListKuisTerjemahanLatinKeAksaras::route('/'),
            'create' => Pages\CreateKuisTerjemahanLatinKeAksara::route('/create'),
            'edit' => Pages\EditKuisTerjemahanLatinKeAksara::route('/{record}/edit'),
        ];
    }
}
