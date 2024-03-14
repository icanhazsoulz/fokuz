<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements FilamentUser, JWTSubject
{
    use HasApiTokens, HasFactory, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'admin') {
            return Auth::user()->hasRole('admin');
        }

        if ($panel->getId() === 'app') {
            return Auth::user()->hasRole(['client', 'admin']);
        }

        return false;
    }

    public static function findExistingClient($email)
    {
        // TODO: update data if user exists and changed smth?
        return Auth::check() ? Auth::user() : DB::table('users')->where('email', $email)->first();
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT
     *
     * @return mixed
     */
    public function getJWTIdentifier(): mixed
    {
        return $this->getKey();
    }

    /**
     * Return an associative array containing any custom claims to be added to the JWT
     *
     * @return array
     */
    public function getJWTCustomClaims(): array
    {
        return [];
    }


    // Relationships
//    public function appointments(): HasMany
//    {
//        return $this->hasMany(Appointment::class);
//    }

    public function appointments(): MorphMany
    {
        return $this->morphMany(Appointment::class, 'appointmentable');
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    public function testimonials(): HasMany
    {
        return $this->hasMany(Testimonial::class);
    }

    public function pets(): HasMany
    {
        return $this->hasMany(Pet::class);
    }
}
