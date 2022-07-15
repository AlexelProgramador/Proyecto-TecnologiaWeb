<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** Mando toda la info de la Tabla Imagen al index */
        $imagenes = Imagen::all();
        return view('imagen.index')->with('imagenes', $imagenes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imagen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen = new Imagen();

        if ($request->hasFile("Imagen")) {
            /** Tomo la Imagen del formulario */
            $Imagen_S = $request->file("Imagen");
            $Ruta = public_path("Imagen/");
            /** NombreImagen es el nombre de referencia para la imagen, su nombre es la fecha en que fue creado */
            $NombreImagen = date('YmdHis') . "." . $Imagen_S->guessExtension();
            /** Muevo la imagen a la carpeta imagen */
            $Imagen_S->move($Ruta, $NombreImagen);
            /** Subo la refencia a la BD */
            $imagen->Imagen = $NombreImagen;
        }

        /**  
         * En Ruta es para poner las imagenes en la carpeta Imagen en public
         */
        $imagen->lugarID = 1;

        $imagen->save();
        /** redirecciono al index */
        return redirect('/imagenes');
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
        /** Busco una "imagen" en especifico*/
        $imagen = Imagen::find($id);
        return view('imagen.edit')->with('imagen', $imagen);
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
        /** Similar a store solo actualizo una "Imagen" en especifico*/
        $imagen = Imagen::find($id);
        if ($request->hasFile("Imagen")) {
            $Imagen_S = $request->file("Imagen");
            $Ruta = public_path("Imagen/");
            $NombreImagen = date('YmdHis') . "." . $Imagen_S->guessExtension();
            $Imagen_S->move($Ruta, $NombreImagen);
            $imagen->Imagen = $NombreImagen;
        }

        $imagen->save();
        return redirect('/imagenes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imagen = Imagen::find($id);

        $imagen->delete();
        return redirect('/imagenes');
    }
}
