<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('user_role')->index()->after('referral_code');
            $table->foreign('user_role')->references('id')->on('user_roles')->onDelete('cascade');
            $table->char('province_id', 2)->after('address');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->char('city_id', 4)->after('province_id');
            $table->foreign('city_id')->references('id')->on('regencies')->onDelete('cascade');
            $table->char('district_id', 7)->after('city_id');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
