<?php

namespace App\Http\Controllers;

use App\supir;
use Illuminate\Http\Request;

class SupirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supir  = supir::all();
        return View('supir.index', compact('supir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booked.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required|min:2',
            'no_identitas' => 'required|min:2',
            'no_hp' => 'required|min:2',
            'alamat' => 'required|min:2',
            'harga' => 'required|min:2'
        ]);

        $supir = new supir;
        $supir->nama = $request->nama;
        $supir->jenis_kelamin = $request->jenis_kelamin;
        $supir->no_identitas = $request->no_identitas;
        $supir->no_hp = $request->no_hp;
        $supir->alamat = $request->alamat;
        $supir->harga = $request->harga;
        $supir->save();
        return redirect()->route('supir.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supir = supir::findOrFail($id);
        return view('supir.show',compact('supir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supir = supir::findOrFail($id);
        return view('supir.edit',compact('supir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d = supir::findOrFail($id);
        $supir->nama = $request->nama;
        $supir->jenis_kelamin = $request->jenis_kelamin;
        $supir->no_identitas = $request->no_identitas;
        $supir->no_hp = $request->no_hp;
        $supir->alamat = $request->alamat;
        $supir->harga = $request->harga;
        $supir->save();
        return redirect()->route('supir.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supir = supir::findOrFail($id);
        $supir->delete();
        return redirect()->route('supir.index');
    }
}
