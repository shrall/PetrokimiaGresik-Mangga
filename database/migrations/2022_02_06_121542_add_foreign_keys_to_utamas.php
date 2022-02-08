<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtamas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utamas', function (Blueprint $table) {
            $table->unsignedBigInteger('business_form_id')->index()->after('best_product');
            $table->foreign('business_form_id')->references('id')->on('business_forms')->onDelete('cascade');
            $table->unsignedBigInteger('establishment_status_id')->index()->after('siup_date');
            $table->foreign('establishment_status_id')->references('id')->on('establishment_statuses')->onDelete('cascade');
            $table->unsignedBigInteger('distribution_type_id')->index()->after('collateral');
            $table->foreign('distribution_type_id')->references('id')->on('distribution_types')->onDelete('cascade');
            $table->unsignedBigInteger('business_id')->index()->after('skdu');
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade');
            $table->unsignedBigInteger('marketing_id')->index()->after('export_to');
            $table->foreign('marketing_id')->references('id')->on('marketings')->onDelete('cascade');

            $table->char('companion_province', 2)->after('companion_address')->nullable();
            $table->foreign('companion_province')->references('id')->on('provinces')->onDelete('cascade');
            $table->char('companion_city', 4)->after('companion_province')->nullable();
            $table->foreign('companion_city')->references('id')->on('regencies')->onDelete('cascade');
            $table->char('companion_district', 7)->after('companion_city')->nullable();
            $table->foreign('companion_district')->references('id')->on('districts')->onDelete('cascade');
            $table->char('companion_village', 10)->after('companion_district')->nullable();
            $table->foreign('companion_village')->references('id')->on('villages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utamas', function (Blueprint $table) {
            //
        });
    }
}
