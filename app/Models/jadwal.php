<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $fillable = [
        'ID_Jadwal', 'ID_Transportasi', 'Tanggal_Keberangkatan', 'Tanggal_Tiba', 'Jam_Keberangkatan', '	Jam_Tiba', 'JadwalKeberangkatan'
    ];
    public $timestamps = false;
}
