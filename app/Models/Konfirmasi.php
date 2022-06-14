<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    protected $fillable = [
        'IDTransportasi', 'id_pesanan', 'Armada', 'RuteDanTujuan', 'JumlahSeat', 'TotalHarga', 'Status'
    ];
    public $timestamps = false;

}
