<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;

class Search extends Controller
{
    function produit_search(Request $req)
    {

        $produits = DB::select('select * from produits where id_magasin = ? and nameProd like ? or Descirption like ?'
        , [$req['idMag'],'%'.$req['search'].'%','%'.$req['search'].'%']);

      

         return view('layouts.index',['produits'=> $produits,"id_mag" => $req->idMag]);
    }

    function produit_filter($id,$key){

        $produits = DB::select('select * from produits where id_magasin = ? and nameProd like ? or Descirption like ?  or Caractiristique like ? or Mark like ?' 
        , [$id,'%'.$key.'%','%'.$key.'%','%'.$key.'%','%'.$key.'%']);

        return view('layouts.index',['produits'=> $produits,"id_mag" => 1]);
    }

    function produit_prix($id,$min,$max){

        $produits = DB::select('select * from produits where (id_magasin = ? and (prix_old >= ? and prix_old <= ? or (prix_new >= ? and prix_new <= ?)))' 
        , [$id,$min,$max,$min,$max]);

        return view('layouts.index',['produits'=> $produits,"id_mag" => 1]);
    }
}
