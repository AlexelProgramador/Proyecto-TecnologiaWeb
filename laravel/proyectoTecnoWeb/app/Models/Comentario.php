<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $table = 'comentarios';
    protected $guarded = [];

    protected $fillable = ['id', 'usuarioID', 'lugarID', 'text'];
    // Aqui definimos un hijo de un comentario padre, esto para responder comentarios
    public function hijo()
    {
        return $this->belongsTo(Comentario::class, 'comentarioID');
    }
    // Vemos a quien le pertence
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuarioID');
    }
    // Obtenemos los comentarios
    public function obtenerComentario($id)
    {
        return Comentario::find($id);
    }
}
