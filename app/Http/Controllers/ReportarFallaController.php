<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\reportarFalla;

class ReportarFallaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('monitor.reportarFallas');
    }
    public function verFallas()
    {
        return view('administrador.verFallas');
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
        reportarFalla::insert($datosRegistro);
        return redirect('modMonitor')->with('status','Se reporto la falla correctamente.');
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
        $users = reportarFalla::findOrFail($id);
        return view('administrador.editarFalla')->with('users', $users);
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
        $users = reportarFalla::find($id);
        $users->monitor = $request->input('monitor');
        $users->sede = $request->input('sede');
        $users->sala = $request->input('sala');
        $users->equipo = $request->input('equipo');
        $users->descripcion = $request->input('descripcion');
        $users->estado = $request->input('estado');
        $users->update();

        return redirect('/Ver_Fallas')->with('status','Falla revisada correctamente');
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
