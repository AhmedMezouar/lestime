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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Statistique /</span> Statistique des produits</h4>

              <!-- Hoverable Table rows -->
              <form method="POST" action="{{route('dashboard.product.addpacktempo')}}">
              @csrf
              <div class="card">
                <h5 class="card-header">Listes des commandes</h5>
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
                        <input class="form-check-input" type="checkbox"  value="{{$produit->id.' 35'}}" id="flexCheckDefault" onchange='this.form.submit();'>
                        <label class="form-check-label" for="flexCheckDefault">
                           ajoutier aux pack
                           </label>
                        </div>
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
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox"  value="{{$produit->id.' 50'}} id="flexCheckDefault" onchange='handleChange(this);'>
                        <label class="form-check-label" for="flexCheckDefault">
                           ajoutier aux pack
                           </label>
                        </div>
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
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{$produit->id.' 100'}}" id="flexCheckDefault" onchange='handleChange(this);'>
                        <label class="form-check-label" for="flexCheckDefault">
                           ajoutier aux pack
                           </label>
                        </div>
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
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" onchange='handleChange(this);'>
                        <label class="form-check-label" for="flexCheckDefault">
                           ajoutier aux pack
                           </label>
                        </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              </form>
              <!--/ Hoverable Table rows -->
              <hr class="my-5" />
@endsection