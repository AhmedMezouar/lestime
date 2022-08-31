@extends('dashboard.index2')
@section('Content')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produit/</span> Ajouter un Parfum</h4>
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
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Marque de parfum</label>
                          <div class="col-sm-3">
                            <select name="markprod" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                              <option selected>Ouvrir le menu</option>
                              <option value="Hugo Boss">Hugo Boss</option>
                              <option value="louis vuitton">louis vuitton</option>
                              <option value="htom ford">tom ford</option>
                              <option value="azzaro">azzaro</option>
                              <option value="Lacoste">Lacoste</option>
                              <option value="dolce & gabbana">dolce & gabbana</option>
                              <option value="yves saint laurent">yves saint laurent</option>
                              <option value="franck olivier">franck olivier</option>
                              <option value="paco rabanne">paco rabanne</option>
                              <option value="lgivenchy">givenchy</option>
                              <option value="mancera">mancera</option>
                              <option value="emporio armani">emporio armani</option>
                              <option value="calvin klein">calvin klein</option>
                              <option value="ralph lauren">ralph lauren</option>
                              <option value="tommy hilfiger">tommy hilfiger</option>
                              <option value="guerlain">guerlain</option>
                              <option value="jean paul gaultier">jean paul gaultier</option>
                              <option value="dior">dior</option>
                              <option value="giorgio armani">giorgio armani</option>
                              <option value="Gucci">Gucci</option>
                              <option value="chanel">chanel</option>
                              <option value="Zara">Zara</option>
                              <option value="Diesel">Diesel</option>
                              <option value="prada">prada</option>
                              <option value="Polo">Polo</option>
                              <option value="Sospiro">Sospiro</option>
                            </select>  
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nom de parfum</label>
                          <div class="col-sm-5">
                            <select name="nameProd" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                              <option selected>Ouvrir le menu</option>
                              <option value="the scent le parfum 2022">the scent le parfum 2022</option>
                              <option value="bottled night ">bottled night </option>
                              <option value="boss bottled">boss bottled</option>
                              <option value="Hugo Energise">Hugo Energise</option>
                              <option value="element">element</option>
                              <option value="Hugo boss unlimited">Hugo boss unlimited</option>
                              <option value="Boss Tonic">Boss Tonic</option>
                              <option value="boss the scent">boss the scent</option>
                              <option value="hugo extreme">hugo extreme</option>

                              <option value="on the beach">on the beach</option>
                              <option value="contre moi">contre moi</option>
                              <option value="afternoon swim">afternoon swim</option>

                              <option value="bitter peach">bitter peach</option>
                              <option value="black orchid">black orchid</option>

                              <option value="Sport">Sport</option>
                              <option value="wanted tonic">wanted tonic</option>
                              <option value="the most wanted">the most wanted</option>
                              <option value="now">now</option>
                              <option value="chrome">chrome</option>
                              <option value="wanted">wanted</option>

                              <option value="Eau de Lacoste L.12.12 Eau Fraîche">Eau de Lacoste L.12.12 Eau Fraîche</option>
                              <option value="l'homme">l'homme</option>
                              <option value="L'homme intense">L'homme intense</option>
                              <option value="booster">booster</option>
                              <option value="Eau de Lacoste L.12.12 Blanc Limited Edition">Eau de Lacoste L.12.12 Blanc Limited Edition</option>
                              <option value="Eau de Lacoste L.12.12. Noir">Eau de Lacoste L.12.12. Noir</option>
                              <option value="booster 2022">booster 2022</option>

                              <option value="the one sport">the one sport </option>
                              <option value="Pineapple H&F">Pineapple H&F</option>
                              <option value="ليل ساطع">ليل ساطع</option>
                              <option value="ليل ملكي">ليل ملكي</option>
                              <option value="K By Dolce&Gabbana">K By Dolce&Gabbana</option>

                              <option value="L'homme eau de parfum">L'homme eau de parfum</option>
                              <option value="la nuit de l'homme">la nuit de l'homme</option>
                              <option value="l'homme libre">l'homme libre</option>
                              <option value="l'homme sport">l'homme sport</option>
                              <option value="y eau de parfum">y eau de parfum</option>

                              <option value="eau de passion">eau de passion</option>
                              <option value="oud vanille">oud vanille</option>
                              <option value="sun java black">sun java black</option>
                              <option value="oud touch">oud touch</option>
                              <option value="sunrise">sunrise</option>
                              <option value="sun java white homme">sun java white homme</option>
                              <option value="in black">in black</option>

                              <option value="1 million elixir">1 million elixir</option>
                              <option value="major me ">major me </option>
                              <option value="erotic me">erotic me</option>
                              <option value="1 Million Privé">1 Million Privé</option>
                              <option value="Phantom">Phantom</option>
                              <option value="strong me">strong me</option>
                              <option value="invictus victory">invictus victory</option>
                              <option value="XS pure">XS pure</option>
                              <option value="dangerous">dangerous</option>
                              <option value="1 million lucky ">1 million lucky </option>
                              <option value="Invictus">Invictus</option>
                              <option value="invictus legend">invictus legend</option>

                              <option value="gentleman reserve">gentleman reserve</option>
                              <option value="blue label">blue label</option>
                              <option value="gentleman">gentleman</option>

                              <option value="holidays">holidays</option>
                              <option value="black vanille">black vanille</option>
                              <option value="red tobacco">red tobacco</option>
                              <option value="rose vanille">rose vanille</option>
                              <option value="coco vanille">coco vanille</option>

                              <option value="stronger with you only">stronger with you only</option>
                              <option value="stronger with you absolutely">stronger with you absolutely</option>
                              <option value="stronger with you">stronger with you</option>

                              <option value="one summer">one summer</option>
                              <option value="CK one">CK one</option>
                              <option value="eternity">eternity</option>

                              <option value="Ralph's club">Ralph's club</option>

                              <option value="Impact">Impact</option>
                              <option value="Tommy">Tommy</option>

                              <option value="oud">oud</option>
                              <option value="l'instant">l'instant</option>
                              <option value="l'homme idéal sport">l'homme idéal sport</option>

                              <option value="le beau">le beau</option>
                              <option value="le male">le male</option>
                              <option value="ultra male">Ultra male</option>
                              <option value="scandal">Scandal</option>
                              <option value="le male intense">Le male intense</option>

                              <option value="sauvage elixir">sauvage elixir</option>
                              <option value="Higher Energy">Higher Energy</option>
                              <option value="oud ispahan">Oud ispahan</option>
                              <option value="higher energy">Higher energy</option>
                              <option value="gris montaigne">gris montaigne</option>
                              <option value="bois d'argent">bois d'argent</option>
                              <option value="homme intense">homme intense</option>
                              <option value="sauvage">sauvage</option>

                              <option value="acqua di gio">acqua di gio</option>
                              <option value="Armani Privé Rose d'Arabie">Armani Privé Rose d'Arabie</option>
                              <option value="armani code">armani code</option>
                              <option value="vétiver d'hiver armani privé">vétiver d'hiver armani privé</option>

                              <option value="guilty love edition">guilty love edition</option>
                              <option value="guilty">guilty</option>
                              <option value="oud">oud</option>
                              <option value="guilty black">guilty black</option>

                              <option value="ALLURE HOMME ÉDITION BLANCHE">ALLURE HOMME ÉDITION BLANCHE</option>
                              <option value="egoiste platinum">egoiste platinum</option>
                              <option value="allure sport">allure sport</option>
                              <option value="bleu de chanel">bleu de chanel</option>

                              <option value="tobacco">tobacco</option>
                              <option value="BLUE SPIRIT">BLUE SPIRIT</option>

                              <option value="Fuel for life">Fuel for life</option>

                              <option value="luna rossa carbon">Luna rossa carbon</option>
                              <option value="luna rossa sport">luna rossa sport</option>

                              <option value="red intense">red intense</option>
                              <option value="ultra bleu">ultra bleu</option>

                              <option value="erba pura">erba pura</option>
                              <option value="accento">accento</option>


                            </select>  
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
              </div>
@endsection