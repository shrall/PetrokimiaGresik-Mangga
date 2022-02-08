<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtamaEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utama_evaluations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('utama_id')->index();
            $table->foreign('utama_id')->references('id')->on('utamas')->onDelete('cascade');
            $table->string('commodity')->nullable();
            $table->string('loan_step')->nullable();
            $table->bigInteger('installment_amount')->nullable();
            $table->integer('loan_period')->nullable();
            $table->integer('grace_period')->nullable();
            $table->integer('number_served')->nullable();
            $table->integer('land_area')->nullable();
            $table->integer('animal_count')->nullable();
            $table->integer('shed_count')->nullable();
            $table->bigInteger('asset_total')->nullable();
            $table->bigInteger('profit_per_harvest')->nullable();
            $table->integer('land_area_surveyor')->nullable();
            $table->integer('animal_count_surveyor')->nullable();
            $table->string('term_group')->nullable();
            $table->integer('collateral_area')->nullable();
            $table->string('collateral_owner')->nullable();
            $table->date('collateral_date')->nullable();
            $table->bigInteger('collateral_price')->nullable();

            $table->date('survey_date')->nullable();
            $table->bigInteger('loan_suggestion')->nullable();
            $table->text('surveyor_note')->nullable();
            $table->string('surveyor_name')->nullable();
            $table->string('surveyor_city')->nullable();

            $table->integer('training')->nullable()->comment('0 = Tidak Pernah, 1 = Pernah');
            $table->string('training_type')->nullable();
            $table->string('training_instance')->nullable();
            $table->integer('record_production')->nullable()->comment('0 = Tidak Ada, 1 = Ada');
            $table->integer('record_stock')->nullable()->comment('0 = Tidak Ada, 1 = Ada');
            $table->string('organization_structure')->nullable();
            $table->integer('labor_force')->nullable();
            $table->integer('patent')->nullable()->comment('0 = Tidak, 1 = Ya');
            $table->string('market_local')->nullable();
            $table->string('market_province')->nullable();
            $table->string('market_export')->nullable();
            $table->string('export_to')->nullable();
            $table->string('payment_cash')->nullable();
            $table->string('payment_check')->nullable();
            $table->string('market_order')->nullable();
            $table->string('market_routine')->nullable();
            $table->string('market_consignment')->nullable();
            $table->integer('bike')->nullable()->comment('0 = Tidak, 1 = Ya');
            $table->integer('car')->nullable()->comment('0 = Tidak, 1 = Ya');
            $table->bigInteger('bike_value')->nullable();
            $table->bigInteger('car_value')->nullable();
            $table->bigInteger('other_assets')->nullable();
            $table->bigInteger('utility_cost')->nullable();
            $table->bigInteger('daily_cost')->nullable();
            $table->bigInteger('other_cost')->nullable();
            $table->integer('year')->nullable();
            $table->bigInteger('sales')->nullable();
            $table->bigInteger('goods_cost')->nullable();
            $table->bigInteger('supply_start')->nullable();
            $table->bigInteger('purchase')->nullable();
            $table->bigInteger('supply_end')->nullable();
            $table->bigInteger('gross')->nullable();
            $table->bigInteger('expense_salary')->nullable();
            $table->bigInteger('expense_fertilizer')->nullable();
            $table->bigInteger('expense_transport')->nullable();
            $table->bigInteger('expense_utility')->nullable();
            $table->bigInteger('expense_rent')->nullable();
            $table->bigInteger('expense_others')->nullable();
            $table->string('other_income_1')->nullable();
            $table->string('other_income_2')->nullable();
            $table->bigInteger('other_income_value_1')->nullable();
            $table->bigInteger('other_income_value_2')->nullable();
            $table->bigInteger('profit_loss')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utama_evaluations');
    }
}
