<?php

namespace App\Http\Controllers;

use App\Vendor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class VendorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all();
        return view('admin.listvendor', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(User::where('id', $request->input('id'))->where('is_admin', 0)->first()){
            User::where('id', $request->input('id'))->update(array('is_vendor' => 1));
                if(User::where('id', $request->input('id'))->where('is_admin', 0)->where('is_vendor', 1)
                ->get()){
                    $final = Vendor::create([
                        'user_id' => $request->input('id'),
                        'name'=> $request->input('name'),
                    ]);
                        if($final){
                        Session::flash('Created', "Vendor added successfully!");
                        auth()->user()->givePermissionTo('vendor');


                        return redirect()->route('vendors.index');
                        }else{
                            Session::flash('failure', "Vendor not created!");
                            return Redirect::back();               
                        }
                }
                Session::flash('failure', "Vendor not created!");
                return Redirect::back(); 
        }
        Session::flash('failure', "Vendor not created!");
        return Redirect::back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        if($vendor->delete()){
        User::where('id', json_decode($vendor, true)['user_id'])->update(array('is_vendor' => 0));
        Session::flash('Deleted', "Package deleted successfully!");
        return redirect()->route('vendors.index');
        }
    }


}
