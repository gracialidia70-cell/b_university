<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
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
                ->label('Nama Lengkap')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: Muhammad Rizky Pratama'),

            TextInput::make('namapanggilan')
                ->label('Nama Panggilan')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: Rizky'),

            TextInput::make('email')
                ->label('Email')
                ->email()
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: rizky.pratama@gmail.com'),

            TextInput::make('nomor_hp')
                ->label('Nomor HP')
                ->required()
                ->maxLength(15)
                ->placeholder('contoh: 081234567890')
                ->helperText('Maksimal 15 digit, format 08xxxxxxxxxx.'),

            Select::make('jalur')
                ->label('Jalur Masuk')
                ->options([
                    'Reguler'  => 'Reguler',
                    'Beasiswa' => 'Beasiswa',
                    'Transfer' => 'Transfer',
                ])
                ->required()
                ->placeholder('Pilih jalur masuk'),

            TextInput::make('programstudi_1')
                ->label('Pilihan Program Studi 1')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: D3 Teknik Komputer'),

            TextInput::make('programstudi_2')
                ->label('Pilihan Program Studi 2')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: D3 Sistem Informasi'),

            FileUpload::make('image')
                ->label('Foto')
                ->image()
                ->directory('students')
                ->visibility('public')
                ->imagePreviewHeight('150')
                ->maxSize(2048)
                ->required()
                ->helperText('Upload pas foto. Format: JPG, PNG. Maks 2MB.')
                ->columnSpanFull(),
        ])
        ->columns(2);
}
}
