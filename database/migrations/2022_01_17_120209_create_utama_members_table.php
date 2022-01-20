<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtamaMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utama_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ktp_code');
            $table->text('ktp');
            $table->text('ktp_selfie');
            $table->string('phone');
            $table->string('certificate_name')->nullable();
            $table->string('certificate_address')->nullable();
            $table->text('certificate')->nullable();
            $table->text('certificate_selfie')->nullable();
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
        Schema::dropIfExists('utama_members');
    }
}
