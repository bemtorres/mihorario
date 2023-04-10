@extends('layouts.app_interno')
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

  .text-doce {
    font-size: 12px;
  }

  .text-once {
    font-size: 11px;
  }

  .text-diez {
    font-size: 10px;
  }
</style>

@endpush
@section('content')
<div class="container">
  <div class="row mt-3">
    <div class="col-12 col-md-3 mb-3">
      <div class="card">
        <div class="card-body">

          {{-- <h4 class="card-title">Actividad</h4> --}}
          <div class="d-flex justify-content-between mb-3">
            Actividad

            <button type="button" class="btn btn-primary btn-sm btn-cp-primary rounded-pill text-end" data-bs-toggle="modal" data-bs-target="#newActividad">
              Nueva
            </button>
          </div>

          @foreach ($actividades as $act)

            <div class="card mb-2 handle" style="border-color: {{ $act->present()->getColor() }} !important;">
              <div class="card-body">
                {{-- <h4 class="card-title">Title</h4> --}}
                <p class="card-text">{{ $act->nombre }}</p>

                @if ($act->estado == 1)
                  <h5>
                    <span class="position-absolute top-0 start-0 translate-middle" title="Bono">
                      ⭐
                    </span>
                  </h5>
                @endif

                {{-- <span class="badge bg-primary">Lunes 12</span> --}}
              </div>
            </div>
          @endforeach



        </div>
      </div>
    </div>
    <div class="col-12 col-md-9">

      {{-- <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">{{ $e->nombre }}</a>
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
      </ul> --}}
      <div class="card">
        {{-- <img class="card-img-top" src="holder.js/100px180/" alt="Title"> --}}
        <div class="card-body">
          {{-- <h4 class="card-title">Calendario - Semana 1</h4>
          <p class="card-text">Text</p>
          <div class="text-end">
            <div class="btn-group" role="group" aria-label="Basic outlined example">
              <button type="button" class="btn btn-outline-primary"><</button>
              <button type="button" class="btn btn-outline-primary">></button>
            </div>
          </div> --}}
          {{-- <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
            </div> --}}
          {{-- </nav> --}}
          {{-- <div class="tab-content" id="nav-tabContent"> --}}
            {{-- <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0"> --}}
              <calendario :calendario='@json($calendario)'></calendario>

            {{-- </div> --}}
            {{-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"> --}}

            {{-- </div> --}}
          {{-- </div> --}}


        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newActividad" tabindex="-1" aria-labelledby="newActividadLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg modal-dialog-centered">
    <div class="modal-content">
      {{-- <div class="modal-header">
        <h1 class="modal-title fs-5" id="newActividadLabel">Nueva actividad</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> --}}
      <form action="{{ route('actividad.store') }}" method="post" class="form-submit">
        @csrf
        <input type="hidden" name="escenario_id" value="{{ $e->id }}">

        <div class="modal-body">

      {{--
          <div class="position-relative m-4">
            <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
              <div class="progress-bar" style="width: 50%"></div>
            </div>
            <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
            <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
            <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
          </div> --}}

          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-profile2-tab" data-bs-toggle="tab" data-bs-target="#nav-profile2" type="button" role="tab" aria-controls="nav-profile2" aria-selected="false">1 Editor</button>
              <button class="nav-link" id="nav-home1-tab" data-bs-toggle="tab" data-bs-target="#nav-home1" type="button" role="tab" aria-controls="nav-home1" aria-selected="true">2 Calendario</button>
              <button class="nav-link" id="nav-semana-tab" data-bs-toggle="tab" data-bs-target="#nav-semana" type="button" role="tab" aria-controls="nav-semana" aria-selected="true">3 Semanas</button>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile2-tab" tabindex="0">
                <div class="my-3 row">
                  <label for="inputNombre" class="col-sm-2 col-form-label">Nombre<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNombre" name="nombre" required>
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="inputDesc" class="col-sm-2 col-form-label">Descripción</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputDesc" placeholder="(opcional)" name="descripcion">
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="inputsigle" class="col-sm-2 col-form-label">Sigla</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="sigla" placeholder="(opcional)" id="inputsigle">
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="bono" class="col-sm-2 col-form-label">Programación<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <select class="form-select form-select-sm" name="bono" id="bono">
                      <option value="normal">Normal</option>
                      <option value="bono">Bono</option>
                    </select>
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="inputColor" class="col-sm-2 col-form-label">Color<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <input type="color" class="form-control" name="color" id="inputColor">
                  </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-home1" role="tabpanel" aria-labelledby="nav-home1-tab" tabindex="0">
              <div class="table-responsive">
                <table class="table table-hover table-sm table-bordered align-middle text-center">
                    <tbody>

                      <tr>
                        <td></td>
                        <td></td>
                        <td><small>LUNES</small></td>
                        <td><small>MARTES</small></td>
                        <td><small>MIERCÓLES</small></td>
                        <td><small>JUEVES</small></td>
                        <td><small>VIERNES</small></td>
                        <td><small>SÁBADO</small></td>
                      </tr>
                      @foreach ($calendars as $key => $c)
                        <tr>
                          <td><small>{{ ++$key }}</small></td>
                          <td width="100px">
                            <small>{{ $c['horario']['inicio'] . ' - ' . $c['horario']['termino']  }}</small>
                          </td>
                          @for ($i = 0; $i < 6; $i++)
                            {{-- <td id="calendar-items-{{ $key }}-{{ $i }}" onclick="changeCheck('checkc-{{ $key }}-{{ $i }}')"> --}}
                              <td id="calendar-items-{{ $key }}-{{ $i }}">
                              {{-- {{ $key }}-{{ $i }} --}}
                              {{-- <div class="form-check"> --}}
                                <input class="form-check-input" type="checkbox" name="checkc[]" id="checkc-{{ $key }}-{{ $i }}" value="checkc-modulo-{{ $key }}-dia-{{ $i }}">
                                <label class="form-check-label" for="checkc-{{ $key }}-{{ $i }}">
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
              <div class="table-responsive mt-3">
                <table class="table table-hover table-sm table-bordered align-middle text-center">
                    <tbody>
                      @php
                          $item = 0;
                      @endphp
                      @for ($i = 1; $i <= 5; $i++)
                        <tr>
                          @for ($j = 0; $j < 4; $j++)
                            <td id="calendar-items-">

                              {{-- <div class="form-check"> --}}
                                <input class="form-check-input" type="checkbox" name="checksemana[]" value="semana-{{ $item }}" id="check-{{ $item }}">
                                <label class="form-check-label" for="check-{{ $item }}">
                                  {{-- Default checkbox --}}
                                  <small> SEMANA {{ $item++ }}</small>
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
          <button type="button" class="btn btn-secondary btn-cp-secondary rounded-pill" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary btn-cp-primary rounded-pill" >Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
@push('javascript')
  <script>
    function changeCheck(id) {
      document.getElementById(id).checked = !document.getElementById(id).checked;
    }
  </script>
@endpush
