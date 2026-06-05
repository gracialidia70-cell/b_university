<?php

namespace App\Filament\Resources\Rektors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RektorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->schema([
            TextInput::make('nama')
                ->label('Nama Lengkap')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: Prof. Dr. H. Maman Suherman, M.Pd.'),

            TextInput::make('jabatan')
                ->label('Jabatan')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: Rektor / Wakil Rektor I / Wakil Rektor II')
                ->helperText('Tuliskan jabatan struktural di pimpinan universitas.'),

            FileUpload::make('image')
                ->label('Foto')
                ->image()
                ->directory('rektors')
                ->visibility('public')
                ->imagePreviewHeight('200')
                ->maxSize(2048)
                ->required()
                ->helperText('Upload foto formal dengan latar polos. Format: JPG, PNG. Maks 2MB.')
                ->columnSpanFull(),
        ])
        ->columns(2);
    }
}
