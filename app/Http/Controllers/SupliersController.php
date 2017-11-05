<?php

namespace App\Http\Controllers;

use App\Suplier;
use Illuminate\Http\Request;

class SupliersController extends Controller
{   

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Suplier $supliers)
    {
        $supliers = $supliers->all();
        return view('suppliers.index', compact('supliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suplier = new Suplier;

        $this->validate(request(),[
            'name' => 'required'
        ]);

        $suplier->name = request('name');
        $suplier->description = request('description');
        $suplier->active = request('active') ? 1 : 0;
        //save it to the database 
        $suplier->save();
        // redirect to the home page
        session()->flash('suplier-created', 'Your supplier has been created.');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function show(Suplier $suplier)
    {
        return view('suppliers.show', compact('suplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Suplier $suplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suplier $suplier)
    {

        $this->validate(request(),[
            'name' => 'required'
        ]);

        $suplier->name = request('name');
        $suplier->description = request('description');
        $suplier->active = request('active') ? 1 : 0;
        //update it to the database 
        $suplier->update();
        // redirect to the home page
        session()->flash('suplier-created', 'Your supplier has been created.');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suplier $suplier)
    {
        //
    }
}
