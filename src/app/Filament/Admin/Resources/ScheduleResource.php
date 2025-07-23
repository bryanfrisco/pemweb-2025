<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ScheduleResource\Pages;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ColorPicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationLabel = 'Schedules';
    protected static ?string $pluralModelLabel = 'Event Schedules';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('day')
                    ->label('Day (e.g. Day 1)')
                    ->required()
                    ->maxLength(50),

                TextInput::make('date')
                    ->label('Date (e.g. Wednesday)')
                    ->required()
                    ->maxLength(50),

                TextInput::make('event_name')
                    ->label('Event Name')
                    ->required(),

                TextInput::make('time')
                    ->placeholder('e.g. 5:00 - 7:00 PM')
                    ->required(),

                TextInput::make('performer')
                    ->required(),

                TextInput::make('genre')
                    ->nullable(),

                ColorPicker::make('background_color')
                    ->label('Background Color')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('day')->sortable(),
                TextColumn::make('date'),
                TextColumn::make('event_name')->label('Event'),
                TextColumn::make('time'),
                TextColumn::make('performer'),
                TextColumn::make('genre'),
            ])
            ->filters([
                // Optional filters here
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
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedule::route('/create'),
            'edit' => Pages\EditSchedule::route('/{record}/edit'),
        ];
    }
}
