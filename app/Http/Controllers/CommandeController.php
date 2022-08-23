<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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
        //
        $clientName = $req->nomClient;
        $clientTelephone= $req->numberTele;
        $clientEmail= $req->emailClient;
        $CMDID = DB::insert('insert into commandes (id_magasin,ClientEmail,ClientName,Clientstate,ClientTelephone,ClientHomeAddress,ClientCommune,EtatCommand,Typelaivr,netapayer,created_at,updated_at)	
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$req['idMag'],$clientEmail,$clientName,$req['wilaya'],$clientTelephone,$req['adresse'], $req['state'],0,$req['livraison'],0,Carbon::now(),Carbon::now()]);
        $netapayer = 0;
        $cmdid = DB::getPdo()->lastInsertId();
        foreach (Cart::content() as $item) {
            
        if ($req->idMag == $item->options->id_magasin) {

              $CMDID2 = DB::insert('insert into lign_commandes (id_cmd,id_prod,vol_prod,qte_ht,Total)	
              values (?, ?, ?, ?, ?)', [$cmdid,$item->id,$item->options->volume,$item->qty,$item->qty*$item->price]);
              $netapayer = $netapayer + ($item->qty*$item->price);
        }
        }
        $netapayer = $netapayer + $req->tarifLaiv;

        $up = DB::update('update commandes set netapayer=? where id=?',[$netapayer,$cmdid]);
        return redirect()->route('ecommerce.show',['id' => $req->idMag]);

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
