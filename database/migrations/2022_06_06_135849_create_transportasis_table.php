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
        Schema::create('transportasis', function (Blueprint $table) {
            $table->id();
            $table->string('IDRute');
            $table->string('IDJadwal');
            $table->integer('IDClass');
            $table->string('Armada');
            $table->string('RutedanTujuan');
            $table->string('JadwalKeberangkatan');
            $table->integer('JumlahSeat');
            $table->string('TipeClass');
            $table->integer('Harga');
            $table->timestamp('create at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transportasis');
    }
};
