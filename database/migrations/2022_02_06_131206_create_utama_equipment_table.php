<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtamaEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utama_equipment', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('evaluation_id')->index();
            $table->foreign('evaluation_id')->references('id')->on('utama_evaluations')->onDelete('cascade');
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
        Schema::dropIfExists('utama_equipment');
    }
}
