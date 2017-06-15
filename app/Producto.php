<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    /**
    *
    *
    * @var string 
    **/
    protected $table = 'productos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'producto_id','nombre', 'descripcion', 'cantidad','area_id'
    ];

    public function areas()
    {
        return $this->hasMany('Inventario\Area');
    }
}
