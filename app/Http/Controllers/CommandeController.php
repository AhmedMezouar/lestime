<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\TarfivLaiv;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
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
         $commannds = Commande::select('*')->whereRaw('id_magasin = ?',[$id])->get();
         return view('dashboard.commande',['cmds' => $commannds,'etat' => 0]);
    }

    public function filter($etat)
    {
        //
         $id = Auth::user()->id_magasin;
         $commannds = Commande::select('*')->whereRaw('id_magasin = ? and EtatCommand = ?',[$id,$etat])->get();
         if ($etat == 0) //nev
              return view('dashboard.commande-new',['cmds' => $commannds,'etat' => $etat]);
         else if ($etat == 1) //nev
         return view('dashboard.commande-attend',['cmds' => $commannds,'etat' => $etat]);
         else if ($etat == 2) //nev
         return view('dashboard.commande-livre',['cmds' => $commannds,'etat' => $etat]);
         else if ($etat == 3) //nev
         return view('dashboard.commande-annuler',['cmds' => $commannds,'etat' => $etat]);
         else if ($etat == 4) //nev
         return view('dashboard.commande-confirme',['cmds' => $commannds,'etat' => $etat]);
         else if ($etat == 5) //nev
         return view('dashboard.commande-panier-abb',['cmds' => $commannds,'etat' => $etat]);
         else return view('dashboard.commande',['cmds' => $commannds,'etat' => $etat]);
    }

    public function getTarif(Request $req) {
        $up = TarfivLaiv::select('*')
        ->whereRaw('id = ?',[$req->id])
        ->first();

        if ($req->type == 1) //desk 
        {
            return redirect()->route('cart.index',['id'=>$req->idMag,'tarif' => $up->prix_desk]);
        }else{
            return redirect()->route('cart.index',['id'=>$req->idMag,'tarif' => $up->prix_domicille]);
        }

    }
    public function changeState(Request $req) {
        
        $id = Auth::user()->id_magasin;
        $up = DB::update('update commandes set EtatCommand = ? where (id_magasin=? and id=?)',[$req->newetat,$id,$req->idcmd]);
        if ($req->cetat == 0)
        return redirect()->route('dashboard.commande.index');
        else  if ($req->cetat > 0)
        return redirect()->route('dashboard.commande.filter',['etat' => $req->cetat]);
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
    public function  toname($id) {
        switch ($id) {
            case 1 : return "Adrar";break;
            case 2:  return "Chlef";break;
            case 3 : return "Laghouat";break;
            case 4 : return "Oum El Bouaghi";break;
            case 5:  return "Batna";break;
            case 6 : return "Béjaïa";break;
            case 7:  return "Biskra";break;
            case 8 : return "Béchar";break;
            case 9:  return "Blida";break;
            case 10 : return "Bouira";break;
            case 11:  return "Tamanrasset";break;
            case 12 : return "Tébessa";break;
            case 13:  return "Tlemcen";break;
            case 14 : return "Tiaret";break;
            case 15:  return "Tizi Ouzou";break;
            case 16 : return "Alger";break;
            case 17:  return "Djelfa";break;
            case 18 : return "Jijel";break;
            case 19:  return "Sétif";break;
            case 20 : return "Saïda";break;
            case 21:  return "Skikda";break;
            case 22 : return "Sidi Bel Abbès";break;
            case 23:  return "Annaba";break;
            case 24 : return "Guelma";break;
            case 25:  return "Constantine";break;

            case 26 : return "Médéa";break;
            case 27:  return "Mostaganem";break;
            case 28: return "M'Sila";break;
            case 29:  return "Mascara";break;
            case 30 : return "Ouargla";break;
            case 31:  return "Oran";break;
            case 32: return "El Bayadh";break;
            case 33:  return "Illizi";break;
            case 34: return "Bordj Bou Arreridj";break;
            case 35:  return "Boumerdès";break;
            case 36 : return "El Tarf";break;
            case 37:  return "Tindouf";break;
            case 38 : return "Tissemsilt";break;
            case 39:  return "El Oued";break;
            case 40 : return "Khenchela";break;
            case 41:  return "Souk Ahras";break;
            case 42 : return "Tipaza";break;
            case 43:  return "Mila";break;
            case 44 : return "Aïn Defla";break;
            case 45:  return "Naâma";break;
            case 46 : return "Aïn Témouchent";break;
            case 47:  return "Ghardaïa";break;
            case 48 : return "Relizane";break;

            case 49 : return "El M'Ghair";break;
            case 50:  return "El Meniaa";break;
            case 51 : return "Ouled Djellal";break;
            case 52:  return "Bordj Badji Mokhtar";break;
            case 53 : return "Béni Abbès";break;
            case 54:  return "Timimoun";break;
            case 55 : return "Touggourt";break;
            case 56:  return "Djanet";break;
            case 57 : return "In Salah";break;
            case 58 : return "In Guezzam";break;
        }
    }

    public function store(Request $req)
    {
       
        $req->validate([
            'nomClient' =>'required',
            'email' => 'required|email:rfc,dns',
            'numberTele' =>'required|min:10|max:15',
            'wilaya'=>'required|digits_between:1,58',
            'adresse' => 'required|min:8',
            'state' => 'required|min:5',
            'livraison' => 'required|digits_between:0,1',
        ]);
        //
        $clientName = $req->nomClient;
        $clientTelephone= $req->numberTele;
        $clientEmail= $req->email;
        $CMDID = DB::insert('insert into commandes (id_magasin,ClientEmail,ClientName,Clientstate,ClientTelephone,ClientHomeAddress,ClientCommune,EtatCommand,Typelaivr,netapayer,created_at,updated_at)	
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$req['idMag'],$clientEmail,$clientName,$req['wilaya'],$clientTelephone,$req['adresse'], $req['state'],0,$req['livraison'],0,Carbon::now(),Carbon::now()]);
        $cmdid = DB::getPdo()->lastInsertId();
        $netapayer = 0;
        $clientcmd = Client::select('*')
        ->whereRaw('telephone = ?',[$clientTelephone])
        ->first();
        if (is_null($clientcmd)) {
        $cm = DB::insert('insert into clients(nom,telephone,email,address,wilaya,nbrachat)
        values (?, ?, ?, ?, ?, ?)',[$clientName,$clientTelephone,$clientEmail,$req->adresse,$this->toname(intVal($req->wilaya)),1]);
        }else{
            $cm = DB::update('update clients set nbrachat = nbrachat+1 where id=?',[$clientcmd->id]);
        }

        
        foreach (Cart::content() as $item) {
            
        if ($req->idMag == $item->options->id_magasin) {

              $CMDID2 = DB::insert('insert into lign_commandes (id_cmd,id_prod,vol_prod,qte_ht,Total)	
              values (?, ?, ?, ?, ?)', [$cmdid,$item->id,$item->options->volume,$item->qty,$item->qty*$item->price]);
              $netapayer = $netapayer + ($item->qty*$item->price);
        }
        }
        $netapayer = $netapayer + $req->tarifLaiv;

        $up = DB::update('update commandes set netapayer=? where id=?',[$netapayer,$cmdid]);

        return redirect()->route('ecommerce.show',['id' => $req->idMag]);

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
