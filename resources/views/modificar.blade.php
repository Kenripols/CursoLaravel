<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de Modificar Titular</h1>
    
    <form action="{{route('titular.modificar',$titular->id)}}" method="POST">
        <!-- TOKEN LARAVEL -->
        @csrf

        @method('PUT')
        <label>
            Tipo Documento:
            <input type="text" name="tipoDoc" value="{{$titular->tipoDoc}}">
        </label>
        <hr>
        <label>
            Número de Documento:
            <input type="text" name="numDoc" value="{{$titular->numDoc}}">
        </label>
        <hr>

        <label>
            Primer Nombre:
            <input type="text" name="nombre1" value="{{$titular->nombre1}}">
        </label>
<hr>
        <label>
            Segundo Nombre:
            <input type="text" name="nombre2" value="{{$titular->nombre2}}">
        </label>
<hr>
        <label>
            Primer Apellido:
            <input type="text" name="apellido1" value="{{$titular->apellido1}}">
        </label>
<hr>
        <label>
            Segundo Apellido:
            <input type="text" name="apellido2" value="{{$titular->apellido2}}">
        </label>

        <button type="submit">Modificar Titular </button>
    </form>
</body>
</html>