<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControladorDeAdmin extends Controller
{
    public function articulos()
    {
        return view('admin.mensajeDeAdmin')->with(['texto'=>'artículos']);
    }
    public function clientes()
    {
        return view('admin.mensajeDeAdmin')->with(['texto'=>'clientes']);
    }
    public function facturacion()
    {
        return view('admin.mensajeDeAdmin')->with(['texto'=>'facturación']);
    }
    public function contabilidad()
    {
        return view('admin.mensajeDeAdmin')->with(['texto'=>'contabilidad']);
    }
}
