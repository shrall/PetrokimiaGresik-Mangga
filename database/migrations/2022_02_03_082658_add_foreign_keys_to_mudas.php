<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMudas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mudas', function (Blueprint $table) {
            $table->unsignedBigInteger('business_id')->index()->after('finance_attachment');
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade');
            $table->unsignedBigInteger('type_id')->index()->after('leader_name');
            $table->foreign('type_id')->references('id')->on('muda_types')->onDelete('cascade');
            $table->unsignedBigInteger('category_id')->index()->after('type_id');
            $table->foreign('category_id')->references('id')->on('muda_categories')->onDelete('cascade');
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
