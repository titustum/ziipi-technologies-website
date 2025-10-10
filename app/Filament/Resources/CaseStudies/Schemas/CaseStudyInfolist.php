<?php

namespace App\Filament\Resources\CaseStudies\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CaseStudyInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Case Study Information')
                    ->columns(2)
                    ->columnSpan('full')
                    ->schema([

                        TextEntry::make('name'),
                        TextEntry::make('slug'),
                        ImageEntry::make('photo')->disk('public'),
                        ImageEntry::make('banner_pic')->disk('public'),
                        TextEntry::make('created_at')
                            ->dateTime(),
                        TextEntry::make('updated_at')
                            ->dateTime(),

                    ]),
            ]);
    }
}
