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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kapal')->nullable();
            $table->foreign('id_kapal')->references('id')->on('kapal')->onDelete('cascade');
            $table->string('nama_kapal');
            $table->date('tanggal_tiba');
            $table->string('tiba_dari');
            $table->string('posisi_tambat');
            $table->string('tujuan');
            $table->date('tanggal_rencana_berangkat');
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
        Schema::dropIfExists('schedules');
    }
};
