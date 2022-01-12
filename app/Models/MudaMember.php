<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MudaMember extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'muda_id'
    ];
    public function muda()
    {
        return $this->belongsTo(Muda::class, 'muda_id', 'id');
    }
}
