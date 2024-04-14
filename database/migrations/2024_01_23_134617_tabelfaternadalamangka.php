<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabelfaternadalamangka extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angka_faternas', function (Blueprint $table) {
            $table->id();
            $table->integer('mahasiswa');
            $table->integer('prodi');
            $table->integer('dosen');
            $table->integer('labor');
            $table->string('author')->default('Admin');
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
        Schema::dropIfExists('angka_faternas');
    }
}
