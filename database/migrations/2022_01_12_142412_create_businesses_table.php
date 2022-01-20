<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number');
            $table->string('name');
            $table->text('logo')->nullable();
            $table->text('address');
            $table->string('type');
            $table->string('instagram')->nullable();
            $table->integer('asset_value');
            $table->integer('postal_code')->nullable();
            $table->integer('status');
            $table->timestamp('approved_by_surveyor_at')->nullable();
            $table->timestamp('approved_by_pimpinan_at')->nullable();
            $table->timestamp('rejected_by_surveyor_at')->nullable();
            $table->timestamp('rejected_by_pimpinan_at')->nullable();
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
        Schema::dropIfExists('businesses');
    }
}
