<?php

namespace App\Models;

use App\Models\User;
use App\Enums\SeriesTypes;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Series extends Model implements HasMedia
{
    use SoftDeletes, HasFactory, InteractsWithMedia;
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    protected $casts = [
        'type' => SeriesTypes::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function episodes(): HasMany
    {
        return $this->hasMany(Episode::class);
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('banners')
            ->quality(70)
            ->width(800)
            ->optimize()
            ->withResponsiveImages();
    }
}
