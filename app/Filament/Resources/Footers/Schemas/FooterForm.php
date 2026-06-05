<?php

namespace App\Filament\Resources\Footers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FooterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->schema([
            // ====================================================
            // SECTION 1: Identitas & Lokasi Universitas
            // ====================================================
            Section::make('Identitas & Lokasi')
                ->description('Logo, alamat, dan peta lokasi yang ditampilkan di footer website.')
                ->icon('heroicon-o-map-pin')
                ->schema([
                    FileUpload::make('image')
                        ->label('Logo Universitas')
                        ->image()
                        ->directory('footers')
                        ->visibility('public')
                        ->imagePreviewHeight('120')
                        ->maxSize(2048)
                        ->required()
                        ->helperText('Logo putih/transparan paling cocok untuk footer.')
                        ->columnSpanFull(),

                    TextInput::make('alamat')
                        ->label('Alamat Lengkap')
                        ->required()
                        ->maxLength(255)
                        ->placeholder('contoh: Jl. Pendidikan No. 1, Pematangsiantar, Sumatera Utara 21121')
                        ->columnSpanFull(),

                    TextInput::make('link_gmaps')
                        ->label('Link Google Maps (Embed URL)')
                        ->url()
                        ->required()
                        ->maxLength(255)
                        ->placeholder('https://www.google.com/maps/embed?pb=...')
                        ->helperText('Buka Google Maps → cari lokasi → Share → Embed a map → copy URL src.')
                        ->columnSpanFull(),
                ]),

            // ====================================================
            // SECTION 2: Kontak Resmi
            // ====================================================
            Section::make('Kontak Resmi')
                ->description('Email dan nomor WhatsApp yang bisa dihubungi pengunjung website.')
                ->icon('heroicon-o-phone')
                ->schema([
                    TextInput::make('email')
                        ->label('Email Kontak')
                        ->email()
                        ->required()
                        ->maxLength(255)
                        ->prefix('@')
                        ->placeholder('contoh: info@b-university.ac.id'),

                    TextInput::make('wa')
                        ->label('Nomor WhatsApp')
                        ->required()
                        ->maxLength(255)
                        ->prefix('+62')
                        ->placeholder('contoh: 81234567890')
                        ->helperText('Tulis tanpa angka 0 di depan dan tanpa +62 (sudah di-prefix).'),
                ])
                ->columns(2),

            // ====================================================
            // SECTION 3: Sosial Media
            // ====================================================
            Section::make('Sosial Media')
                ->description('Link akun resmi universitas di berbagai platform sosial media.')
                ->icon('heroicon-o-globe-alt')
                ->schema([
                    TextInput::make('link_instagram')
                        ->label('Instagram')
                        ->url()
                        ->required()
                        ->maxLength(255)
                        ->prefix('🌐')
                        ->placeholder('https://instagram.com/buniversity'),

                    TextInput::make('link_youtube')
                        ->label('YouTube')
                        ->url()
                        ->required()
                        ->maxLength(255)
                        ->prefix('🌐')
                        ->placeholder('https://youtube.com/@buniversity'),

                    TextInput::make('link_linkedin')
                        ->label('LinkedIn')
                        ->url()
                        ->required()
                        ->maxLength(255)
                        ->prefix('🌐')
                        ->placeholder('https://linkedin.com/school/buniversity'),

                    TextInput::make('link_facebook')
                        ->label('Facebook')
                        ->url()
                        ->required()
                        ->maxLength(255)
                        ->prefix('🌐')
                        ->placeholder('https://facebook.com/buniversity'),
                ])
                ->columns(2),
        ]);
}
}