<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $identitas = $request->input('identitas');
        $nomor = $request->input('nomor');
        $kelas = $request->input('kelas');
        $jadwal = $request->input('jadwal');
        $penumpangdibawah60 = $request->input('penumpangdibawah60');
        $penumpangdiatas60 = $request->input('penumpangdiatas60');
        $harga = $request->input('harga');
        $total = $request->input('total');

        $user = auth()->user()->id;

        $data = ['nama' => $nama, 'user_id' => $user, 'identitas' => $identitas, 'nomor' => $nomor, 'category_id' => $kelas, 'jadwal' => $jadwal, 'penumpangdibawah60' => $penumpangdibawah60, 'penumpangdiatas60' => $penumpangdiatas60, 'harga' => $harga, 'total' => $total];

        DB::table('order')->insert($data);

        return redirect('/invoice')->with('success', 'Booking Success, please do the payment');
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
