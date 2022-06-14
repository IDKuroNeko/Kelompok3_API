<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stasiun;

class StasiunController extends Controller
{
    public function index()
    {
        // Get - all data from database
        $stasiuns = Stasiun::all();
        return response()->json($stasiuns);
    }

    public function store(Request $request)
    {
        // POST Data to database from user

        // validatio

        $this->validate($request,[
            'Lokasi' => 'required',
            'KodeStasiun' => 'required',
            'NamaStasiun' => 'required'
        ]);
        $stasiun = new Stasiun();

        $stasiun->Lokasi = $request->input('Lokasi');
        $stasiun->KodeStasiun = $request->input('KodeStasiun');
        $stasiun->NamaStasiun = $request->input('NamaStasiun');

        $stasiun->save();

        return response()->json($stasiun);
    }

    public function show($id)
    {
        // give 1 items from stasiuns table
        $stasiun = Stasiun::all();
        return response()->json($stasiun);
    }

    public function update(Request $request, $id)
    {
        // Update - ID

        $this->validate($request,[
            'Lokasi' => 'required',
            'KodeStasiun' => 'required',
            'NamaStasiun' => 'required'
        ]);
        
        $stasiun = Stasiun::find($id);

        $stasiun->Lokasi = $request->input('Lokasi');
        $stasiun->KodeStasiun = $request->input('KodeStasiun');
        $stasiun->NamaStasiun = $request->input('NamaStasiun');

        $stasiun->save();

        return response()->json($stasiun);
    }

    public function destroy($id)
    {
        // Delete - ID
        $stasiun = Stasiun::find($id);
        $stasiun->delete();
        return response()->json('Stasiun Deleted Succesfully');
    }
}
