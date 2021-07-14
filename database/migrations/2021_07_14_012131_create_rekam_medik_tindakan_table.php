<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekamMedikTindakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam_medik_tindakan', function (Blueprint $table) {
            $table->foreignId('rekam_medik_id')->constrained('rekam_medik');
            $table->foreignId('tindakan_id')->constrained('tindakan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekam_medik_tindakan');
    }
}
