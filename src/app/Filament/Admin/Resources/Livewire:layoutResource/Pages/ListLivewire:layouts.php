<?php

namespace App\Filament\Admin\Resources\Livewire:layoutResource\Pages;

use App\Filament\Admin\Resources\Livewire:layoutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLivewire:layouts extends ListRecords
{
    protected static string $resource = Livewire:layoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
