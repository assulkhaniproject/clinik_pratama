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
            $table->id();
            $table->string('no_str', 20)->nullable()->unique();
            $table->string('nipy', 50)->unique();
            $table->string('nama', 50);
            $table->string('tempat_lahir', 20);
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin', 9);
            $table->string('kategori', 10);
            $table->text('alamat', 50);
            $table->char('no_hp', 13);
            $table->string('harga', 7)->nullable();
            $table->text('foto')->nullable();

            // Login details
            $table->string('username', 100)->unique();
            $table->string('password');
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
