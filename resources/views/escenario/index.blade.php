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
  <div class="row mt-3">


    <div class="col-md-12">


      <div class="card">
        {{-- <img class="card-img-top" src="holder.js/100px180/" alt="Title"> --}}
        <div class="card-body">
          <h4 class="card-title mb-3">
            Mis escenarios
            <div class="btn btn-primary btn-cp-primary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#newModal">Añadir nuevo</div>
          </h4>

          <div class="container">
            <div class="row">
              @forelse ($escenarios as $es)
                <div class="col-md-3">
                  <div class="card text-start handle mb-3 shadow-sm">
                    <img class="card-img-top" src="{{ asset($es->present()->getLogoRandom()) }}" alt="{{ $es->nombre }}">
                    <div class="card-body">
                      <h4 class="card-title">{{ $es->nombre }}</h4>
                      {{-- <p class="card-text">Body</p> --}}
                    </div>
                  </div>
                </div>
              @empty
                <div class="text-center">
                  <p>Hey!! aun no tienes tus escenarios creados</p>
                  <div class="btn btn-primary btn-cp-primary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#newModal">Añadir nuevo</div>

                </div>
                <div class="text-center mt-3">
                  <img src="{{ asset('images/calendario.svg') }}" width="500" class="img-fluid rounded-top" alt="">
                </div>
              @endforelse
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="{{ route('escenario.store') }}" method="post" class="form-submit">
        @csrf
        <div class="modal-body">
          <div class="my-3 row">
            <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputName" name="nombre" placeholder="" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-cp-secondary rounded-pill" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary btn-cp-primary rounded-pill">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection
@push('javascript')
@endpush
