
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  </head>
  <body>
    <h1>Aqui se mostrarán todos los titulares</h1>

    <a href="{{route('titular.registro')}}">Registrarse</a>
    
        <ul>
            <!-- Recorro un array de titulares traido desde TitularController -->
        @foreach ($titulares as $titular)
            <li>
                <a href="{{route('titular.mostrar',$titular->id)}}">
                    {{ $titular->nombre1}}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $titulares->links() }}
  </body>
  </html>
        
  
