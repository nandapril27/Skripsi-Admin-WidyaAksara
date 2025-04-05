<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenulisAksaraNgalagenaResource\Pages;
use App\Filament\Resources\MenulisAksaraNgalagenaResource\RelationManagers;
use App\Models\MenulisAksaraNgalagena;
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

class MenulisAksaraNgalagenaResource extends Resource
{
    protected static ?string $model = MenulisAksaraNgalagena::class;
    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $navigationLabel = 'Menulis Aksara Ngalagena';
    protected static ?string $navigationGroup = 'Kelola Soal Kuis';

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
            'index' => Pages\ListMenulisAksaraNgalagenas::route('/'),
            'create' => Pages\CreateMenulisAksaraNgalagena::route('/create'),
            'edit' => Pages\EditMenulisAksaraNgalagena::route('/{record}/edit'),
        ];
    }
}
