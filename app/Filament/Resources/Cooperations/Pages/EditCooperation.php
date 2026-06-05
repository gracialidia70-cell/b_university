<?php

namespace App\Filament\Resources\Cooperations\Pages;

use App\Filament\Resources\Cooperations\CooperationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCooperation extends EditRecord
{
    protected static string $resource = CooperationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
