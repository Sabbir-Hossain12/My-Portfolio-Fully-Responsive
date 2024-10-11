<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies=Technology::all();
        return view('backend.pages.technologies.index',compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $technology=new Technology();
        $technology->technology_title=$request->technology_title;
        $technology->technology_icon=$request->technology_icon;
        $technology->save();
        
        return redirect()->back()->with('success', 'Technology created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {
      
        $technology->technology_title=$request->technology_title;
        $technology->technology_icon=$request->technology_icon;
        
        $technology->save();

        return redirect()->back()->with('success', 'Technology Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        $technology->delete();
        return redirect()->back()->with('success', 'Technology deleted successfully');
    }
}
