@extends('dashboard.index2')
@section('SearchBar')
 <!-- Search -->
 @if ($searchVal == null)
 <div class="navbar-nav align-items-center">
              
                  <form method="POST" action="{{route('dashboard.commande.cmd_search')}}">
                  @csrf
                  <div class="nav-item d-flex align-items-center">
                  <button type="submit" class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  </button>
                  <input 
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    name="search"
                    aria-label="Search..."
                  />
                  </form>
                </div>
</div>
              <!-- /Search -->
@else 
<div class="navbar-nav align-items-center">                
                  <form method="POST" action="{{route('dashboard.commande.cmd_search')}}">
                  @csrf
                  <div class="nav-item d-flex align-items-center">
                  <button type="submit" class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  </button>
                  <input 
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    name="search"
                    value={{$searchVal}}
                    aria-label="Search..."
                  />
                  </form>
                </div>
                </div>
@endif
@endsection
@section('Content')
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Commande /</span> Commande En Livraison</h4>

              <!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header">Listes des commandes</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Order</th>
                        <th>Date</th>
                        <th>Client</th>
                        <th>N°Tél</th>
                        <th>E-mail</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach($cmds as $cmd)
                      <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i><a href="{{route('dashboard.commande.indexdetai',['idcmd' => $cmd->id])}}"><strong>#{{$cmd->id}}</strong></a></td>
                        <td> {{$cmd->created_at}}</td>
                        <td> {{$cmd->ClientName}}</td>
                        <td> {{$cmd->ClientTelephone}}</td>
                        <td> {{$cmd->ClientEmail}}</td>
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
                        
                        <td>
                          
                          <div class="btn-group">
                            <button
                              type="button"
                              class="btn btn-warning dropdown-toggle"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              Action
                            </button>
                           
                            <ul class="dropdown-menu">
                              <li>
                                 <form method="POST" action="{{route('dashboard.commande.changestate')}}">
                                  @csrf
                                 <input type="hidden" name="newetat" value="5"/>
                                 <input type="hidden" name="cetat" value="{{$etat}}"/>
                                 <input type="hidden" name="idcmd" value="{{$cmd->id}}"/>
                                 <button type="submit" class="dropdown-item">Valider la commande </button>
                                 </form>
                              </li>
                              <li>
                                
                              <form method="POST" action="{{route('dashboard.commande.changestate')}}">
                              @csrf
                                 <input type="hidden" name="newetat" value="2"/>
                                 <input type="hidden" name="cetat" value="{{$etat}}"/>
                                 <input type="hidden" name="idcmd" value="{{$cmd->id}}"/>
                                 <button type="submit" class="dropdown-item">Confirme en livraison </button>
                                 </form>
                              
                            </li>
                              <li>
                              <form method="POST" action="{{route('dashboard.commande.changestate')}}">
                              @csrf
                                 <input type="hidden" name="newetat" value="4"/>
                                 <input type="hidden" name="cetat" value="{{$etat}}"/>
                                 <input type="hidden" name="idcmd" value="{{$cmd->id}}"/>
                                 <button type="submit" class="dropdown-item">Annuler en livraison </button>
                                 </form>
                              </li>
                              <li>
                              <form method="POST" action="{{route('dashboard.commande.changestate')}}">
                              @csrf
                                 <input type="hidden" name="newetat" value="6"/>
                                 <input type="hidden" name="cetat" value="{{$etat}}"/>
                                 <input type="hidden" name="idcmd" value="{{$cmd->id}}"/>
                                 <button type="submit" class="dropdown-item">Annuler le Panier</button>
                                 </form>
                             </li>
                              
                            </ul>
                          </div>
                          
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->

              <hr class="my-5" />
@endsection