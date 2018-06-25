<?php

namespace App\Http\Controllers;
use App\mobil;
use App\supir;
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
        $booking= booking::all();
        return view('booking.index', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil = mobil::all();
        $supir = supir::all();
        $booking = booking::all();
        return view('booking.create',compact('mobil','supir','booking'));
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
        $booking = booking::create($request->all());
        return redirect()->route('booking.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        $booking = booking::findOrFail($id);
        return view('booking.show',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        $booking = booking::findOrFail($booking->id);
        $mobil = mobil::all();
        $mobilselect = booking::findOrFail($booking->id)->id_mobil;
        $supir = supir::all();
        $supirselect = booking::findOrFail($booking->id)->id_supir;
        return view('booking.edit',compact('booking','mobil','mobilselect','supir','supirselect'));
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
        $this->validate($request, [
            'nama_p'=>'required',
            'nama_a'=>'required',
            'no_hp'=>'required',
            'alamat'=>'required',
            'identitas'=>'required',
            'id_mobil'=>'required',
            'id_supir'=>'required',
            'tgl_pinjam'=>'required',
            'tgl_kembali'=>'required'
        ]);
        $booking = booking::find($id);
        $booking->update($request->all());
        return redirect()->route('booking.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        $booking =booking::findOrFail($id);
        $booking->delete();
        return redirect()->route('booking.index');
    }
}
