@extends('dashboard.index2')
@section('Content')
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produit/</span> Modifier & Promotion</h4>
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
                      <form method="POST" action="{{route('dashboard.product.applypromoacc')}}">
                        @csrf
                      <input type="hidden" id="input_prix_ht" name="input_prix_ht_value" value="{{$acc->prix_ht}}">
                     
                      <input type="hidden" name="idprod"  value="{{$acc->id}}">

                      <input type="hidden" class="form-control" id="inputnvprix2" name="inputnvprix_val_h" value="{{$acc->prix_new}}"/>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Percentage de promotion</label>
                          <div class="col-sm-4">
                            <input type="number" class="form-control" id="inputpromo" placeholder="Percentage de promotion: 10%, 20%, 50% ..." />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name" >Nouveau Prix</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputnvprix" name="inputnvprix_val" value="{{$acc->prix_new}}" disabled style="color: Green; font-weight: bold; font-size: 18px;" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Prix de Réducation</label>
                          <div class="col-sm-4">
                            <input type="number" class="form-control" id="tauxpromo" value="{{$acc->prix_old-$acc->prix_new}}" disabled style="color: Green; font-size: 16px;"/>
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Ancien Prix</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputoldprix" value="{{$acc->prix_old}}" disabled style="color: red; font-weight: bold; font-size: 18px;"/>
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
               
                <div class="col-l">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Les caractéristiques principale d'un produit</h5>
                      <small class="text-muted float-end">Doit remplir</small>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="{{route('dashboard.product.updateprodacc')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="input_prix_ht" name="input_prix_ht_value" value="{{$acc->prix_ht}}">
                        <input type="hidden" name="idprod"  value="{{$acc->id}}">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nom de produit</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control"  name="nameProd" id="basic-default-name" value="{{$acc->nameProd}}" placeholder="Nom de produit" />
                          </div>
                          <label class="col-sm-1 col-form-label" for="basic-default-name">La marque</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="markProd" id="basic-default-name" value="{{$acc->mark_prod}}"  placeholder="La marque de produit" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix D'achat</label>
                          <div class="col-sm-2">
                            <input
                              type="text"
                              class="form-control"
                              name="prixhtProd"
                              value="{{$acc->prix_ht}}"
                              id="basic-default-company"
                              placeholder="Prix D'achat."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix de vente</label>
                          <div class="col-sm-2">
                            <input
                              type="text"
                              class="form-control"
                              name="prixvtProd"
                              value="{{$acc->prix_old}}"
                              id="basic-default-company"
                              placeholder="Prix de vente."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Quantité en Stock</label>
                          <div class="col-sm-2">
                            <input
                              type="text"
                              value="{{$acc->Qte_stock}}"
                              class="form-control"
                              name="qtestockProd"
                              id="basic-default-company"
                              placeholder="Quantité en Stock de 35 ML."
                            />
                          </div>
                        </div>
                      <div class="row mb-3">
                      
                      <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Choisir le sexe</label>

                          <div class="col-sm-4">
                            <select name="sex" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                              @if ($acc->sex == "Homme")
                              <option selected>Ouvrir le menu</option>
                              <option value="Homme" selected>Homme</option>
                              <option value="Femme">Femme</option>
                              <option value="Femme et Homme">les deux</option>
                              @elseif ($acc->sex == "Femme")
                              <option selected>Ouvrir le menu</option>
                              <option value="Homme">Homme</option>
                              <option value="Femme" selected>Femme</option>
                              <option value="Femme et Homme">les deux</option>
                              @elseif ($acc->sex == "Femme et Homme")
                              <option >Ouvrir le menu</option>
                              <option value="Homme">Homme</option>
                              <option value="Femme">Femme</option>
                              <option value="Femme et Homme" selected>les deux</option>
                              @endif
                            </select>
                        </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Ajouter 3 images de produit</label>
                          <div class="col-sm-3">
                            <input
                              type="file"
                              name="image"
                              id="pic01"
                              value="{{asset("/storage/$acc->image")}}"
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
                            >{{$acc->description}}</textarea>
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
                <!-- Basic with Icons -->
                </div>
                @endsection