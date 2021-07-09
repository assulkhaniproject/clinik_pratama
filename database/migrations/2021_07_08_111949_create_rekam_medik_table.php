<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekamMedikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam_medik', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekam_medik');
            $table->char('no_identitas', 16);
            $table->date('tanggal_periksa');
            $table->foreignId('dokter_id')->constrained('dokter');
            $table->foreignId('pemeriksaan_id')->constrained('pemeriksaan');
            $table->string('keluhan',100)->nullable();
            $table->string('tindakan',100)->nullable();
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
        Schema::dropIfExists('rekam_medik');
    }
}
