<?php

namespace App\Filament\Resources\Lectures\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class LectureForm
{
    public static function configure(Schema $schema): Schema
    {
         return $schema
        ->schema([
            TextInput::make('nama')
                ->label('Nama Lengkap')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: Dr. Ahmad Sutarno, M.Kom.'),

            TextInput::make('nidn')
                ->label('NIDN')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: 0123456789')
                ->helperText('Nomor Induk Dosen Nasional (10 digit).'),

            TextInput::make('pendidikan')
                ->label('Riwayat Pendidikan')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: S3 Teknik Informatika — Universitas Indonesia'),

            TextInput::make('jabatan')
                ->label('Jabatan Fungsional')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: Lektor Kepala'),

            TextInput::make('email')
                ->label('Email Dosen')
                ->email()
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: ahmad@b-university.ac.id')
                ->helperText('Email aktif untuk komunikasi resmi.'),

            TextInput::make('topik')
                ->label('Topik / Bidang Keahlian')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: Machine Learning, Data Mining'),

            FileUpload::make('image')
                ->label('Foto Dosen')
                ->image()
                ->directory('lectures')
                ->visibility('public')
                ->imagePreviewHeight('200')
                ->maxSize(2048)
                ->required()
                ->helperText('Upload foto formal dosen. Format: JPG, PNG. Maks 2MB.')
                ->columnSpanFull(),
        ])
        ->columns(2);
    }
}
