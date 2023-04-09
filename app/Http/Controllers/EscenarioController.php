<?php

namespace App\Http\Controllers;

use App\Models\Escenario;
use App\Services\Modulo;
use App\Services\MyCalendary;
use Illuminate\Http\Request;

class EscenarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $escenarios = Escenario::findUser(current_user()->id)->get();

      return view('escenario.index', compact('escenarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request) {
      $e = new Escenario();
      $e->nombre = $request->input('nombre');
      $e->token = current_user()->id . time() . date('Y');
      $e->id_usuario = current_user()->id;
      $e->save();

      return back()->with('success', 'Se ha creado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $calendars = (new Modulo())->call();

      $e = Escenario::with(['actividades'])->findUser(current_user()->id)->findOrFail($id);
      $actividades = $e->actividades;

      $calendario = (new MyCalendary(current_user()->id, $e->id))->call();

      return view('escenario.show', compact('e','calendars','actividades', 'calendario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

  public function precio(Request $request, $id) {
    $e = Escenario::findUser(current_user()->id)->findOrFail($id);

    $info = $e->info;
    $info['normal_price'] = $request->input('normal');
    $info['bono_price'] = $request->input('bono');
    $e->info = $info;
    $e->update();

    return back()->with('success', 'Se ha creado correctamente');
  }

}
