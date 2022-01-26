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
            $table->unsignedBigInteger('education_id')->index()->after('profession')->default(1);
            $table->foreign('education_id')->references('id')->on('education')->onDelete('cascade');
            $table->unsignedBigInteger('religion_id')->index()->after('spouse')->default(1);
            $table->foreign('religion_id')->references('id')->on('religions')->onDelete('cascade');
            $table->unsignedBigInteger('house_ownership')->after('heir')->nullable();
            $table->foreign('house_ownership')->references('id')->on('establishment_statuses')->onDelete('cascade');
            $table->char('birth_place', 4)->after('birth_date')->nullable();
            $table->foreign('birth_place')->references('id')->on('regencies')->onDelete('cascade');
            $table->char('province_id', 2)->after('address')->nullable();
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->char('city_id', 4)->after('province_id')->nullable();
            $table->foreign('city_id')->references('id')->on('regencies')->onDelete('cascade');
            $table->char('district_id', 7)->after('city_id')->nullable();
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->char('village_id', 10)->after('district_id')->nullable();
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
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
