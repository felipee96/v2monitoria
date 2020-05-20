<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\registromonitor;

class RegistromonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function verMonitores()
    {   
        return view('administrador.verMonitores');
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
        registromonitor::insert($datosRegistro);
        return redirect('modMonitor')->with('status','Monitor ingresado correctamente');
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
    public function edit(Request $request, $id)
    {
        $users = registromonitor::findOrFail($id);
        return view('administrador.pruebaEditar')->with('users', $users);
        //findorfail sirve para nos permite recuperar un registro de un modelo
         //a partir de su ID sin necesidad de comprobar si existe
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
        //puedes ejecutar el método find con un arreglo de claves primarias
        //, el cual devolverá una colección de los registros que coincidan
        
        $users = registromonitor::find($id);
        $users->nombre = $request->input('nombre');
        $users->codigo = $request->input('codigo');
        $users->programa = $request->input('programa');
        $users->semestre = $request->input('semestre');
        $users->sala = $request->input('sala');
        $users->horario = $request->input('horario');
        $users->administrador = $request->input('administrador');
        $users->update();

        return redirect('/Ver_Monitores')->with('status','Monitor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = registromonitor::findOrFail($id);
        $users->delete();

        return redirect('/Ver_Monitores')->with('status2','Monitor eliminado correctamente');

    }
}
