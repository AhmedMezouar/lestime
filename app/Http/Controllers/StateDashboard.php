<?php

namespace App\Http\Controllers;

use App\Models\Accessoire;
use App\Models\Commande;
use App\Models\Magasin;
use App\Models\Produit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StateDashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function indexDpense()
     {
            //hna dir return net3 lapage neet3
            //return view('dashboard.)
     }
     
    public function indexclient()
    {
        //
        $datenow = Carbon::now()->format('d/m/Y');
        $datesemain = Carbon::now()->subDays(7)->format('d/m/Y');
        $datemois = Carbon::now()->subDays(30)->format('d/m/Y');
        $idMag = Auth::user()->id_magasin;

        $nomMag = Magasin::select('*')->whereRaw('id=?',[$idMag])->first()->lib_magasin;
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
        ->whereRaw('cmd.id=bes.id_cmd')
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
            'searchVal' => null,
            'nomMag' =>$nomMag
        ]);
    }

    public function indexproduit()
    {
        //
        $idMag = Auth::user()->id_magasin;
        $produits = Produit::select('*')->whereRaw('id_magasin = ?',[$idMag])->get();
        $accessoire = Accessoire::select('*')->whereRaw('id_magasin = ?',[$idMag])->get();
        $nomMag = Magasin::select('*')->whereRaw('id=?',[$idMag])->first()->lib_magasin;
        return view('dashboard.statistique-product',[
            'id_mag' => Auth::user()->id_magasin,
            'produits' => $produits,
            'accessoire' =>$accessoire,
            'searchVal' => null,
            'nomMag' =>$nomMag
        ]);
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
