<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class AppSettings extends Settings
{

    public string $app_name, $app_timezone;
    public ?string $url_video;

    public static function group(): string
    {
        return 'app';
    }
}
