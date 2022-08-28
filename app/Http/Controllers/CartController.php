<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\TarfivLaiv;
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
        return view('layouts.shoping-cart',['id_mag' => $id,'tarif' => 0]);
    
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
        $qte35 = Produit::select('*')
            ->whereRaw('id= ?',$request->product_id)
            ->first()->Qte_stock_35;
        if ($request->input('action') == "ajout") {
            
            Cart::add($request->product_id,$request->product_name."(35ML)",$request->qteproduct,$request->product_price,['filepath' => $request->filepath,'id_magasin'=>$request->id_magasin,'volume'=>"35",'Qte_stock' =>$qte35])->associate('App\Models\Produit');
            session()->flash('suc','produit ajoutier');
            return redirect()->route('ecommerce.show',['id' => $request->id_magasin]);
            }else{
                Cart::add($request->product_id,$request->product_name."(35ML)",$request->qteproduct,$request->product_price,['filepath' => $request->filepath,'id_magasin'=>$request->id_magasin,'volume'=>"35",'Qte_stock' =>$qte35])->associate('App\Models\Produit');
                session()->flash('suc','produit ajoutier');
                return redirect()->route('cart.index',['id' => $request->id_magasin,'tarif' => 0]);
            }    

    }

   
    public function storeQte(Request $request)
    {
        
        //
        $prodnam = $request->product_name.'('.$request->volume.'ML)';
        if ($request->volume == "50") { 
                $priceofprod = $request->product_price50;
                $qte50 = Produit::select('*')
                ->whereRaw('id= ?',$request->product_id)
                ->first()->Qte_stock_50;

                if ($request->input('action') == "ajout") {
                    Cart::add($request->product_id, $prodnam,$request->numproduct,$priceofprod,['filepath' => $request->filepath,'id_magasin'=>$request->id_magasin,'volume'=>$request->volume,'Qte_stock' =>$qte50])->associate('App\Models\Produit');
                    session()->flash('suc','produit ajoutier');
                    return redirect()->route('ecommerce.show',['id' => $request->id_magasin]);
                    }else{
                        Cart::add($request->product_id, $prodnam,$request->numproduct,$priceofprod,['filepath' => $request->filepath,'id_magasin'=>$request->id_magasin,'volume'=>$request->volume,'Qte_stock' =>$qte50])->associate('App\Models\Produit');
                        session()->flash('suc','produit ajoutier');
                        return redirect()->route('cart.index',['id' => $request->id_magasin,'tarif' => 0]);
                    }


        }else if ($request->volume == "100") { 
                $priceofprod = $request->product_price100;
                $qte100 = Produit::select('*')
                ->whereRaw('id= ?',$request->product_id)
                ->first()->Qte_stock_100;

                if ($request->input('action') == "ajout") {
                    Cart::add($request->product_id, $prodnam,$request->numproduct,$priceofprod,['filepath' => $request->filepath,'id_magasin'=>$request->id_magasin,'volume'=>$request->volume,'Qte_stock' =>$qte100])->associate('App\Models\Produit');
                    session()->flash('suc','produit ajoutier');
                    return redirect()->route('ecommerce.show',['id' => $request->id_magasin]);
                    }else{
                        Cart::add($request->product_id, $prodnam,$request->numproduct,$priceofprod,['filepath' => $request->filepath,'id_magasin'=>$request->id_magasin,'volume'=>$request->volume,'Qte_stock' =>$qte100])->associate('App\Models\Produit');
                        session()->flash('suc','produit ajoutier');
                        return redirect()->route('cart.index',['id' => $request->id_magasin,'tarif' => 0]);
                    }
         }else {  
            $priceofprod = $request->product_price;
            $qte35 = Produit::select('*')
            ->whereRaw('id= ?',$request->product_id)
            ->first()->Qte_stock_35;

            if ($request->input('action') == "ajout") {
                Cart::add($request->product_id, $prodnam,$request->numproduct,$priceofprod,['filepath' => $request->filepath,'id_magasin'=>$request->id_magasin,'volume'=>35,'Qte_stock' =>$qte35])->associate('App\Models\Produit');
                session()->flash('suc','produit ajoutier');
                return redirect()->route('ecommerce.show',['id' => $request->id_magasin]);
                }else{
                    Cart::add($request->product_id, $prodnam,$request->numproduct,$priceofprod,['filepath' => $request->filepath,'id_magasin'=>$request->id_magasin,'volume'=>35,'Qte_stock' =>$qte35])->associate('App\Models\Produit');
                    session()->flash('suc','produit ajoutier');
                    return redirect()->route('cart.index',['id' => $request->id_magasin,'tarif' => 0]);
                }
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
 
    public function getTarif(Request $req) {
        //dd($req->wilaya);
        //dd($req->livraison);

        $req->validate([
            'wilaya' => 'required',
            'livraison' =>'required'
        ]);

        $wil = $req->wilaya;
        $type = $req->livraison;
        $idmagsin = $req->idmag;
        $up = TarfivLaiv::select('*')
        ->whereRaw('id = ?',[$wil])
        ->first();
        
        if (is_null($up)) {return view('layouts.shoping-cart',['id_mag' => $idmagsin,'tarif' =>0]);}
        else if ($type == "1") //desk 
        {
            return view('layouts.shoping-cart',['id_mag' => $idmagsin,'tarif' => $up->prix_desk,'wil' => $wil,'typeL' => $type]);
                  }else{
                    return view('layouts.shoping-cart',['id_mag' => $idmagsin,'tarif' => $up->prix_domicille,'wil' => $wil,'typeL' => $type]);
           
        }
        
    }

     public function increaseQte($idmagsin,$rowId)
     {

            $product = Cart::get($rowId);
            if ($product->qty > 0 && $product->qty < $product->options->Qte_stock )
              Cart::update($rowId, $product->qty+1);
             return redirect()->route('cart.index',['id' => $idmagsin,'tarif' => 0]);
     }

     public function Remove($idmagsin,$rowId)
     {
            Cart::remove($rowId);
            return redirect()->route('cart.index',['id' => $idmagsin,'tarif' => 0]);
     }


     public function DecreaseQte($idmagsin,$rowId)
     {

            $product = Cart::get($rowId);
            if ($product->qty-1 > 0)
            Cart::update($rowId, $product->qty-1);
        return redirect()->route('cart.index',['id' => $idmagsin,'tarif' => 0]);
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
