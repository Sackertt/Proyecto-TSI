<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TipoProducto extends Model
{
    use HasFactory;
    protected $table = 'tipos_productos';

    public function producto():HasOne{
        return $this->hasOne(Producto::class);
    }
}
