<?php

namespace App\Http\Controllers;

use App\Models\Komputer;
use App\Models\Ruang;
use Illuminate\Http\Request;

class KomputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // panggil model Ruang
        $hasil = komputer ::all();
        // cek isi variabel $hasil
        // cek isi variabel $hasil
        // dd($hasil);
        return view('komputer.index')->with('hasil', $hasil);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ruang = Ruang::all();
        return view('komputer.create')->with('ruang', $ruang);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            "kode_komputer" => "required",
            "spesifikasi" => "required",
            "ruang_id" => "required",

        ]);
      

        //simpan ke table ruang
        Komputer::create($input);

        // redirect ke route ruang.index
        return redirect()->route('komputer.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Komputer $komputer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $komputer)
    {
        $ruang = Ruang::all();
        $hasil = Komputer::find($komputer);
       // dd(vars: $hasil);
       return view('komputer.edit')->with('hasil', $hasil)->with('ruang', $ruang);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $komputer)
    {
        $input = $request->validate([
            "kode_komputer" => "required",
            "spesifikasi" => "required",
            "ruang_id" => "required",

        ]);

        //simpan perubahan ke table ruang
        $hasil = Komputer::find( $komputer);
        $hasil->update($input);

        return redirect()->route('komputer.index'); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($komputer)
    {
        $hasil = komputer::find($komputer);
        $hasil->delete();

         // redirect ke route ruang.index
        return redirect()->route('komputer.index');
    }

    public function getKomputer() {
        $hasil = Komputer ::all();
        return response()->json($hasil);
    }

    public function storeKomputer(Request $request){
        $input = $request->validate([
            "komputer" => "required",
        ]);
        
         //simpan ke table ruang
        Komputer::create($input);

        return response()->json(['message' => 'Data ruang berhasil disimpan']);
    }
}

