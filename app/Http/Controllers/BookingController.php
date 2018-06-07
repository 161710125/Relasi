<?php

namespace App\Http\Controllers;
use App\customer;
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
        $customer = customer::all();
        $mobil = mobil::all();
        $supir = supir::all();
        $booking = booking::all();
        return view('booking.create',compact('customer','mobil','supir','booking'));
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
            'id_customer'=>'required',
            'id_mobil'=>'required',
            'id_supir'=>'required',
            'tgl_pinjam'=>'required',
            'tgl_kembali'=>'required'
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
    public function edit($id)
    {
        $booking = booking::findOrFail($id);
        $customer = customer::all();
        $customerselect = customer::findOrFail($id)->id_customer; 
        $mobil = mobil::all();
        $mobilselect = mobil::findOrFail($id)->id_mobil;
        $supir = supir::all();
        $supirselect = supir::findOrFail($id)->id_supir;
        return view('booking.edit',compact('booking','customer','customerselect','mobil','mobilselect','supir','supirselect'));
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
            'id_customer'=>'min:4|required',
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
