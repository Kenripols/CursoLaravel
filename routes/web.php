<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TitularController;
use App\Models\Titular;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/titular', [TitularController::class, 'index'])->name('titular.index');

Route::get('/titular/registro', [TitularController::class, 'registro'])->name('titular.registro');

route::post('/titular/' , [TitularController::class, 'guardar'])->name('titular.guardar');

Route::get('/titular/{titular}',[TitularController::class, 'mostrar'])->name('titular.mostrar');

Route::get('/titular/{titular}/modificar', [TitularController::class, 'modificar'])->name('titular.modificar');

Route::put('/titular/{titular}', [TitularController::class, 'actualizar'])->name('titular.actualizar');

Route::delete('/titular/{titular}', [TitularController::class, 'eliminar'])->name('titular.eliminar');

Route::get('prueba', function()
{

    //GET
    //POST
    //PUT
    //PATCH
    //DELETE
    
    //Crear nuevo registro Titular en BD
    /*
    $titular = new Titular;
    $titular-> tipoDoc = 'Pasaporte';
    $titular->numDoc = '986645564';
    $titular->nombre1 ='RUssOu';
    $titular->nombre2 = 'sadasdsa';
    $titular->apellido1 = 'asdasdasd';
    $titular->apellido2 = 'sadadasdsa';
    $titular->save();
    return $titular;
    */
 
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


