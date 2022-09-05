<?php

namespace App\Http\Controllers;

use App\Models\farm_crop;
use App\Models\farm_note;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class NoteControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farm_notes = farm_note::all();
        if (session('success_message')){
            Alert::toast(session('success_message'),'success')->autoClose(4000);
        }

        return view('note.index', compact('farm_notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farmcrops=farm_crop::all();
        return view('note.create',compact('farmcrops'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        farm_note::create([
            'farm_crop_id' => $request->input('farm_crop_id'),
            'notes' => $request->input('notes'),
        ]);
        return redirect()->route('note.index')->withSuccessMessage('note created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\farm_note $farm_note
     * @return \Illuminate\Http\Response
     */
    public function show(farm_note $farm_note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\farm_note $farm_note
     * @return \Illuminate\Http\Response
     */
    public function edit(farm_note $farm_note)
    {
        return view('note.edit', compact('farm_note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\farm_note $farm_note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, farm_note $farm_note)
    {
        $farm_note->update( $request->all());
        return redirect()->route('note.index')->withSuccessMessage('note updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\farm_note $farm_note
     * @return \Illuminate\Http\Response
     */
    public function destroy(farm_note $farm_note)
    {
        $farm_note->delete();
        return redirect()->route('note.index')->withSuccessMessage('Note deleted successfully');
    }
}

