<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muda extends Model
{
    use HasFactory;
    protected $fillable = [
        'leader_name',
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
        'business_id'
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
}
