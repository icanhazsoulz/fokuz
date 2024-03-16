<?php

namespace App\Models;

use App\Events\AppointmentCreated;
use Carbon\Carbon;
use Firebase\JWT\JWT;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointmentable_type',
        'appointmentable_id',
        'category_id',
        'address',
        'description',
        'client_source_id',
        'shelter_id',
        'status',
    ];

    /**
     * @param array $all Appointment form fields
     * @return void
     */
    public static function createAppointment(array $all): void
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

                // TODO: try-catch random string if not unique? What is the probability?
                DB::table('auth_tokens')->insert([
                    'token' => Str::random(64),
                    'user_id' => $client->id,
                    // TODO: addHour() for production
                    'expires_at' => Carbon::now()->addYear(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            // Pet: might be created or not
            $pet_data = [
                'name' => $all['petName'],
                'date_of_birth' => $all['petDob'],
                'type_id' => $all['petTypeId'],
                'sex' => $all['petSex'],
                'breed' => $all['petBreed'],
                'photo' => $all['petPhoto'],
            ];

            if ($pet_data['name'] && self::hasData($pet_data)) {
                $client->pets()->create($pet_data);
            }

            $appointment = $client->appointments()->create([
                'category_id' => $all['categoryId'],
                'address' => $all['address'],
                'description' => $all['description'],
                'client_source_id' => $all['clientSourceId'],
                'shelter_id' => $all['shelterId'],
            ]);

            Event::dispatch(new AppointmentCreated($appointment));
        });
    }

    private static function hasData($arr): int
    {
        $data = array_filter($arr, fn ($item) => ($item != false));

        return count($data);
    }

    // Relationships
    public function appointmentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function photoshooting(): HasOne
    {
        return $this->hasOne(Photoshooting::class);
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
