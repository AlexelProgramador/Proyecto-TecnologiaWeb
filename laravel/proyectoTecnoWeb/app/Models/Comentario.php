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
    public function hijo()
    {
        return $this->belongsTo(Comentario::class, 'comentarioID');
    }
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuarioID');
    }
    public function obtenerComentario($id)
    {
        return Comentario::find($id);
    }
}
