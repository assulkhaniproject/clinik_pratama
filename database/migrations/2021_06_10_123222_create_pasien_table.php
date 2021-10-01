<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategori_pasien');
            $table->string('civitas', 10)->nullable();
            $table->string('nim_nipy', 20)->nullable();
            $table->string('nama', 100);
            $table->char('no_identitas', 16)->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin', 9);
            $table->text('alamat');
            $table->char('no_hp');
            $table->char('usia', 2);
            $table->char('golongan_darah', 2);
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
        Schema::dropIfExists('pasien');
    }
}
