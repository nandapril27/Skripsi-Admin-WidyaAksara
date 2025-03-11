<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KuisTerjemahanAksaraKeLatinResource\Pages;
use App\Filament\Resources\KuisTerjemahanAksaraKeLatinResource\RelationManagers;
use App\Models\KuisTerjemahanAksaraKeLatin;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KuisTerjemahanAksaraKeLatinResource extends Resource
{
    protected static ?string $model = KuisTerjemahanAksaraKeLatin::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Aksara ke Latin';
    protected static ?string $navigationGroup = 'Kelola Kuis Terjemahan';
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\FileUpload::make('soal') // Upload image for soal
                ->image()
                ->required()
                ->label('Soal'),
            Forms\Components\TextInput::make('A')
                ->required()
                ->label('Pilihan A'),
            Forms\Components\TextInput::make('B')
                ->required()
                ->label('Pilihan B'),
            Forms\Components\TextInput::make('C')
                ->required()
                ->label('Pilihan C'),
            Forms\Components\TextInput::make('D')
                ->required()
                ->label('Pilihan D'),
            Forms\Components\TextInput::make('jawaban')
                ->required()
                ->label('Jawaban yang Benar'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('soal')
                ->label('Soal'),
                Tables\Columns\TextColumn::make('A')->label('Pilihan A'),
                Tables\Columns\TextColumn::make('B')->label('Pilihan B'),
                Tables\Columns\TextColumn::make('C')->label('Pilihan C'),
                Tables\Columns\TextColumn::make('D')->label('Pilihan D'),
                Tables\Columns\TextColumn::make('jawaban')->label('Jawaban yang Benar'),
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
            'index' => Pages\ListKuisTerjemahanAksaraKeLatins::route('/'),
            'create' => Pages\CreateKuisTerjemahanAksaraKeLatin::route('/create'),
            'edit' => Pages\EditKuisTerjemahanAksaraKeLatin::route('/{record}/edit'),
        ];
    }
}
