<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMudaReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muda_reports', function (Blueprint $table) {
            $table->id();
            $table->integer('month');
            $table->integer('inflow_sales');
            $table->integer('inflow_loan');
            $table->integer('inflow_subtotal');
            $table->integer('outflow_investment');
            $table->integer('outflow_ingredient');
            $table->integer('outflow_production');
            $table->integer('outflow_maintenance');
            $table->integer('outflow_admin');
            $table->integer('outflow_installments');
            $table->integer('outflow_subtotal');
            $table->integer('difference');
            $table->integer('difference_start');
            $table->integer('difference_end');
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
        Schema::dropIfExists('muda_reports');
    }
}
