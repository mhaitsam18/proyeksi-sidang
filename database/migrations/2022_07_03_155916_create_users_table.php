<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('kode_dosen')->unique();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('role_id')->constrained('roles');
            $table->bigInteger('nip');
            $table->string('nama');
            $table->string('nama_gelar');
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
};
