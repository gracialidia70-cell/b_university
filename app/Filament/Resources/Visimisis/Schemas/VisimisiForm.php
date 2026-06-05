<?php

namespace App\Filament\Resources\Visimisis\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class VisimisiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('visi')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('misi')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('image')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
