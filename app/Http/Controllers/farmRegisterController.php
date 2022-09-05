<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\farm_crop;
use App\Models\farm_register;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class farmRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registers= farm_register::all();
        if (session('success_message')){
            Alert::toast(session('success_message'),'success')->autoClose(4000);
        }
        return view('register.index',compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $FarmCrops=farm_crop::all();
        $categories=category::all();
        return view('register.create',compact('categories','FarmCrops'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        farm_register::create([
            'farm_crop_id'=> $request->input('farm_crop_id'),
            'category_id'=> $request->input('category_id'),
            'total_cost'=> $request->input('total_cost'),
            'quantity'=> $request->input('quantity'),
            'description'=> $request->input('description'),
            'date_created'=> $request->input('date_created'),
        ]);
        return redirect()->route('register.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\farm_register  $farm_register
     * @return \Illuminate\Http\Response
     */
    public function show(farm_register $farm_register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\farm_register  $farm_register
     * @return \Illuminate\Http\Response
     */
    public function edit(farm_register $farm_register)
    {
        return view('register.edit',compact('farm_register'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\farm_register  $farm_register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, farm_register $farm_register)
    {
        $farm_register->update([
          $request->all()
        ]);
        return redirect()->route('register.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\farm_register  $farm_register
     * @return \Illuminate\Http\Response
     */
    public function destroy(farm_register $farm_register)
    {
        $farm_register->delete($farm_register->id);
        return redirect()->route('register.index');
    }
}
