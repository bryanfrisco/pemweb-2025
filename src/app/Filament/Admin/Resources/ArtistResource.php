<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ArtistResource\Pages;
use App\Models\Artist;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ArtistResource extends Resource
{
    protected static ?string $model = Artist::class;

    protected static ?string $navigationIcon = 'heroicon-o-musical-note'; // opsional, agar lebih relevan
    protected static ?string $navigationLabel = 'Artists';
    protected static ?string $pluralModelLabel = 'Artists';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\DatePicker::make('birthdate')
                    ->required(),

                Forms\Components\TextInput::make('music')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('youtube')
                    ->label('YouTube Channel')
                    ->maxLength(255),

                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('artists') // akan disimpan di storage/app/public/artists
                    ->label('Artist Image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->circular(),

                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('birthdate')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('music'),

                Tables\Columns\TextColumn::make('youtube')
                    ->label('YouTube'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArtists::route('/'),
            'create' => Pages\CreateArtist::route('/create'),
            'edit' => Pages\EditArtist::route('/{record}/edit'),
        ];
    }
}
