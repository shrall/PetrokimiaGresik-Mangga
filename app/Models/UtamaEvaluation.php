<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtamaEvaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'utama_id',
        'installment_type',
        'business_form',
        'business_ownership',
        'capital_source',
        'finance_record',
        'production_process',
        'land_ownership',
        'sector_id',
        'commodity',
        'loan_step',
        'installment_amount',
        'loan_period',
        'grace_period',
        'number_served',
        'land_area',
        'animal_count',
        'shed_count',
        'asset_total',
        'profit_per_harvest',
        'land_area_surveyor',
        'animal_count_surveyor',
        'term_group',
        'collateral_area',
        'collateral_owner',
        'collateral_date',
        'collateral_price',
        'survey_date',
        'loan_suggestion',
        'surveyor_note',
        'surveyor_name',
        'surveyor_city',
        'training',
        'training_type',
        'training_instance',
        'record_production',
        'record_stock',
        'organization_structure',
        'labor_force',
        'patent',
        'market_local',
        'market_province',
        'market_export',
        'export_to',
        'payment_cash',
        'payment_check',
        'market_order',
        'market_routine',
        'market_consignment',
        'bike',
        'car',
        'bike_value',
        'car_value',
        'other_assets',
        'utility_cost',
        'daily_cost',
        'other_cost',
        'year',
        'sales',
        'goods_cost',
        'supply_start',
        'purchase',
        'supply_end',
        'gross',
        'expense_salary',
        'expense_fertilizer',
        'expense_transport',
        'expense_utility',
        'expense_rent',
        'expense_others',
        'other_income_1',
        'other_income_2',
        'other_income_value_1',
        'other_income_value_2',
        'profit_loss',
    ];

    public function utama()
    {
        return $this->belongsTo(Utama::class, 'utama_id', 'id');
    }
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function installment_typed()
    {
        return $this->belongsTo(InstallmentType::class, 'installment_type', 'id');
    }

    public function business_form()
    {
        return $this->belongsTo(BusinessForm::class, 'business_form', 'id');
    }

    public function busienss_ownership()
    {
        return $this->belongsTo(EstablishmentStatus::class, 'busienss_ownership', 'id');
    }

    public function capital_source()
    {
        return $this->belongsTo(CapitalSource::class, 'capital_source', 'id');
    }

    public function finance_record()
    {
        return $this->belongsTo(FinanceRecord::class, 'finance_record', 'id');
    }

    public function production_process()
    {
        return $this->belongsTo(ProductionProcess::class, 'production_process', 'id');
    }

    public function land_ownership()
    {
        return $this->belongsTo(EstablishmentStatus::class, 'land_ownership', 'id');
    }
    public function equipments()
    {
        return $this->hasMany(UtamaEquipment::class, 'evaluation_id', 'id');
    }
}
