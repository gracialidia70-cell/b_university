<?php

namespace App\Filament\Resources\Admins\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AdminForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->schema([
            TextInput::make('nama')
                ->label('Nama Lengkap')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: Drs. Budi Santoso, M.M.'),

            TextInput::make('nip')
                ->label('NIP')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: 197505102001011001')
                ->helperText('Nomor Induk Pegawai (boleh berupa NIP atau NIPK).'),

            TextInput::make('jabatan')
                ->label('Jabatan')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: Kepala Tata Usaha'),

            FileUpload::make('image')
                ->label('Foto')
                ->image()
                ->directory('admins')
                ->visibility('public')
                ->imagePreviewHeight('150')
                ->maxSize(2048)
                ->required()
                ->helperText('Upload foto formal. Format: JPG, PNG. Maks 2MB.')
                ->columnSpanFull(),
        ])
        ->columns(2);
    }
}
