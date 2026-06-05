<?php

namespace App\Filament\Resources\Lectures\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LecturesTable
{
    public static function configure(Table $table): Table
    {
        return $table
        ->columns([
            ImageColumn::make('image')
                ->label('Foto')
                ->disk('public')
                ->height(60)
                ->circular(),

            TextColumn::make('nama')
                ->label('Nama Dosen')
                ->searchable()
                ->sortable()
                ->weight('bold'),

            TextColumn::make('nidn')
                ->label('NIDN')
                ->searchable()
                ->copyable()
                ->copyMessage('NIDN disalin!')
                ->toggleable(),

            TextColumn::make('jabatan')
                ->label('Jabatan')
                ->searchable()
                ->sortable()
                ->badge()
                ->color('success'),

            TextColumn::make('email')
                ->label('Email')
                ->searchable()
                ->copyable()
                ->copyMessage('Email disalin!')
                ->icon('heroicon-o-envelope'),

            TextColumn::make('topik')
                ->label('Bidang Keahlian')
                ->searchable()
                ->limit(40)
                ->tooltip(fn (?string $state): ?string => $state)
                ->toggleable(),

            TextColumn::make('pendidikan')
                ->label('Pendidikan')
                ->searchable()
                ->limit(40)
                ->tooltip(fn (?string $state): ?string => $state)
                ->toggleable(isToggledHiddenByDefault: true),

            TextColumn::make('created_at')
                ->label('Ditambahkan')
                ->dateTime('d M Y H:i')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
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
        ->defaultSort('nama', 'asc');
    }
}
