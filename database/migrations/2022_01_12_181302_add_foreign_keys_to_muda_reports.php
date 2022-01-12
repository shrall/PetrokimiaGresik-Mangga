<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMudaReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('muda_reports', function (Blueprint $table) {
            $table->unsignedBigInteger('muda_id')->index()->after('difference_end');
            $table->foreign('muda_id')->references('id')->on('mudas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('muda_reports', function (Blueprint $table) {
            //
        });
    }
}
