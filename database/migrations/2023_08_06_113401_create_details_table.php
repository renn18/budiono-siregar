<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kapal')->nullable();
            $table->foreign('id_kapal')->references('id')->on('kapal')->onDelete('cascade');
            $table->string('nama_kapal');
            $table->string('muat_barang')->nullable();
            $table->string('bongkar')->nullable();
            $table->string('jenis_barang')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('details');
    }
};
