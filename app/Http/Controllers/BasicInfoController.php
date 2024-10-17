<?php

namespace App\Http\Controllers;

use App\Models\BasicInfo;
use Illuminate\Http\Request;

class BasicInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $basicInfo=BasicInfo::first();
        return view('backend.pages.basicInfo.index',compact('basicInfo'));
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
        
        $basicInfo = new BasicInfo();
        $basicInfo->university = $request->university;
        $basicInfo->degree = $request->degree;
        $basicInfo->passed_year = $request->passed_year;
        $basicInfo->address = $request->address;
        $basicInfo->email = $request->email;
        $basicInfo->phone = $request->phone;
        $basicInfo->age = $request->age;
        $basicInfo->cv_link = $request->cv_link;
        
        if ($request->hasFile('logo')) {
            
            $logo=$request->file('logo');
            $filename=time().'.'.$logo->getClientOriginalExtension();
            $location=public_path('frontend/uploads/logo/');
            $logo->move($location,$filename);
            $basicInfo->logo='frontend/uploads/logo/'.$filename;
        }
        $basicInfo->save();
        
        
        return redirect()->back()->with('success', 'Basic info created successfully');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(BasicInfo $basicInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BasicInfo $basicInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BasicInfo $basicInfo)
    {
//        dd($request->all());
        $basicInfo= BasicInfo::first();
        $basicInfo->university = $request->university;
        $basicInfo->degree = $request->degree;
        $basicInfo->passed_year = $request->passed_year;
        $basicInfo->address = $request->address;
        $basicInfo->email = $request->email;
        $basicInfo->phone = $request->phone;
        $basicInfo->age = $request->age;
        $basicInfo->cv_link = $request->cv_link;


        if ($request->hasFile('logo')) {
            
            if ($basicInfo->logo && file_exists($basicInfo->logo)) {
                unlink(public_path($basicInfo->logo));
            }

            $logo=$request->file('logo');
            $filename=time().'.'.$logo->getClientOriginalExtension();
            $location=public_path('frontend/uploads/logo/');
            $logo->move($location,$filename);
            $basicInfo->logo='frontend/uploads/logo/'.$filename;
        }
        $basicInfo->update();


        return redirect()->back()->with('success', 'Basic info Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BasicInfo $basicInfo)
    {
        //
    }
}
