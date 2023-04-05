@php

    $usuario = "benja.mora.torres@gmail.com";
    $pass = 123456;

@endphp
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title', 'CronoProf - Automatización, Eficiencia, Simplicidad y Excelencia')</title>
  <link rel="shortcut icon" href="{{ asset('images/logotipo.svg') }}" />
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

  <style>
    .intro-section {
      background-image: url("{{ asset($s->present()->getBackgroundLogin()) }}");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      padding: 75px 95px;
      min-height: 100vh;
      display: -webkit-box;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      flex-direction: column;
    }
  </style>

  <link href="https://fonts.cdnfonts.com/css/open-sauce-one" rel="stylesheet">

  <style>
    body {
      font-family: 'Open Sauce One', sans-serif;
        font-family: 'Open Sauce Two', sans-serif;
        font-family: 'Open Sauce Sans', sans-serif;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-md-7 intro-section d-none d-md-block">
        {{-- <div class="brand-wrapper"> --}}
          {{-- <h1><a href="https://stackfindover.com/">Logo</a></h1> --}}
        {{-- </div> --}}
        {{-- <div class="intro-content-wrapper">
          <h1 class="intro-title">Welcome to website !</h1>
          <p class="intro-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna</p>
          <a href="#!" class="btn btn-read-more">Read more</a>
        </div>
        <div class="intro-section-footer">
          <nav class="footer-nav">
            <a href="#!">Facebook</a>
            <a href="#!">Twitter</a>
            <a href="#!">Gmail</a>
          </nav>
        </div> --}}
      </div>
      <div class="col-sm-6 col-md-5 form-section">
        <div class="login-wrapper">
          <div class="text-center mb-2">
            <div class="col">
              <img src="{{ asset($s->present()->getLogo()) }}" width="200" class="img-fluid rounded-top" alt="">
            </div>
            <div class="col">
              <small><strong>{{ $s->getInfoLoginTitle() }}</strong></small>
            </div>
          </div>

          <form action="{{ route('login') }}" method="POST" class="mt-4 mb-3">
            @csrf
            <div class="mb-3">
              <label for="mail" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control rounded-pill" id="mail" name="mail" value="{{ $usuario }}" placeholder="" required>
            </div>
            <div class="mb-3">
              <label for="passw" class="form-label">Contraseña</label>
              <input type="password" class="form-control rounded-pill" id="passw" name="passw" value="{{ $pass }}" placeholder="" required>
            </div>


            <div class="d-grid gap-2 mt-2">
              <button type="submit" class="btn btn-primary btn-cp-primary rounded-pill">
                <strong>Iniciar sesión</strong>
              </button>
            </div>

          </form>

          <div class="d-grid gap-2 mt-2">
            <button type="button" class="btn btn-dark btn-cp-secondary btn-block rounded-pill"  data-bs-toggle="modal" data-bs-target="#newModal">Solicitar cuenta</button>
          </div>
          {{-- <a href="{{ route('login.registro')  }}" class="btn btn-cp-secondary btn-block rounded-pill">Solcitar cuenta</a> --}}
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col text-center">
                <img src="{{ asset($s->present()->getLogoComunity()) }}" width="200" class="img-responsive" alt="">
              </div>
            </div>
            <div class="row">
              <small><em>Nuestra plataforma requiere que los usuarios sean invitados por otros usuarios para poder registrarse, y esto se debe a varias razones importantes. En primer lugar, al controlar el acceso solo a través de invitaciones, podemos garantizar que solo las personas que han sido previamente invitadas y verificadas puedan registrarse, lo que ayuda a prevenir el spam y otras actividades maliciosas. Además, esta medida fomenta la creación de una comunidad más estrecha y comprometida. También ayuda a controlar el crecimiento de la plataforma y a aumentar los niveles de seguridad mediante la verificación de identidad del usuario que envía la invitación. En resumen, el requisito de invitación para la creación de cuentas en nuestra plataforma se justifica por motivos de seguridad, compromiso de la comunidad, control de crecimiento y verificación de identidad.</em></small>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <div class="d-grid gap-2">
            <button type="button" class="btn btn-dark btn-cp-secondary rounded-pill" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> --}}
</body>
</html>
