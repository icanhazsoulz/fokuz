<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\MediaLibrary\MediaCollections\Models\Media as BaseMedia;

class Media extends BaseMedia
{
    public function cart_item(): HasOne
    {
        return $this->hasOne(CartItem::class);
    }
}
