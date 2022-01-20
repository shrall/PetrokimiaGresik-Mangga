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
            $table->text('picture')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('auth_key')->nullable();
            $table->timestamp('key_expired')->nullable();
            $table->string('handphone')->nullable();
            $table->string('ktp_code')->nullable();
            $table->string('kk_code')->nullable();
            $table->string('profession')->nullable();
            $table->enum('education', ['0', '1', '2', '3', '4', '5', '6', '7', '8'])->default('0')->comment('Tidak Sekolah = 0 Tidak Tamat SD = 1 SD = 2 SMP = 3 SMA/K = 4 Diploma = 5 D4/S1 = 6 S2 = 7 S3 = 8')->nullable();
            $table->string('heir')->nullable();
            $table->string('npwp')->nullable();
            $table->string('bank_number')->nullable();
            $table->string('bank_owner')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->enum('retired', ['0', '1'])->default('0')->comment('Tidak = 0 Ya = 1');
            $table->enum('gender', ['m', 'f'])->default('m');
            $table->enum('married', ['0', '1'])->default('0')->comment('Belum Kawin = 0 Kawin = 1');
            $table->string('spouse')->nullable();
            $table->enum('religion', ['0', '1', '2', '3', '4', '5', '6'])->default('0')->comment('Muslim = 0 Kristen = 1 Katolik = 2 Hindu = 3 Buddha = 4 Kong Hu Chu = 5 Lainnya = 6')->nullable();
            $table->string('referral_code')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('status')->default(0);
            $table->string('address')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->integer('postal_code')->nullable();
            $table->date('birth_date')->nullable();
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
