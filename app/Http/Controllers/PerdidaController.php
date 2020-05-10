<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\perdida;

class PerdidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('monitor.reportarPerdidas');
    }
    public function verPerdidas()
    {
        return view('administrador.verPerdidas');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosRegistro = request()->except('_token');
        perdida::insert($datosRegistro);
        return redirect('modMonitor')->with('status','Se reporto la perdida correctamente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = perdida::findOrFail($id);
        return view('administrador.editarPerdida')->with('users', $users);
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
        $users = perdida::find($id);
        $users->monitor = $request->input('monitor');
        $users->sede = $request->input('sede');
        $users->sala = $request->input('sala');
        $users->equipo = $request->input('equipo');
        $users->equipo = $request->input('equipo');
        $users->objeto = $request->input('objeto');
        $users->estado = $request->input('estado');
        $users->update();

        return redirect('/Ver_Perdidas')->with('status','Perdida revisada correctamente');
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
}
