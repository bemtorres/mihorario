<?php

namespace App\Services;

use App\Models\Actividad;
use App\Models\Escenario;
use App\Models\Usuario;

class ReporteGeneral
{
  private $usuario;
  private $escenario;
  private $reporte;
  private $reporte_total;
  private $reporte_final;

  public function __construct($id_usuario, $id_escenario){
    $this->usuario = Usuario::find($id_usuario);
    $this->escenario = Escenario::with(['actividades'])->findUser($id_usuario)->find($id_escenario);
  }

  public function call() {

    for ($i=0; $i <= 19; $i++) {
      $this->reporte_total[$i] = [
        'semana' => $i,
        'total' => 0
      ];
    }

    $this->build_calendar();
    $this->calculate_total();


    return $this->reporte_final;
  }

  public function calculate_total() {
    $this->reporte_final = [
      'actividades' => $this->reporte,
      'resumen' => $this->reporte_total
    ];
  }

  private function build_calendar() {
    // return $this->escenario->actividades;
    $isBono = $this->escenario->estado == 1;
    $valor = $isBono ? $this->escenario->present()->getPrincigBono()[0] : $this->escenario->present()->getPrincig()[0];

    $reporte = [];
    foreach ($this->escenario->actividades as $keyAct => $actividad) {
      $r = [
        'actividad' => $actividad->nombre,
        'info' => $this->get_info_template()
      ];

      foreach ($actividad->detalles as $keyDe => $detalle) {
        $r['info'][$detalle['semana']]['bono'] = $isBono;
        $r['info'][$detalle['semana']]['cantidad']++;
        $r['info'][$detalle['semana']]['precio'] = $valor;
        $r['info'][$detalle['semana']]['total'] += $valor;

        $this->reporte_total[$detalle['semana']]['total'] += $valor;
      }

      $reporte[] = $r;
    }

    $this->reporte = $reporte;
  }

  private function get_info_template() {
    $semanas = [];
    for ($i=0; $i <= 19; $i++) {
      $semanas[$i] = [
        'semana' => $i,
        'info' => [],
        'bono' => false,
        'cantidad' => 0,
        'precio' => 0,
        'total' => 0
      ];
    }

    return $semanas;
  }
}
