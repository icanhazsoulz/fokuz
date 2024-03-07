<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Order extends Model
{
    use HasFactory;

//    public string $order_uid;

//    protected $fillable = [];

    public function generateUID(): string
    {
        $year = date('Y');

        return 'ORD-' . $this->getNextSequentialNumber() . '-' . $year . '-' . time();
    }

    function getNextSequentialNumber()
    {
        $maxSequentialNumber = Order::query()->max('id');

        return $maxSequentialNumber ? $maxSequentialNumber + 1 : 1;
    }

    // Relationships
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

//    public function photoshooting(): HasOne
//    {
//        return $this->hasOne(Photoshooting::class);
//    }
}
