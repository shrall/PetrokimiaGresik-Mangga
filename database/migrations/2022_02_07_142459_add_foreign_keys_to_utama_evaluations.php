<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtamaEvaluations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utama_evaluations', function (Blueprint $table) {
            $table->unsignedBigInteger('installment_type')->index()->after('commodity')->nullable();
            $table->foreign('installment_type')->references('id')->on('installment_types')->onDelete('cascade');
            $table->unsignedBigInteger('business_form')->index()->after('surveyor_city')->nullable();
            $table->foreign('business_form')->references('id')->on('business_forms')->onDelete('cascade');
            $table->unsignedBigInteger('business_ownership')->index()->after('business_form')->nullable();
            $table->foreign('business_ownership')->references('id')->on('establishment_statuses')->onDelete('cascade');
            $table->unsignedBigInteger('capital_source')->index()->after('business_ownership')->nullable();
            $table->foreign('capital_source')->references('id')->on('capital_sources')->onDelete('cascade');
            $table->unsignedBigInteger('finance_record')->index()->after('training_instance')->nullable();
            $table->foreign('finance_record')->references('id')->on('finance_records')->onDelete('cascade');
            $table->unsignedBigInteger('production_process')->index()->after('labor_force')->nullable();
            $table->foreign('production_process')->references('id')->on('production_processes')->onDelete('cascade');
            $table->unsignedBigInteger('land_ownership')->index()->after('market_consignment')->nullable();
            $table->foreign('land_ownership')->references('id')->on('establishment_statuses')->onDelete('cascade');
            $table->unsignedBigInteger('sector_id')->index()->after('year')->nullable();
            $table->foreign('sector_id')->references('id')->on('sectors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utama_evaluations', function (Blueprint $table) {
            //
        });
    }
}
