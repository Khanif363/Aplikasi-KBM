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
            // $table->foreignId('alpha_id');
            $table->foreignId('kelas_id')->nullable();
            $table->string('name')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('nisn')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('address')->nullable();
            $table->string('number_phone')->unique();
            $table->text('image')->nullable();
            $table->string('mapel')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('role')->default('Siswa');
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
