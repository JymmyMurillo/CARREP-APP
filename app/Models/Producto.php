<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = ['nombre_producto', 'cantidad'];

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'usuario_producto', 'producto_id', 'usuario_id')
            ->withPivot('cantidad_asignada');
    }
}
