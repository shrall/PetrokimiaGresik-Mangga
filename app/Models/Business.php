<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'registration_number',
        'instagram',
        'logo',
        'address',
        'type',
        'mangga_type',
        'asset_value',
        'postal_code',
        'status',
        'province_id',
        'city_id',
        'district_id',
        'village_id',
        'sector_id',
        'subsector_id',
        'approved_by_surveyor_at',
        'approved_by_pimpinan_at',
        'rejected_at',
        'user_id',
        'business_status_id'
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
    public function businessstatus()
    {
        return $this->belongsTo(BusinessStatus::class, 'business_status_id', 'id');
    }
    public function subsector()
    {
        return $this->belongsTo(Subsector::class, 'subsector_id', 'id');
    }
    public function statused()
    {
        return $this->belongsTo(BusinessStatus::class, 'business_status_id', 'id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function muda()
    {
        return $this->hasOne(Muda::class, 'business_id', 'id');
    }
    public function utama()
    {
        return $this->hasOne(Utama::class, 'business_id', 'id');
    }
    public function angsurans()
    {
        return $this->hasMany(BusinessAngsuran::class, 'business_id', 'id');
    }
    public function logs()
    {
        return $this->hasMany(BusinessLog::class, 'business_id', 'id');
    }
    public function commodities()
    {
        return $this->hasMany(BusinessCommodity::class, 'business_id', 'id');
    }
    public function plans()
    {
        return $this->hasMany(BusinessPlan::class, 'business_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(BusinessProduct::class, 'business_id', 'id');
    }
}
