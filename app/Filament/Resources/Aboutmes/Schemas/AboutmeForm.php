<?php

namespace App\Filament\Resources\Aboutmes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AboutmeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('content')
                ->label('Deskripsi Profil')
                ->required()
                ->rows(5)
                ->placeholder('Tuliskan profil singkat universitas (keunggulan, fokus pendidikan, dll.)')
                ->helperText('Deskripsi singkat tanpa formatting. Untuk konten berformat gunakan menu Sejarah.')
                ->columnSpanFull(),

            FileUpload::make('image')
                ->label('Foto (Multiple)')
                ->image()
                ->multiple()
                ->reorderable()
                ->maxFiles(5)
                ->directory('aboutmes')
                ->visibility('public')
                ->imagePreviewHeight('120')
                ->maxSize(2048)
                ->required()
                ->helperText('Bisa upload beberapa foto sekaligus. Maks 5 foto, masing-masing 2MB.')
                ->columnSpanFull(),
        ]);
}
}
