<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Fasilitas;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FasilitasResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FasilitasResource\RelationManagers;
use App\Filament\Resources\FasilitasResource\Pages\EditFasilitas;
use App\Filament\Resources\FasilitasResource\Pages\ListFasilitas;
use App\Filament\Resources\FasilitasResource\Pages\CreateFasilitas;

class FasilitasResource extends Resource
{
    protected static ?string $navigationIcon = 'heroicon-o-radio';
    protected static ?string $model = Fasilitas::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('id_fasilitas')->required(),
                TextInput::make('nama_fasilitas')->required(),
                TextInput::make('luas')->numeric()->required(),
                TextInput::make('kapasitas')->numeric()->required(),
                Textarea::make('deskripsi')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_fasilitas')->sortable(),
                TextColumn::make('nama_fasilitas')->sortable()->searchable(),
                TextColumn::make('luas')->sortable(),
                TextColumn::make('kapasitas')->sortable(),
            ])
            ->filters([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFasilitas::route('/'),
            'create' => Pages\CreateFasilitas::route('/create'),
            'edit' => Pages\EditFasilitas::route('/{record}/edit'),
        ];
    }
}