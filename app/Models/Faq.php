<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answer', 'link_label', 'status'];

    // Relationships
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
