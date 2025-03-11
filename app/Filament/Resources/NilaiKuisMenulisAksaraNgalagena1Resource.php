<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena1Resource\Pages;
use App\Filament\Resources\NilaiKuisMenulisAksaraNgalagena1Resource\RelationManagers;
use App\Models\NilaiKuisMenulisAksaraNgalagena1;
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

class NilaiKuisMenulisAksaraNgalagena1Resource extends Resource
{
    protected static ?string $model = NilaiKuisMenulisAksaraNgalagena1::class;
    protected static ?string $navigationLabel = 'Aksara Ngalagena 1';
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
            FileUpload::make('aksara_ka')
                ->label('Aksara KA')
                ->image()
                ->required(),
            FileUpload::make('aksara_ga')
                ->label('Aksara GA')
                ->image()
                ->required(),
            FileUpload::make('aksara_nga')
                ->label('Aksara NGA')
                ->image()
                ->required(),
            FileUpload::make('aksara_ca')
                ->label('Aksara CA')
                ->image()
                ->required(),
            FileUpload::make('aksara_ja')
                ->label('Aksara JA')
                ->image()
                ->required(),
            FileUpload::make('aksara_nya')
                ->label('Aksara NYA')
                ->image()
                ->required(),
            FileUpload::make('aksara_ta')
                ->label('Aksara TA')
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
            ImageColumn::make('aksara_ka')
                ->label('Aksara KA'),
            ImageColumn::make('aksara_ga')
                ->label('Aksara GA'),
            ImageColumn::make('aksara_nga')
                ->label('Aksara NGA'),
            ImageColumn::make('aksara_ca')
                ->label('Aksara CA'),
            ImageColumn::make('aksara_ja')
                ->label('Aksara JA'),
            ImageColumn::make('aksara_nya')
                ->label('Aksara NYA'),
            ImageColumn::make('aksara_ta')
                ->label('Aksara TA'),
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
            'index' => Pages\ListNilaiKuisMenulisAksaraNgalagena1s::route('/'),
            'create' => Pages\CreateNilaiKuisMenulisAksaraNgalagena1::route('/create'),
            'edit' => Pages\EditNilaiKuisMenulisAksaraNgalagena1::route('/{record}/edit'),
        ];
    }
}
