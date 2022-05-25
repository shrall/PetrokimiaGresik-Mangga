<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMheTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mhe_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('attendee_name');
            $table->string('attendee_email');
            $table->string('attendee_phone');
            $table->integer('is_approved')->default(0);
            $table->text('evidence');
            $table->string('reference_code');
            $table->unsignedBigInteger('mhe_event_id')->index();
            $table->foreign('mhe_event_id')->references('id')->on('mhe_events')->onDelete('cascade');
            $table->unsignedBigInteger('mhe_ucode_id')->index();
            $table->foreign('mhe_ucode_id')->references('id')->on('mhe_ucodes')->onDelete('cascade');
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
        Schema::dropIfExists('mhe_transactions');
    }
}
