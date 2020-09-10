@extends('layouts.main-layout')

@section ('page-title', 'Bienvenidos')

@section ('content-area')
    {!! $titular !!}

    @mays("hola")

    <table width='800' border='1'>
        <thead>
            <tr>
                <th colspan='3'>PERSONAS</th>
            </tr>
            <tr>
                <th width='250'>NOMBRE</th>
                <th width='250'>APELLIDOS</th>
                <th>CIUDAD</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona["nombre"] }}</td>
                    <td>{{ $persona["apellidos"] }}</td>
                    <td>{{ $persona["ciudad"] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <ul>
    @foreach ($personas as $persona)
        <li>{{ $persona["nombre"] }}
        @if ($loop->first)
            (en la primera iteración)
        @endif
        @if ($loop->last)
            (en la última iteración)
        @endif
        </li>
    @endforeach
    </ul>

@endsection


