<?php

namespace App\Http\Controllers;

use App\Models\Accessoire;
use App\Models\Pack;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EcommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produits = Produit::all();
        return view('layouts.index',['produits'=> $produits]);
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
        //
        
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
        if ($id > 0 && $id <13) {
            $produits =Produit::select('*')
            ->selectRaw('Qte_vt_35+Qte_vt_50+Qte_vt_100 as Totalvt')
            ->whereRaw('(Qte_stock_35+Qte_stock_50+Qte_stock_100) > ?',[0])
            ->whereRaw('id_magasin = ?',[$id])
            ->orderByRaw('Totalvt DESC')
            ->get();

              $accessoires =Accessoire::select('*')
             ->whereRaw('Qte_stock > 0')
             ->whereRaw('id_magasin = ?',[$id])
             ->get();
             
             $packs = Pack::select('*')
             ->whereRaw('id_magasin = ?',[$id])
             ->get();
             
        return view('layouts.acceuil',['packs' => $packs,'produits'=> $produits,'accessoires'=> $accessoires,"id_mag" => $id]);

        }else{
            return redirect()->route('P404');
        }
    }

    public function showAllProduit($id)
    {
        //
        if ($id > 0 && $id <13) {
            $produits =Produit::select('*')
            ->selectRaw('Qte_vt_35+Qte_vt_50+Qte_vt_100 as Totalvt')
            ->whereRaw('(Qte_stock_35+Qte_stock_50+Qte_stock_100) > ?',[0])
            ->whereRaw('id_magasin = ?',[$id])
            ->orderByRaw('Totalvt DESC')
            ->get();

            $accessoires =Accessoire::select('*')
            ->whereRaw('Qte_stock > 0')
            ->whereRaw('id_magasin = ?',[$id])
            ->get();
        return view('layouts.product',['produits'=> $produits,'accessoires'=> $accessoires,"id_mag" => $id]);

        }else{
            return redirect()->route('P404');
        }
    }

    public function showDetails($idmag)
    {
        //
        if ($idmag > 0 && $idmag <13) {
        $produits = Produit::
        where('id_magasin', '=', $idmag)
        ->get();

        return view('layouts.product-detail',['produits'=> $produits,"id_mag" => $idmag]);
        }else{
            return redirect()->route('P404');
        }
    }
    
    public function showNewAr($idmag)
    {
        //

        if ($idmag > 0 && $idmag <13) {
       // $produits = DB::select('select * from produits');
        $produits =Produit::select('*')
        ->selectRaw('Qte_stock_35+Qte_stock_50+Qte_stock_100 as TotalQte')
        ->whereRaw('id_magasin = ?',[$idmag])
        ->orderByRaw('TotalQte DESC')
        ->get();
        $accessoires =Accessoire::select('*')
        ->whereRaw('Qte_stock > 0')
        ->whereRaw('id_magasin = ?',[$idmag])
        ->orderByRaw('Qte_stock DESC')
        ->get();
        return view('layouts.new-arrival',['produits'=> $produits,'accessoires'=> $accessoires,"id_mag" => $idmag]);
        }else{
            return redirect()->route('P404');
        }
    }

    public function showAbout($idmag)
    {
        //
        if ($idmag > 0 && $idmag <13) {
 
            return view('layouts.about',['id_mag' => $idmag]);

        }else{
            return redirect()->route('P404');
        }
    }

    public function showBlog($idmag)
    {
        //
        if ($idmag > 0 && $idmag <13) {
 
            return view('layouts.blog-page',['id_mag' => $idmag]);

        }else{
            return redirect()->route('P404');
        }
    }

    public function showContact($idmag)
    {
        //
        if ($idmag > 0 && $idmag <13) {
 
            return view('layouts.contact',['id_mag' => $idmag]);

        }else{
            return redirect()->route('P404');
        }
    }

    public function showProd($id)
    {
        //
        $produits = Produit::
        where('id_magasin', '=', $id)
        ->get();
        
        return view('layouts.index',['produits'=> $produits,"id_mag" => $id]);
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
