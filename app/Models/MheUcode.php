<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MheUcode extends Model
{
    use HasFactory;
    protected $fillable = [
        'string',
        'status',
    ];
    public function transactions() {
        return $this->hasMany(MheTransaction::class, 'mhe_ucode_id', 'id');
    }
}
