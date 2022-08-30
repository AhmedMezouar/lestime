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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Statistique /</span> Statistique des Clients</h4>
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
              <div class="card">
                <h5 class="card-header">Listes des commandes</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Nom de client</th>
                        <th>Telephone de client</th>
                        <th>Nombre de produits acheter</th>
                        <th>Total a payé</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($table as $tb)
                      <tr>
                        <td> {{$tb ->ClientName}}</td>
                        <td> {{$tb ->ClientTelephone}}</td>
                        <td> {{$tb ->Total}} </td>
                        <td> {{$tb ->Qtes}}</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->

              <hr class="my-5" />
@endsection