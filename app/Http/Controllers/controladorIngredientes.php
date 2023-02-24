<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class controladorIngredientes extends Controller
{
    /**
     * Mostrar tabla ingredientes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultaIngredientes = DB::table('ingredientes')->orderBy('descripcion')->get();
        return view('ajustesIngredientes', compact('consultaIngredientes'));
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
        DB::table('ingredientes')->insert([
            "descripcion" => $request->input('descripcion'),
            "disponibilidad" => $request->input('disponible'),
            "ingredienteExtra" => $request->input('ingredienteExtra'),
            "precioVenta" => $request->input('precioVenta')
           
        ]);

        return redirect('/ajustes/ingredientes')->with('creacion','confirmarNuevoIngrediente');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaIngredientes = DB::table('ingredientes')->where('id',$id)->first();
        return view('Alimentos.editarIngrediente',compact('consultaIngredientes'));
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
        DB::table('ingredientes')->where('id',$id)->update([
            "descripcion" => $request->input('descripcion'),
            "disponibilidad" => $request->input('disponible'),
            "ingredienteExtra" => $request->input('ingredienteExtra'),
            "precioVenta" => $request->input('precioVenta'),
        ]);

        return redirect('/ajustes/ingredientes')->with('actualizacion','confirmarIngrediente');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('ingredientes')->where('id',$id)->delete();

        return redirect('/ajustes/ingredientes')->with('eliminacion','eliminarIngrediente');
    }
}
