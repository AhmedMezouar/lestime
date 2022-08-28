@extends('dashboard.index2')
@section('Content')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produit/</span> Ajouter un Produit</h4>
              @if ($errors->any()) 
		  @foreach ($errors->all() as $error)
		  <div class="alert alert-danger" >
			{{$error}}
		  </div>
		  @endforeach
		@endif
              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-l">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Les caractéristiques principale d'un produit</h5>
                      <small class="text-muted float-end">Doit remplir</small>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="{{route('dashboard.product.storeDb')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nom de produit</label>
                          <div class="col-sm-6">
                            <input name="nameProd" type="text" class="form-control" id="basic-default-name" placeholder="Nom de produit" />
                          </div>
                          <label class="col-sm-1 col-form-label" for="basic-default-name">La marque</label>
                          <div class="col-sm-3">
                            <input name="markprod" type="text" class="form-control" id="basic-default-name" placeholder="La marque de produit" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix D'achat de 35 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              name="prix_ht_35"
                              value="0"
                              class="form-control"
                              id="basic-default-company"
                              placeholder="Prix D'achat de 35 ML."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix de vente de 35 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              class="form-control"
                              name="prix_vt_35"
                              value="0"
                              id="basic-default-company"
                              placeholder="Prix de vente de 35 ML."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Quantité en Stock de 35 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              class="form-control"
                              name="qte_stock_35"
                              value="0"
                              id="basic-default-company"
                              placeholder="Quantité en Stock de 35 ML."
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix D'achat de 50 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              class="form-control"
                              name="prix_ht_50"
                              value="0"
                              id="basic-default-company"
                              placeholder="Prix D'achat de 50 ML."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix de vente de 50 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              class="form-control"
                              name="prix_vt_50"
                              value="0"
                              id="basic-default-company"
                              placeholder="Prix de vente de 50 ML."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Quantité en Stock de 50 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              class="form-control"
                              name="qte_stock_50"
                              value="0"
                              id="basic-default-company"
                              placeholder="Quantité en Stock de 50 ML."
                            />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix D'achat de 100 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              class="form-control"
                              name="prix_ht_100"
                              value="0"
                              id="basic-default-company"
                              placeholder="Prix D'achat de 100 ML."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Prix de vente de 100 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              class="form-control"
                              name="prix_vt_100"
                              value="0"
                              id="basic-default-company"
                              placeholder="Prix de vente de 100 ML."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Quantité en Stock de 100 ML</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              class="form-control"
                              name="qte_stock_100"
                              value="0"
                              id="basic-default-company"
                              placeholder="Quantité en Stock de 100 ML."
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Choisir le sexe</label>
                          <div class="col-sm-4">
                            <select name="sex" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                              <option selected>Ouvrir le menu</option>
                              <option value="Homme">Homme</option>
                              <option value="Femme">Femme</option>
                              <option value="homme & femme">Les deux ( homme & femme ) </option>
                              <option value="Autres">Autres</option>
                            </select>
                        </div>
                        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">La saison de ce parfum</label>
                          <div class="col-sm-4">
                            <select name="saison" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                              <option selected>Ouvrir le menu</option>
                              <option value="Le printemps">Le printemps</option>
                              <option value="l'été">l'été</option>
                              <option value="l'automne">l'automne</option>
                              <option value="l'hiver">l'hiver</option>
                            </select>
                        </div>
                          
                      </div>
                        
                        
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-phone">Ajouter 3 images de produit</label>
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
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Ajouter le produit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic with Icons -->
                </div
@endsection