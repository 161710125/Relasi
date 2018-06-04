<?php

namespace App\Http\Controllers;

use App\mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = mobil::all();
        return view('mobil.index',compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'id_galeri'=>'required',
            'merk'=>'max:255|required',
            'plat_no'=>'max:255|required',
            'kapasitas'=>'max:255|required',
            'tahun_kel'=>'max:255|required',
            'harga'=>'max:255|integer'
        ]);
        $mobil = mobil::create($request->all());
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = mobil::findOrFail($id);
        return view('mobil.show',compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = mobil::findOrFail($id);
        return view('mobil.edit',compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'id_galeri'=>'required',
            'merk'=>'max:255|required',
            'plat_no'=>'max:255|required',
            'kapasitas'=>'max:255|required',
            'tahun_kel'=>'max:255|required',
            'harga'=>'max:255|integer'
        ]);
        $mobil = mobil::find($id);
        $mobil->update($request->all());
        return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $mobil = mobil::findOrFail($id);
    $mobil->delete();
        return redirect()->route('mobil.index'); 
}
}
