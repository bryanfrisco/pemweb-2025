<?php

namespace App\Filament\Admin\Resources\Livewire:LayoutResource\Pages;

use App\Filament\Admin\Resources\Livewire:LayoutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLivewire:Layout extends EditRecord
{
    protected static string $resource = Livewire:LayoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
