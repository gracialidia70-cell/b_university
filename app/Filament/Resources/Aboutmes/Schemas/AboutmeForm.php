<?php

namespace App\Filament\Resources\Aboutmes\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AboutmeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('image')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
