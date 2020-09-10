<?php
/**
 * Rutas del administrador
 */
Route::prefix ('adb')->group(function () {
    Route::get('articulos', 'ControladorDeAdmin@articulos');
    Route::get('clientes', 'ControladorDeAdmin@clientes');
    Route::get('facturacion', 'ControladorDeAdmin@facturacion');
    Route::get('contabilidad', 'ControladorDeAdmin@contabilidad');
});

