<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transportasi extends Model
{
    protected $filliable = [
        'IDRute', 'IDJadwal', 'IDClass', 'Armada', 'RutedanTujuan', 'JadwalKeberangkatan', 'JumlahSeat', 'TipeClass', 'Harga'
    ];
    public $timestamps = false;
}
