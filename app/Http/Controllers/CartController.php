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
            Cart::add($request->product_id,$request->product_name."(35ML)",$request->qteproduct,$request->product_price,['filepath' => $request->filepath,'id_magasin'=>$request->id_magasin,'volume'=>"35"])->associate('App\Models\Produit');
            session()->flash('suc','produit ajoutier');
            return redirect()->route('ecommerce.show',['id' => $request->id_magasin]);
            }else{
                Cart::add($request->product_id,$request->product_name."(35ML)",$request->qteproduct,$request->product_price,['filepath' => $request->filepath,'id_magasin'=>$request->id_magasin,'volume'=>"35"])->associate('App\Models\Produit');
                session()->flash('suc','produit ajoutier');
                return redirect()->route('cart.index',['id' => $request->id_magasin]);
            }    

    }

   
    public function storeQte(Request $request)
    {
        
        //
        $prodnam = $request->product_name.'('.$request->volume.'ML)';
        if ($request->volume == "50") { 
                $priceofprod = $request->product_price50;
        }else if ($request->volume == "100") { 
            $priceofprod = $request->product_price100;
         }else   $priceofprod = $request->product_price;
        if ($request->input('action') == "ajout") {
        Cart::add($request->product_id, $prodnam,$request->numproduct,$priceofprod,['filepath' => $request->imagename,'id_magasin'=>$request->id_magasin,'volume'=>$request->volume])->associate('App\Models\Produit');
        session()->flash('suc','produit ajoutier');
        return redirect()->route('ecommerce.show',['id' => $request->id_magasin]);
        }else{
            Cart::add($request->product_id, $prodnam,$request->numproduct,$priceofprod,['filepath' => $request->imagename,'id_magasin'=>$request->id_magasin,'volume'=>$request->volume])->associate('App\Models\Produit');
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
