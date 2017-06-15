<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
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
        'area_id','nombre', 'descripcion','usuario_id', 'producto_id'
    ];

    //____________________________________

    public function producto()
    {
    	return $this->hasMany('Inventario\Producto');
    }

    public function usuario()
    {
    	return $this->belongsTo('Inventario\Usuario');
    }

}
