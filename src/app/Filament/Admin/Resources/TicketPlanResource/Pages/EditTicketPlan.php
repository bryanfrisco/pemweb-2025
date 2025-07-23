<?php

namespace App\Filament\Admin\Resources\TicketPlanResource\Pages;

use App\Filament\Admin\Resources\TicketPlanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTicketPlan extends EditRecord
{
    protected static string $resource = TicketPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
