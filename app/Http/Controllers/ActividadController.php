<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\DetalleActividad;
use App\Models\Escenario;
use App\Services\Modulo;
use Illuminate\Http\Request;

class ActividadController extends Controller
{

    public function store(Request $request) {

      $s = Escenario::findOrFail($request->input('escenario_id'));
      $a = new Actividad();
      $a->nombre = $request->input('nombre');
      $a->descripcion = $request->input('descripcion');
      $a->estado = $request->input('bono') == 'bono' ? 1 : 0;
      // $e->code = current_user()->id . time() . date('Y');
      $a->id_usuario = current_user()->id;
      $a->id_escenario = $s->id;
      $a->config = [
        'background' =>  $request->input('color')
      ];
      $a->save();

      $calendarios = $request->input('checkc');
      $semanas = $request->input('checksemana');


      foreach ($calendarios as $keyCa => $ca) {
        $list = explode('-', $ca);
        $modulo = $list[2]; // modulo 1 8:30
        $dia = $list[4]; //dia 0 LUNES

        foreach ($semanas as $keySe => $se) {
          $semana = explode('-', $se)[1];

          $d = new DetalleActividad();
          $d->id_actividad = $a->id;
          $d->semana = $semana;
          $d->dia = $dia;
          $d->modulo = $modulo;
          $d->save();
        }
      }

      return back()->with('success', 'Se ha creado correctamente');
    }
}
