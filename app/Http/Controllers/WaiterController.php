<?php

namespace App\Http\Controllers;

use App\Models\Waiter;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FoodOrder;
use App\Models\DrinkOrder;


class WaiterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waiters = User::all();
        return view('waiters.dashboard', compact('waiters'));
    }

    public function panduan()
    {
        return view('waiters.panduan');
    }

    public function dashboard()
    {
        $foodorder = FoodOrder::all();
        $drinkorder = DrinkOrder::all();
        return view('waiters.dashboard', compact('foodorder','drinkorder'));
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
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            
        ]);
        
        $waiter = new User();
        $waiter->id = $request->id;
        $waiter->name = $request->name;
        $waiter->email = $request->email;
        $waiter->password = bcrypt($request->password);
        $waiter->role = $request->role;
        
      
        $waiter->save();

        return redirect('/waiter/dashboard');
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
    public function edit()
    {
        $waiter = DB::table('users');
        return view('waiters.editProfile', compact('waiter'));
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
        DB::table('users')->where('id',$id)
        ->update([
            'id'=> $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

        return redirect('/waiter/dashboard');
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
