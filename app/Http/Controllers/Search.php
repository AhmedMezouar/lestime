<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Accessoire;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;

class Search extends Controller
{
    function produit_search(Request $req)
    {

        $key = $req->search;

        $produits = Produit::select('*')
        ->whereRaw('(id_magasin = ? and (mark_prod like ? or nameProd like ? or Descirption like ?))',[$req->idMag,'%'.$key.'%','%'.$key.'%','%'.$key.'%'])
        ->get();
        if ($produits != null && $produits->count() > 0)
        return view('layouts.product',['produits'=> $produits,'id_mag' => $req->idMag]);
        else return redirect()->route('ecommerce.produit.show',['id' => $req->idMag]);
    }

    function produit_search2(Request $req)
    {

        $key = $req->search;
    
        $produits = Produit::select('*')
        ->whereRaw('(id_magasin = ? and (mark_prod like ? or nameProd like ? or Descirption like ?))',[$req->idMag,'%'.$key.'%','%'.$key.'%','%'.$key.'%'])
        ->get();

        return redirect()->route('layouts.new-arrival',['produits'=> $produits,"id" => $req->idMag]);
    }

    function produit_filter($id,$key){

        if ($key == "acc") {
                $acc = Accessoire::select('*')
                ->whereRaw('id_magasin = ? and Qte_stock > 0',[$id])
                ->get();
                return view('layouts.product',['accessoires' => $acc,'produits'=> [],'id_mag' => $id]);
        }else {
        $produits = Produit::select('*')
        ->selectRaw('Qte_vt_35+Qte_vt_50+Qte_vt_100 as Totalvt')   
        ->whereRaw('(id_magasin = ? and (mark_prod like ? or nameProd like ? or Descirption like ? or Sex like ?))',[$id,'%'.$key.'%','%'.$key.'%','%'.$key.'%','%'.$key.'%'])
        ->orderByRaw('Totalvt DESC')
        ->get();

        return view('layouts.product',['accessoires' => [],'produits'=> $produits,'produits'=> $produits,'id_mag' => $id]);
    }
    }

    

    function produit_prix($id,$min,$max){

        $produits = Produit::select('*')
        ->whereRaw('(id_magasin = ? and (
        prix_old_35 >= ? and prix_old_35 <= ? or prix_new_35 >= ? and prix_new_35 <= ? or
        prix_old_50 >= ? and prix_old_50 <= ? or prix_new_50 >= ? and prix_new_50 <= ? or 
        prix_old_100 >= ? and prix_old_100 <= ? or prix_new_100 >= ? and prix_new_100 <= ?))',
        [$id,$min,$max,$min,$max,$min,$max,$min,$max,$min,$max,$min,$max])
        ->get();
     

        return view('layouts.product',['produits'=> $produits,'id_mag' => $id]);
    }
}
