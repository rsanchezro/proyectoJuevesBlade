<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    public function raiz()
    {
        // Se declara un encabezado
        $encabezado = '<h1>Página principal</h1>';

        // Se declara una matriz de nombres
        $personas = [
            [
                'nombre'=>'Raúl',
                'apellidos'=>'Pérez Santisteban',
                'ciudad'=>'Madrid'
            ],
            [
                'nombre'=>'Marta',
                'apellidos'=>'Salgado Rodríguez',
                'ciudad'=>'Buenos Aires'
            ],
            [
                'nombre'=>'Susana',
                'apellidos'=>'Martín García',
                'ciudad'=>'Bogotá'
            ],
            [
                'nombre'=>'Alfonso',
                'apellidos'=>'Olivares',
                'ciudad'=>'Córdoba'
            ]
        ];

        // Se llama a la vista pasándole los datos que tenemos en el controlador
        return view('principal')->with([
            'titular'=>$encabezado,
            'personas'=>$personas
        ]);
    }

    public function hola()
    {
        $textoFinal = 'Hola, ';
        $textoFinal .= (request()->persona == '')?'mundo':request()->persona;
        return view('mensaje')->with(['texto'=>$textoFinal]);
    }

    public function pruebaParametros($param_1, $param_2, $param_3)
    {
        $textoFinal = 'El parámetro 1 vale '.$param_1.'. ';
        $textoFinal .= 'El parámetro 2 vale '.$param_2.'. ';
        $textoFinal .= 'El parámetro 3 vale '.$param_3.'. ';
        return view('mensaje')->with(['texto'=>$textoFinal]);
    }
}
