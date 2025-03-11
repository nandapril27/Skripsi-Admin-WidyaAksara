<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena2Resource\Pages;
use App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena2Resource\RelationManagers;
use App\Models\NilaiKuisMenulisAksaraNgalagena2;
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

class NilaiKuisMenulisAksaraNgalagena2Resource extends Resource
{
    protected static ?string $model = NilaiKuisMenulisAksaraNgalagena2::class;
    protected static ?string $navigationLabel = 'Aksara Ngalagena 2';
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
            FileUpload::make('aksara_da')
                ->label('Aksara DA')
                ->image()
                ->required(),
            FileUpload::make('aksara_na')
                ->label('Aksara NA')
                ->image()
                ->required(),
            FileUpload::make('aksara_pa')
                ->label('Aksara PA')
                ->image()
                ->required(),
            FileUpload::make('aksara_ba')
                ->label('Aksara BA')
                ->image()
                ->required(),
            FileUpload::make('aksara_ma')
                ->label('Aksara MA')
                ->image()
                ->required(),
            FileUpload::make('aksara_ya')
                ->label('Aksara YA')
                ->image()
                ->required(),
            FileUpload::make('aksara_ra')
                ->label('Aksara RA')
                ->image()
                ->required(),
            FileUpload::make('aksara_la')
                ->label('Aksara LA')
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
            ImageColumn::make('aksara_da')
                ->label('Aksara DA'),
            ImageColumn::make('aksara_na')
                ->label('Aksara NA'),
            ImageColumn::make('aksara_pa')
                ->label('Aksara PA'),
            ImageColumn::make('aksara_ba')
                ->label('Aksara BA'),
            ImageColumn::make('aksara_ma')
                ->label('Aksara MA'),
            ImageColumn::make('aksara_ya')
                ->label('Aksara YA'),
            ImageColumn::make('aksara_ra')
                ->label('Aksara RA'),
            ImageColumn::make('aksara_la')
                ->label('Aksara LA'),
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
            'index' => Pages\ListNilaiKuisMenulisAksaraNgalagena2s::route('/'),
            'create' => Pages\CreateNilaiKuisMenulisAksaraNgalagena2::route('/create'),
            'edit' => Pages\EditNilaiKuisMenulisAksaraNgalagena2::route('/{record}/edit'),
        ];
    }
}
