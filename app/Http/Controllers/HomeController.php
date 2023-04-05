<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\De\Producto;
use App\Models\De\Solicitud;
use App\Models\Usuario;
use App\Models\Rec\Accion;
use App\Models\Rec\Transaccion;
use App\Services\FormularioSocioeconomico;
use App\Services\Jwt\JwtFirmaDecode;
use App\Services\Jwt\JwtFirmaEncode;
use App\Services\Modulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

  public function index() {

    $calendars = (new Modulo())->call();

    // return $calendars;

    return view('home.index', compact('calendars'));
  }

  public function auth() {
    return view('auth.index');
  }

  // public function jwt()
  // {
  //   $a = Alumno::first();
  //   $jwt = new JwtFirmaEncode($a);

  //   return $jwt->call();
  // }

  // public function jwtShow($jwt)
  // {
  //   try {
  //     $obj = new JwtFirmaDecode($jwt);
  //     $a = $obj->call();


  //     if (!$a->nombre) {
  //       $status = 'no esta habilitado para firmar';
  //       return view('home.verificar',compact(['status']));
  //     }
  //     if (!empty($a)) {
  //       return view('home.firma', compact('jwt','a'));
  //     }


  //   } catch (\Throwable $th) {
  //     return view('home.verificar')->with('success','Hemos recibido su firma');
  //   }
  // }
}
