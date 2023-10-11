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
        Schema::create('prediksi_sidangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nim')->unique();
            $table->string('nama');
            $table->string('kelas');
            $table->string('kode_dosen_wali');
            $table->string('program_studi');
            $table->double('ipk');
            $table->string('jenis_mahasiswa');
            $table->date('tanggal_keluar')->format('d-M-y');
            $table->string('pbb1');
            $table->string('pbb2');
            $table->integer('total_sks');
            $table->integer('eprt');
            $table->date('periode_sidang')->format('M-y');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prediksi_sidangs');
    }
};
