<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MheEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start',
        'end',
        'desc',
        'status',
        'image'
    ];
    public function transactions() {
        return $this->hasMany(MheTransaction::class, 'mhe_event_id', 'id');
    }
}
