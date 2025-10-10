<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Service Details')
                    ->columns(2)
                    ->columnSpan('full')
                    ->schema([
                        TextEntry::make('name'),
                        TextEntry::make('slug'),
                        ImageEntry::make('photo')->disk('public'),
                        TextEntry::make('short_desc'),
                        ImageEntry::make('banner_pic')->disk('public'),
                        IconEntry::make('is_featured')
                            ->boolean(),
                        TextEntry::make('created_at')
                            ->dateTime(),
                        TextEntry::make('updated_at')
                            ->dateTime(),
                    ]),
            ]);
    }
}
