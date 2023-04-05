<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'CronoProf - Automatización, Eficiencia, Simplicidad y Excelencia')</title>
    <link rel="shortcut icon" href="{{ asset('images/logotipo.svg') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/open-sauce-one" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    {{-- body {
      background-color: #F3F6FA !important;
    } --}}

    <style>
      body {
        font-family: 'Open Sauce One', sans-serif;
          font-family: 'Open Sauce Two', sans-serif;
          font-family: 'Open Sauce Sans', sans-serif;
          background-color: #F3F6FA !important;
      }
    </style>

</head>

<body>

  {{-- <header class="py-3 mb-4 border-bottom">
      <div class="container d-flex flex-wrap justify-content-center">
          <a href="/"
              class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
              <svg class="bi me-2" width="40" height="32">
                  <use xlink:href="#bootstrap" />
              </svg>
              <span class="fs-4">Double header</span>
          </a>
          <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
          </form>
      </div>
  </header> --}}

  @yield('app')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
