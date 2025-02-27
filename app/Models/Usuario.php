<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuarios';
    protected $fillable = ['username', 'password_hash', 'db_name'];

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'usuario_producto', 'usuario_id', 'producto_id')
            ->withPivot('cantidad_asignada');
    }
}