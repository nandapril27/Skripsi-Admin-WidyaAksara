<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AksaraSwaraResource\Pages;
use App\Filament\Resources\AksaraSwaraResource\RelationManagers;
use App\Models\AksaraSwara;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class AksaraSwaraResource extends Resource
{
    protected static ?string $model = AksaraSwara::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Aksara Swara';
    protected static ?string $navigationGroup = 'Kelola Materi Aksara';
    
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('nama')
                ->required()
                ->label('Nama Aksara'),

            FileUpload::make('gambar_aksara')
                ->image()
                ->directory('aksara')
                ->required()
                ->label('Gambar Aksara'),

            FileUpload::make('gambar_pola')
                ->image()
                ->directory('pola')
                ->required()
                ->label('Gambar Pola'),
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('nama')
                ->sortable()
                ->searchable()
                ->label('Nama Aksara'),

            ImageColumn::make('gambar_aksara')
                ->label('Gambar Aksara'),

            ImageColumn::make('gambar_pola')
                ->label('Gambar Pola'),
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
            'index' => Pages\ListAksaraSwaras::route('/'),
            'create' => Pages\CreateAksaraSwara::route('/create'),
            'edit' => Pages\EditAksaraSwara::route('/{record}/edit'),
        ];
    }
}
