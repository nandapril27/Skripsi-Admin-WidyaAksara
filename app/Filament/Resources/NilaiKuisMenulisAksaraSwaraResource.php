<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NilaiKuisMenulisAksaraSwaraResource\Pages;
use App\Filament\Resources\NilaiKuisMenulisAksaraSwaraResource\RelationManagers;
use App\Models\NilaiKuisMenulisAksaraSwara;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class NilaiKuisMenulisAksaraSwaraResource extends Resource
{
    protected static ?string $model = NilaiKuisMenulisAksaraSwara::class;
    protected static ?string $navigationLabel = 'Aksara Swara';
    protected static ?string $navigationGroup = 'Kelola Nilai Kuis Menulis';
    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Select::make('siswa_id')
                        ->label('Nama Siswa')
                        ->relationship('siswa', 'NAMA')
                        ->searchable()
                        ->required(),
                    DatePicker::make('tanggal')
                        ->label('Tanggal')
                        ->required(),
                    FileUpload::make('aksara_a')
                        ->label('Aksara A')
                        ->disk('public')
                        ->image()
                        ->required(),
                    FileUpload::make('aksara_é')
                        ->label('Aksara É')
                        ->disk('public')
                        ->image()
                        ->required(),
                    FileUpload::make('aksara_i')
                        ->label('Aksara I')
                        ->disk('public')
                        ->image()
                        ->required(),
                    FileUpload::make('aksara_o')
                        ->label('Aksara O')
                        ->disk('public')
                        ->image()
                        ->required(),
                    FileUpload::make('aksara_u')
                        ->label('Aksara U')
                        ->disk('public')
                        ->image()
                        ->required(),
                    FileUpload::make('aksara_e')
                        ->label('Aksara E')
                        ->disk('public')
                        ->image()
                        ->required(),
                    FileUpload::make('aksara_eu')
                        ->label('Aksara Eu')
                        ->disk('public')
                        ->image()
                        ->required(),
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('siswa.NAMA')
                ->label('Nama Siswa')
                ->sortable()
                ->searchable(),
            TextColumn::make('siswa.NIS')
                ->label('NIS'),
            TextColumn::make('tanggal')
                ->label('Tanggal')
                ->sortable(),
            ImageColumn::make('aksara_a')
                ->label('Aksara A')
                ->disk('public'),
            ImageColumn::make('aksara_é')
                ->label('Aksara É')
                ->disk('public'),
            ImageColumn::make('aksara_i')
                ->label('Aksara I')
                ->disk('public'),
            ImageColumn::make('aksara_o')
                ->label('Aksara O')
                ->disk('public'),
            ImageColumn::make('aksara_u')
                ->label('Aksara U')
                ->disk('public'),
            ImageColumn::make('aksara_e')
                ->label('Aksara E')
                ->disk('public'),
            ImageColumn::make('aksara_eu')
                ->label('Aksara Eu')
                ->disk('public'),
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
            'index' => Pages\ListNilaiKuisMenulisAksaraSwaras::route('/'),
            'create' => Pages\CreateNilaiKuisMenulisAksaraSwara::route('/create'),
            'edit' => Pages\EditNilaiKuisMenulisAksaraSwara::route('/{record}/edit'),
        ];
    }
}
