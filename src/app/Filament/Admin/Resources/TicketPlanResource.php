<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TicketPlanResource\Pages;
use App\Models\TicketPlan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class TicketPlanResource extends Resource
{
    protected static ?string $model = TicketPlan::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationLabel = 'Ticket Plans';
    protected static ?string $pluralModelLabel = 'Ticket Plans';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('price')
                    ->numeric()
                    ->required()
                    ->prefix('$'),

                TextInput::make('tagline')
                    ->maxLength(255)
                    ->label('Promo Text (optional)'),

                Textarea::make('description')
                    ->label('Short Description')
                    ->rows(3),

                Repeater::make('features')
                    ->label('Plan Features')
                    ->schema([
                        TextInput::make('value')->label('Feature'),
                    ])
                    ->defaultItems(3)
                    ->addActionLabel('Add Feature'),

                TextInput::make('button_text')
                    ->default('Buy Ticket'),

                TextInput::make('button_link')
                    ->default('#'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('price')->money('USD'),
                TextColumn::make('tagline')->limit(30),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTicketPlans::route('/'),
            'create' => Pages\CreateTicketPlan::route('/create'),
            'edit' => Pages\EditTicketPlan::route('/{record}/edit'),
        ];
    }
}
