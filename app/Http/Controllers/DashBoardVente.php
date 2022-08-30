<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\Magasin;
use App\Models\Produit;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashBoardVente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datenow = Carbon::now()->format('d/m/Y');
        $idMag = Auth::user()->id_magasin;
        $nomMag = Magasin::select('*')->whereRaw('id=?',[$idMag])->first()->lib_magasin;
        $nbrproduitenstock = Produit::select('*')
        ->whereRaw('(id_magasin = ? and (Qte_stock_35+Qte_stock_50+Qte_stock_100) > ?)',[$idMag,0])
        ->get()->count();
        $commannds = Commande::select('*')->whereRaw('id_magasin = ?',[$idMag])
        ->orderByRaw('id DESC')
        ->get();
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
        $nbrproduitoutstock = Produit::select('*')
        ->whereRaw('(id_magasin = ? and (Qte_stock_35+Qte_stock_50+Qte_stock_100) = ?)',[$idMag,0])
        ->get()->count();
        $nbrclientold = Client::selectRaw('count(*) as nbr')->whereRaw('date(created_at) = DATE_SUB(CURDATE(), INTERVAL 7 DAY)')->first()->nbr;
        $nbrclient = Client::selectRaw('count(*) as nbr ')->whereRaw('date(created_at) > DATE_SUB(CURDATE(), INTERVAL 7 DAY)')->first()->nbr;
        if ($nbrclientold > 0)
        $indiceclient = ($nbrclient - $nbrclientold) * 100 / $nbrclientold;
        else $indiceclient = 100;
        $commandattendold = Commande::selectRaw('count(*) as nbr')
        ->whereRaw('id_magasin = ? and EtatCommand = 1 and date(created_at) = DATE_SUB(CURDATE(), INTERVAL 7 DAY)',[$idMag])
        ->first()->nbr;

        $commandattend = Commande::select('*')
        ->whereRaw('id_magasin = ? and EtatCommand = 1 and date(created_at) > DATE_SUB(CURDATE(), INTERVAL 7 DAY)',[$idMag])
        ->get()->count();
        if ($commandattendold >0 )
        $indicecommandattend = ($commandattend - $commandattendold) * 100 / $commandattendold;
        else  $indicecommandattend =100;
        $commandlaivrold = Commande::selectRaw('count(*) as nbr')
        ->whereRaw('id_magasin = ? and EtatCommand = 2 and date(created_at) = DATE_SUB(CURDATE(), INTERVAL 7 DAY)',[$idMag])
        ->first()->nbr;
        
        $commandlaivr = Commande::select('*')
        ->whereRaw('id_magasin = ? and EtatCommand = 2 and date(created_at) > DATE_SUB(CURDATE(), INTERVAL 7 DAY)',[$idMag])
        ->get()->count();
        if ($commandlaivrold > 0)
        $indicecommandlaivr = ($commandlaivr - $commandlaivrold) * 100/ $commandlaivrold;
        else $indicecommandlaivr = 0;
        $clients = Client::all();
        return view('dashboard.maindashboard',[
            'nbrclient' => $nbrclient,
            'id_mag' => $idMag,
            'commandattend' => $commandattend,
            'commandlaivr' => $commandlaivr,
            'nbrproduitenstock' => $nbrproduitenstock,
            'nbrproduitoutstock' => $nbrproduitoutstock,
            'datenow' => $datenow,
            'nomMag' => $nomMag,
            'montatToday' => $montatToday,
            'cmds' =>$commannds,
            'clients' =>$clients,
            'indiceclient' =>number_format((float)$indiceclient, 2, '.', ''),
            'indicecommandlaivr' =>number_format((float)$indicecommandlaivr, 2, '.', ''),
            'indicecommandattend' =>number_format((float)$indicecommandattend, 2, '.', ''),
            'indicemontanttoday' =>number_format((float)$indicemontanttoday, 2, '.', ''),
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
