<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Venta extends Model
{
    use HasFactory;
    protected $table ='ventas';

    public function clientes():BelongsTo{
        return $this->belongsTo(Cliente::class);
    }

    public function productoConPivot():BelongsToMany{
        return $this->belongsToMany(Producto::class)->withPivot(['fecha_venta','id_producto','cantidad_producto','subtotal']);
    }
}
