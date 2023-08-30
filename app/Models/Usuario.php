<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Authenticable
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $primaryKey = 'rut';
    protected $keyType = 'string';    
    public $timestamps = false;
    
    public function tomasDeHoras():HasMany{
        return $this->hasMany(HoraEstetica::class);
    }

    public function mascotas():HasMany{
        return $this->hasMany(Mascota::class);
    }
}
