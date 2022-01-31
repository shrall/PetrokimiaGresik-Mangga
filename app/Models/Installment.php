<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    use HasFactory;
    protected $fillable = [
        'proof', 'business_id'
    ];

    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id', 'id');
    }
}
