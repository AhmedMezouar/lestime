@extends('dashboard.index2')
@section('Content')
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produit/</span> Modifier & Promotion</h4>
              @if ($size == 35)
              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                
                <div class="col-l">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Pour lancer une promotion de produit</h5>
                      <small class="text-muted float-end">Doit remplir</small>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="{{route('dashboard.product.applypromo')}}">
                        @csrf
                      <input type="hidden" id="input_prix_ht" name="input_prix_ht_value" value="{{$produit->prix_ht_35}}">
                      <input type="hidden" name="size"  value="{{$size}}">
                      <input type="hidden" name="idprod"  value="{{$produit->id}}">

                      <input type="hidden" class="form-control" id="inputnvprix2" name="inputnvprix_val_h" value="{{$produit->prix_new_35}}"/>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Percentage de promotion</label>
                          <div class="col-sm-4">
                            <input type="number" class="form-control" id="inputpromo" placeholder="Percentage de promotion: 10%, 20%, 50% ..." />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name" >Nouveau Prix</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputnvprix" name="inputnvprix_val" value="{{$produit->prix_new_35}}" disabled style="color: Green; font-weight: bold; font-size: 18px;" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Prix de Réducation</label>
                          <div class="col-sm-4">
                            <input type="number" class="form-control" id="tauxpromo" value="{{$produit->prix_old_35-$produit->prix_new_35}}" disabled style="color: Green; font-size: 16px;"/>
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Ancien Prix</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputoldprix" value="{{$produit->prix_old_35}}" disabled style="color: red; font-weight: bold; font-size: 18px;"/>
                          </div>
                        </div>
                      
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Applique la promotion</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic Layout -->
                <div class="col-l">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Les caractéristiques principale d'un produit</h5>
                      <small class="text-muted float-end">Doit remplir</small>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="{{route('dashboard.product.updateprod')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="input_prix_ht" name="input_prix_ht_value" value="{{$produit->prix_ht_35}}">
                        <input type="hidden" name="size"  value="{{$size}}">
                        <input type="hidden" name="idprod"  value="{{$produit->id}}">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nom de produit</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control"  name="nameProd" id="basic-default-name" value="{{$produit->nameProd}}" placeholder="Nom de produit" />
                          </div>
                          <label class="col-sm-1 col-form-label" for="basic-default-name">La marque</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="markProd" id="basic-default-name" value="{{$produit->mark_prod}}"  placeholder="La marque de produit" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix D'achat de 35 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="text"
                              class="form-control"
                              name="prixht_35Prod"
                              value="{{$produit->prix_ht_35}}"
                              id="basic-default-company"
                              placeholder="Prix D'achat de 35 ML."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix de vente de 35 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="text"
                              class="form-control"
                              name="prixvt_35Prod"
                              value="{{$produit->prix_old_35}}"
                              id="basic-default-company"
                              placeholder="Prix de vente de 35 ML."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Quantité en Stock de 35 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="text"
                              value="{{$produit->Qte_stock_35}}"
                              class="form-control"
                              name="qtestock_35Prod"
                              id="basic-default-company"
                              placeholder="Quantité en Stock de 35 ML."
                            />
                          </div>
                        </div>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Ajouter 3 images de produit</label>
                          <div class="col-sm-3">
                            <input
                              type="file"
                              name="image"
                              id="pic01"
                              value="{{asset("/storage/$produit->ImageFileName1")}}"
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
                            >{{$produit->Descirption}}</textarea>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Applique la modification</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                @elseif ($size == 50)
                <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                
                <div class="col-l">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Pour lancer une promotion de produit</h5>
                      <small class="text-muted float-end">Doit remplir</small>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="{{route('dashboard.product.applypromo')}}">
                        @csrf
                      <input type="hidden" id="input_prix_ht" name="input_prix_ht_value" value="{{$produit->prix_ht_50}}">
                      <input type="hidden" name="size"  value="{{$size}}">
                      <input type="hidden" name="idprod"  value="{{$produit->id}}">

                      <input type="hidden" class="form-control" id="inputnvprix2" name="inputnvprix_val_h" value="{{$produit->prix_new_50}}"/>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Percentage de promotion</label>
                          <div class="col-sm-4">
                            <input type="number" class="form-control" id="inputpromo" placeholder="Percentage de promotion: 10%, 20%, 50% ..." />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name" >Nouveau Prix</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputnvprix" name="inputnvprix_val" value="{{$produit->prix_new_50}}" disabled style="color: Green; font-weight: bold; font-size: 18px;" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Prix de Réducation</label>
                          <div class="col-sm-4">
                            <input type="number" class="form-control" id="tauxpromo" value="{{$produit->prix_old_50-$produit->prix_new_50}}" disabled style="color: Green; font-size: 16px;"/>
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Ancien Prix</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputoldprix" value="{{$produit->prix_old_50}}" disabled style="color: red; font-weight: bold; font-size: 18px;"/>
                          </div>
                        </div>
                      
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Applique la promotion</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic Layout -->
                <div class="col-l">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Les caractéristiques principale d'un produit</h5>
                      <small class="text-muted float-end">Doit remplir</small>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="{{route('dashboard.product.updateprod')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="input_prix_ht" name="input_prix_ht_value" value="{{$produit->prix_ht_50}}">
                        <input type="hidden" name="size"  value="{{$size}}">
                        <input type="hidden" name="idprod"  value="{{$produit->id}}">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nom de produit</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control"  name="nameProd" id="basic-default-name" value="{{$produit->nameProd}}" placeholder="Nom de produit" />
                          </div>
                          <label class="col-sm-1 col-form-label" for="basic-default-name">La marque</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="markProd" id="basic-default-name" value="{{$produit->mark_prod}}"  placeholder="La marque de produit" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix D'achat de 50 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="text"
                              class="form-control"
                              name="prixht_50Prod"
                              value="{{$produit->prix_ht_50}}"
                              id="basic-default-company"
                              placeholder="Prix D'achat de 50 ML."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix de vente de 50 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="text"
                              class="form-control"
                              name="prixvt_50Prod"
                              value="{{$produit->prix_old_50}}"
                              id="basic-default-company"
                              placeholder="Prix de vente de 50 ML."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Quantité en Stock de 50 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="text"
                              value="{{$produit->Qte_stock_50}}"
                              class="form-control"
                              name="qtestock_50Prod"
                              id="basic-default-company"
                              placeholder="Quantité en Stock de 50 ML."
                            />
                          </div>
                        </div>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Ajouter 3 images de produit</label>
                          <div class="col-sm-3">
                            <input
                              type="file"
                              name="image"
                              id="pic01"
                              value="{{asset("/storage/$produit->ImageFileName1")}}"
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
                            >{{$produit->Descirption}}</textarea>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Applique la modification</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                @elseif ($size == 100)

                 <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                
                <div class="col-l">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Pour lancer une promotion de produit</h5>
                      <small class="text-muted float-end">Doit remplir</small>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="{{route('dashboard.product.applypromo')}}">
                        @csrf
                      <input type="hidden" id="input_prix_ht" name="input_prix_ht_value" value="{{$produit->prix_ht_100}}">
                      <input type="hidden" name="size"  value="{{$size}}">
                      <input type="hidden" name="idprod"  value="{{$produit->id}}">

                      <input type="hidden" class="form-control" id="inputnvprix2" name="inputnvprix_val_h" value="{{$produit->prix_new_100}}"/>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Percentage de promotion</label>
                          <div class="col-sm-4">
                            <input type="number" class="form-control" id="inputpromo" placeholder="Percentage de promotion: 10%, 20%, 50% ..." />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name" >Nouveau Prix</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputnvprix" name="inputnvprix_val" value="{{$produit->prix_new_100}}" disabled style="color: Green; font-weight: bold; font-size: 18px;" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Prix de Réducation</label>
                          <div class="col-sm-4">
                            <input type="number" class="form-control" id="tauxpromo" value="{{$produit->prix_old_100-$produit->prix_new_100}}" disabled style="color: Green; font-size: 16px;"/>
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Ancien Prix</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputoldprix" value="{{$produit->prix_old_100}}" disabled style="color: red; font-weight: bold; font-size: 18px;"/>
                          </div>
                        </div>
                      
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Applique la promotion</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic Layout -->
                <div class="col-l">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Les caractéristiques principale d'un produit</h5>
                      <small class="text-muted float-end">Doit remplir</small>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="{{route('dashboard.product.updateprod')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="input_prix_ht" name="input_prix_ht_value" value="{{$produit->prix_ht_100}}">
                        <input type="hidden" name="size"  value="{{$size}}">
                        <input type="hidden" name="idprod"  value="{{$produit->id}}">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nom de produit</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control"  name="nameProd" id="basic-default-name" value="{{$produit->nameProd}}" placeholder="Nom de produit" />
                          </div>
                          <label class="col-sm-1 col-form-label" for="basic-default-name">La marque</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="markProd" id="basic-default-name" value="{{$produit->mark_prod}}"  placeholder="La marque de produit" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix D'achat de 100 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="text"
                              class="form-control"
                              name="prixht_100Prod"
                              value="{{$produit->prix_ht_100}}"
                              id="basic-default-company"
                              placeholder="Prix D'achat de 100 ML."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix de vente de 100 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="text"
                              class="form-control"
                              name="prixvt_100Prod"
                              value="{{$produit->prix_old_100}}"
                              id="basic-default-company"
                              placeholder="Prix de vente de 100 ML."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Quantité en Stock de 100 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="text"
                              value="{{$produit->Qte_stock_100}}"
                              class="form-control"
                              name="qtestock_100Prod"
                              id="basic-default-company"
                              placeholder="Quantité en Stock de 100 ML."
                            />
                          </div>
                        </div>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Ajouter 3 images de produit</label>
                          <div class="col-sm-3">
                            <input
                              type="file"
                              name="image"
                              id="pic01"
                              value="{{asset("/storage/$produit->ImageFileName1")}}"
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
                            >{{$produit->Descirption}}</textarea>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Applique la modification</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                @endif
                <!-- Basic with Icons -->
                </div>
                @endsection