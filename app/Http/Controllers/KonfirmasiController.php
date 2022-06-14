<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfirmasi;

class KonfirmasiController extends Controller
{

    public function index()
    {
        // Get - All data from database
        $konfirmasis = Konfirmasi::all();
        return response()->json($konfirmasis);
    }


    public function store(Request $request)
    {
        // Post Data to database from user

        //validation

        $this->validate($request,[
            'IDTransportasi' => 'required',
            'id_pesanan' => 'required',
            'Armada' => 'required',
            'RuteDanTujuan' => 'required',
            'JumlahSeat' => 'required',
            'TotalHarga' => 'required',
            'Status' => 'required',
        ]);

        $konfirmasi = new Konfirmasi();


        //text data
        $konfirmasi->IDTransportasi = $request->input('IDTransportasi');
        $konfirmasi->id_pesanan = $request->input('id_pesanan');
        $konfirmasi->Armada = $request->input('Armada');
        $konfirmasi->RuteDanTujuan = $request->input('RuteDanTujuan');
        $konfirmasi->JumlahSeat = $request->input('JumlahSeat');
        $konfirmasi->TotalHarga = $request->input('TotalHarga');
        $konfirmasi->Status = $request->input('Status');

        $konfirmasi->save();
        
        return response()->json($konfirmasi);


    }


    public function show($id)
    {
        // give 1 items from konfirmasis table
        $konfirmasi = Konfirmasi::find($id);
        return response()->json($konfirmasi);
    }


    public function update(Request $request, $id)
    {
        // Update - ID
        $this->validate($request,[
            'IDTransportasi' => 'required',
            'id_pesanan' => 'required',
            'Armada' => 'required',
            'RuteDanTujuan' => 'required',
            'JumlahSeat' => 'required',
            'TotalHarga' => 'required',
            'Status' => 'required',
        ]);

        $konfirmasi = Konfirmasi::find($id);

        $konfirmasi->IDTransportasi = $request->input('IDTransportasi');
        $konfirmasi->id_pesanan = $request->input('id_pesanan');
        $konfirmasi->Armada = $request->input('Armada');
        $konfirmasi->RuteDanTujuan = $request->input('RuteDanTujuan');
        $konfirmasi->JumlahSeat = $request->input('JumlahSeat');
        $konfirmasi->TotalHarga = $request->input('TotalHarga');
        $konfirmasi->Status = $request->input('Status');

        $konfirmasi->save();

        return response()->json($konfirmasi);

    }

   
    public function destroy($id)
    {
        //Delete - ID
        $konfirmasi = Konfirmasi::find($id);
        $konfirmasi->delete();
        return response()->json('Data Delete Successfully!');
    }
}
