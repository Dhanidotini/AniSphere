<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum SeriesStatus: string implements HasLabel
{
    case Completed  =   'completed';
    case Ongoing    =   'ongoing';
    case Upcoming   =   'upcoming';
    case Unknown    =   'unknown';
    public function getLabel(): string
    {
        return $this->name;
    }
}
