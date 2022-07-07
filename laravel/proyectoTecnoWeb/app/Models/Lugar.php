<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usuarioID',
        'nombre',
        'descripcion',
        'direccion',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'direccion',
        'remember_token',
    ];

    // Modifica el password y encriptandolo.
    public function setPasswordAttribute($value)
    {
        $this->attributes['direccion'] = bcrypt($value);
    }
}
