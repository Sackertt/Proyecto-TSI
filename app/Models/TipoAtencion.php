<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoAtencion extends Model
{
    use HasFactory;
    protected $table = 'tipos_atenciones';

    public function horas_esteticas():HasMany{
        return $this->hasMany(HoraEstetica::class);
    }  
}
