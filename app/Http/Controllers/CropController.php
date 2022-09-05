<?php

namespace App\Http\Controllers;

use App\Models\crop;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        if (session('success_message')){
            Alert::toast(session('success_message'),'success')->autoClose(4000);
        }
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
        return redirect()->route('crop.index')->withSuccessMessage('Crop added successfully');
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
        return redirect()->route('crop.index')->withSuccessMessage('category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\crop  $crop
     * @return \Ill return redirect()->route('crop.index');uminate\Http\Response
     */
    public function destroy(crop $crop)
    {
        $crop->delete();
        return redirect()->route('crop.index')->withSuccessMessage('farm record deleted successfully');
    }
}
