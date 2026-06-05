<?php

namespace App\Filament\Resources\Visimisis;

use App\Filament\Resources\Visimisis\Pages\CreateVisimisi;
use App\Filament\Resources\Visimisis\Pages\EditVisimisi;
use App\Filament\Resources\Visimisis\Pages\ListVisimisis;
use App\Filament\Resources\Visimisis\Schemas\VisimisiForm;
use App\Filament\Resources\Visimisis\Tables\VisimisisTable;
use App\Models\Visimisi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class VisimisiResource extends Resource
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-eye';
protected static ?string $navigationLabel = 'Visi & Misi';
protected static ?string $modelLabel = 'Visi & Misi';
protected static ?string $pluralModelLabel = 'Visi & Misi';
protected static string|UnitEnum|null $navigationGroup = 'Profil Universitas';
protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return VisimisiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VisimisisTable::configure($table);
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
            'index' => ListVisimisis::route('/'),
            'create' => CreateVisimisi::route('/create'),
            'edit' => EditVisimisi::route('/{record}/edit'),
        ];
    }
}
