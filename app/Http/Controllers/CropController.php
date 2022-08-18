<?php

namespace App\Http\Controllers;

use App\Models\crop;
use Illuminate\Http\Request;

class CropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crops = crop::all();

        return view('crop.index',compact('crops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        crop::create([
            'name'=> $request->input('name'),
            'description'=> $request->input('description'),
            'duration'=>$request->input('duration')
        ]);
        return redirect()->route('crop.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function show(crop $crop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function edit(crop $crop)
    {
        return view('crop.edit',compact('crop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, crop $crop)
    {
        $crop->update([
        'name'=> $request->input('name'),
        'description'=> $request->input('description'),
        'duration'=>$request->input('duration')
    ]);
        return redirect()->route('crop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function destroy(crop $crop)
    {
        $crop->delete();

        return redirect()->route('crop.index');
    }
}
