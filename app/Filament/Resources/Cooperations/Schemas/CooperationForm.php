<?php

namespace App\Filament\Resources\Cooperations\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CooperationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('image')
                    ->columnSpanFull(),
            ]);
    }
}
