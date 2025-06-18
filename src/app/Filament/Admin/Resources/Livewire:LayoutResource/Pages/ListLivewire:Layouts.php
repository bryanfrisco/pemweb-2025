<?php

namespace App\Filament\Admin\Resources\Livewire:LayoutResource\Pages;

use App\Filament\Admin\Resources\Livewire:LayoutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLivewire:Layouts extends ListRecords
{
    protected static string $resource = Livewire:LayoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
