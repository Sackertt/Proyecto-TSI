<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HoraEstetica extends Model
{
    use HasFactory;
    protected $table = 'horas_esteticas';
    public $timestamps = false;

    public function clientes():BelongsTo{
        return $this->belongsTo(Usuario::class);
    }
    public function tipos_atencion():BelongsTo{
        return $this->belongsTo(TipoAtencion::class);
    }
}
