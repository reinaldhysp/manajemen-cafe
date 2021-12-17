<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Kitchen;
use App\Models\Food;
use App\Models\Drink;
use App\Models\FoodOrder;
use App\Models\DrinkOrder;
use Illuminate\Http\Request;

class KitchenController extends Controller
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
        return view('kitchens.dashboard', compact('foodorder','drinkorder'));
    }

    public function panduan()
    {
        return view('kitchens.panduan');
    }

    public function menumakanan()
    {
        $foods = Food::all();
        return view('kitchens.menumakanan' , compact('foods'));
    }

    public function menuminuman()
    {
        $drinks = Drink::all();
        return view('kitchens.menuminuman' , compact('drinks'));
    }

    public function createfood()
    {
        return view('kitchens.addfood');
    }

    public function createdrink()
    {
        return view('kitchens.adddrink');
    }

    public function storefood(Request $request)
    {
        $validatedData = $request->validate([
            'food_name' => 'required',
            'price' => 'required',
        ]);
        
        $food = new Food();
        $food->id = $request->id;
        $food->food_name = $request->food_name;
        $food->price = $request->price;

        $food->save();

        return redirect('/kitchen/menumakanan')->with('toast_success', 'Menu berhasil ditambahkan!');
    }

    public function storedrink(Request $request)
    {
        $validatedData = $request->validate([
            'drink_name' => 'required',
            'price' => 'required',
        ]);
        
        $drink = new Drink();
        $drink->id = $request->id;
        $drink->drink_name = $request->drink_name;
        $drink->price = $request->price;
        
        $drink->save();

        return redirect('/kitchen/menuminuman')->with('toast_success', 'Menu berhasil ditambahkan!');
    }



    public function help()
    {
        return view('kitchen.help');
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
    public function editfood($id)
    {
        $food = DB::table('food')->where('id',$id)->first();
        return view('kitchens.editmakanan', compact('food'));
    }
    public function editdrink($id)
    {
        $drink = DB::table('drinks')->where('id',$id)->first();
        return view('kitchens.editminuman', compact('drink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatefood(Request $request, $id)
    {
        $validatedData = $request->validate([
            'food_name' => 'required',
            'price' => 'required',
            
        ]);

        DB::table('food')->where('id',$id)
        ->update([
            'food_name' => $request->food_name,
            'price' => $request->price,
            
        ]);       

        return redirect('/kitchen/menumakanan')->with('success','Update Berhasil');
    }
    public function updatedrink(Request $request, $id)
    {
        $validatedData = $request->validate([
            'drink_name' => 'required',
            'price' => 'required',
            
        ]);

        DB::table('drinks')->where('id',$id)
        ->update([
            'drink_name' => $request->drink_name,
            'price' => $request->price,
            
        ]);       

        return redirect('/kitchen/menuminuman')->with('success','Update Berhasil');
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

    public function updatestatusfood($id)
    {
        \DB::table('food_orders')->where('id',$id)->update(
            [
                'status' => 'served'
            ]
        );

        return redirect('/kitchen/dashboard')->with('success','Status berhasil di update!');
    }
    public function updatestatusdrink($id)
    {
        \DB::table('drink_orders')->where('id',$id)->update(
            [
                'status' => 'served'
            ]
        );

        return redirect('/kitchen/dashboard')->with('success','Status berhasil di update!');
    }

    public function destroyfood($id)
    {
        Food::destroy($id);
        return redirect('/kitchen/menumakanan');
    }
    public function destroydrink($id)
    {
        Drink::destroy($id);
        return redirect('/kitchen/menuminuman');
    }

}
