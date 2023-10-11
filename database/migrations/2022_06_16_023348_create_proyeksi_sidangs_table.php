<?php

use App\Models\PrediksiSidang;
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
        Schema::create('proyeksi_sidangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prediksi_sidang_id')->constrained('prediksi_sidangs');
            $table->date('proyeksi_sidang')->format('M-y');
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
        Schema::dropIfExists('proyeksi_sidangs');
    }
};
