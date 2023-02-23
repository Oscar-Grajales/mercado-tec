<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'email',
        'password',
        'fecha_alta',
        'solicita_password',
        'password_temporal'
    ];

    public function productos() {
        return $this->hasMany(Producto::class);
    }

    public function comentarios() {
        return $this->hasMany(Comentario::class);
    }

    public function pagos() {
        return $this->hasMany(Pago::class);
    }

    public function rol() {
        return $this->belongsTo(Rol::class);
    }

    public function compras() {
        return $this->hasMany(Compra::class);
    }
}
