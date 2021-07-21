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
            $table->foreignId('petugas_id')->constrained('petugas');
            $table->foreignId('pemeriksaan_id')->nullable()->constrained('pemeriksaan');
            $table->text('keluhan_lain')->nullable();
            $table->text('tindakan_lain')->nullable();
            $table->text('resep_aturan_minum')->nullable();
            $table->string('status', 1)->default(1); //status dimulai dari 1 (dibuat oleh admin)
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
