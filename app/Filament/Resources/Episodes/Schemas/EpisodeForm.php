<?php

namespace App\Filament\Resources\Episodes\Schemas;

use Filament\Schemas\Schema;
use App\Settings\AppSettings;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;

class EpisodeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('eps')
                    ->required()
                    ->numeric(),
                TextInput::make('url')
                    ->prefix(app(AppSettings::class)->url_video),
            ]);
    }
}
