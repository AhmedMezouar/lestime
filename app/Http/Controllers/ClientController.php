<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$id = Auth::user()->id_magasin;
        $clients = Client::all();
        return view('dashboard.client',['clients' => $clients]);
    }

    public function indexNvClient()
    {
        //
        //$id = Auth::user()->id_magasin;
        return view('dashboard.client-add');
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

    

    public function store(Request $req)
    {

        dd($this->toname(intVal($req->wilaya)));
        $req->validate([
            'clientName' =>'required',
            'clientEmail' => 'required|email:rfc,dns',
            'clientTelephone' =>'required|min:10|max:15',
            'wilaya'=> 'required|min:4|max:15',
            'adresse' => 'required|min:8',
            'nbr' => 'required'
        ]);

        //
        $cm = DB::insert('insert into clients(nom,telephone,email,address,wilaya,nbrachat)
        values (?, ?, ?, ?, ?, ?)',[$req->clientName,$req->clientTelephone,$req->clientEmail,$req->adresse,$req->wilaya,$req->nbr]);
        return redirect()->route('dashboard.client.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
