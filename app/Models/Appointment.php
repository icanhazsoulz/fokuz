<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointmentable_type',
        'appointmentable_id',
        'category_id',
        'description',
        'shelter_id',
        'client_source_id',
        'status',
    ];

    public function appointmentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function photoshooting(): HasOne
    {
        return $this->hasOne(Photoshooting::class);
    }

//    public function user(): BelongsTo
//    {
//        return $this->belongsTo(User::class);
//    }

    public function shelter(): BelongsTo
    {
        return $this->belongsTo(Shelter::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function client_source(): BelongsTo
    {
        return $this->belongsTo(ClientSource::class);
    }
}
