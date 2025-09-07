<?php

namespace App\Filament\Resources\Series\Schemas;

use App\Enums\SeriesTypes;
use App\Enums\SeriesStatus;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Illuminate\Support\Str;
use App\Enums\SeriesSeasons;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;

class SeriesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                SpatieMediaLibraryFileUpload::make('banners')
                    ->collection('banners')
                    ->conversion('banners')
                    ->openable()
                    ->image()
                    ->disk('public'),
                TextInput::make('title')
                    ->required()
                    ->live(true)
                    ->afterStateUpdated(function(Get $get, Set $set, ?string $old, ?string $state){
                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        } else {
                            $set('slug', Str::slug($state));
                        }
                    }),
                TextInput::make('slug')
                    ->disabled(fn($contex) => $contex == 'edit')
                    ->required(),
                Select::make('type')
                    ->required()
                    ->selectablePlaceholder(false)
                    ->default(SeriesTypes::Unknown)
                    ->options(SeriesTypes::class),
                Select::make('seasons')
                    ->required()
                ->selectablePlaceholder(false)
                    ->default(SeriesSeasons::Unknown)
                    ->options(SeriesSeasons::class),
                Select::make('status')
                    ->required()
                    ->selectablePlaceholder(false)
                    ->default(SeriesStatus::Unknown)
                    ->options(SeriesStatus::class),
                Textarea::make('synopsis')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
