<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtamaMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utama_members', function (Blueprint $table) {
            $table->unsignedBigInteger('utama_id')->index()->after('phone');
            $table->foreign('utama_id')->references('id')->on('utamas')->onDelete('cascade');
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
