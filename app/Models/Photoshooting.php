<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photoshooting extends Model
{
    use HasFactory;

    public string $photoshooting_uid;

    public function generateUID(): string
    {
        $year = date('Y');
        return 'KUZ-' . $year . '-' . time();
    }

    // Relationships
    public function pet(): BelongsTo
    {
        return $this->belongsTo(Pet::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
