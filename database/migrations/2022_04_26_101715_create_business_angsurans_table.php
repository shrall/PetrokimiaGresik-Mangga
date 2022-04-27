<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessAngsuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_angsurans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("amount");
            $table->integer("installment_counter");
            $table->text("proof");
            $table->unsignedBigInteger('business_id')->index();
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade');
            $table->unsignedBigInteger('status_id')->index();
            $table->foreign('status_id')->references('id')->on('angsuran_statuses')->onDelete('cascade');
            $table->timestamp('approved_at')->nullable();
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
        Schema::dropIfExists('business_angsurans');
    }
}
