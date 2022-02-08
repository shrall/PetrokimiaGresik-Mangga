<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtamaEquipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'evaluation_id'
    ];
}
