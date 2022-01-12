<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logo',
        'address',
        'type',
        'asset_value',
        'postal_code',
        'status',
        'province_id',
        'city_id',
        'district_id',
        'village_id',
        'sector_id',
        'subsector_id',
        'user_id'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }
    public function city()
    {
        return $this->belongsTo(Regency::class, 'city_id', 'id');
    }
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }
    public function village()
    {
        return $this->belongsTo(Village::class, 'village_id', 'id');
    }
    public function sector()
    {
        return $this->belongsTo(Sector::class, 'sector_id', 'id');
    }
    public function subsector()
    {
        return $this->belongsTo(Subsector::class, 'subsector_id', 'id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function muda()
    {
        return $this->hasOne(Muda::class, 'business_id', 'id');
    }
}
