<?php

namespace App\Filament\Resources\Rektors\Pages;

use App\Filament\Resources\Rektors\RektorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRektors extends ListRecords
{
    protected static string $resource = RektorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
