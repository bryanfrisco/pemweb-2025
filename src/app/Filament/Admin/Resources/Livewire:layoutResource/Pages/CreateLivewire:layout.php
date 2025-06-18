<?php

namespace App\Filament\Admin\Resources\Livewire:layoutResource\Pages;

use App\Filament\Admin\Resources\Livewire:layoutResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLivewire:layout extends CreateRecord
{
    protected static string $resource = Livewire:layoutResource::class;
}
