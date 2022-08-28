@extends('dashboard.index2')
@section('Content')

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary" style="font-size: 32px;">Bienvenue 🎉 L'ESTIME {{$nomMag}}</h5>
                          <p class="mb-4">
                            Vous avez réalisé 
                            des ventes en plus aujourd'hui. Vérifiez votre nouveau badge dans votre profil.
                          </p>

                          <a href="{{route('dashboard.commande.filter',['etat'=>0])}}" class="btn btn-sm btn-outline-primary">Voir les nouelles commandes</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 order-1">
                  <div class="row">
                    <div class="col-lg-3 col-md-2 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">Voire plus</a>
                                
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">les visiteurs en ligne</span>
                          <h3 class="card-title mb-2">541 Personnes</h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/wallet-info.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="{{route('dashboard.client.index')}}">Voire plus</a>
                                
                              </div>
                            </div>
                          </div>
                          <span>Clients</span>
                          <h3 class="card-title text-nowrap mb-1">{{$nbrclient}} Personnes</h3>
          
                          @if ($indiceclient < 0)
                          <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> {{$indiceclient}}%</small>
                          @else
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +{{$indiceclient}}%</small>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/cc-warning.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="{{route('dashboard.commande.filter',['etat'=>2])}}">Voire plus</a>
                                
                              </div>
                            </div>
                          </div>
                          <span>Panier en livraison</span>
                          <h3 class="card-title text-nowrap mb-1">{{$commandlaivr}} Panier</h3>
                          
                          @if ($indicecommandlaivr < 0)
                          <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> {{$indicecommandlaivr}}%</small>
                          @else
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +{{$indicecommandlaivr}}%</small>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt4"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="{{route('dashboard.commande.filter',['etat'=>1])}}">Voire plus</a>
                                
                              </div>
                            </div>
                          </div>
                          <span class="d-block mb-1">Commandes en attende</span>
                          <h3 class="card-title text-nowrap mb-2">{{$commandattend}} Commandes</h3>
                          @if ($indicecommandattend < 0)
                          <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> {{$indicecommandattend}}%</small>
                          @else
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +{{$indicecommandattend}}%</small>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="javascript:void(0);">Voire plus</a>
                                
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Catalogues</span>
                          <h5 class="card-title mb-2 text-success">{{$nbrproduitenstock}} Produits en Stock</h5>
                          <h5 class="card-title mb-2 text-danger">{{$nbrproduitoutstock}} Produits out Stock</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2">Inventaire de la journée</h5>
                                <span class="badge bg-label-warning rounded-pill">{{$datenow}}</span>
                              </div>
                              <div class="mt-sm-auto"> 
                                    @if ($indicemontanttoday < 0)
                                   <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> {{$indicemontanttoday}}%</small>
                                    @else
                                  <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +{{$indicemontanttoday}}%</small>
                                     @endif
                                <h3 class="mb-0">{{$montatToday}} DA</h3>
                                <h6 class="mb-0">{{$montatToday}} DA</h6>
                              </div>
                            </div>
                            <div id="profileReportChart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Revenue -->
                
                <!--/ Total Revenue -->
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    
                    <!-- </div>
                    <div class="row"> -->
                    
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-6 col-xl-6 order-0 mb-4">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Order</th>
                          <th>Date</th>
                          <th>Client</th>
                          <th>Status</th>
                          <th>Total</th>
                          
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                      @foreach($cmds as $cmd)
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i><a href="{{route('dashboard.commande.indexdetai',['idcmd' => $cmd->id])}}"><strong>#{{$cmd->id}}</strong></a></td>
                        <td> {{$cmd->created_at}}</td>
                        <td> {{$cmd->ClientName}}</td>
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
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
                <div class="col-md-6 col-lg-6 order-6 mb-4">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nom & Prénom</th>
                          <th>N° Tel</th>
                          <th>E-mail</th>
                          <th>Adresse</th>
                          <th>Wilaya</th>
                          <th>Nombre d'achat</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                      @foreach ($clients as $client)
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i><a href="#"><strong>#{{$client->id}}</strong></a></td>
                        <td>{{$client->nom}}</td>
                        <td> {{$client->telephone}}</td>
                        <td> {{$client->email}}</td>
                        <td> {{$client->address}}</td>
                        <td> {{$client->wilaya}}</td>
                        <td> {{$client->nbrachat}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <!--/ Expense Overview -->
              </div>
@endsection
