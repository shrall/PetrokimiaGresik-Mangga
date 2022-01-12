<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBusinesses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('businesses', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->index()->after('postal_code');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('sector_id')->index()->after('user_id');
            $table->foreign('sector_id')->references('id')->on('sectors');
            $table->unsignedBigInteger('subsector_id')->index()->after('sector_id');
            $table->foreign('subsector_id')->references('id')->on('subsectors');

            $table->char('province_id', 2)->after('subsector_id');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->char('city_id', 4)->after('province_id');
            $table->foreign('city_id')->references('id')->on('regencies')->onDelete('cascade');
            $table->char('district_id', 7)->after('city_id');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->char('village_id', 10)->after('district_id');
            $table->foreign('village_id')->references('id')->on('villages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('businesses', function (Blueprint $table) {
            //
        });
    }
}
