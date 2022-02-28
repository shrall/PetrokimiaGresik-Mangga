<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToMudas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mudas', function (Blueprint $table) {
            $table->text('leader_ktm')->nullable();
            $table->text('leader_ktp')->nullable();
            $table->text('complete_form')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mudas', function (Blueprint $table) {
            //
        });
    }
}
