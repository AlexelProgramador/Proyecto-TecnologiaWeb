<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lugar;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LugarRequest;


class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $lugares = Lugar::all();

        return view('admin.index')->with('lugares', $lugares);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LugarRequest $request)
    {
        //
        $lugar = new Lugar();
        $lugar->nombre = $request->get("nombre");
        $lugar->descripcion = $request->get("descripcion");
        $lugar->direccion = $request->get("direccion");

        $lugar->usuarioID = auth()->id();
        if ($request->hasFile("Imagen")) {
            /** Tomo la Imagen del formulario */
            $Imagen_S = $request->file("Imagen");
            $Ruta = public_path("Imagen/");
            /** NombreImagen es el nombre de referencia para la imagen, su nombre es la fecha en que fue creado */
            $NombreImagen = date('YmdHis') . "." . $Imagen_S->guessExtension();
            /** Muevo la imagen a la carpeta imagen */
            $Imagen_S->move($Ruta, $NombreImagen);
            /** Subo la refencia a la BD */
            $lugar->imagenLugar = $NombreImagen;
        }

        $lugar->save();
        return redirect('/lugares')->with('success', 'Sitio registrado correctamente');
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
        $lugar = Lugar::find($id);
        return view('admin.show')->with('lugar', $lugar);
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
        $lugar = Lugar::find($id);
        return view('admin.edit')->with('lugar', $lugar);
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
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'direccion' => 'required',

        ]);

        $lugar = Lugar::find($id);
        $lugar->nombre = $request->get("nombre");
        $lugar->descripcion = $request->get("descripcion");
        $lugar->direccion = $request->get("direccion");
        if ($request->hasFile("Imagen")) {
            /** Tomo la Imagen del formulario */
            $Imagen_S = $request->file("Imagen");
            $Ruta = public_path("Imagen/");
            /** NombreImagen es el nombre de referencia para la imagen, su nombre es la fecha en que fue creado */
            $NombreImagen = date('YmdHis') . "." . $Imagen_S->guessExtension();
            /** Muevo la imagen a la carpeta imagen */
            $Imagen_S->move($Ruta, $NombreImagen);
            /** Subo la refencia a la BD */
            $lugar->imagenLugar = $NombreImagen;
        }
        $lugar->save();

        return redirect('/lugares')->with('success', 'Lugar editado');
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
        $lugar = Lugar::find($id);
        $lugar->delete();
        return redirect('/lugares')->with('success', 'Lugar eliminado');
    }
}
