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
    
    <form action="/titular" method="POST">
        <!-- TOKEN LARAVEL -->
        @csrf
        <label>
            Tipo Documento:
            <input type="text" name="tipoDoc">
        </label>
        <hr>
        <label>
            Número de Documento:
            <input type="text" name="numDoc">
        </label>
        <hr>

        <label>
            Primer Nombre:
            <input type="text" name="nombre1">
        </label>
<hr>
        <label>
            Segundo Nombre:
            <input type="text" name="nombre2">
        </label>
<hr>
        <label>
            Primer Apellido:
            <input type="text" name="apellido1">
        </label>
<hr>
        <label>
            Segundo Apellido:
            <input type="text" name="apellido2">
        </label>

        <button type="submit">Registrarme</button>
    </form>
    
</body>
</html>