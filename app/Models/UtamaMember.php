<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtamaMember extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'ktp_code',
        'ktp',
        'ktp_selfie',
        'phone',
        'certificate_name',
        'certificate_address',
        'certificate',
        'certificate_selfie',
        'kk_code',
        'address',
        'income',
        'cost',
        'profit',
        'land',
        'building',
        'production_tools',
        'supply',
        'loan_amount',
        'member_photo',
        'cow_count',
        'cow_price',
        'human_resource',
        'medicine',
        'concentrate',
        'hmt',
        'cultivation',
        'transportation',
        'land_ownership',
        'land_area',
        'seed',
        'feed',
        'others',
        'period_month',
        'fertilizer',
        'utama_id'
    ];
    public function utama()
    {
        return $this->belongsTo(Utama::class, 'utama_id', 'id');
    }
    public function lo()
    {
        return $this->belongsTo(EstablishmentStatus::class, 'land_ownership', 'id');
    }
}
