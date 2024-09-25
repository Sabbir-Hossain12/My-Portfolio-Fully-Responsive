<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $portfolios=  Portfolio:: where('status', 1)->get();
        
        return view('backend.pages.portfolio.index',compact('portfolios'));
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
        
        $portfolio = new Portfolio();
        $portfolio->portfolio_title = $request->portfolio_title;
        $portfolio->portfolio_short_desc = $request->portfolio_short_desc;
        $portfolio->portfolio_long_desc = $request->portfolio_long_desc;
        $portfolio->portfolio_link = $request->portfolio_link;
        $portfolio->portfolio_btn_text = $request->portfolio_btn_text;
        $portfolio->portfolio_sequence = $request->portfolio_sequence;
        
        
        if ($request->hasFile('portfolio_image')) {
            
            $portImg=$request->file('portfolio_image');
            $filename=time().'.'.$portImg->getClientOriginalExtension();
            $location=public_path('frontend/uploads/portfolio/');
            $portImg->move($location,$filename);
            $portfolio->portfolio_image='frontend/uploads/portfolio/'.$filename;
        }
        
        $portfolio->save();
        
        return redirect()->back()->with('success','Portfolio created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
       
        $portfolio->portfolio_title = $request->portfolio_title;
        $portfolio->portfolio_short_desc = $request->portfolio_short_desc;
        $portfolio->portfolio_long_desc = $request->portfolio_long_desc;
        $portfolio->portfolio_link = $request->portfolio_link;
        $portfolio->portfolio_btn_text = $request->portfolio_btn_text;
        $portfolio->portfolio_sequence = $request->portfolio_sequence;
       
        if ($request->hasFile('portfolio_image')) {
            
            if ($portfolio->portfolio_image &&  file_exists($portfolio->portfolio_image)) {
                unlink(public_path($portfolio->portfolio_image) );
            }

            $portImg=$request->file('portfolio_image');
            $filename=time().'.'.$portImg->getClientOriginalExtension();
            $location=public_path('frontend/uploads/portfolio/');
            $portImg->move($location,$filename);
            $portfolio->portfolio_image='frontend/uploads/portfolio/'.$filename;
        }

        $portfolio->save();

        return redirect()->back()->with('success','Portfolio created successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
//        dd($portfolio);
        $portfolio->delete();
        
        return redirect()->back();
    }
}
