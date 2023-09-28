<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Scout\Searchable;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    public $timestamps = false;

    // /**
    //  * Get the indexable data array for the model.
    //  *
    // //  * @return array<string, mixed>
    //  */

    public function tipoProducto():HasOne{
        return $this->hasOne(TipoProducto::class);
    }
}
