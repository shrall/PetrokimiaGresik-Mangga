<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMudasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mudas', function (Blueprint $table) {
            $table->id();
            $table->string('leader_name');
            $table->integer('member_count');
            $table->string('university');
            $table->string('faculty');
            $table->string('business_title');
            $table->text('prospect');
            $table->text('growth_plan');
            $table->integer('target');
            $table->text('needs');
            $table->text('utilization_plan');
            $table->text('return_plan');
            $table->text('description');
            $table->text('market_share');
            $table->text('market_position');
            $table->text('production_strategy');
            $table->text('organization_structure');
            $table->text('target_plan');
            $table->text('finance');
            $table->text('finance_attachment');
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
        Schema::dropIfExists('mudas');
    }
}
