@extends('layouts.app')
@push('stylesheet')

<style>

  .handle {
    cursor: pointer;
  }

  .handle2:hover {
    border-color: #4FB3D9;
    border size: 20px;
  }

  .a-none:hover {
    text-decoration: none;
  }
</style>

@endpush
@section('content')

<div class="container">
  <div class="row">

    <div class="col-3">
      <div class="card " >
        <div class="card-body">
          <h4 class="card-title">Asignaturas</h4>
          {{-- <p class="card-text">Text</p> --}}
          <div class="card border-primary mb-2 handle" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="card-body">
              <h4 class="card-title">Title</h4>
              <p class="card-text">Text</p>
            </div>
          </div>



        </div>
      </div>
    </div>
    <div class="col-8">

      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <div class="card">
        {{-- <img class="card-img-top" src="holder.js/100px180/" alt="Title"> --}}
        <div class="card-body">
          <h4 class="card-title">Calendario - Semana 1</h4>
          {{-- <p class="card-text">Text</p> --}}
          <div class="text-end">
            <div class="btn-group" role="group" aria-label="Basic outlined example">
              <button type="button" class="btn btn-outline-primary"><</button>
              <button type="button" class="btn btn-outline-primary">></button>
            </div>
          </div>
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
              <div class="table-responsive">
                <table class="table table-hover table-sm table-bordered align-middle text-center">
                    <tbody>
                      <tr>
                        <td></td>
                        <td><small>14-MAYO</small></td>
                        <td><small>14-MAYO</small></td>
                        <td><small>14-MAYO</small></td>
                        <td><small>14-MAYO</small></td>
                        <td><small>14-MAYO</small></td>
                        <td><small>14-MAYO</small></td>
                        <td><small>14-MAYO</small></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td><strong>LUNES</strong></td>
                        <td>MARTES</td>
                        <td>MIERCOLES</td>
                        <td>JUEVES</td>
                        <td>VIERNES</td>
                        <td>SABADO</td>
                      </tr>
                      @foreach ($calendars as $key => $c)
                        <tr>
                          <td width="100px">{{ $c['horario']['inicio'] . ' - ' . $c['horario']['termino']  }}</td>
                          <td width="100px">{{ $c['min'] ?? 0  }}</td>
                          @for ($i = 0; $i < 6; $i++)
                            <td id="calendar-items-{{ $key }}-{{ $i }}">
                              {{ $key }}-{{ $i }}
                              {{-- <button class="btn btn-primary" >
                                      Notifications <span class="badge bg-primary">12</span>
                              </button> --}}
                            </td>
                          @endfor
                        </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear asignatura</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-profile2-tab" data-bs-toggle="tab" data-bs-target="#nav-profile2" type="button" role="tab" aria-controls="nav-profile2" aria-selected="false">Editor</button>
            <button class="nav-link" id="nav-home1-tab" data-bs-toggle="tab" data-bs-target="#nav-home1" type="button" role="tab" aria-controls="nav-home1" aria-selected="true">Calendario</button>
            <button class="nav-link" id="nav-semana-tab" data-bs-toggle="tab" data-bs-target="#nav-semana" type="button" role="tab" aria-controls="nav-semana" aria-selected="true">Semanas</button>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile2-tab" tabindex="0">

            <form action="" method="post">

              <div class="my-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword">
                </div>
              </div>

              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword">
                </div>
              </div>

              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Sigla</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword">
                </div>
              </div>

              {{-- <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Sala</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword">
                </div>
              </div> --}}

              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Color</label>
                <div class="col-sm-10">
                  <input type="color" class="form-control" id="inputPassword">
                </div>
              </div>

            </form>
          </div>
          <div class="tab-pane fade" id="nav-home1" role="tabpanel" aria-labelledby="nav-home1-tab" tabindex="0">
            <div class="table-responsive">
              <table class="table table-hover table-sm table-bordered align-middle text-center">
                  <tbody>

                    <tr>
                      <td></td>
                      <td></td>
                      <td><strong>LUNES</strong></td>
                      <td>MARTES</td>
                      <td>MIERCOLES</td>
                      <td>JUEVES</td>
                      <td>VIERNES</td>
                      <td>SABADO</td>
                    </tr>
                    @foreach ($calendars as $key => $c)
                      <tr>
                        <td><small>{{ ++$key }}</small></td>
                        <td width="100px">{{ $c['horario']['inicio'] . ' - ' . $c['horario']['termino']  }}</td>
                        @for ($i = 0; $i < 6; $i++)
                          <td id="calendar-items-{{ $key }}-{{ $i }}"  for="check-{{ $key }}-{{ $i }}">
                            {{-- {{ $key }}-{{ $i }} --}}
                            {{-- <div class="form-check"> --}}
                              <input class="form-check-input" type="checkbox" value="" id="check-{{ $key }}-{{ $i }}">
                              <label class="form-check-label" for="">
                                {{-- Default checkbox --}}
                              </label>
                            {{-- </div> --}}

                            {{-- <button class="btn btn-primary" >
                                    Notifications <span class="badge bg-primary">12</span>
                            </button> --}}
                          </td>
                        @endfor
                      </tr>
                    @endforeach
                  </tbody>

              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-semana" role="tabpanel" aria-labelledby="nav-semana-tab" tabindex="0">

            <p>Semanas</p>

            <div class="table-responsive">
              <table class="table table-hover table-sm table-bordered align-middle text-center">
                  <tbody>
                    @for ($i = 1; $i <= 2; $i++)
                      <tr>
                        @for ($j = 0; $j < 10; $j++)
                          <td id="calendar-items-">

                            {{-- <div class="form-check"> --}}
                              <input class="form-check-input" type="checkbox" value="" id="check-{{ $j.$i }}">
                              <label class="form-check-label" for="">
                                {{-- Default checkbox --}}
                                <small> SEMANA {{ $j.$i }}</small>
                              </label>
                            {{-- </div> --}}

                            {{-- <button class="btn btn-primary" >
                                    Notifications <span class="badge bg-primary">12</span>
                            </button> --}}
                          </td>
                        @endfor
                      </tr>
                    @endfor
                  </tbody>

              </table>
            </div>

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

@endsection
@push('javascript')
@endpush
