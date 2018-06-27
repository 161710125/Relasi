<?php

namespace App\Http\Controllers;
use App\booking;
use App\mobil;
use App\supir;
use Illuminate\Http\Request;
use Carbon\Carbon;
class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking=booking::all();
        $mobil=mobil::all();
        $supir=supir::all();
        return view('front.index',compact('supir','booking','mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.index');
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
        'nama_p' => 'required',
        'nama_a' => 'required',
        'no_hp' => 'required',
        'alamat' => 'required',
        'jemput_p' => 'required',
        'jemput_a' => 'required',
        'identitas' => 'required',
        'id_mobil' => '',
        'id_supir' => '',
        'tgl_pinjam' => 'required',
        'tgl_kembali' => 'required'

        ]);
        $front = new booking;
        $front->nama_p = $request->nama_p;
        $front->nama_a = $request->nama_a;
        $front->no_hp = $request->no_hp;
        $front->alamat = $request->alamat;
        $front->jemput_p = $request->jemput_p;
        $front->jemput_a = $request->jemput_a;
        $front->identitas = $request->identitas;
        $front->id_mobil = $request->id_mobil;
        $front->id_supir = $request->id_supir;
        $front->tgl_pinjam = $request->tgl_pinjam;
        $front->tgl_kembali = $request->tgl_kembali;
        $front->save();
        return redirect()->route('front.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
