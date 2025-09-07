<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum SeriesSeasons: string implements HasLabel
{
    case Summer     =   'summer';
    case Spring     =   'pring';
    case Fall       =   'fall';
    case Winter     =   'winter';
    case Unknown    =   'unknown';

    public function getLabel(): string
    {
        return $this->name;
    }
}
