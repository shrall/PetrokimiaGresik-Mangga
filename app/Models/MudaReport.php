<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MudaReport extends Model
{
    use HasFactory;
    protected $fillable = [
        'month',
        'inflow_sales',
        'inflow_loan',
        'inflow_subtotal',
        'outflow_investment',
        'outflow_ingredient',
        'outflow_production',
        'outflow_maintenance',
        'outflow_admin',
        'outflow_installments',
        'outflow_subtotal',
        'difference',
        'difference_start',
        'difference_end',
        'muda_id'
    ];
    public function muda()
    {
        return $this->belongsTo(Muda::class, 'muda_id', 'id');
    }
}
