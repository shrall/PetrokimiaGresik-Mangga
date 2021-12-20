<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('auth_key')->nullable();
            $table->timestamp('key_expired')->nullable();
            $table->string('no_handphone')->nullable();
            $table->string('identity_id')->nullable();
            $table->string('fam_card_code')->nullable();
            $table->enum('gender', ['m', 'f'])->default('m')->nullable();
            $table->enum('religion', ['0', '1', '2', '3', '4', '5'])->comment('Islam = 0 Kristen = 1 Katolik = 2 Hindu = 3 Buddha = 4 Kong Hu Chu = 5')->nullable();
            $table->string('referral_code')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('status')->default(0);
            $table->string('address')->nullable();
            $table->timestamp('birth_date')->nullable();
            $table->timestamp('confirmed_date')->nullable();
            $table->integer('blocked_at')->nullable();
            $table->string('registration_ip')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->timestamp('last_login_time')->nullable();
            $table->text('token')->nullable();
            $table->timestamp('token_expired')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
