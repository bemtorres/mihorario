<?php

namespace App\Models;

use App\Presenters\Sistema\ActividadPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;


class Actividad extends Model
{
  use HasFactory;

  protected $table = 'cp_actividad';

  // CONST STATUS = [
  //   1 => 'SIN SOLICITUD',
  //   2 => 'CON SOLICITUD',
  //   3 => 'FINALIZADOS'
  // ];

  protected function config(): Attribute {
    return Attribute::make(
        get: fn ($value) => json_decode($value, true),
        set: fn ($value) => json_encode($value),
    );
  }

  public function detalles(){
    return $this->hasMany(DetalleActividad::class,'id_actividad');
  }

  public function present(){
    return new ActividadPresenter($this);
  }

  public function scopeFindUser($query, $id) {
    return $query->where('activo',true)->where('id_usuario', $id);
  }

}
