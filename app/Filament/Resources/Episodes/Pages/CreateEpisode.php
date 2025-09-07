<?php

namespace App\Filament\Resources\Episodes\Pages;

use App\Filament\Resources\Episodes\EpisodeResource;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Resources\Pages\CreateRecord;

class CreateEpisode extends CreateRecord
{
    protected static string $resource = EpisodeResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id']= auth()->id();
        return $data;
    }
}
