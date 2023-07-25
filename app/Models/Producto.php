<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';

    public function ventaConPivot():BelongsToMany{
        return $this->belongsToMany(Venta::class)->withPivot(['fecha_venta','id_producto','cantidad_producto','subtotal']);
    }
    public function tipoProducto():HasOne{
        return $this->hasOne(TipoProducto::class);
    }
}
