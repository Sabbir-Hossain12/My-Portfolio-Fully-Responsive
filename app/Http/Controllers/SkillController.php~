<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.skills.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $skill=new Skill();
        $skill->skill_title=$request->skill_title;
        $skill->skill_desc=$request->skill_desc;
        $skill->save();
        
        
        return redirect()->back()->with('success','Skill created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
       
        $skill->skill_title=$request->skill_title;
        $skill->skill_desc=$request->skill_desc;
        $skill->save();


        return redirect()->back()->with('success','Skill updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->back()->with('success','Skill deleted successfully');
    }
}
