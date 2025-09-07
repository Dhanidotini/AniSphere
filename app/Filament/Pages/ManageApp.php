<?php

namespace App\Filament\Pages;

use BackedEnum;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use UnitEnum;
use Filament\Schemas\Schema;
use App\Settings\AppSettings;
use Filament\Pages\SettingsPage;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\TextInput;

class ManageApp extends SettingsPage
{
    use HasPageShield;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;
    protected static string $settings = AppSettings::class;
    protected static UnitEnum|string|null $navigationGroup = 'Settings';
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('app_name')
                    ->required(),
                TextInput::make('app_timezone')
                    ->required(),
                TextInput::make('url_video'),
            ]);
    }
}
