<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Service Details')
                    ->columns(2)
                    ->columnSpan('full')
                    ->schema([

                        TextInput::make('name')
                            ->required(),
                        TextInput::make('slug')
                            ->required(),
                        FileUpload::make('photo')
                            ->disk('public')
                            ->directory('departments')
                            ->image()
                            ->required(),
                        TextInput::make('short_desc')
                            ->required(),
                        Textarea::make('full_desc')
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('banner_pic')
                            ->disk('public')
                            ->directory('departments')
                            ->image()
                            ->required(),

                    ]),
            ]);
    }
}
