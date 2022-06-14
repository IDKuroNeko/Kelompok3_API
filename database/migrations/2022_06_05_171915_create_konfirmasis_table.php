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
        Schema::create('konfirmasis', function (Blueprint $table) {
            $table->id();
            $table->string('IDTransportasi');
            $table->string('id_pesanan');
            $table->string('Armada');
            $table->string('RuteDanTujuan');
            $table->integer('JumlahSeat');
            $table->double('TotalHarga', 8, 2);
            $table->string('Status');
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
        Schema::dropIfExists('konfirmasis');
    }
};


