<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertises = Advertise::all();
        return view('admin.advertise.index',compact('advertises'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.advertise.create');
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

        $advertise = new Advertise();
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
        $advertise= advertise::find($id);

        return view('admin.advertise.edit',compact('advertise'));
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

        $advertise = Advertise::find($id);
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
        $advertise = Advertise::find($id);
        $advertise->delete();
        toast('Advertise Deleted Successfully', 'success');
        return redirect()->back();
    }
}
