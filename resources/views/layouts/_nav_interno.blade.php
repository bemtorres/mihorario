<nav class="navbar navbar-expand-lg border-bottom">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/community1.svg') }}" width="140" class="img-fluid" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('escenario.index') }}">Mis escenarios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Configuración
          </a>
          <ul class="dropdown-menu">
            <li>
              <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#valorActividadModal">Valores</button>
            </li>
            <li>
              <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#calendarioModal">Fechas</button>
            </li>
            {{-- <li><a class="dropdown-item" href="{{ route('escenario.reporte', $e->id) }}">Pagos semanal</a></li> --}}
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Paneles
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('escenario.show', $e->id) }}">Principal</a></li>
            <li><a class="dropdown-item" href="{{ route('escenario.reporte', $e->id) }}">Pagos semanal</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mi acceso
          </a>
          <ul class="dropdown-menu">
            {{-- <li><a class="dropdown-item" href="#">Action</a></li> --}}
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>
      {{-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> --}}
    </div>
  </div>
</nav>



<div class="modal fade" id="valorActividadModal" tabindex="-1" aria-labelledby="valorActividadModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <form action="{{ route('escenario.update.precio', $e->id) }}" method="post" class="form-submit">
          @csrf
          @method('PUT')
        {{-- <div class="modal-header">
          <h1 class="modal-title fs-5" id="valorActividadModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> --}}
        <div class="modal-body">
          <div class="conatiner">
            <div class="my-3 row">
              <label for="inputNormal" class="col-sm-2 col-form-label">Normal<small class="text-danger">*</small></label>
              <div class="col-sm-10">
                <input type="number" min="0" class="form-control" id="inputNormal" name="normal" value="{{ $e->present()->getPrincig()[0] }}"  required>
              </div>
            </div>
            <div class="my-3 row">
              <label for="inputNombre" class="col-sm-2 col-form-label">Bono<small class="text-danger">*</small></label>
              <div class="col-sm-10">
                <input type="number" min="0" class="form-control" id="inputBono" name="bono" value="{{ $e->present()->getPrincigBono()[0] }}" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
      </div>
  </div>
</div>

<div class="modal fade" id="calendarioModal" tabindex="-1" aria-labelledby="calendarioModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <form action="{{ route('escenario.update.precio', $e->id) }}" method="post" class="form-submit">
          @csrf
          @method('PUT')
        {{-- <div class="modal-header">
          <h1 class="modal-title fs-5" id="valorActividadModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> --}}
        <div class="modal-body">
          <p></p>
          <div class="conatiner">
            <div class="my-3 row">
              <label for="inputSemana" class="col-sm-6 col-form-label">Cantidad de semanas</label>
              <div class="col-sm-6">
                <input type="number" min="0" class="form-control" id="inputSemana" name="semanas" value="" required>
              </div>
            </div>
            <div class="my-3 row">
              <label for="inputInicio" class="col-sm-6 col-form-label">Fecha inicio</label>
              <div class="col-sm-6">
                <input type="date" class="form-control" id="inputInicio" name="inicio" value=""  required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
      </div>
  </div>
</div>
