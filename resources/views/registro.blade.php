<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>
</head>
<body>
    <h1>Formulario de Registro Titular</h1>
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

    <form action="{{route('titular.guardar')}}" method="POST">
        <!-- TOKEN LARAVEL -->
        @csrf
        <label>
            Tipo Documento:
            <input type="text" name="tipoDoc" value="{{old('tipoDoc')}}">
        </label>
        
        <!-- Forma de mostrar mensajes de error debajo de cada campo -->
        {{--@error('tipoDoc')
            <p>{{$message}}</p>
            @enderror --}}
        <hr>
        <label>
            Número de Documento:
            <input type="text" name="numDoc" value="{{old('numDoc')}}">
        </label>
        <hr>

        <label>
            Primer Nombre:
            <input type="text" name="nombre1" value="{{old('nombre1')}}">
        </label>
<hr>
        <label>
            Segundo Nombre:
            <input type="text" name="nombre2" value="{{old('nombre2')}}">
        </label>
<hr>
        <label>
            Primer Apellido:
            <input type="text" name="apellido1" value="{{old('apellido1')}}">
        </label>
<hr>
        <label>
            Segundo Apellido:
            <input type="text" name="apellido2" value="{{old('apellido2')}}">
        </label>

        <button type="submit">Registrarme</button>
    </form>
    
</body>
</html>