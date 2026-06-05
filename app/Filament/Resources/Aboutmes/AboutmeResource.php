<?php

namespace App\Filament\Resources\Aboutmes;

use App\Filament\Resources\Aboutmes\Pages\CreateAboutme;
use App\Filament\Resources\Aboutmes\Pages\EditAboutme;
use App\Filament\Resources\Aboutmes\Pages\ListAboutmes;
use App\Filament\Resources\Aboutmes\Schemas\AboutmeForm;
use App\Filament\Resources\Aboutmes\Tables\AboutmesTable;
use App\Models\Aboutme;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutmeResource extends Resource
{
   protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-information-circle';
protected static ?string $navigationLabel = 'Profil Universitas';
protected static ?string $modelLabel = 'Profil';
protected static ?string $pluralModelLabel = 'Profil Universitas';
protected static string|UnitEnum|null $navigationGroup = 'Profil Universitas';
protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return AboutmeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutmesTable::configure($table);
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
            'index' => ListAboutmes::route('/'),
            'create' => CreateAboutme::route('/create'),
            'edit' => EditAboutme::route('/{record}/edit'),
        ];
    }
}
