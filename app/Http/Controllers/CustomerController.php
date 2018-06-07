<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = customer::all();
        return view('customer.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
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
            'alamat' => 'required|min:2',
            'no_hp' => 'required|min:2',
            'jenis_kelamin' => 'min:2'
        ]);

        $supir = new customer;
        $supir->nama = $request->nama;
        $supir->alamat = $request->alamat;
        $supir->no_hp = $request->no_hp;
        $supir->jenis_kelamin = $request->jenis_kelamin;
        $supir->save();
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = customer::findOrFail($id);
        return view('customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = customer::findOrFail($id);
        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $this->validate($request,[
            'nama' => 'required|max:255',
            'alamat' => 'required|min:2',
            'no_hp' => 'required|min:2',
            'jenis_kelamin' => 'required|min:2'
        ]);
        $customer = customer::findOrFail($id);
        $customer->nama = $request->nama;
        $customer->alamat = $request->alamat;
        $customer->no_hp = $request->no_hp;
        $customer->jenis_kelamin = $request->jenis_kelamin;
        $customer->save();
        return redirect()->route('customer.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        $customer = customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
