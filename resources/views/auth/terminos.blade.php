@php

    $usuario = 'benja.mora.torres@gmail.com';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
            <div class="col-sm-2 col-md-2 intro-section d-none d-md-block">
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
            <div class="col  border border align-self-center">
                <div class="text-center mb-3">
                    <div class="text-center mt-5">
                        <div class="col">
                            <img src="{{ asset($s->present()->getLogo()) }}" width="200"
                                class="img-fluid rounded-top" alt="">
                        </div>
                        <div class="col">
                            {{-- <small><strong>{{ $s->getInfoLoginTitle() }}</strong></small> --}}
                        </div>
                    </div>

                    <div class="text-center mt-3">
                      <strong>Términos y condiciones de uso de Cronoprof</strong>
                    </div>
                    <div class="px-4 my-3 text-start">

                      <small>


                            <br>
                            Por favor, lea detenidamente los siguientes términos y condiciones de uso de Cronoprof antes
                            de utilizar nuestra plataforma. Al utilizar Cronoprof, usted acepta cumplir con los
                            siguientes términos y condiciones:
                            <br>
                            <br>
                            <strong>Definiciones</strong>
                            <br>
                            1.1. Cronoprof: Es un sistema de gestión de calendario de los docentes que permite calcular
                            las horas de docencia y ver cuánto recibirán de remuneraciones. Cronoprof busca generar una
                            comunidad de docentes.
                            <br>
                            1.2. Usuario: Es la persona que accede y utiliza la plataforma Cronoprof.
                            <br>
                            1.3. Cuenta: Es la cuenta creada por el usuario para acceder a la plataforma Cronoprof.
                            <br>
                            <br>
                            <strong>Registro en Cronoprof</strong>
                            <br>
                            2.1. Las cuentas creadas en Cronoprof son anónimas e intransferibles, por lo que para poder
                            registrarse en la plataforma debe haber tenido una carta de invitación.
                            <br>
                            2.2. Al registrarse en Cronoprof, el usuario se compromete a proporcionar información
                            precisa y actualizada y a mantenerla actualizada.
                            <br>
                            <br>
                            <strong>Propiedad intelectual</strong>
                            <br>
                            3.1. La comunidad de docentes defiende la propiedad intelectual de Cronoprof, por lo que no
                            pueden divulgar información del sistema ni manipularlo o copiarlo generando ingeniería
                            inversa todo los derechos le pertenecen a Cronoprof.
                            <br>
                            3.2. El usuario acepta no utilizar la plataforma para infringir los derechos de propiedad
                            intelectual de Cronoprof o de terceros.
                            <br>
                            <br>
                            <strong>Uso de Cronoprof</strong>
                            <br>
                            4.1. Cronoprof es una herramienta de cálculo, por lo cual el usuario deberá crear las
                            variables para ser usadas en el cálculo. Cronoprof simulará las horas mostradas, pero no
                            tiene ninguna responsabilidad jurídica y monetaria del uso de las horas calculadas en la
                            plataforma.
                            <br>
                            4.2. El usuario es responsable de cualquier daño o perjuicio causado por el uso de la
                            plataforma. El uso de Cronoprof es bajo su propio riesgo.
                            <br>
                            4.3. El usuario se compromete a no utilizar la plataforma para fines ilegales o inmorales y
                            a respetar los derechos de propiedad intelectual de Cronoprof y de terceros.
                            <br>
                            <br>
                            <strong>Suspensión y cancelación de la cuenta</strong>
                            <br>
                            5.1. Cronoprof se reserva el derecho de suspender o cancelar cualquier cuenta que viole los
                            términos y condiciones de la plataforma.
                            <br>
                            <br>
                            <strong>Aceptación de los términos y condiciones</strong>
                            <br>
                            6.1. Al registrarse en Cronoprof, el usuario acepta todos los términos y condiciones
                            establecidos en este documento.
                            <br>
                            <br>
                            <strong>Modificación de los términos y condiciones</strong>
                            <br>
                            7.1. Cronoprof se reserva el derecho de modificar estos términos y condiciones en cualquier
                            momento sin previo aviso. Es responsabilidad del usuario revisar periódicamente los términos
                            y condiciones actualizados.
                            <br>
                            <br>
                            <strong>Ley aplicable y jurisdicción</strong>
                            <br>
                            8.1. Estos términos y condiciones se regirán e interpretarán de acuerdo con las leyes de
                            Chile. Cualquier disputa que surja de o en relación con estos términos y
                            condiciones se resolverá exclusivamente en los tribunales competentes de Santiago de Chile.
                            <br>
                            <br>
                            <strong>Derechos de propiedad intelectual</strong>
                            <br>
                            9.1. Usted se compromete a no divulgar información sobre el sistema, manipularlo, copiarlo o utilizar ingeniería inversa para acceder a su código fuente, por lo que cualquier uso no autorizado de la plataforma está estrictamente prohibido.
                            <br>
                            <br>
                            <strong>Seguridad</strong>
                            <br>
                            10.1. Cronoprof es una plataforma que se utiliza para calcular las horas de docencia y ver cuánto se recibirá en remuneraciones. Cronoprof no se hace responsable de la información incorrecta ingresada por los usuarios.
                            <br>
                            10.2. El usuario es el único responsable de verificar y confirmar la exactitud de los datos ingresados. Además, Cronoprof no se hace responsable de ningún daño, pérdida, responsabilidad o costo que pueda surgir del uso de la plataforma.
                            <br>
                            <br>
                            <strong>Modificaciones del servicio</strong>
                            <br>
                            11.1. Cronoprof se reserva el derecho de modificar, suspender o interrumpir, temporal o
                            permanentemente, cualquier servicio ofrecido en la plataforma, con o sin previo aviso.
                            11.2. El usuario acepta que Cronoprof no será responsable ante el usuario o cualquier tercero por cualquier modificación, suspensión o interrupción del servicio.

                            <br>
                            <br>
                            <strong>Aceptación de los términos y condiciones</strong>
                            <br>
                            12.1 Al utilizar la plataforma de Cronoprof, el usuario acepta estos términos y condiciones. En caso de no estar de acuerdo con los términos y condiciones, el usuario no debe utilizar la plataforma.
                        </small>
                    </div>


                    <a href="{{ route('login') }}" class="btn btn-dark btn-cp-secondary rounded-pill">Volver</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> --}}
</body>

</html>
