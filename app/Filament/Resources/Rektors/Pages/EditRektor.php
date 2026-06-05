<?php

namespace App\Filament\Resources\Rektors\Pages;

use App\Filament\Resources\Rektors\RektorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRektor extends EditRecord
{
    protected static string $resource = RektorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
