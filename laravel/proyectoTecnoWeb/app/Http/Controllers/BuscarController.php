<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuscarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Obtiene todos los lugares, con sus nombres y descripciones
        // trim borra los espacios en blanco
        $texto = $request->get('texto');
        // Aqui se hace un filtro de los lugares, obteniendo su id,nombre,descripcion y direccion
        //El filtro funciona por el nombre, pero igualmente, se puede ingresar una direccion
        //Este se ordenara por nombre de manera ascendente

        $lugares = DB::table('lugars')
            ->select('id', 'nombre', 'descripcion', 'direccion', 'imagenLugar')
            ->where('nombre', 'LIKE', '%' . $texto . '%')
            ->orWhere('direccion', 'LIKE', '%' . $texto . '%')
            ->orderBy('nombre', 'asc');

        //Luego de la busqueda es necesario poner el get()
        //Esto guardar los valores obtenidos.    
        $lugares = $lugares->get();
        return view('visita.buscar', compact('lugares', 'texto'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Obtiene los datos del lugar
        $lugar = Lugar::find($id);
        return view('visita.ver')->with('lugar', $lugar);
    }

    public function filter(Request $request)
    {
        $nombre = $request->get('buscar');
        $lugares = Lugar::where('nombre', 'like', '%$nombre%');
        return view('vistar.filtro', compact('lugares', 'similares'));
    }
}
