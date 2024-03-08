<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    public static function createMessage(array $all)
    {
        DB::transaction(function() use ($all) {
            $client = User::findExistingClient($all['email']);

            if (!$client) {
                $client = User::create([
                    'first_name' => $all['firstName'],
                    'last_name' => $all['lastName'],
                    'email' => $all['email'],
                    'phone' => $all['phone'],
                    'password' => Hash::make('client'),
                ]);
                $client->assignRole('client');
            }

            $client->messages()->create([
                'message' => $all['message'],
            ]);
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
