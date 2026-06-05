<?php

namespace App\Filament\Resources\Cooperations;

use App\Filament\Resources\Cooperations\Pages\CreateCooperation;
use App\Filament\Resources\Cooperations\Pages\EditCooperation;
use App\Filament\Resources\Cooperations\Pages\ListCooperations;
use App\Filament\Resources\Cooperations\Schemas\CooperationForm;
use App\Filament\Resources\Cooperations\Tables\CooperationsTable;
use App\Models\Cooperation;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CooperationResource extends Resource
{
   protected static ?string $model = Cooperation::class;
protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-building-office-2';
protected static ?string $navigationLabel = 'Kerja Sama';        // ← Label di menu sidebar
protected static ?string $modelLabel = 'Kerja Sama';             // ← Label untuk satu item
protected static ?string $pluralModelLabel = 'Kerja Sama';       // ← Label untuk banyak item
protected static string|UnitEnum|null $navigationGroup = 'Manajemen Konten';  // ← Grup menu
protected static ?int $navigationSort = 1;                        // ← Urutan di menu

    public static function form(Schema $schema): Schema
    {
        return $schema
        ->components([
            FileUpload::make('image')
                ->label('Logo Kerja Sama')
                ->image()
                ->directory('cooperations')
                ->visibility('public')
                ->imagePreviewHeight('150')
                ->maxSize(2048)
                ->required()
                ->helperText('Upload logo mitra. Format: JPG, PNG. Maks 2MB.')
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            ImageColumn::make('image')
                ->label('Logo')
                ->disk('public')
                ->height(60),

            TextColumn::make('created_at')
                ->label('Ditambahkan')
                ->dateTime('d M Y H:i')
                ->sortable(),

            TextColumn::make('updated_at')
                ->label('Diperbarui')
                ->dateTime('d M Y H:i')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ])
        ->filters([
            //
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCooperations::route('/'),
            'create' => CreateCooperation::route('/create'),
            'edit' => EditCooperation::route('/{record}/edit'),
        ];
    }
}
