<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'email_verified_at',
        'password',
        'auth_key',
        'key_expired',
        'no_handphone',
        'identity_id',
        'fam_card_code',
        'gender',
        'religion',
        'referral_code',
        'avatar',
        'status',
        'province',
        'birth_date',
        'confirmed_date',
        'blocked_at',
        'registration_ip',
        'last_login_ip',
        'last_login_time',
        'token',
        'token_expired',
        'user_role',
        'province_id',
        'city_id',
        'district_id',
        'village_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isUser()
    {
        if ($this->user_role == 1) {
            return true;
        }
        return false;
    }

    public function isSuperadmin()
    {
        if ($this->user_role == 2) {
            return true;
        }
        return false;
    }

    public function isPimpinan()
    {
        if ($this->user_role == 3) {
            return true;
        }
        return false;
    }

    public function isSupervisor()
    {
        if ($this->user_role == 4) {
            return true;
        }
        return false;
    }

    public function isSurveyor()
    {
        if ($this->user_role == 5) {
            return true;
        }
        return false;
    }

    public function province() {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }
    public function city() {
        return $this->belongsTo(Regency::class, 'city_id', 'id');
    }
    public function district() {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }
    public function village() {
        return $this->belongsTo(Village::class, 'village_id', 'id');
    }
    public function role() {
        return $this->belongsTo(UserRole::class, 'user_role', 'id');
    }
}
