<?php

namespace App\Filament\Resources\Footers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FootersTable
{
    public static function configure(Table $table): Table
    {
        return $table
        ->columns([
            ImageColumn::make('image')
                ->label('Logo')
                ->disk('public')
                ->height(50),

            TextColumn::make('alamat')
                ->label('Alamat')
                ->limit(50)
                ->tooltip(fn (?string $state): ?string => $state)
                ->searchable(),

            TextColumn::make('email')
                ->label('Email')
                ->searchable()
                ->copyable()
                ->copyMessage('Email disalin!')
                ->icon('heroicon-o-envelope'),

            TextColumn::make('wa')
                ->label('WhatsApp')
                ->copyable()
                ->copyMessage('Nomor WA disalin!')
                ->icon('heroicon-o-chat-bubble-left-right')
                ->prefix('+62 '),

            TextColumn::make('link_instagram')
                ->label('Instagram')
                ->url(fn ($record) => $record->link_instagram, true)
                ->icon('heroicon-o-link')
                ->formatStateUsing(fn (?string $state): string => $state ? 'Buka' : '-')
                ->color('info'),

            TextColumn::make('updated_at')
                ->label('Diperbarui')
                ->dateTime('d M Y H:i')
                ->sortable(),
        ])
        ->filters([
            //
        ])
        ->actions([
            EditAction::make(),
            DeleteAction::make(),
        ])
        ->bulkActions([
            BulkActionGroup::make([
                DeleteBulkAction::make(),
            ]),
        ])
        ->defaultSort('updated_at', 'desc');
    }
}


