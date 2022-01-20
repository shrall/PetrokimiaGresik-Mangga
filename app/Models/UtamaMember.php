<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtamaMember extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'ktp_code',
        'ktp',
        'ktp_selfie',
        'phone',
        'certificate_name',
        'certificate_address',
        'certificate',
        'certificate_selfie',
        'utama_id'
    ];
    public function utama()
    {
        return $this->belongsTo(Utama::class, 'utama_id', 'id');
    }
}
