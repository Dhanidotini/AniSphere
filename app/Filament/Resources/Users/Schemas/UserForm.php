<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->autocomplete(autocomplete: false)
                    ->required(fn($contex) => $contex === 'create'),
                TextInput::make('password')
                    ->password()
                    ->dehydrated(fn($state) => filled($state))
                    ->dehydrateStateUsing(fn($state) => Hash::make($state))
                    ->required(fn($contex) => $contex === 'create')
                    ->confirmed(),
                TextInput::make('password_confirmation')
                    ->password(),
                Select::make('roles')
                    ->relationship('roles', 'name'),
            ]);
    }
}
