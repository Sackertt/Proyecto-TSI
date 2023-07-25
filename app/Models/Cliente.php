<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    
    public function tomasDeHoras():HasMany{
        return $this->hasMany(HoraEstetica::class);
    }

    public function ventas():HasMany{
        return $this->hasMany(Venta::class);
    }
}
