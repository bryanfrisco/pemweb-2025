<?php

namespace App\Filament\Admin\Resources\Livewire:LayoutResource\Pages;

use App\Filament\Admin\Resources\Livewire:LayoutResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLivewire:Layout extends CreateRecord
{
    protected static string $resource = Livewire:LayoutResource::class;
}
