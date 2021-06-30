<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();

            $table->string('nipy')->nullable()->default('NULL');
            $table->string('nama')->nullable()->default('NULL');
            $table->string('tempat_lahir')->nullable()->default('NULL');
            $table->string('tanggal_lahir')->nullable()->default('NULL');
            $table->string('alamat')->nullable()->default('NULL');
            $table->string('angkatan')->nullable()->default('NULL');
            $table->string('jenis_kelamin')->nullable()->default('NULL');
            $table->string('agama')->nullable()->default('NULL');
            $table->string('no_hp')->nullable()->default('NULL');
            $table->string('jalur')->nullable()->default('NULL');
            $table->string('email')->nullable()->default('NULL');
            $table->string('nama_ortu')->nullable()->default('NULL');

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
        Schema::dropIfExists('pegawai');
    }
}
