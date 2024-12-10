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
    <!-- Muestro los errores en pantalla producidos por la validacion en el controller -->
    @if ($errors->any()) 

    <div>
        <h2>Errores:</h2>
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form action="{{route('titular.actualizar',$titular->id)}}" method="POST">
        <!-- TOKEN LARAVEL -->
        @csrf
<!-- Reemplazo por el valor existente en la base de datos -->
        @method('PUT')
        <label>
            Tipo Documento:
            <input type="text" name="tipoDoc" value="{{old('tipoDoc', $titular->tipoDoc)}}">
        </label>
        <hr>
        <label>
            Número de Documento:
            <input type="text" name="numDoc" value="{{old('numDoc', $titular->numDoc)}}">
        </label>
        <hr>

        <label>
            Primer Nombre:
            <input type="text" name="nombre1" value="{{old('nombre1', $titular->nombre1)}}">
        </label>
<hr>
        <label>
            Segundo Nombre:
            <input type="text" name="nombre2" value="{{old('nombre2', $titular->nombre2)}}">
        </label>
<hr>
        <label>
            Primer Apellido:
            <input type="text" name="apellido1" value="{{old('apellido1', $titular->apellido1)}}">
        </label>
<hr>
        <label>
            Segundo Apellido:
            <input type="text" name="apellido2" value="{{old('apellido2', $titular->apellido2)}}">
        </label>

        <button type="submit">Modificar Titular </button>
    </form>
</body>
</html>