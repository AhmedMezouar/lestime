@extends('dashboard.index2')
@section('SearchBar')
 <!-- Search -->
 @if ($searchVal == null)
 <div class="navbar-nav align-items-center">
              
                  <form method="POST" action="{{route('dashboard.state.stateclient_search')}}">
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
                  <form method="POST" action="{{route('dashboard.state.stateclient_search')}}">
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Statistique /</span> Statistique des Dépenses</h4>
              <div class="row">
                <div class="col-3 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                          <div class="card-title">
                            <h5 class="text-nowrap mb-2">Inventaire de la journée</h5>
                            <span class="badge bg-label-warning rounded-pill">{{$datenow}}</span>
                          </div>
                          <div class="mt-sm-auto">
                            @if ($indicemontanttoday > 0)
                            <small class="text-success text-nowrap fw-semibold"
                              ><i class="bx bx-chevron-up"></i> {{$indicemontanttoday}}%</small
                            >
                            @else
                            <small class="text-success text-nowrap fw-semibold"
                              ><i class="bx bx-chevron-up"></i> +{{$indicemontanttoday}}%</small
                            >
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
                <div class="col-3 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                          <div class="card-title">
                            <h5 class="text-nowrap mb-2">Inventaire de la semaine</h5>
                            <span class="badge bg-label-warning rounded-pill">DEPUIS {{$datesemain}}</span>
                          </div>
                          <div class="mt-sm-auto">
                            @if ($indicemontantsemain > 0)
                            <small class="text-success text-nowrap fw-semibold"
                              ><i class="bx bx-chevron-up"></i> {{$indicemontantsemain}}%</small
                            >
                            @else
                            <small class="text-success text-nowrap fw-semibold"
                              ><i class="bx bx-chevron-up"></i> +{{$indicemontantsemain}}%</small
                            >
                            @endif
                            <h3 class="mb-0">{{$montatsemain}} DA</h3>
                            <h6 class="mb-0">{{$montatsemain}} DA</h6>
                          </div>
                        </div>
                        <div id="profileReportChart"></div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-3 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                          <div class="card-title">
                            <h5 class="text-nowrap mb-2">Inventaire de mois </h5>
                            <span class="badge bg-label-warning rounded-pill">DEPUIS {{$datemois}}</span>
                          </div>
                          <div class="mt-sm-auto">
                            @if ($indicemontantmois > 0)
                            <small class="text-success text-nowrap fw-semibold"
                              ><i class="bx bx-chevron-up"></i> {{$indicemontantmois}}%</small
                            >
                            @else
                            <small class="text-success text-nowrap fw-semibold"
                              ><i class="bx bx-chevron-up"></i> +{{$indicemontantmois}}%</small
                            >
                            @endif
                            <h3 class="mb-0">{{$montatmois}} DA</h3>
                            <h6 class="mb-0">{{$montatmois}} DA</h6>
                          </div>
                        </div>
                        <div id="profileReportChart"></div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-3 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                          <div class="card-title">
                            <h5 class="text-nowrap mb-2">Inventaire Total </h5>
                           
                          </div>
                          <div class="mt-sm-auto">
                            <small class="text-success text-nowrap fw-semibold"
                              ><i class="bx bx-chevron-up"></i> +99.5%</small
                            >
                            <h3 class="mb-0">{{$montattotal}} DA</h3>
                            <h6 class="mb-0">{{$montattotal}} DA</h6>
                          </div>
                        </div>
                        <div id="profileReportChart"></div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- Hoverable Table rows -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-l">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Les Dépenses que vous avez </h5>
                      <small class="text-muted float-end">Doit remplir</small>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="{{route('dashboard.product.storeDb')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Vous avez dépenser sur : </label>
                          <div class="col-sm-3">
                            <input name="nameProd" type="text" class="form-control" id="basic-default-name" placeholder="Sponsoring, retour ... " />
                          </div>
                          <label class="col-sm-1 col-form-label" for="basic-default-name">La somme </label>
                          <div class="col-sm-3">
                            <input name="markprod" type="text" class="form-control" id="basic-default-name" placeholder="Le montant que vous avez dépenser" />
                          </div>
                          <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary">Ajouter a la liste de dépenses</button>
                          </div>
                        </div>
                        
                        </div>
                      </form>
                    </div>
                  </div>
                <!-- Basic with Icons -->
              </div>
              <div class="card">
                <h5 class="card-header">Listes des Dépenses</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Dépense sur</th>
                        <th>Date</th>
                        <th>La somme de dépense</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($table as $tb)
                      <tr>
                        <td> Sponsoring</td>
                        <td> 2022-08-30 08:33:34</td>
                        <td> 24000.00 DA</td> 
                        <!-- <td> {{$tb ->ClientName}}</td>
                        <td> {{$tb ->ClientTelephone}}</td>
                        <td> {{$tb ->Total}} </td> -->
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->

              <hr class="my-5" />
@endsection