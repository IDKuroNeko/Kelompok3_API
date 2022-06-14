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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string("ID_Transportasi");
            $table->string("Armada");
            $table->string("Tanggal_Keberangkatan");
            $table->string("Tanggal_Tiba");
            $table->string("Jam_Keberangkatan");
            $table->string("Jam_Tiba");
            $table->string("Jadwal_Keberangkatan");
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
        Schema::dropIfExists('jadwals');
    }
};
