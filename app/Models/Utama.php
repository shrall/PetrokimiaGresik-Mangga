<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utama extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name',
        'user_npwp',
        'user_spouse',
        'user_birth_date',
        'user_birth_place',
        'user_ktp_code',
        'user_kk_code',
        'user_profession',
        'user_gender',
        'user_address',
        'user_rt',
        'user_rw',
        'user_village',
        'user_district',
        'user_city',
        'user_province',
        'user_postal_code',
        'user_email',
        'user_phone',
        'user_bank_branch',
        'user_bank_number',
        'request_amount',
        'member_count',
        'collateral',
        'best_product',
        'business_value',
        'hr_value',
        'turnover_value',
        'sales_value',
        'total_cost',
        'export_to',
        'product_distributor',
        'unit_amount',
        'land',
        'building',
        'treasury',
        'credit',
        'production_tools',
        'savings',
        'supply',
        'vehicle',
        'business_problem',
        'establishment_picture',
        'product_picture',
        'business_sketch',
        'house_sketch',
        'same_as_house',
        'mail_address',
        'telephone',
        'handphone',
        'email',
        'siup_code',
        'siup_date',
        'ktp',
        'ktp_selfie',
        'kk',
        'kk_selfie',
        'siup',
        'skdu',
        'complete_form',
        'companion_name',
        'companion_ktp_code',
        'companion_wedding_code',
        'companion_wedding_date',
        'companion_address',
        'companion_postal_code',
        'companion_telephone',
        'companion_handphone',
        'companion_email',
        'companion_province',
        'companion_city',
        'companion_district',
        'companion_village',
        'business_id',
        'business_form_id',
        'establishment_status_id',
        'distribution_type_id',
        'marketing_id'
    ];
    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id', 'id');
    }
    public function marketing()
    {
        return $this->belongsTo(Marketing::class, 'marketing_id', 'id');
    }
    public function businessform()
    {
        return $this->belongsTo(BusinessForm::class, 'business_form_id', 'id');
    }
    public function establishmentstatus()
    {
        return $this->belongsTo(EstablishmentStatus::class, 'establishment_status_id', 'id');
    }
    public function distributiontype()
    {
        return $this->belongsTo(DistributionType::class, 'distribution_type_id', 'id');
    }
    public function members()
    {
        return $this->hasMany(UtamaMember::class, 'utama_id', 'id');
    }
    public function evaluation()
    {
        return $this->hasOne(UtamaEvaluation::class, 'utama_id', 'id');
    }

    public function companionprovince() {
        return $this->belongsTo(Province::class, 'companion_province', 'id');
    }
    public function companioncity() {
        return $this->belongsTo(Regency::class, 'companion_city', 'id');
    }
    public function companiondistrict() {
        return $this->belongsTo(District::class, 'companion_district', 'id');
    }
    public function companionvillage() {
        return $this->belongsTo(Village::class, 'companion_village', 'id');
    }
}
