<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessAngsuran extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount', 'business_id', 'proof', 'installment_counter', 'status_id', 'approved_at'
    ];
    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id', 'id');
    }
    public function status()
    {
        return $this->belongsTo(AngsuranStatus::class, 'status_id', 'id');
    }
}
