<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportasi;

class TransportasiController extends Controller
{

    public function index()
    {
        // Get - All data from database
        $Transportasis = Transportasi::all();
        return response()->json($Transportasis);
    }


    public function store(Request $request)
    {
        // Post Data to database from user

        //validation

        $this->validate($request,[
            'IDRute' => 'required',
            'IDJadwal' => 'required',
            'IDClass' => 'required',
            'Armada' => 'required',
            'RutedanTujuan' => 'required',
            'JadwalKeberangkatan' => 'required',
            'JumlahSeat' => 'required',
            'TipeClass' => 'required',
            'Harga' => 'required',
        ]);

        $Transportasi = new Transportasi();

        //text data
        $Transportasi->IDRute = $request->input('IDRute');
        $Transportasi->IDJadwal = $request->input('IDJadwal');
        $Transportasi->IDClass = $request->input('IDClass');
        $Transportasi->Armada = $request->input('Armada');
        $Transportasi->RutedanTujuan = $request->input('RutedanTujuan');
        $Transportasi->JadwalKeberangkatan = $request->input('JadwalKeberangkatan');
        $Transportasi->JumlahSeat = $request->input('JumlahSeat');
        $Transportasi->TipeClass = $request->input('TipeClass');
        $Transportasi->Harga = $request->input('Harga');

        $Transportasi->save();

        return response()->json($Transportasi);


    }


    public function show($id)
    {
        // give 1 items from Transportasis table
        $Transportasi = Transportasi::find($id);
        return response()->json($Transportasi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        // Update - Id
        $this->validate($request,[
            'IDRute' => 'required',
            'IDjadwal' => 'required',
            'IDClass' => 'required',
            'Armada' => 'required',
            'RutedanTujuan' => 'required',
            'JadwalKeberangkatan' => 'required',
            'JumlahSeat' => 'required',
            'TipeClass' => 'required',
            'Harga' => 'required',
        ]);

        $Transportasi = Transportasi::find($id);

        $Transportasi->IDRute = $request->input('IDRute');
        $Transportasi->IDJadwal = $request->input('IDJadwal');
        $Transportasi->IDClass = $request->input('IDClass');
        $Transportasi->Armada = $request->input('Armada');
        $Transportasi->RutedanTujuan = $request->input('RutedanTujuan');
        $Transportasi->JadwalKeberangkatan = $request->input('JadwalKeberangkatan');
        $Transportasi->JumlahSeat = $request->input('JumlahSeat');
        $Transportasi->TipeClass = $request->input('TipeClass');
        $Transportasi->Harga = $request->input('Harga');

        $Transportasi->save();
        
        return response()->json($Transportasi);
    }

    
    public function destroy($id)
    {
        //Delete - ID
        $Transportasi = Transportasi::find($id);
        $Transportasi->delete();
        return response()->json('Data Delete Successfully!');
    }
}
