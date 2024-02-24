<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'description',
        'client_source',
        'shelter_id',
    ];

    public static function create(array $all)
    {
        DB::transaction(function() use ($all) {
            $client = User::findOrCreate([
                'first_name' => $all['first_name'],
                'last_name' => $all['last_name'],
                'email' => $all['email'],
                'phone' => $all['phone'],
            ]);

            $client->orders()->create([
                'category' => $all['category'],
                'description' => $all['description'],
                'client_source' => $all['client_source'],
                'shelter_id' => $all['shelter_id'],
            ]);
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

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
