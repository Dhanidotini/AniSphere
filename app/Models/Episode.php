<?php

namespace App\Models;

use App\Models\User;
use App\Models\Series;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Episode extends Model
{
    use SoftDeletes;
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function series(): BelongsTo
    {
        return $this->belongsTo(Series::class);
    }
}
