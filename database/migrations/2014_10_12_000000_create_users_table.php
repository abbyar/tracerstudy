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
            $table->string('level')->nullable();
            $table->string('status')->nullable();
            $table->string('nim')->unique();
            $table->string('perguruan_tinggi')->nullable();
            $table->integer('tahun_masuk')->nullable();
            $table->integer('tahun_lulus')->nullable();
            $table->string('jurusan_id')->nullable();
            $table->string('nama');
            $table->string('email')->nullable();
            $table->string('hp')->nullable();
            $table->string('tgl');
            $table->timestamp('email_verified_at')->nullable();
            $table->text('alamat')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('tempat_bekerja')->nullable();
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
