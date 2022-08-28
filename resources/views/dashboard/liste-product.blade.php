@extends('dashboard.index2')
@section('SearchBar')
 <!-- Search -->
 @if ($searchVal == null)
 <div class="navbar-nav align-items-center">
              
                  <form method="POST" action="{{route('dashboard.product.search')}}">
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
                  <form method="POST" action="{{route('dashboard.product.search')}}">
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produit /</span> Liste des produits</h4>
              @if ($errors->any()) 
		  @foreach ($errors->all() as $error)
		  <div class="alert alert-danger" >
			{{$error}}
		  </div>
		  @endforeach
		@endif

              <!-- Examples -->
              <div class="row mb-5">
                @foreach ($produits as $produit)
                @if ($produit->Volum35 > 0)
                <div class="col-md-6 col-lg-2 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">{{$produit->nameProd}} (35ML)</h5>
                      <h6 class="card-subtitle text-muted">Marque: {{$produit->Mark}}</h6>
                      <img
                        class="img-fluid d-flex mx-auto my-4"
                        src="{{asset("/storage/$produit->ImageFileName1")}}"
                        alt="Card image cap"
                      />
                      <p class="card-text old-price">{{$produit->prix_old_35}} DA</p>
                      <p class="card-text new-price">{{$produit->prix_new_35}} DA</p>
                      <a href="{{route('dashboard.product.edit',['idprod' => $produit->id,'size'=> 35])}}" class="card-link">Modifier le produit</a>
                    </div>
                  </div>
                </div>
 
              @endif
              @if ($produit->Volum50 > 0)
              <div class="col-md-6 col-lg-2 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">{{$produit->nameProd}} (50ML)</h5>
                      <h6 class="card-subtitle text-muted">Marque: {{$produit->Mark}}</h6>
                      <img
                        class="img-fluid d-flex mx-auto my-4"
                        src="{{asset("/storage/$produit->ImageFileName1")}}"
                        alt="Card image cap"
                      />
                      <p class="card-text old-price">{{$produit->prix_old_50}} DA</p>
                      <p class="card-text new-price">{{$produit->prix_new_50}} DA</p>
                      <a href="{{route('dashboard.product.edit',['idprod' => $produit->id,'size'=> 50])}}" class="card-link">Modifier le produit</a>
                    </div>
                  </div>
                </div>

              @endif
              @if ($produit->Volum100 > 0)
              <div class="col-md-6 col-lg-2 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">{{$produit->nameProd}} (100ML)</h5>
                      <h6 class="card-subtitle text-muted">Marque: {{$produit->Mark}}</h6>
                      <img
                        class="img-fluid d-flex mx-auto my-4"
                        src="{{asset("/storage/$produit->ImageFileName1")}}"
                        alt="Card image cap"
                      />
                      <p class="card-text old-price">{{$produit->prix_old_100}} DA</p>
                      <p class="card-text new-price">{{$produit->prix_new_100}} DA</p>
                      <a href="{{route('dashboard.product.edit',['idprod' => $produit->id,'size'=> 100])}}" class="card-link">Modifier le produit</a>
                    </div>
                  </div>
                </div>

              @endif
              
              <!-- Examples -->
              @endforeach
              <!-- Examples -->
@endsection