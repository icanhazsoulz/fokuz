<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    public static function create(array $all)
    {
        $client = User::findOrCreate([
            'first_name' => $all['first_name'],
            'last_name' => $all['last_name'],
            'email' => $all['email'],
            'phone' => $all['phone'],
        ]);

        $client->messages()->create([
            'message' => $all['message'],
        ]);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
