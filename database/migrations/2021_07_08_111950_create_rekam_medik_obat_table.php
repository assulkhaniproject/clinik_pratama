<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekamMedikObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam_medik_obat', function (Blueprint $table) {
            $table->foreignId('rekam_medik_id')->constrained('rekam_medik');
            $table->unsignedInteger('obat_id');
            $table->foreign('obat_id')->references('id')->on('obat');
            $table->char('resep_obat')->nullabel();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekam_medik_obat');
    }
}
