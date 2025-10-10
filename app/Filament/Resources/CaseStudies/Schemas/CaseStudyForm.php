<?php

namespace App\Filament\Resources\CaseStudies\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CaseStudyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Case Study Details')
                    ->columns(2)
                    ->columnSpan('full')
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('slug')
                            ->required(),

                        Textarea::make('short_desc')
                            ->columnSpanFull(),
                        RichEditor::make('full_desc')
                            ->columnSpanFull(),
                        FileUpload::make('photo')->image()->required()->disk('public')->directory('case-studies'),
                        FileUpload::make('banner_pic')->image()->required()->disk('public')->directory('case-studies'),
                    ]),
            ]);
    }
}
