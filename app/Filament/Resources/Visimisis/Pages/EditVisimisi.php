<?php

namespace App\Filament\Resources\Visimisis\Pages;

use App\Filament\Resources\Visimisis\VisimisiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditVisimisi extends EditRecord
{
    protected static string $resource = VisimisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
