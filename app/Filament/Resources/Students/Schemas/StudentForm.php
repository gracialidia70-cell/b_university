<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('namalengkap')
                    ->required(),
                TextInput::make('namapanggilan')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('nomor_hp')
                    ->required(),
                TextInput::make('jalur')
                    ->required(),
                Textarea::make('image')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('programstudi_1')
                    ->required(),
                TextInput::make('programstudi_2')
                    ->required(),
            ]);
    }
}
