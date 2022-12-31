<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\FoodOrder;
use App\Models\DrinkOrder;
use App\Models\Table;
use App\Models\Casir;

class CasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foodorder = FoodOrder::all();
        $drinkorder = DrinkOrder::all();
        return view('casir.dashboard', compact('foodorder','drinkorder'));
    }

    public function panduan()
    {
        return view('casir.panduan');
    }

    public function riwayat()
    {
        $foodorder = FoodOrder::onlyTrashed()->get();
        $drinkorder = DrinkOrder::onlyTrashed()->get();
        return view('casir.riwayatpemesanan', compact('foodorder','drinkorder'));
    }

    public function cetak()
    {
        $foodorder = FoodOrder::all();
        $drinkorder = DrinkOrder::all();
        return view('casir.cetakstruk', compact('foodorder','drinkorder'));
    }

    public function cetakform()
    {
        return view('casir.cetakform');
    }

    public function cetakpesanan($meja)
    {
        // dd("Nomor Meja :" . $meja);
        
        $cetakfood = FoodOrder::with('food')->where('no_meja',[$meja])->get();
        $cetakdrink = DrinkOrder::with('drinks')->where('no_meja',[$meja])->get();
        
        return view('casir.cetakmeja',compact('cetakfood','cetakdrink'));
        
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
        //
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
    public function destroyfood($id)
    {
        FoodOrder::destroy($id);
        return redirect('/casir/dashboard');
    }
    public function destroydrink($id)
    {
        DrinkOrder::destroy($id);
        return redirect('/casir/dashboard');
    }

    public function deleteAll()
    {
        FoodOrder::query()->delete();
        DrinkOrder::truncate();
        return redirect('/casir/riwayatpesanan');
    }
}
