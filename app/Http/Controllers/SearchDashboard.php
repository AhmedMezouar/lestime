<?php

namespace App\Http\Controllers;

use App\Models\Accessoire;
use App\Models\Client;
use App\Models\Commande;
use App\Models\LignPack;
use App\Models\Magasin;
use App\Models\Pack;
use App\Models\Produit;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SearchDashboard extends Controller
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

    public function addtopack(Request $request)
    {
        
        $idMag = Auth::user()->id_magasin;
        $pack = Pack::select('*')->whereRaw('id_magasin = ?',[$idMag])->orderByRaw('id DESC')->first();
        //

            if ($request->act == 0) {
                //rest
                foreach (Cart::instance('pack')->content() as $item)
                {
                    Cart::instance('pack')->remove($item->rowId);
                }
         }else if ($request->act == 1) {
            //add to cart pack
         $id_prod =$request->id_prod;
         $size =$request->size;
         $type =$request->type;
         if ($type == 1) {
            $id_prod =$id_prod.$request->type.$request->size;
         Cart::instance('pack')->add($id_prod,$request->name."(". $size." ML)",1,0,['size' => $request->size,'id_prod'=>$request->id_prod]);
         }else if ($type == 2) {
         Cart::instance('pack')->add($id_prod,$request->name,1,0,['size' => 999,'id_prod'=>$request->id_prod]);
        }
    }else if ($request->act == 10){
        $idMag = Auth::user()->id_magasin;
        //create the pack on database
        if ($request->image == null) {
            $request->validate([
                'name_pack' =>'required|unique:packs',
                'prix_vt'=>'required',
            ]);
        $up = DB::insert('insert into packs (id_magasin,name_pack,prix_vt,prix_ht,description)
        values (?, ?, ?, ?, ?)',[$idMag,$request->name_pack,$request->prix_vt,0,$request->descr]);
        }else{
            if ($request->hasFile('image') && $request->file('image') != null){
                $filepath = Storage::disk('public')->put('DB', $request->file('image'));
            }else {$filepath = null;}

                $request->validate([
                    'name_pack' =>'required|unique:packs',
                    'prix_vt'=>'required',
                    'image' => 'required'
                ]);
            $up = DB::insert('insert into packs (id_magasin,name_pack,prix_vt,prix_ht,description,image)
            values (?, ?, ?, ?, ?, ?)',[$idMag,$request->name_pack,$request->prix_vt,0,$request->descr,$filepath]);
        }

    }else{
        //store line
        ///dd($request->id_pack);
        $totalht = 0;
        foreach (Cart::instance('pack')->content() as $item)
        {
           
            if ($item->options->size == 999) {
                //accessoire
                $prix_ht = Accessoire::select('*')->whereRaw('id = ?',[$item->options->id_prod])->first()->prix_ht;
                $totalht = $totalht + ($prix_ht*$item->qty);
            $up = DB::insert('insert into lign_packs (id_pack,id_prod,type,size,Qte)
            values(?, ?, ?,?,?)',[$request->id_pack,$item->options->id_prod,2,$item->options->size,$item->qty]);
            Cart::instance('pack')->remove($item->rowId);
        }else{
            if ($item->options->size == 35) {
                $prix_ht = Produit::select('*')->whereRaw('id = ?',[$item->options->id_prod])->first()->prix_ht_35;
                $totalht = $totalht + ($prix_ht*$item->qty);
            }
            else if ($item->options->size == 50) {
                $prix_ht = Produit::select('*')->whereRaw('id = ?',[$item->options->id_prod])->first()->prix_ht_50;
                $totalht = $totalht + ($prix_ht*$item->qty);
            }else if ($item->options->size == 100) {
                $prix_ht = Produit::select('*')->whereRaw('id = ?',[$item->options->id_prod])->first()->prix_ht_100;
                $totalht = $totalht + ($prix_ht*$item->qty);
            }
            $up = DB::insert('insert into lign_packs (id_pack,id_prod,type,size,Qte)
            values(?, ?, ?,?,?)',[$request->id_pack,$item->options->id_prod,1,$item->options->size,$item->qty]);
            Cart::instance('pack')->remove($item->rowId);
            }
        }
            $up3 = DB::update('update packs set prix_ht = ? where id = ?',[$totalht,$request->id_pack]);
        }
            return redirect()->route('dashboard.product.storepack');
    }

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
    }
    function stateproduit_search(Request $req) {

        $idMag = Auth::user()->id_magasin;
        $key = $req->search;

        $produits = Produit::select('*')->whereRaw('(id_magasin = ? and (mark_prod like ? or nameProd like ? or Descirption like ?))',[$idMag,'%'.$key.'%','%'.$key.'%','%'.$key.'%'])->get();
        $accessoire = Accessoire::select('*')
        ->whereRaw('(id_magasin = ? and (mark_prod like ? or nameProd like ? or description like ?))',[$idMag,'%'.$key.'%','%'.$key.'%','%'.$key.'%'])
        ->get();
        return view('dashboard.statistique-product',[
            'produits' => $produits,
            'accessoire' => $accessoire,
            'searchVal' => $key,
            'id_mag' => Auth::user()->id_magasin,
        ]);
    }
    function stateproduit_search2(Request $req) {

        $idMag = Auth::user()->id_magasin;
        $key = $req->search;
      
        $produits = Produit::select('*')->whereRaw('(id_magasin = ? and (mark_prod like ? or nameProd like ? or Descirption like ?))',[$idMag,'%'.$key.'%','%'.$key.'%','%'.$key.'%'])->get();
        $accessoire = Accessoire::select('*')
        ->whereRaw('(id_magasin = ? and (mark_prod like ? or nameProd like ? or description like ?))',[$idMag,'%'.$key.'%','%'.$key.'%','%'.$key.'%'])
        ->get();
        return view('dashboard.add-pack',[
            'produits' => $produits,
            'accessoire' => $accessoire,
            'searchVal' => $key,
            'id_mag' => Auth::user()->id_magasin,
        ]);
}
    function stateclient_search(Request $req) {
        $key = $req->search;
        $datenow = Carbon::now()->format('d/m/Y');
        $datesemain = Carbon::now()->subDays(7)->format('d/m/Y');
        $datemois = Carbon::now()->subDays(30)->format('d/m/Y');
        $idMag = Auth::user()->id_magasin;


        $montatToday = Commande::selectRaw('Sum(netapayer) as tot')
        ->whereRaw('date(created_at)=CURDATE() and EtatCommand = 5')
        ->first()->tot;
        $montatTodayold = Commande::selectRaw('Sum(netapayer) as tot')
        ->whereRaw('EtatCommand = 5 and  date(created_at)=DATE_SUB(CURDATE(), INTERVAL 7 DAY)')
        ->first()->tot;
       
        if ($montatToday == null) $montatToday = 0;
        if ($montatTodayold > 0)
        $indicemontanttoday = ($montatToday - $montatTodayold) *100/$montatTodayold;
        else $indicemontanttoday = 100;


        $montatsemain = Commande::selectRaw('Sum(netapayer) as tot')
        ->whereRaw('date(created_at) >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) and EtatCommand = 5')
        ->first()->tot;
        $montatsemainold = Commande::selectRaw('Sum(netapayer) as tot')
        ->whereRaw('EtatCommand = 5 and  date(created_at)>=DATE_SUB(CURDATE(), INTERVAL 14 DAY) and date(created_at)<DATE_SUB(CURDATE(), INTERVAL 7 DAY)')
        ->first()->tot;
       
        if ($montatsemain == null) $montatsemain = 0;
        if ($montatsemainold > 0)
        $indicemontantsemain = ($montatsemain - $montatsemainold) *100/$montatsemainold;
        else $indicemontantsemain = 100;


        $montatmois = Commande::selectRaw('Sum(netapayer) as tot')
        ->whereRaw('date(created_at) >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) and EtatCommand = 5')
        ->first()->tot;
        $montatmoisold = Commande::selectRaw('Sum(netapayer) as tot')
        ->whereRaw('EtatCommand = 5 and  date(created_at)>=DATE_SUB(CURDATE(), INTERVAL 60 DAY) and date(created_at)<DATE_SUB(CURDATE(), INTERVAL 30 DAY)')
        ->first()->tot;
       
        if ($montatmois == null) $montatmois = 0;
        if ($montatmoisold > 0)
        $indicemontantmois = ($montatmois - $montatmoisold) *100/$montatmoisold;
        else $indicemontantmois = 100;

        $montattotal = Commande::selectRaw('Sum(netapayer) as tot')
        ->whereRaw('EtatCommand = 5')
        ->first()->tot;
       
        if ($montattotal == null) $montattotal = 0;
        //SELECT ClientName,ClientEmail,sum(netapayer),sum(totalqte) 
        
        //FROM commandes cmd, (SELECT id_cmd,id_prod,count(qte_ht) as totalqte from lign_commandes GROUP by id_cmd) bes 
        //where cmd.id=bes.id_cmd 
        //group by ClientTelephone;
        $table = DB::table('commandes')->selectRaw('ClientName,ClientTelephone,sum(netapayer) as Total,sum(totalqte) as Qtes')
        ->fromRaw('commandes cmd, (SELECT id_cmd,id_prod,count(qte_ht) as totalqte from lign_commandes GROUP by id_cmd) bes')
        ->whereRaw('(cmd.id=bes.id_cmd and (ClientName like ? or ClientEmail like ? or ClientTelephone like ?  or Clientstate like ? or ClientCommune like ? or ClientHomeAddress like ?))',
        ['%'.$key.'%','%'.$key.'%','%'.$key.'%','%'.$key.'%','%'.$key.'%','%'.$key.'%'])
        ->groupByRaw('ClientName,ClientTelephone')
        ->get();
        
        return view('dashboard.statistique',[
            'id_mag' => Auth::user()->id_magasin,
            'montatToday' => $montatToday,
            'indicemontanttoday' =>number_format((float)$indicemontanttoday, 2, '.', ''),
            'montatsemain' => $montatsemain,
            'montattotal' => $montattotal,
            'indicemontantsemain' =>number_format((float)$indicemontantsemain, 2, '.', ''),
            'montatmois' => $montatmois,
            'indicemontantmois' =>number_format((float)$indicemontantmois, 2, '.', ''),
            'datenow' => $datenow,
            'datesemain' => $datesemain,
            'datemois' =>$datemois,
            'table' => $table,
            'searchVal' => null
        ]);
    }

    function produit_search(Request $req)
    {
        if ($req->search == null) {
            return redirect()->back();
        }
        $req->validate([
            'search' =>  'required'
        ]);

        if ($req->search != null) {
        $idMag = Auth::user()->id_magasin;
        $key = $req->search;
        $produits = Produit::select('*')
        ->whereRaw('(id_magasin = ? and (mark_prod like ? or nameProd like ? or Descirption like ?))',[$idMag,'%'.$key.'%','%'.$key.'%','%'.$key.'%'])
        ->get();
  
        $accessoire = Accessoire::select('*')
        ->whereRaw('(id_magasin = ? and (mark_prod like ? or nameProd like ? or description like ?))',[$idMag,'%'.$key.'%','%'.$key.'%','%'.$key.'%'])
        ->get();
         if ( $produits != null &&  $produits->count() > 0 && $accessoire != null &&  $accessoire->count() > 0 ) {
            return view('dashboard.liste-product',['id_mag' => Auth::user()->id_magasin,'searchVal' => $key,'produits' => $produits,'accessoire' => $accessoire]);
         }else  if ( $produits != null &&  $produits->count() > 0 && ($accessoire == null ||  $accessoire->count() == 0)) {
            return view('dashboard.liste-product',['id_mag' => Auth::user()->id_magasin,'searchVal' => $key,'produits' => $produits,'accessoire' => []]);
         }else  if ( ($produits == null ||  $produits->count() == 0) && ($accessoire != null &&  $accessoire->count() > 0)) {
            return view('dashboard.liste-product',['id_mag' => Auth::user()->id_magasin,'searchVal' => $key,'produits' => [],'accessoire' => $accessoire]);
         }
         else {
            return redirect()->back()->withErrors(['aucune recherche trouvé']);
         }
        }
    }

    public function cmd_search(Request $req) {
        if ($req->search == null) {
            return redirect()->back();
        }
        $req->validate([
            'search' =>  'required'
        ]);

        if ($req->search != null) {
        $idMag = Auth::user()->id_magasin;
        $key = $req->search;
        $cmds = Commande::select('*')
        ->whereRaw('(id_magasin = ? and (ClientName like ? or ClientEmail like ? or ClientTelephone like ?  or Clientstate like ? or ClientCommune like ? or ClientHomeAddress like ?))',[
            $idMag,'%'.$key.'%','%'.$key.'%','%'.$key.'%','%'.$key.'%','%'.$key.'%','%'.$key.'%'])
        ->get();
         if ( $cmds != null &&  $cmds->count() > 0) {
            return view('dashboard.commande',['id_mag' => Auth::user()->id_magasin,'searchVal' => $key,'cmds' => $cmds]);
         }
         else {
            return redirect()->back()->withErrors(['aucune recherche trouvé']);
         }
        }
    }

    public function client_search(Request $req) {
        if ($req->search == null) {
            return redirect()->back();
        }
        $req->validate([
            'search' =>  'required'
        ]);

        if ($req->search != null) {
        $idMag = Auth::user()->id_magasin;
        $key = $req->search;
        $clients = Client::select('*')
        ->whereRaw('nom like ? or telephone like ? or 	email like ?  or wilaya like ? or address like ?',[
            '%'.$key.'%','%'.$key.'%','%'.$key.'%','%'.$key.'%','%'.$key.'%','%'.$key.'%'])
        ->get();
         if ( $clients != null &&  $clients->count() > 0) {
            return view('dashboard.client',['id_mag' => Auth::user()->id_magasin,'searchVal' => $key,'clients' => $clients]);
         }
         else {
            return redirect()->back()->withErrors(['aucune recherche trouvé']);
         }
        }
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
