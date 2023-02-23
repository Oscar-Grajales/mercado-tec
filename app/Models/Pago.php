<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'esta_pendiente',
    ];

    public function compras() {
        return $this->hasMany(Compra::class);
    }

    public function usuario() {
        return $this->belongsTo(Usuario::class);
    }
}
