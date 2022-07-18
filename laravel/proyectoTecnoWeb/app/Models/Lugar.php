<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    use HasFactory;
    protected $table = "lugars";

    protected $guarded = [];

    protected $fillable = ['id', 'nombre', 'descripcion', 'direccion', 'usuarioID'];


    // Modifica el password y encriptandolo.
    public function setPasswordAttribute($value)
    {
        $this->attributes['direccion'] = bcrypt($value);
    }
    // Relacionamos los comentarios con un lugar y ademas se diceque son muchos
    public function comentario()
    {
        return $this->hasMany(Comentario::class, 'lugarID');
    }
    public function obtenerLugar($id)
    {
        return Lugar::find($id);
    }
}
