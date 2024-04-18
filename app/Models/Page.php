<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'title', 'subtitle', 'gallery_id', 'layout'];

    public function gallery(): BelongsTo
    {
        return $this->belongsTo(Gallery::class);
    }
}
