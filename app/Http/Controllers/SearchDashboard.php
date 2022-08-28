<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Produit;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        return view('dashboard.statistique-product',[
            'produits' => $produits,
            'searchVal' => null
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
         if ( $produits != null &&  $produits->count() > 0) {
            return view('dashboard.liste-product',['searchVal' => $key,'produits' => $produits]);
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
            return view('dashboard.commande',['searchVal' => $key,'cmds' => $cmds]);
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
