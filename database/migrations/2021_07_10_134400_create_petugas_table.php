<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_str', 20)->unique();
            $table->string('nama', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('tempat_lahir', 20);
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin', 9);
            $table->string('kategori', 10);
            $table->text('alamat', 50);
            $table->char('no_hp', 13);
            $table->text('foto')->nullable();
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
        Schema::dropIfExists('petugas');
    }
}
