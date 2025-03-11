<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena3Resource\Pages;
use App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena3Resource\RelationManagers;
use App\Models\NilaiKuisMenulisAksaraNgalagena3;
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

class NilaiKuisMenulisAksaraNgalagena3Resource extends Resource
{
    protected static ?string $model = NilaiKuisMenulisAksaraNgalagena3::class;
    protected static ?string $navigationLabel = 'Aksara Ngalagena 3';
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
            FileUpload::make('aksara_wa')
                ->label('Aksara WA')
                ->image()
                ->required(),
            FileUpload::make('aksara_sa')
                ->label('Aksara SA')
                ->image()
                ->required(),
            FileUpload::make('aksara_ha')
                ->label('Aksara HA')
                ->image()
                ->required(),
            FileUpload::make('aksara_fa')
                ->label('Aksara FA')
                ->image()
                ->required(),
            FileUpload::make('aksara_va')
                ->label('Aksara VA')
                ->image()
                ->required(),
            FileUpload::make('aksara_qa')
                ->label('Aksara QA')
                ->image()
                ->required(),
            FileUpload::make('aksara_xa')
                ->label('Aksara XA')
                ->image()
                ->required(),
            FileUpload::make('aksara_za')
                ->label('Aksara ZA')
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
            ImageColumn::make('aksara_wa')
                ->label('Aksara WA'),
            ImageColumn::make('aksara_sa')
                ->label('Aksara SA'),
            ImageColumn::make('aksara_ha')
                ->label('Aksara HA'),
            ImageColumn::make('aksara_fa')
                ->label('Aksara FA'),
            ImageColumn::make('aksara_va')
                ->label('Aksara VA'),
            ImageColumn::make('aksara_qa')
                ->label('Aksara QA'),
            ImageColumn::make('aksara_xa')
                ->label('Aksara XA'),
            ImageColumn::make('aksara_za')
                ->label('Aksara ZA'),
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
            'index' => Pages\ListNilaiKuisMenulisAksaraNgalagena3s::route('/'),
            'create' => Pages\CreateNilaiKuisMenulisAksaraNgalagena3::route('/create'),
            'edit' => Pages\EditNilaiKuisMenulisAksaraNgalagena3::route('/{record}/edit'),
        ];
    }
}
