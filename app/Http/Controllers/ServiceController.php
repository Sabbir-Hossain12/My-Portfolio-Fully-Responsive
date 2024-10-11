<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('backend.pages.services.index', compact('services'));
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
        $service = new Service();
        $service->title = $request->title;
        $service->desc = $request->desc;
     
        if ($request->hasFile('service_icon')) {

            $serviceImg = $request->file('service_icon');
            $filename = time() . '.' . $serviceImg->getClientOriginalExtension();
            $location = public_path('frontend/uploads/service/');
            $serviceImg->move($location, $filename);
            $service->service_icon = 'frontend/uploads/service/' . $filename;
        }
        $service->save();
        return redirect()->back()->with('success', 'Service created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
//        dd($request->all());
       
        $service->title = $request->title;
        $service->desc = $request->desc;

        if ($request->hasFile('service_icon')) {
            
            if ( $service->service_icon &&  file_exists(public_path($service->service_icon))) {
                unlink(public_path($service->service_icon));
            }

            $serviceImg = $request->file('service_icon');
            $filename = time() . '.' . $serviceImg->getClientOriginalExtension();
            $location = public_path('frontend/uploads/service/');
            $serviceImg->move($location, $filename);
            $service->service_icon = 'frontend/uploads/service/' . $filename;
        }
        $service->save();
        return redirect()->back()->with('success', 'Service created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with('success', 'Service deleted successfully');
    }
}
