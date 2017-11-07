<?php

namespace App\Http\Controllers;

use App\Connection;
use App\Suplier;
use Illuminate\Http\Request;

class ConnectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Connection $connections)
    {
        $connections = $connections->all();
        return view('connections.index', compact('connections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Connection $connection)
    {   
        return view('connections.create', compact('connection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $connection = new Connection;

        $this->validate(request(),[
            'name' => 'required',
            'type' => 'required',
            'host' => 'required',
            'port' => 'required',
            'database' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $connection->name = request('name');
        $connection->type = request('type');
        $connection->suplier_id = 1;
        $connection->host = request('host');
        $connection->port = request('port');
        $connection->database = request('database');
        $connection->username = request('username');
        $connection->password = bcrypt(request('password'));
        $connection->active = request('active') ? 1 : 0;
        //save it to the database 
        $connection->save();
        // redirect to the home page
        session()->flash('connection-created', 'Your Connection has been created.');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Connection  $connection
     * @return \Illuminate\Http\Response
     */
    public function show(Connection $connection)
    {
        return view('connections.show', compact('connection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Connection  $connection
     * @return \Illuminate\Http\Response
     */
    public function edit(Connection $connection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Connection  $connection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Connection $connection)
    {
        $this->validate(request(),[
            'name' => 'required',
            'type' => 'required',
            'host' => 'required',
            'port' => 'required',
            'database' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $connection->name = request('name');
        $connection->type = request('type');
        $connection->host = request('host');
        $connection->port = request('port');
        $connection->database = request('database');
        $connection->username = request('username');
        $connection->password = bcrypt(request('password'));
        $connection->active = request('active') ? 1 : 0;
        //update it to the database 
        $connection->update();
        // redirect to the home page
        session()->flash('connection-updated', 'Your Connection has been updated');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Connection  $connection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Connection $connection)
    {
        $connection->id = request('id');

        $connection->delete();
         

        session()->flash('connection-deleted', 'Your Connection has been deleted');

        return redirect('/connections/index');
    }
}
