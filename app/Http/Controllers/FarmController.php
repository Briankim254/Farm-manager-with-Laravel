<?php

namespace App\Http\Controllers;

use App\Models\farm;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farms=farm::all();
        if (session('success_message')){
            Alert::toast(session('success_message'),'success')->autoClose(4000);
        }
        return view('farm.index',compact('farms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('farm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        farm::create(
            $request->all()
        );
        return redirect()->route('farm.index')->withSuccessMessage('farm record created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function show(farm $farm)
    {
        $farm = farm::findorfail($farm->id);
        dd(compact('farm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function edit(farm $farm)
    {
        return view('farm.edit',compact('farm'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, farm $farm)
    {
        $farm->update([
            'name'=> $request->input('name'),
            'description'=> $request->input('description'),
            'size'=> $request->input('size'),
            'created_on'=> $request->input('created_on'),
            'location'=>$request->input('location')
        ]);
        return redirect()->route('farm.index')->withSuccessMessage('farm updated  successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function destroy(farm $farm)
    {
        if ($farm->children()->exists()){
        return redirect()->route('category.index')->withToastWarning('cannot delete existing parent farm');
    }
        else{
            $farm->delete();
            return redirect()->route('farm.index')->withSuccessMessage('farm record deleted successfully');
        }

    }
}
