<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>
    <!-- Invoco tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-4x1 mx-auto px-4">
        <h1>Bienvenido a la pagina de registro {{$usuario}} </h1> 
    </div>
    <!-- Alerta usando tailwind css -->
    <!-- Accediendo a al componente mediante el archivo views/components/alert.blade.php -->
   <x-alert type="papas">
    <x-slot name="titulo">Titulo</x-slot>
     Contenido de la alerta</x-alert>
    
    
</body>
</html>