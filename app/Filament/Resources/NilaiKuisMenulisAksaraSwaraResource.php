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
    protected static ?string $navigationLabel = 'Nilai Kuis Menulis Aksara Swara';
    protected static ?string $navigationGroup = 'History Nilai';
    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Select::make('siswa_id')
                ->label('Siswa')
                ->relationship('siswa', 'NAMA')
                ->required()
                ->searchable(),

            Forms\Components\TextInput::make('nilai')
                ->label('Nilai')
                ->numeric()
                ->required(),

            Forms\Components\DatePicker::make('tanggal')
                ->label('Tanggal')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('siswa.NIS')
                ->label('NIS'),

            Tables\Columns\TextColumn::make('siswa.NAMA')
                ->label('Nama Siswa'),

            Tables\Columns\TextColumn::make('nilai')
                ->label('Nilai'),

            Tables\Columns\TextColumn::make('tanggal')
                ->label('Tanggal'),
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
