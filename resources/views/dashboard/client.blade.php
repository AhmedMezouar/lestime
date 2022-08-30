@extends('dashboard.index2')
@section('SearchBar')
 <!-- Search -->
 @if ($searchVal == null)
 <div class="navbar-nav align-items-center">
              
                  <form method="POST" action="{{route('dashboard.commande.client_search')}}">
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
                  <form method="POST" action="{{route('dashboard.commande.client_search')}}">
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Client /</span> Liste des Clients</h4>

              <!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header">Listes des client</h5>
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
              <!--/ Hoverable Table rows -->

              <hr class="my-5" />
@endsection