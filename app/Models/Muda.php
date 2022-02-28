<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muda extends Model
{
    use HasFactory;
    protected $fillable = [
        'leader_name',
        'leader_email',
        'leader_phone',
        'leader_ktp',
        'leader_ktm',
        'member_count',
        'university',
        'faculty',
        'recommender',
        'recommender_position',
        'business_title',
        'prospect',
        'growth_plan',
        'target',
        'needs',
        'utilization_plan',
        'return_plan',
        'description',
        'market_share',
        'market_position',
        'production_strategy',
        'organization_structure',
        'target_plan',
        'finance',
        'finance_attachment',
        'business_id',
        'type_id',
        'category_id',
        'subcategory',
        'complete_form'
    ];
    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id', 'id');
    }
    public function members()
    {
        return $this->hasMany(MudaMember::class, 'muda_id', 'id');
    }
    public function reports()
    {
        return $this->hasMany(MudaReport::class, 'muda_id', 'id');
    }
    public function type()
    {
        return $this->belongsTo(MudaType::class, 'type_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(MudaCategory::class, 'category_id', 'id');
    }
}
