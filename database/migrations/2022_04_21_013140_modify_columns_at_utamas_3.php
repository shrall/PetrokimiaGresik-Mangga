<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnsAtUtamas3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utamas', function (Blueprint $table) {
            $table->string('instagram')->nullable();
            $table->text('toko_description')->nullable();
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
