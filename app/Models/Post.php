<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'image', 'status', 'featured', 'post_category_id'
    ];

    protected $casts = [
        'content' => 'array',
    ];

    public function post_category(): BelongsTo
    {
        return $this->belongsTo(PostCategory::class);
    }
}
