<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'voucher',
        'esta_validada',
        'piezas',
        'calificacion'
    ];

    public function producto() {
        return $this->belongsTo(Producto::class);
    }

    public function pago() {
        return $this->belongsTo(Pago::class);
    }

    public function usuario() {
        return $this->belongsTo(Usuario::class);
    }
}
