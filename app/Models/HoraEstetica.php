<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HoraEstetica extends Model
{
    use HasFactory;
    protected $table = 'horas_esteticas';

    public function clientes():BelongsTo{
        return $this->belongsTo(Cliente::class);
    }
    public function tipos_atencion():BelongsTo{
        return $this->belongsTo(TipoAtencion::class);
    }
}
