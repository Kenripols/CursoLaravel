<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('titular.index')}}">Volver a Titulares</a>
    <h1>Aqui se mostraran el titular {{$titular-> id}} </h1> 

   <b>Nombre</b> {{$titular-> nombre1}}
   <p><b>Apellido</b> {{$titular-> apellido1}}</p>

   <a href="{{route('titular.modificar',$titular->id)}}">Modificar</a>

   <form action="{{route('titular.eliminar',$titular->id)}}" method="POST">

    @csrf
    @method('DELETE')
    <button type="submit">
        Eliminar Titular
    </button>
   </form>
   
</body>
</html>