<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Photoshooting extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'photoshootingable_type',
        'photoshootingable_id',
        'appointment_id',
    ];

    // Relationships
    public function photoshootingable(): MorphTo
    {
        return $this->morphTo();
    }

//    public function user(): BelongsTo
//    {
//        return $this->belongsTo(User::class);
//    }

    public function pets(): BelongsToMany
    {
        return $this->belongsToMany(Pet::class);
    }

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }
}
