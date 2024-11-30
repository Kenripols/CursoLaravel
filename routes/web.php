<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Models\Titular;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [RegisterController::class, 'register']);

Route::get('prueba', function()
{
    
    //Crear nuevo registro Titular en BD
    
    $titular = new Titular;
    $titular-> tipoDoc = 'Pasaporte';
    $titular->numDoc = '986645564';
    $titular->nombre1 ='RUssOu';
    $titular->nombre2 = 'sadasdsa';
    $titular->apellido1 = 'asdasdasd';
    $titular->apellido2 = 'sadadasdsa';
    $titular->save();
    return $titular;
    
 
    /* 
    Buscar por ID
    $titular = Titular::find(1);
    */
    /*
    Buscar por primer nombre
    $titular = Titular::where('nombre1', 'Roberto')
    ->first();
    */
    
    /*
Modificar un registro
$titular = Titular::where('apellido1', 'Sabado')->first();
    $titular->nombre2 = 'Tizziano';
    $titular->save();
    return $titular;

    */
    /*
    Busqueda por parametro
    $titular = Titular::where('id', '>=', '2')
    ->get();
    return $titular;
    */
    /*
    Mostrar el contenido de una tabla
    $titular = Titular::get();
    return $titular;
    */
    /* Mostrar titulares de manera ascendente y mostrar id, nombre y apellido
     $titular = Titular::orderBy('id', 'asc')->select('id','nombre1','apellido1')->get();
    return $titular;
    */
    /* Eliminar un titular según el id
     $titular = Titular::find(1);
     $titular->delete();
     return "Eliminado Correctamente";
   */

    
});


