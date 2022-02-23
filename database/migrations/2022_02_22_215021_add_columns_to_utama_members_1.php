<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUtamaMembers1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utama_members', function (Blueprint $table) {
            $table->text('ktp_selfie')->nullable()->change();
            $table->string('kk_code');
            $table->text('address');
            $table->bigInteger('income');
            $table->bigInteger('cost');
            $table->bigInteger('profit');
            $table->bigInteger('land');
            $table->bigInteger('building');
            $table->bigInteger('production_tools');
            $table->bigInteger('supply');
            $table->bigInteger('loan_amount');
            $table->text('member_photo')->nullable();
            $table->integer('cow_count')->nullable();
            $table->bigInteger('cow_price')->nullable();
            $table->bigInteger('human_resource')->nullable();
            $table->bigInteger('medicine')->nullable();
            $table->bigInteger('concentrate')->nullable();
            $table->bigInteger('hmt')->nullable();
            $table->bigInteger('cultivation')->nullable();
            $table->bigInteger('transportation')->nullable();
            $table->unsignedBigInteger('land_ownership')->index()->nullable();
            $table->foreign('land_ownership')->references('id')->on('establishment_statuses')->onDelete('cascade');
            $table->integer('land_area')->nullable();
            $table->bigInteger('seed')->nullable();
            $table->bigInteger('feed')->nullable();
            $table->bigInteger('others')->nullable();
            $table->integer('period_month')->nullable();
            $table->bigInteger('fertilizer')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utama_members', function (Blueprint $table) {
            //
        });
    }
}
