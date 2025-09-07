<?php

namespace App\Filament\Pages;

use App\Models\Series;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class ManageImages extends Page
{
    use HasPageShield;
    public $images;
    public function mount()
    {
        $this->images = Media::all();
    }
    protected string $view = 'filament.pages.manage-images';
    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;
    protected static \UnitEnum|string|null $navigationGroup = 'Settings';
}
