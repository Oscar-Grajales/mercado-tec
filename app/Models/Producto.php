<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'piezas',
        'descripcion',
        'fecha_publicacion',
        'esta_consignado',
        'porcentaje',
        'precio',
        'razon_consigna',
    ];

    public function fotos() {
        return $this->hasMany(Foto::class);
    }

    public function comentarios() {
        return $this->hasMany(Comentario::class);
    }

    public function compras() {
        return $this->hasMany(Compra::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function usuario() {
        return $this->belongsTo(Usuario::class);
    }
}
