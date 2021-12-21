<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'creator_id',
        'desc',
        'notes',
        'path',
        'ip',
    ];
}
