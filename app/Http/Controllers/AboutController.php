<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::first();
        return view('backend.pages.abouts.index', compact('abouts'));
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
        $about = new About();
        $about->title = $request->title;
        $about->designation = $request->designation;
        $about->short_desc = $request->short_desc;


        if ($request->hasFile('cover_img')) {
            $cover_img = $request->file('cover_img');
            $filename = time().'.'.$cover_img->getClientOriginalExtension();
            $location = public_path('frontend/uploads/about/');
            $cover_img->move($location, $filename);
            $about->cover_img = 'frontend/uploads/about/'.$filename;
        }
        $about->save();


        return redirect()->back()->with('success', 'About created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $about->title = $request->title;
        $about->designation = $request->designation;
        $about->short_desc = $request->short_desc;


        if ($request->hasFile('cover_img')) {
            if ($about->cover_img && file_exists($about->cover_img)) {
                unlink(public_path($about->cover_img));
            }
            $cover_img = $request->file('cover_img');
            $filename = time().'.'.$cover_img->getClientOriginalExtension();
            $location = public_path('frontend/uploads/about/');
            $cover_img->move($location, $filename);
            $about->cover_img = 'frontend/uploads/about/'.$filename;
        }
        $about->save();


        return redirect()->back()->with('success', 'About Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
