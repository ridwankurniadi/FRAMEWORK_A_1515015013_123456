<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nama');
            $table->String('nim');
            $table->text('alamat');
            $table->integer('pengguna_id'false,true);
            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }/**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mahasiswa');
    }
}
