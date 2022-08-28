@extends('dashboard.index2')
@section('Content')
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Client /</span> Ajouter un Client</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-l">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Les Information principale d'un Client</h5>
                      <small class="text-muted float-end">Doit remplir</small>
                    </div>
                    @if ($errors->any()) 
		                @foreach ($errors->all() as $error)
	              	  <div class="alert alert-danger" >
		                	{{$error}}
	              	  </div>
	              	  @endforeach
		                @endif
                    <div class="card-body">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Nom & Prénom</label>
                          <div class="col-sm-4">
                          <form method="POST" action="{{route('dashboard.client.store')}}">
                           @csrf
                          <input
                              type="text"
                              class="form-control"
                              name="clientName"
                              id="basic-default-company"
                              placeholder="Nom."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Nombre d'achat</label>
                          <div class="col-sm-4">
                            <input
                              type="nombre"
                              class="form-control"
                              name="nbr"
                              id="basic-default-company"
                              placeholder="Nombre d'achat."
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Némuro de tél</label>
                          <div class="col-sm-4">
                            <input
                              type="phone"
                              class="form-control"
                              name="clientTelephone"
                              id="basic-default-company"
                              placeholder="Némuro de tél."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">E-mail</label>
                          <div class="col-sm-4">
                            <input
                            type="e-mail"
                              class="form-control"
                              id="basic-default-company"
                              name="clientEmail"
                              placeholder="E-mail."
                            />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Adresse</label>
                          <div class="col-sm-4">
                            <input
                            type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="adresse"
                              placeholder="Adresse."
                            />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Wilaya</label>
                          <div class="col-sm-4">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="wilaya"
                              placeholder="Wilaya."
                            />
                          </div>
                        </div>
                        
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Ajouter le client</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic with Icons -->
                </div>
@endsection