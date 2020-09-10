@extends('layouts.main-layout')

@switch ( $texto )
    @case("clientes")
        @section ('page-title', 'Admin: Clientes')
        @break
    @case("facturación")
        @section ('page-title', 'Admin: Facturas')
        @break
    @case("artículos")
        @section ('page-title', 'Admin: Almacén')
        @break
    @default
        @section ('page-title', 'Admin: Contabilidad')
@endswitch

@section ('content-area')
    @include('included-views.admin-header')
    Esta es la vista de Administrador {{ $texto }}
@endsection
