<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMudaMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('muda_members', function (Blueprint $table) {
            $table->unsignedBigInteger('muda')->index()->after('name');
            $table->foreign('muda')->references('id')->on('mudas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('muda_members', function (Blueprint $table) {
            //
        });
    }
}
