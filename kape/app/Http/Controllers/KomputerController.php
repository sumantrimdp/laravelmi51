<?php

namespace App\Http\Controllers;

use App\Models\Komputer;
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
        //dd($hasil);
        return view('komputer.index')->with('hasil', $hasil);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Komputer $komputer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Komputer $komputer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komputer $komputer)
    {
        //
    }
}
