<?php

namespace App\Http\Controllers;

use App\Models\farm;
use App\Models\farmLease;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LeaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farm_leases=farmLease::all();
        if (session('success_message')){
            Alert::toast(session('success_message'),'success')->autoClose(4000);
        }
        return view('lease.index', compact('farm_leases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farms=farm::all();
        return view('lease.create',compact('farms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        farmLease::create(
            $request->all()
        );
        return redirect()->route('lease.index')->withSuccessMessage('farm lease created successfully');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\farmLease  $farm_lease
     * @return \Illuminate\Http\Response
     */
    public function show(farmLease $farm_lease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\farmLease  $farm_lease
     * @return \Illuminate\Http\Response
     */
    public function edit(farmLease $farm_lease)
    {
        $farms=farm::all();
        return view('lease.edit',compact('farm_lease','farms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\farmLease  $farm_lease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, farmLease $farm_lease)
    {
        $farm_lease->update(
            $request->all()
        );
        return redirect()->route('lease.index')->withSuccessMessage('farm record updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\farmLease  $farm_lease
     * @return \Illuminate\Http\Response
     */
    public function destroy(farmLease $farm_lease)
    {
       farmLease::findorfail($farm_lease->id)->delete();
        return redirect()->route('lease.index')->withSuccessMessage('farm lease deleted successfully');;
    }
}
