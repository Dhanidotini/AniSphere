<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('app.app_name', 'Laravel');
        $this->migrator->add('app.app_timezone', 'UTC');
    }
};
