<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\HomePageAdvertise;
use Illuminate\Http\Request;

class HomePageAdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertises = HomePageAdvertise::all();
        return view('admin.homepage_advertise.index',compact('advertises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.homepage_advertise.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "company_name" => "required",
            "banner" => "required",
            "redirect_url" => "required",
            "contact" => "required",
            "expire_date" => "required",
        ]);

        $advertise = new HomePageAdvertise();
        $advertise->company_name = $request->company_name;
        $advertise->redirect_url = $request->redirect_url;
        $advertise->contact = $request->contact;
        $advertise->expire_date = $request->expire_date;

        if($request->hasFile('banner')){
            $file = $request->file('banner');
            $fileName = time().".".$file->getClientOriginalExtension();
            $file->move('images',$fileName);
            $advertise->banner = 'images/'.$fileName;
        }


        $advertise->save();



        toast("$advertise->company_name is Created Successfully", 'success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $advertise= HomePageAdvertise::find($id);

        return view('admin.homepage_advertise.edit',compact('advertise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "company_name" => "required",
            "redirect_url" => "required",
            "contact" => "required",
            "expire_date" => "required",
        ]);

        $advertise = HomePageAdvertise::find($id);
        $advertise->company_name = $request->company_name;
        $advertise->redirect_url = $request->redirect_url;
        $advertise->contact = $request->contact;
        $advertise->expire_date = $request->expire_date;

        if($request->hasFile('banner')){
            $file = $request->file('banner');
            $fileName = time().".".$file->getClientOriginalExtension();
            $file->move('banners',$fileName);
            $advertise->banner = 'banners/'.$fileName;
        }


        $advertise->update();


        toast("$advertise->company_name is Edited Successfully", 'success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $advertise = HomePageAdvertise::find($id);
        $advertise->delete();
        toast('Advertise Deleted Successfully', 'success');
        return redirect()->back();
    }
}
