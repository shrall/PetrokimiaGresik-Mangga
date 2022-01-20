<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utamas', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_npwp')->nullable();
            $table->string('user_spouse')->nullable();
            $table->string('user_birth_date');
            $table->string('user_birth_place');
            $table->string('user_identity_id');
            $table->string('user_fam_card_code');
            $table->string('user_profession');
            $table->string('user_gender');
            $table->text('user_address');
            $table->string('user_rt');
            $table->string('user_rw');
            $table->string('user_village');
            $table->string('user_district');
            $table->string('user_city');
            $table->string('user_province');
            $table->string('user_postal_code');
            $table->string('user_email');
            $table->string('user_phone');
            $table->string('user_bank_branch');
            $table->string('user_bank_number');
            $table->bigInteger('request_amount');
            $table->integer('member_count')->nullable();
            $table->string('collateral');
            $table->string('best_product')->nullable();
            $table->bigInteger('business_value');
            $table->bigInteger('hr_value');
            $table->bigInteger('turnover_value');
            $table->bigInteger('sales_value');
            $table->bigInteger('total_cost');
            $table->integer('unit_amount');
            $table->string('export_to')->nullable();
            $table->string('product_distributor')->nullable();
            $table->text('business_problem');
            $table->text('establishment_picture');
            $table->text('product_picture');
            $table->text('business_sketch')->nullable();
            $table->text('house_sketch')->nullable();
            $table->enum('mail_address', ['0', '1'])->comment('Rumah = 0 Usaha = 1')->default('0');
            $table->string('telephone');
            $table->string('handphone');
            $table->string('email');
            $table->string('siup_code');
            $table->date('siup_date');
            $table->text('ktp');
            $table->text('ktp_selfie');
            $table->text('kk');
            $table->text('kk_selfie');
            $table->text('siup');
            $table->text('skdu');
            $table->text('complete_form')->nullable();
            $table->string('companion_name')->nullable();
            $table->string('companion_ktp_code')->nullable();
            $table->string('companion_wedding_code')->nullable();
            $table->date('companion_wedding_date')->nullable();
            $table->text('companion_address')->nullable();
            $table->integer('companion_postal_code')->nullable();
            $table->string('companion_telephone')->nullable();
            $table->string('companion_handphone')->nullable();
            $table->string('companion_email')->nullable();
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
        Schema::dropIfExists('utamas');
    }
}
