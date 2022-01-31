<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'path', 'media_id'
    ];

    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id', 'id');
    }
}
