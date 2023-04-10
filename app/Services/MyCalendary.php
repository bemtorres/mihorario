<?php

namespace App\Services;

use App\Models\Escenario;
use App\Models\Usuario;

class MyCalendary
{
  private $usuario;
  private $calendario;
  private $escenario;

  public function __construct($id_usuario, $id_escenario){
    $this->usuario = Usuario::find($id_usuario);
    $this->escenario = Escenario::with(['actividades'])->findUser($id_usuario)->find($id_escenario);
  }

  public function call() {
    $this->build_calendar();
    $this->push_my_schedules();

    return $this->calendario;
  }

  private function build_calendar() {
    $modulo = (new Modulo())->call();
    $calendars = [];

    for ($i=0; $i < 20; $i++) {
      $calendars[] = [
        'semana' => $i,
        'data' => $modulo
      ];
    }

    $this->calendario = $calendars;
  }

  private function push_my_schedules() {
    foreach ($this->escenario->actividades as $keyAc => $actividad) {
      foreach ($actividad->detalles as $keyDe => $detalle) {
        foreach ($this->calendario as $keyCa => $calendario) {
          if ($calendario['semana'] == $detalle['semana']) {

            $info = [
              'actividad' => $actividad->nombre,
              'descripcion' => $actividad->descripcion ?? '',
              'sala' => 'L1',
              'isBono' => $actividad->estado == 1 ? true : false,
              'background' => $actividad->present()->getColor(),
              'precio' => $actividad->estado == 0 ? $this->escenario->present()->getPrincig() : $this->escenario->present()->getPrincigBono()
            ];

            //modulo es de 1 en adelante, pero en js quedaria -1
            $this->calendario[$keyCa]['data'][$detalle['modulo']-1][$detalle['dia']][] = $info;
          }
        }

      }
    }
  }
}
