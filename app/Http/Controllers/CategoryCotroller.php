<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::with('parent')->get();
        if (session('success_message')) {
            Alert::toast(session('success_message'), 'success')->autoClose(4000);
        }

        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(category $category)
    {
        $mains = DB::table('categories')
            ->whereNull('parent_category_id')
            ->get();
        return view('category.create', compact('mains'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        category::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'parent_category_id' => $request->input('parent_category_id')
        ]);
        return redirect()->route('category.index')->withSuccessMessage('category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        $mains = category::with('child')->whereNull('parent_category_id')->get();
        return view('category.edit', compact('category', 'mains'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        if ($request->parent_category_id==$category->id){
            return redirect()->back()->withToastError('child cannot be parent');
        }
        $category->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'parent_category_id' => $request->input('parent_category_id')
        ]);
        return redirect()->route('category.index')->withSuccessMessage('category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        if ($category->child()->exists()) {
            return redirect()->route('category.index')->withToastWarning('cannot delete existing parent category');
        } else {
            $category->delete();
            return redirect()->route('category.index')->withSuccessMessage('category deleted successfully');
        }

    }
}
