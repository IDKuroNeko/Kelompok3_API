<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal;

class JadwalController extends Controller
{
    public function index()
    {
        //Get all data from database
        $jadwals = jadwal::all();
        return response()->json($jadwals);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'ID_Transportasi' => 'required',
            'Armada' => 'required',
            'Tanggal_Keberangkatan' => 'required',
            'Tanggal_Tiba' => 'required',
            'Jam_Keberangkatan' => 'required',
            'Jam_Tiba' => 'required',
            'Jadwal_Keberangkatan' => 'required',   
        ]);
    

        $jadwal = new jadwal;

        //text data
        $jadwal->ID_Transportasi = $request->input ('ID_Transportasi');
        $jadwal->Armada = $request->input ('Armada');
        $jadwal->Tanggal_Keberangkatan = $request->input ('Tanggal_Keberangkatan');
        $jadwal->Tanggal_Tiba = $request->input ('Tanggal_Tiba');
        $jadwal->Jam_Keberangkatan = $request->input ('Jam_Keberangkatan');
        $jadwal->Jam_Tiba = $request->input ('Jam_Tiba');
        $jadwal->Jadwal_Keberangkatan = $request->input ('Jadwal_Keberangkatan');

        $jadwal->save();

        return response()->json($jadwal);

    }

 
    public function show($id)
    {
        //Give 1 items from jadwal_table
        $jadwal = jadwal::find($id);
        return response()->json($jadwal);
    }


    public function update(Request $request, $id)
    {
        //update - ID
        $this->validate($request,[
            'ID_Transportasi' => 'required',
            'Armada' => 'required',
            'Tanggal_Keberangkatan' => 'required',
            'Tanggal_Tiba' => 'required',
            'Jam_Keberangkatan' => 'required',
            'Jam_Tiba' => 'required',
            'Jadwal_Keberangkatan' => 'required',
        ]);

        $jadwal = jadwal::find($id);

        $jadwal->ID_Transportasi = $request->input ('ID_Transportasi');
        $jadwal->Armada = $request->input ('Armada');
        $jadwal->Tanggal_Keberangkatan = $request->input ('Tanggal_Keberangkatan');
        $jadwal->Tanggal_Tiba = $request->input ('Tanggal_Tiba');
        $jadwal->Jam_Keberangkatan = $request->input ('Jam_Keberangkatan');
        $jadwal->Jam_Tiba = $request->input ('Jam_Tiba');
        $jadwal->Jadwal_Keberangkatan = $request->input ('Jadwal_Keberangkatan');

        $jadwal->save();

        return response()->json($jadwal);

}


public function destroy($id)
{
    //Delete - ID
    $jadwal = jadwal::find($id);
    $jadwal->delete();
    return response()->json('Data Delete Successfully!');
    }
}