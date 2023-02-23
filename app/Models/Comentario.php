<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'contenido',
        'fecha_publicacion',
        'respuesta',
    ];

    public function producto() {
        return $this->belongsTo(Producto::class);
    }

    public function usuario() {
        return $this->belongsTo(Usuario::class);
    }
}
