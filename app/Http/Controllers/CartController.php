<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //

        return view('layouts.shoping-cart',['id_mag' => $id]);
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
        if ($request->input('action') == "ajout") {
            Cart::add($request->product_id,$request->product_name,$request->qteproduct,$request->product_price,['filepath' => $request->filepath,'id_magasin'=>$request->id_magasin,])->associate('App\Models\Produit');
            session()->flash('suc','produit ajoutier');
            return redirect()->route('ecommerce.show',['id' => $request->id_magasin]);
            }else{
                Cart::add($request->product_id,$request->product_name,$request->qteproduct,$request->product_price,['filepath' => $request->filepath,'id_magasin'=>$request->id_magasin])->associate('App\Models\Produit');
                session()->flash('suc','produit ajoutier');
                
                return redirect()->route('cart.index',['id' => $request->id_magasin]);
            }    

    }

   
    public function storeQte(Request $request)
    {
        //
        if ($request->input('action') == "ajout") {
        Cart::add($request->product_id,$request->product_name,$request->numproduct,$request->product_price,['filepath' => $request->imagename,'id_magasin'=>$request->id_magasin])->associate('App\Models\Produit');
        session()->flash('suc','produit ajoutier');
        return redirect()->route('ecommerce.show',['id' => $request->id_magasin]);
        }else{
            Cart::add($request->product_id,$request->product_name,$request->numproduct,$request->product_price,['filepath' => $request->imagename,'id_magasin'=>$request->id_magasin])->associate('App\Models\Produit');
            session()->flash('suc','produit ajoutier');
            return redirect()->route('cart.index',['id' => $request->id_magasin]);
        }

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
    public function edit($idprod,$idmag,$qty)
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

     public function increaseQte($idmagsin,$rowId)
     {

            $product = Cart::get($rowId);
            if ( $product->qty+1 >0)
            Cart::update($rowId, $product->qty+1);
             return redirect()->route('cart.index',['id' => $idmagsin]);
     }

     public function Remove($idmagsin,$rowId)
     {
            Cart::remove($rowId);
            return redirect()->route('cart.index',['id' => $idmagsin]);
     }


     public function DecreaseQte($idmagsin,$rowId)
     {

            $product = Cart::get($rowId);
            if ($product->qty-1 > 0)
            Cart::update($rowId, $product->qty-1);
        return redirect()->route('cart.index',['id' => $idmagsin]);
     }
    public function update(Request $request)
    {
        //
        $idd = intval($request->product_Rowid);
        //dd($request->product_Rowid);
        dd($request->qte);
        //$cart = Cart::content()->where('rowId','7dce98eaf94baa66236f20c39ac9acd0');
        //dd($cart);
        $quantity = intval($request->qte);
        //dd($quantity);
            Cart::update($idd,$quantity);
            session()->flash('suc','produit ajoutier');
            Log::info('in if This is some useful information.');
        
        return redirect()->route('cart.index',['id' => $request->idmagsin]);
        
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
