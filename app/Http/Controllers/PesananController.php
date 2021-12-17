<?php

namespace App\Http\Controllers;

use App\Models\DrinkOrder;
use App\Models\FoodOrder;
use Illuminate\Http\Request;

class PesananController extends Controller
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
        return view('waiters.pemesanan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'servis' => 'required|not_in:0',
            'no_meja' => 'required|not_in:0',
            
        ]);

        foreach ($request->pesananMakanan as $key => $value) {
            if ($value['makanan_dipesan'] != NULL) {
            $orders = FoodOrder::create([
                'servis' => $request->servis,
                'no_meja' => $request->no_meja,
                'makanan_dipesan' => $value['makanan_dipesan'],
                'porsi_makanan' => $value['porsi_makanan']
            ]);
            $orders->save();
            }
        }

        foreach ($request->pesananMinuman as $key => $value) {
            if ($value['minuman_dipesan'] != NULL) {
            $orders = DrinkOrder::create([
                'servis' => $request->servis,
                'no_meja' => $request->no_meja,
                'minuman_dipesan' => $value['minuman_dipesan'],
                'porsi_minuman' => $value['porsi_minuman']
            ]);
             $orders->save();
            }
        }

        return redirect('/pemesanan/status')->with('toast_success', 'Menu Berhasil Dipesan!');
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
