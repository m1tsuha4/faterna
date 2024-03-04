<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nidn')->nullable();
            $table->string('departemen');
            $table->string('email')->unique();
            $table->string('jabatan_akademik');
            $table->string('edukasi_s1')->nullable();
            $table->string('edukasi_s2')->nullable();
            $table->string('edukasi_s3')->nullable();
            $table->string('link_sinta')->nullable();
            $table->string('link_scopus')->nullable();
            $table->string('link_scholar')->nullable();
            $table->string('file');
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
        Schema::dropIfExists('dosens');
    }
}
