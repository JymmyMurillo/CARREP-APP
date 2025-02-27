<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();
        $productos = $usuario->productos->pluck('nombre_producto');
        $cantidades = $usuario->productos->pluck('pivot.cantidad_asignada');

        return view('dashboard', compact('productos', 'cantidades'));
    }
}