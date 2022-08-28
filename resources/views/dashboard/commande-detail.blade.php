@extends('dashboard.index2')
@section('Content')
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Commande /</span> Produit commander </h4>
            <!-- Hoverable Table rows -->
            <div class="card" style="margin-bottom: 40px;">
              <div class="row mb-1">
                <div class="col-md-6 col-lg-3 mb-3">
                  <h5 class="card-header">Détails de la commande</h5>
                </div>
                <div class="col-md-6 col-lg-2 mb-3">
                </div>
                @if ($cmd->EtatCommand != 5)
                <div class="col-md-3 col-lg-7 mb-3" style="margin-top: 15px; float: right;">
                <form method="POST" action="{{route('dashboard.commande.changestate')}}">
                                  @csrf
                                 <input type="hidden" name="newetat" value="6"/>
                                 <input type="hidden" name="cetat" value="{{$cmd->EtatCommand}}"/>
                                 <input type="hidden" name="idcmd" value="{{$cmd->id}}"/>
                                 <button type="submit" class="btn btn-primary2">abondonner le panier</button>
                  </form>
                  <form method="POST" action="{{route('dashboard.commande.changestate')}}">
                                  @csrf
                                 <input type="hidden" name="newetat" value="4"/>
                                 <input type="hidden" name="cetat" value="{{$cmd->EtatCommand}}"/>
                                 <input type="hidden" name="idcmd" value="{{$cmd->id}}"/>
                                 <button type="submit" class="btn btn-primary2">Annuler à la livraison</button>
                  </form>
                  <form method="POST" action="{{route('dashboard.commande.changestate')}}">
                                  @csrf
                                 <input type="hidden" name="newetat" value="5"/>
                                 <input type="hidden" name="cetat" value="{{$cmd->EtatCommand}}"/>
                                 <input type="hidden" name="idcmd" value="{{$cmd->id}}"/>
                                 <button type="submit" class="btn btn-primary2">Valider la commande</button>
                   </form>
                   <form method="POST" action="{{route('dashboard.commande.changestate')}}">
                                  @csrf
                                 <input type="hidden" name="newetat" value="2"/>
                                 <input type="hidden" name="cetat" value="{{$cmd->EtatCommand}}"/>
                                 <input type="hidden" name="idcmd" value="{{$cmd->id}}"/>
                                 <button type="submit" class="btn btn-primary2">Confirmer en livraison</button>
                   </form>
                </div>
                @else <div></div>
                @endif
                
              </div>
              <div class="table-responsive text-nowrap">
                <table class="table table-hover" style="font-size: 20px;">
                  <thead>
                    <tr>
                      <th>Order</th>
                      <th>Nom de client</th>
                      <th>Date</th>
                      <th>Statut</th>
                      <th>Total de panier</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i><a href="{{route('dashboard.commande.indexdetai',['idcmd' => $cmd->id])}}"><strong>#{{$cmd->id}}</strong></a></td>
                      <td> {{$cmd->ClientName}}</td>
                      <td> {{$cmd->created_at}}</td>
                      @if ($cmd->EtatCommand == 0)
                        <td><span class="badge bg-label-primary me-1">Nouveau</span></td>
                        @elseif ($cmd->EtatCommand == 1)
                        <td><span class="badge bg-label-warning me-1">En attends</span></td>
                        @elseif ($cmd->EtatCommand == 2)
                        <td><span class="badge bg-label-info me-1">En livraison</span></td>
                        @elseif ($cmd->EtatCommand == 3)
                        <td><span class="badge bg-label-success me-1">Livré</span></td>
                        @elseif ($cmd->EtatCommand == 4)
                        <td><span class="badge bg-label-warning me-1">Annuler</span></td>
                        @elseif ($cmd->EtatCommand == 5)
                        <td><span class="badge bg-label-info me-1">Confirmé</span></td>
                        @elseif ($cmd->EtatCommand == 6)
                        <td><span class="badge bg-label-warning me-1">Annuler en panie</span></td>
                        @endif
                        <td>{{$cmd->netapayer}}  DA</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!--/ Hoverable Table rows -->
              <!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header">Listes des produits commander</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th> </th>
                        <th>Nom de produit</th>
                        <th>Size de produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" style="color: #222;">
                    @foreach($cmds as $cmd)
                      <tr>
                        <td><img src="{{asset("/storage/$cmd->ImageFileName1")}}" class="pic-product"></td>
                        <td>{{$cmd->nameProd}}</td>
                        <td>{{$cmd->vol_prod}}</td>
                        @if ($cmd->vol_prod == 35)
                        <td> {{$cmd->prix_new_35}}</td>
                        @elseif ($cmd->vol_prod == 50)
                        <td> {{$cmd->prix_new_50}}</td>
                        @elseif ($cmd->vol_prod == 100)
                        <td> {{$cmd->prix_new_100}}</td>
                        @endif
                        <td>{{$cmd->qte_ht}} </td>
                        <td> {{$cmd->Total}} DA</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  
                </div>
              </div>
              <!--/ Hoverable Table rows -->
              <style>
                .pic-product {
                  width: 90px !important;
                  height: 90px !important;
                  border-radius: 15px;
                }
              </style>

              <hr class="my-5" />
@endsection