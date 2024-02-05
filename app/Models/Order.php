<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
//        'first_name',
//        'last_name',
//        'email',
//        'phone',
        'theme',
        'description',
        'client_source',
        'shelter',
    ];

    public static function create(array $all)
    {
//        dd($all);
        $client = User::findOrCreate([
            'first_name' => $all['first_name'],
            'last_name' => $all['last_name'],
            'email' => $all['email'],
            'phone' => $all['phone'],
        ]);

        $client->orders()->create([
            'theme' => $all['theme'],
            'description' => $all['description'],
            'client_source' => $all['client_source'],
            'shelter' => $all['shelter'],
        ]);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
