
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <h1>Aqui se mostrarán todos los titulares</h1>

    <a href="/titular/registro">Registrarse</a>
    
        <ul>
            <!-- Recorro un array de titulares traido desde TitularController -->
        @foreach ($titulares as $titular)
            <li>
                <a href="/titular/{{$titular->id}}">
                    {{ $titular->nombre1}}
                </a>
            </li>
        @endforeach
    </ul>
  </body>
  </html>
        
  
