<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id_magasin;
        $produits =Produit::select('*')
        ->whereRaw('(Qte_stock_35+Qte_stock_50+Qte_stock_100) > ?',[0])
        ->whereRaw('id_magasin = ?',[$id])
        ->get();

        return view('dashboard.liste-product',['produits' => $produits]);
    }

    public function indexDashboard()
    {
        //
        $id = Auth::user()->id_magasin;
        $produits =Produit::select('*')
        ->whereRaw('id_magasin = ?',[$id])
        ->get();

        return view('dashboard.liste-product',['produits' => $produits,'searchVal' => null]);
    }

    public function storeindex()
    {
        //
        return view('dashboard.addproduct');
    }


    public function editindex($idprod,$size)
    {
        
        //
        $idmag  = Auth::user()->id_magasin;
        $produit = Produit::select('*')->whereRaw('id_magasin = ? and id = ?',[$idmag,intVal($idprod)])->first();
        if (is_null($produit)) {}
        else {
            if ($size == 35)
            $prcent =($produit->prix_old_35-$produit->prix_new_35)/($produit->prix_old_35-$produit->prix_ht_35);
            elseif ($size == 50)
            $prcent = ($produit->prix_old_50-$produit->prix_new_50)/($produit->prix_old_50-$produit->prix_ht_50);
            elseif ($size == 100)
            $prcent =   ($produit->prix_old_100-$produit->prix_new_100)/($produit->prix_old_100-$produit->prix_ht_100);

            $prcent =  $prcent *100;
            return view('dashboard.update-product',['produit' => $produit,'size'=>$size,'prcent'=>number_format((float)$prcent, 2, '.', '')]);
        }
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
  
    public function updateprod(Request $req)
    {
        //image probléme
        $idMag = Auth::user()->id_magasin;
        if ($req->size == 35) {
            if ($req->qtestock_35Prod > 0 ) $vol35 = 1;
            else $vol35 = 0;
            if ($req->image == null) {
            $up = DB::update('update produits set nameProd = ?, mark_prod = ?, Volum35 = ?,Qte_stock_35 = ?,prix_ht_35 = ?,prix_old_35 = ?,Descirption = ?,updated_at = ? where (id_magasin = ? and id=?)'
            ,[$req->nameProd,$req->markProd,$vol35,$req->qtestock_35Prod,$req->prixht_35Prod,$req->prixvt_35Prod,$req->descr,Carbon::now(),$idMag,$req->idprod]
            );

             }else{
                if ($req->hasFile('image') && $req->file('image')!= null){
                    $filepath = Storage::disk('public')->put('DB', $req->file('image'));
                }else 
                    $filepath = null;
                    $up = DB::update('update produits set nameProd = ?, mark_prod = ?, Volum35 = ?,Qte_stock_35 = ?,prix_ht_35 = ?,prix_old_35 = ?,Descirption = ?,updated_at = ?,ImageFileName1 = ? where (id_magasin = ? and id=?)'
                    ,[$req->nameProd,$req->markProd,$vol35,$req->qtestock_35Prod,$req->prixht_35Prod,$req->prixvt_35Prod,$req->descr,Carbon::now(), $filepath,$idMag,$req->idprod]
                    );
                
             }
            return redirect()->route('dashboard.product.edit',['idprod' => $req->idprod,'size' => $req->size]);
        }else if ($req->size == 50) {
            if ($req->qtestock_50Prod > 0 ) $vol50 = 1;
            else $vol50 = 0;
            if ($req->image == null) {
            $up = DB::update('update produits set nameProd = ?, mark_prod = ?, Volum50 = ?,Qte_stock_50 = ?,prix_ht_50 = ?,prix_old_50 = ?,Descirption = ?,updated_at = ? where (id_magasin = ? and id=?)'
            ,[$req->nameProd,$req->markProd,$vol50,$req->qtestock_50Prod,$req->prixht_50Prod,$req->prixvt_50Prod,$req->descr,Carbon::now(),$idMag,$req->idprod]
            );

             }else{
                if ($req->hasFile('image') && $req->file('image')!= null){
                    $filepath = Storage::disk('public')->put('DB', $req->file('image'));
                }else 
                    $filepath = null;
                    $up = DB::update('update produits set nameProd = ?, mark_prod = ?, Volum50 = ?,Qte_stock_50 = ?,prix_ht_50 = ?,prix_old_50 = ?,Descirption = ?,updated_at = ?,ImageFileName1 = ? where (id_magasin = ? and id=?)'
                    ,[$req->nameProd,$req->markProd,$vol50,$req->qtestock_50Prod,$req->prixht_50Prod,$req->prixvt_50Prod,$req->descr,Carbon::now(), $filepath,$idMag,$req->idprod]
                    );
                
             }
            return redirect()->route('dashboard.product.edit',['idprod' => $req->idprod,'size' => $req->size]);
        }else if ($req->size == 100) {
            if ($req->qtestock_100Prod > 0 ) $vol100 = 1;
            else $vol100 = 0;
            if ($req->image == null) {
            $up = DB::update('update produits set nameProd = ?, mark_prod = ?, Volum35 = ?,Qte_stock_100 = ?,prix_ht_100 = ?,prix_old_100 = ?,Descirption = ?,updated_at = ? where (id_magasin = ? and id=?)'
            ,[$req->nameProd,$req->markProd,$vol100,$req->qtestock_100Prod,$req->prixht_100Prod,$req->prixvt_100Prod,$req->descr,Carbon::now(),$idMag,$req->idprod]
            );

             }else{
                if ($req->hasFile('image') && $req->file('image')!= null){
                    $filepath = Storage::disk('public')->put('DB', $req->file('image'));
                }else 
                    $filepath = null;
                    $up = DB::update('update produits set nameProd = ?, mark_prod = ?, Volum35 = ?,Qte_stock_100 = ?,prix_ht_100 = ?,prix_old_100 = ?,Descirption = ?,updated_at = ?,ImageFileName1 = ? where (id_magasin = ? and id=?)'
                    ,[$req->nameProd,$req->markProd,$vol100,$req->qtestock_100Prod,$req->prixht_100Prod,$req->prixvt_100Prod,$req->descr,Carbon::now(), $filepath,$idMag,$req->idprod]
                    );
                
             }
            return redirect()->route('dashboard.product.edit',['idprod' => $req->idprod,'size' => $req->size]);
           }

            return redirect()->route('dashboard.product.edit',['idprod' => $req->idprod,'size' => $req->size]);
        }


    public function applypromo(Request $req)
    {
        $idMag = Auth::user()->id_magasin;
        if ($req->size == 35) {
            $up = DB::update('update produits set promo_35 =  ?,prix_new_35=? where (id_magasin = ? and id=?)'
            ,[1,$req->inputnvprix_val_h,$idMag,$req->idprod]
            );
            return redirect()->route('dashboard.product.edit',['idprod' => $req->idprod,'size' => $req->size]);
        }else if ($req->size == 50) {
            $up = DB::update('update produits set promo_50 =  ?,prix_new_50=? where (id_magasin = ? and id=?)'
            ,[1,$req->inputnvprix_val_h,$idMag,$req->idprod]
            );
            return redirect()->route('dashboard.product.edit',['idprod' => $req->idprod,'size' => $req->size]);
        }else if ($req->size == 100) {
            $up = DB::update('update produits set promo_100 =  ?,prix_new_100=? where (id_magasin = ? and id=?)'
            ,[1,$req->inputnvprix_val_h,$idMag,$req->idprod]
         );}

            return redirect()->route('dashboard.product.edit',['idprod' => $req->idprod,'size' => $req->size]);
        }

    public function store(Request $req)
    {
        
        $idMag = Auth::user()->id_magasin;
        //ajoutier un produit
        $req->validate([
            'nameProd' =>'required|unique:produits|min:5',
            'markprod' =>'required|min:5',
            'sex' => 'required',
            'saison' =>'required',
            'image'=> 'required|image',
        ]);

        if ($req->hasFile('image') && $req->file('image')!= null){
            $filepath = Storage::disk('public')->put('DB', $req->file('image'));
        }else 
            $filepath = null;
        

        $desc = "";
        if (is_null($req->descr)) 
        $desc = "produit ".$req->sex." ".$req->saison." ";
        else  $desc = "produit  ".$req->sex."  ".$req->saison."   ".$req->descr;

        $vol35 = 0;$vol50 = 0;$vol100 = 0;
        if ($req->qte_stock_35 > 0) $vol35 = 1;
        if ($req->qte_stock_50 > 0)  $vol50 = 1;
        if ($req->qte_stock_100 > 0)  $vol100 = 1;

        $ins = DB::insert('insert into produits (nameProd, mark_prod, id_magasin, Volum35, Volum50, Volum100, Sex, ImageFileName1, Qte_stock_35, Qte_vt_35, prix_ht_35, promo_35, prix_old_35, prix_new_35, Qte_stock_50, Qte_vt_50, prix_ht_50, promo_50, prix_old_50, prix_new_50, Qte_stock_100, Qte_vt_100, prix_ht_100, promo_100, prix_old_100, prix_new_100, Descirption, created_at, updated_at) values 
        (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
        [$req->nameProd,$req->markprod,$idMag,$vol35,$vol50,$vol100,$req->sex,$filepath,$req->qte_stock_35,0,$req->prix_ht_35,0,$req->prix_vt_35,$req->prix_vt_35,$req->qte_stock_50,0,$req->prix_ht_50,0,$req->prix_vt_50,$req->prix_vt_50,$req->qte_stock_100,0,$req->prix_ht_100,0,$req->prix_vt_100,$req->prix_vt_100,$desc,Carbon::now(),Carbon::now()]);
       
        return redirect()->route('dashboard');
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
