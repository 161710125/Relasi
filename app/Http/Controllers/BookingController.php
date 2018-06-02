<?php

namespace App\Http\Controllers;

use App\booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book  = booking::all();
        return View('booked.index', compact('booked'));
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

        $supir = new kabupaten;
        $supir->nama = $request->nama;
        $supir->jenis_kelamin = $request->jenis_kelamin;
        $supir->no_identitas = $request->no_identitas;
        $supir->no_hp = $request->no_hp;
        $supir->alamat = $request->alamat;
        $supir->harga = $request->harga;
        $supir->save();
        return redirect()->route('w.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        //
    }
}
