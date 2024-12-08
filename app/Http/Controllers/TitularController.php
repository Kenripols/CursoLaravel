<?php

namespace App\Http\Controllers;

use App\Models\Titular;
use Illuminate\Http\Request;

class TitularController extends Controller
{

    public function index() {
        $titulares = Titular::orderBy('id', 'desc')->paginate(20);
        //Envio la el conjunto de los titulares como un array hacia la vista titular para mostrarlo se divide por paginas
        return view('titular', [
            'titulares' => $titulares
        ]);
    }

    public function registro() {
        return view('registro');
    
}

    public function guardar(Request $request) {

    //$request->validate([
        //'tipoDoc' => 'required' ,
        //'numDoc' => 'required' ,
        //'nombre1' => 'required' ,
        //nombre2 Opcional
        //'apellido1' => 'required',
        //apellido2 Opcional
    //])
    $titular = new Titular();
    $titular->nombre1 = $request->nombre1;
    $titular->nombre2 = $request->nombre2;
    $titular->apellido1 = $request->apellido1;
    $titular->apellido2 = $request->apellido2;
    $titular->tipoDoc = $request ->tipoDoc;
    $titular->numDoc = $request -> numDoc;

    $titular->save();

    return redirect('/titular');

}


    public function mostrar($titular) {
        $titular = Titular::find($titular);
        return view ('titularmostrar', compact('titular'));

    }

    public function modificar($titular) {
        $titular = Titular::find($titular);
        return view('modificar', compact('titular'));
    }

    public function actualizar(Request $request, $titular) {
        $titular = Titular::find($titular);
    $titular->nombre1 = $request->nombre1;
    $titular->nombre2 = $request->nombre2;
    $titular->apellido1 = $request->apellido1;
    $titular->apellido2 = $request->apellido2;
    $titular->tipoDoc = $request ->tipoDoc;
    $titular->numDoc = $request -> numDoc;

    $titular->save();

    return  redirect("/titular/{$titular->id}");

    }

    public function eliminar($titular) {
        $titular = Titular::find($titular);
        $titular->delete();
        return redirect('/titular');
    }
}