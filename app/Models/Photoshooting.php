<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Photoshooting extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

//    public string $photoshooting_uid;

    /**
     * To figure out:
     * If the above property not commented out:  General error: 1364 Field 'photoshooting_uid' doesn't have a default value (Connection: mysql, SQL: insert into `photoshootings` (`pet_id`, `order_id`, `updated_at`, `created_at`) values (1, 1, 2024-03-02 15:01:54, 2024-03-02 15:01:54))
     */

    // Relationships
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function pets(): BelongsToMany
    {
        return $this->belongsToMany(Pet::class);
    }

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }
}
