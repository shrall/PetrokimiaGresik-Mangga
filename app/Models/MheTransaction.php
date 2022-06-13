<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MheTransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'attendee_name',
        'attendee_email',
        'attendee_phone',
        'is_approved',
        'evidence',
        'reference_code',
        'ticket_amount',
        'is_online',
        'mhe_event_id',
        'mhe_ucode_id',
    ];
    public function event()
    {
        return $this->belongsTo(MheEvent::class, 'mhe_event_id', 'id');
    }
    public function ucode()
    {
        return $this->belongsTo(MheUcode::class, 'mhe_ucode_id', 'id');
    }
}
