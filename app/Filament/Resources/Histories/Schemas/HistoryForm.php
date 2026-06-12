<?php

namespace App\Filament\Resources\Histories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class HistoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('content')
                ->label('Isi Sejarah')
                ->toolbarButtons([
                    'bold',
                    'italic',
                    'underline',
                    'bulletList',
                    'orderedList',
                    'link',
                    'h3',
                ])
                ->required()
                ->helperText('Ceritakan sejarah pendirian dan perkembangan universitas.')
                ->columnSpanFull(),

            FileUpload::make('image')
                ->label('Foto Bersejarah')
                ->image()
                ->directory('histories')
                ->visibility('public')
                ->imagePreviewHeight('200')
                ->maxSize(2048)
                ->required()
                ->helperText('Foto gedung lama / momen bersejarah. Format: JPG, PNG. Maks 2MB.')
                ->columnSpanFull(),
        ]);
    }
}
