<?php

namespace App\Models;

use App\Presenters\Sistema\EscenarioPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;


class Escenario extends Model
{
  use HasFactory;

  protected $table = 'cp_escenario';

  // CONST STATUS = [
  //   1 => 'SIN SOLICITUD',
  //   2 => 'CON SOLICITUD',
  //   3 => 'FINALIZADOS'
  // ];

  protected function assets(): Attribute {
    return Attribute::make(
        get: fn ($value) => json_decode($value, true),
        set: fn ($value) => json_encode($value),
    );
  }

  // public function lider(){
  //   return $this->belongsTo(Usuario::class,'id_lider');
  // }

  public function present(){
    return new EscenarioPresenter($this);
  }

  public function scopeFindUser($query, $id) {
    return $query->where('activo',true)->where('id_usuario', $id);
  }

}
