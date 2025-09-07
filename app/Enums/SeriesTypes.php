<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum SeriesTypes: string implements HasLabel
{
    case TV         =   'tv';
    case ONA        =   'ona';
    case OVA        =   'ova';
    case Unknown    =   'unknown';

    public function getLabel(): string
    {
        return $this->name;
    }
}
