<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComentarioRequest;
use App\Models\Comentario;
use App\Models\Lugar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComentarioController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ComentarioRequest $request, Lugar $lugar)
    {
        $comentario = new Comentario();
        $comentario->text = $request->get("text");
        $comentario->lugarID = $request->get("lugarID");
        $comentario->usuarioID = $request->get("usuarioID");
        $comentario->usuarioID = auth()->id();

        if ($request->hasFile("Imagen")) {
            /** Tomo la Imagen del formulario */
            $Imagen_S = $request->file("Imagen");
            $Ruta = public_path("Imagen/");
            /** NombreImagen es el nombre de referencia para la imagen, su nombre es la fecha en que fue creado */
            $NombreImagen = date('YmdHis') . "." . $Imagen_S->guessExtension();
            /** Muevo la imagen a la carpeta imagen */
            $Imagen_S->move($Ruta, $NombreImagen);
            /** Subo la refencia a la BD */
            $comentario->imagen = $NombreImagen;
        }


        $comentario->save();
        return redirect()->back()->with('mensaje', 'Comentario registrado');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        //
    }
}
