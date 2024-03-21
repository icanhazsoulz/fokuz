<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Shelter extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    public function appointments(): MorphMany
    {
        return $this->morphMany(Appointment::class, 'appointmentable');
    }

    public function photoshootings(): MorphMany
    {
        return $this->morphMany(Photoshooting::class, 'photoshootingable');
    }
}
