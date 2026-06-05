<?php

namespace App\Filament\Resources\Cooperations\Pages;

use App\Filament\Resources\Cooperations\CooperationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCooperations extends ListRecords
{
    protected static string $resource = CooperationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
