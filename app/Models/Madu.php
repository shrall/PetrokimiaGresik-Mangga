<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Madu extends Model
{
    use HasFactory;
    protected $fillable = [
        'description', 'link', 'image', 'user_id', 'status', 'business_status_id', 'name'
    ];
    public function businessstatus()
    {
        return $this->belongsTo(BusinessStatus::class, 'business_status_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
