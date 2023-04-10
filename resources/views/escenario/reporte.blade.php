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

    <div class="col-12">
      <div class="card text-start mb-3">
        <div class="card-body">
          <h4 class="card-title">
            <a href="{{ route('escenario.show', $e->id) }}" class="btn btn-sm btn-primary">Volver</a>
            Reporte semanales
          </h4>
          {{-- <p class="card-text">Body</p> --}}
          <div class="table-responsive">
            <table class="table table-sm table-bordered">
              <thead>
                <tr>
                  <th scope="col"></th>
                  @for ($i=0; $i <= 19; $i++)
                  <th class="text-center text-diez">
                    {{-- <small> --}}
                      <span class="badge bg-success">12.02</span>
                      <span class="badge bg-success">33.02</span>
                    {{-- </small --}}
                  </th>
                  @endfor
                  <th scope="col" class="text-center"></th>
                </tr>
                <tr>
                  <th scope="col"></th>
                  @for ($i=0; $i <= 19; $i++)
                  <th class="text-center text-doce text-white bg-dark ">
                    {{-- <small> --}}
                      S{{ $i }}
                      {{-- <span class="badge bg-dark p-2"></span> --}}
                    {{-- </small> --}}

                  </th>
                  @endfor
                </tr>
              </thead>
              <tbody>
                @foreach ($reportes['actividades'] as $ac)

                <tr class="">
                  <td>{{ $ac['actividad'] }}</td>
                  @foreach ($ac['info'] as $info)
                    <td class="text-doce text-end"><small>{{ helperMoney($info['total']) }}</small></td>
                  @endforeach
                </tr>
                @endforeach

                <tr class="bg-primary">
                  <td>TOTAL</td>
                  @foreach ($reportes['resumen'] as $re)
                    <td class="text-doce text-end">
                      <strong>{{ helperMoney($re['total']) }}</strong>
                    </td>
                  @endforeach
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('javascript')
@endpush
