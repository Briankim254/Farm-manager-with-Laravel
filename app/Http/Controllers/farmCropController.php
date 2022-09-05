<?php

namespace App\Http\Controllers;

use App\Models\crop;
use App\Models\farm;
use App\Models\farm_crop;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class farmCropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farm_crops=farm_crop::all();
        if (session('success_message')){
            Alert::toast(session('success_message'),'success')->autoClose(4000);
        }

        return view('farm-crop.index',compact('farm_crops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farms=farm::all();
        $crops=crop::all();
        return view('farm-crop.create',compact('farms','crops'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result= $request->all();
        farm_crop::create($result);
        return redirect()->route('farm-crop.index')->withSuccessMessage('farm crop created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\farm_crop  $farm_crop
     * @return \Illuminate\Http\Response
     */
    public function show(farm_crop $farm_crop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\farm_crop  $farm_crop
     * @return \Illuminate\Http\Response
     */
    public function edit(farm_crop $farm_crop)
    {
        $farms=farm::all();
        $crops=crop::all();
        return view('farm-crop.edit',compact('farm_crop','farms','crops'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\farm_crop  $farm_crop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, farm_crop $farm_crop)
    {
        $farm_crop->update($request->all());
        return redirect()->route('farm-crop.index')->withSuccessMessage('farm crop updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\farm_crop  $farm_crop
     * @return \Illuminate\Http\Response
     */
    public function destroy(farm_crop $farm_crop)
    {
        $farm_crop->delete();
        return redirect()->route('farm-crop.index')->withSuccessMessage('farm crop deleted successfully');
    }
}
