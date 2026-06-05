<?php

namespace App\Filament\Resources\Aboutmes\Pages;

use App\Filament\Resources\Aboutmes\AboutmeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutme extends EditRecord
{
    protected static string $resource = AboutmeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
