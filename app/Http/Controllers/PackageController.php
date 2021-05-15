<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $packages = package::all();
        return view('admin.listpackage', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin.createpackage');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            //     $validated = $request->validate([
            //         'pname' => 'required|unique:packages,name',
            //         'price'=> 'required',
            //     ]);

            // $final = Package::create([
            //     'name' => $validated['pname'],
            //     'price'=> $validated['price'],
            // ]);
            //     if($final){
            //     Session::flash('Created', "Package created successfully!");
            //     return redirect()->route('packages.index');
            //     }else{
            //         Session::flash('failure', "Package created successfully!");
            //         return Redirect::back();
            //      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
       // return view('admin.editpackage', compact('package'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {

            //     $validated = $request->validate([
            //         'pname' => 'required',
            //         'price'=> 'required',
            //     ]);

            // $final = $package->update($request->all());
            //     if($final){
            //     Session::flash('Edited', "package edited successfully!");
            //     return redirect()->route('packages.index');
            //     }else{
            //         Session::flash('Edited', "package edited successfully!");
            //         return redirect()->back();                }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        // $package->delete();

        // Session::flash('Deleted', "Package deleted successfully!");
        // return redirect()->route('packages.index');
    }
}
