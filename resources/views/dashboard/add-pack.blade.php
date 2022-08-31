@extends('dashboard.index2')
@section('SearchBar')
 <!-- Search -->
 @if ($searchVal == null)
 <div class="navbar-nav align-items-center">
              
                  <form method="POST" action="{{route('dashboard.state.stateproduit_search2')}}">
                  @csrf
                  <div class="nav-item d-flex align-items-center">
                    <input type="hidden" name="type_search" value="2"/>
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
                  <form method="POST" action="{{route('dashboard.state.stateproduit_search2')}}">
                  @csrf
                  <input type="hidden" name="type_search" value="2"/>
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produit /</span> Ajouter un Pack</h4>
              @if ($errors->any()) 
		  @foreach ($errors->all() as $error)
		  <div class="alert alert-danger" >
			{{$error}}
		  </div>
		  @endforeach
		@endif
              <div class="row">
              <!-- Basic Layout -->
              @if ($pack != null)
               <div class="col-l">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Les caractéristiques principale d'un pack</h5>
                      <small class="text-muted float-end">Doit remplir</small>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{route('dashboard.product.addpacktempo')}}" enctype="multipart/form-data">
                     @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nom de pack</label>
                          <div class="col-sm-6">
                            <input name="name_pack" type="text" class="form-control" value="{{$pack->name_pack}}" id="basic-default-name" placeholder="Nom de pack" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix de vente</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              class="form-control"
                              name="prix_vt"
                              value="{{$pack->prix_vt}}"
                              value="0"
                              id="basic-default-company"
                              placeholder="Prix de vente de"
                            />
                          </div>
                        
                       
                        <label class="col-sm-3 col-form-label" for="basic-default-phone">Ajouter image de produit</label>
                          <div class="col-sm-3">
                            <input
                              type="file"
                              name="image"
                              id="pic01"
                              class="form-control"
                            />
                          </div>
                        </div>
                          
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                          <div class="col-sm-10">
                            <textarea
                              id="basic-default-message"
                              class="form-control"
                              placeholder="Ajouter un description sur votre produit"
                              aria-label="Ajouter un description sur votre produit"
                              aria-describedby="basic-icon-default-message2"
                              name="descr"
                            >{{$pack->description}}</textarea>
                          </div>
                          </div>
                          <div class="col-sm-12">
                        <input type="hidden" value="10" name="act">
                        <button type="submit" class="btn btn-primary bttn">Ajouter le pack</button>
                        </form>
                        </div>
                          </div>
                          </div>
                      </div>
                     </div>
                       @else
                      <div class="col-l">
                     <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Les caractéristiques principale d'un pack</h5>
                      <small class="text-muted float-end">Doit remplir</small>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{route('dashboard.product.addpacktempo')}}" enctype="multipart/form-data">
                     @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nom de pack</label>
                          <div class="col-sm-6">
                            <input name="name_pack" type="text" class="form-control" id="basic-default-name" placeholder="Nom de pack" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix de vente</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              class="form-control"
                              name="prix_vt"
                              value="0"
                              id="basic-default-company"
                              placeholder="Prix de vente de"
                            />
                          </div>
                        
                       
                        <label class="col-sm-3 col-form-label" for="basic-default-phone">Ajouter image de produit</label>
                          <div class="col-sm-3">
                            <input
                              type="file"
                              name="image"
                              id="pic01"
                              class="form-control"
                            />
                          </div>
                        </div>
                          
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                          <div class="col-sm-10">
                            <textarea
                              id="basic-default-message"
                              class="form-control"
                              placeholder="Ajouter un description sur votre produit"
                              aria-label="Ajouter un description sur votre produit"
                              aria-describedby="basic-icon-default-message2"
                              name="descr"
                            ></textarea>
                          </div>
                          </div>
                          <div class="col-sm-12">

                        <input type="hidden" value="10" name="act">
                        <button type="submit" class="btn btn-primary bttn">Ajouter le pack</button>
                        </form>
                      
                      </div> 
                      </div>
                      </div>
                      @endif
              <!-- Hoverable Table rows -->
              <style>
                .pack-des {
                  display: inline;
                  color: Black;
                }
                .pack-des h4 {
                  color: Black;

                  font-size: 16px;
                  border: 2px solid #333;
                  background-color: #ffc711;
                  border-radius: 10px;
                  padding: 10px;
                  width: 200px;
                  display: inline;
                } 
                .bttn {
                  float: right;
                  margin-right: 20px; 
                }
              </style>
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-l">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Les Produits Séléctionner </h5>
                      <small class="text-muted float-end">Doit remplir</small>
                    </div>
                    <div class="card-body">
                      @if (Cart::instance('pack')->count() > 0)
                        <div class="container-xxl flex-grow-1 container-p-y">
                      @foreach (Cart::instance('pack')->content() as $item)
                          <div class="container-xxl flex-grow-1 container-p-y pack-des">
                            <h4>
                              {{$item ->name}}( {{$item ->qty}})
                            </h4>
                          </div>
                      @endforeach
                      </div>
                      @endif
                      <div class="col-sm-12">
                      <form method="POST" action="{{route('dashboard.product.addpacktempo')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="3" name="act">
                        @if ($pack != null)
                        <input type="hidden" value="{{$pack->id}}" name="id_pack">
                        @else
                        <input type="hidden" value="0" name="id_pack">
                        @endif
                        <button type="submit" class="btn btn-primary bttn">valider le pack</button>
                        </form>
                        <form method="POST" action="{{route('dashboard.product.addpacktempo')}}">
                        @csrf
                        <input type="hidden" value="0" name="act">
                        <button type="submit" class="btn btn-primary2 bttn">Retour au début</button>
                        </form>
                      </div>
                    </div>
                  </div>
                <!-- Basic with Icons -->
              </div>
              <div class="card">
                <h5 class="card-header">Listes des produit</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nom de produit</th>
                        <th>Marque</th>
                        <th>size</th>
                        <th>Prix d'achat</th>
                        <th>Prix de vente</th>
                        <th>Quantité en stock</th>
                        <th>Quantité vendu </th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach($produits as $produit)
                      @if ($produit->Volum35 > 0)
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i><a href="#"><strong>#{{$produit->id}}</strong></a></td>
                        <td>{{$produit->nameProd}}</td>
                        <td> {{$produit->mark_prod}}</td>
                        <td> 35 ML</td>
                        <td> {{$produit->prix_ht_35}}</td>
                        @if ($produit->promo_35 > 0)
                        <td> {{$produit->prix_new_35}}</td>
                        @else 
                        <td> {{$produit->prix_old_35}}</td>
                        @endif
                        <td class="qnt-stock">{{$produit->Qte_stock_35}}</td>
                        <td>{{$produit->Qte_vt_35}}</td>
                        <td>
                        <div class="form-check">
                        <form method="POST" action="{{route('dashboard.product.addpacktempo')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="1" name="act">
                          <input type="hidden" value="{{$produit->id}}" name="id_prod">
                          <input type="hidden" value="{{$produit->nameProd}}" name="name">
                          <input type="hidden" value="35" name="size">
                          <input type="hidden" value="1" name="type">
                          <button
                              type="submit"
                              class="btn btn-warning"
                              aria-expanded="false"
                            >
                              Ajouter
                            </button>
                        </div>
                        </form>
                        </td>
                      </tr>
                      @endif

                      @if ($produit->Volum50 > 0 )
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i><a href="#"><strong>#{{$produit->id}}</strong></a></td>
                        <td>{{$produit->nameProd}}</td>
                        <td> {{$produit->mark_prod}}</td>
                        <td> 50 ML</td>
                        <td> {{$produit->prix_ht_50}}</td>
                        @if ($produit->promo_50 > 0)
                        <td> {{$produit->prix_new_50}}</td>
                        @else 
                        <td> {{$produit->prix_old_50}}</td>
                        @endif
                        <td class="qnt-stock">{{$produit->Qte_stock_50}}</td>
                        <td>{{$produit->Qte_vt_50}}</td>
                        <td>
                        <form method="POST" action="{{route('dashboard.product.addpacktempo')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-check">
                        <input type="hidden" value="1" name="act">
                        <input type="hidden" value="{{$produit->id}}" name="id_prod">
                        <input type="hidden" value="{{$produit->nameProd}}" name="name">
                          <input type="hidden" value="50" name="size">
                          <input type="hidden" value="1" name="type">
                          <button
                              type="submit"
                              class="btn btn-warning"
                            
                              aria-expanded="false"
                            >
                              Ajouter
                            </button>
                        </div>
                        </form>
                        </td>
                      </tr>
                      @endif

                      @if ($produit->Volum100 > 0)
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i><a href="#"><strong>#{{$produit->id}}</strong></a></td>
                        <td>{{$produit->nameProd}}</td>
                        <td> {{$produit->mark_prod}}</td>
                        <td> 100 ML</td>
                        <td> {{$produit->prix_ht_100}}</td>
                        @if ($produit->promo_100 > 0)
                        <td> {{$produit->prix_new_100}}</td>
                        @else 
                        <td> {{$produit->prix_old_100}}</td>
                        @endif
                        <td class="qnt-stock">{{$produit->Qte_stock_100}}</td>
                        <td>{{$produit->Qte_vt_100}}</td>
                        <td>
                        <form method="POST" action="{{route('dashboard.product.addpacktempo')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-check">
                        <input type="hidden" value="1" name="act">
                          <input type="hidden" value="{{$produit->id}}" name="id_prod">
                          <input type="hidden" value="{{$produit->nameProd}}" name="name">
                          <input type="hidden" value="100" name="size">
                          <input type="hidden" value="1" name="type">
                          <button
                              type="submit"
                              class="btn btn-warning"
                            
                              aria-expanded="false"
                            >
                              Ajouter
                            </button>
                        </div>
                        </form>
                        </td>
                      </tr>
                      @endif
                      @endforeach
                      @foreach($accessoire as $acc)
                      <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i><a href="#"><strong>#{{$acc->id}}</strong></a></td>
                        <td>{{$acc->nameProd}}</td>
                        <td> {{$acc->mark_prod}}</td>
                        <td> -- </td>
                        <td> {{$acc->prix_ht}}</td>
                        @if ($acc->promo > 0)
                        <td> {{$acc->prix_new}}</td>
                        @else
                        <td> {{$acc->prix_old}}</td>
                        @endif
                        <td> {{$acc->Qte_stock}}</td>
                        <td> {{$acc->Qte_vt}}</td>
                        <td>
                        <form method="POST" action="{{route('dashboard.product.addpacktempo')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-check">
                        <input type="hidden" value="1" name="act">
                          <input type="hidden" value="{{$acc->id}}" name="id_prod">
                          <input type="hidden" value="{{$acc->nameProd}}" name="name">
                          <input type="hidden" value="0" name="size">
                          <input type="hidden" value="2" name="type">
                          <button
                              type="submit"
                              class="btn btn-warning"
                            
                              aria-expanded="false"
                            >
                              Ajouter
                            </button>
                        </div>
                        </form>
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