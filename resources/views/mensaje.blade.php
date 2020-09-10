@extends('layouts.main-layout')

@section ('page-title', 'Saludo')

@section ('content-area')
    {{ $texto }}
    <br>
    <a href="{{ route('entrada') }}">Ir a la página principal</a>
@endsection



