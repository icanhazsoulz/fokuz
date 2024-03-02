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

    protected $fillable = [
        'category_id',
        'description',
        'client_source_id',
        'shelter_id',
    ];

    public static function create(array $all)
    {
        DB::transaction(function() use ($all) {
            $client = User::create([
                'first_name' => $all['firstName'],
                'last_name' => $all['lastName'],
                'email' => $all['email'],
                'phone' => $all['phone'],
                'password' => Hash::make('client-secret'),
            ]);
            $client->assignRole('client');

            // Pet: might be created or not
            $client->pets()->create([
                'name' => $all['petName'],
                'date_of_birth' => $all['petDob'],
                'type_id' => $all['petTypeId'],
                'sex' => $all['petSex'],
                'breed' => $all['petBreed'],
                'photo' => $all['petPhoto'],
            ]);

            // Has pet_id or null
//            $photoshooting = new Photoshooting();
//            $photoshooting->photoshooting_uid = $photoshooting->generateUID();
//            if ($pet) {
//                $pet->photoshootings()->save($photoshooting);
//            } else {
//                $photoshooting->save();
//            }

            $client->orders()->create([
                'category_id' => $all['categoryId'],
                'description' => $all['description'],
                'client_source_id' => $all['clientSourceId'],
                'shelter_id' => $all['shelterId'],
            ]);
        });
    }

    public function generateUID(): string
    {
        $year = date('Y');
        return 'ORD-' . $year . '-' . time();
    }

    // Relationships
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

    public function clientSource(): BelongsTo
    {
        return $this->belongsTo(ClientSource::class);
    }

    public function photoshooting(): HasOne
    {
        return $this->hasOne(Photoshooting::class);
    }
}
