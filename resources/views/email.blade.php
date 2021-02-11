<!DOCTYPE html>
<html>
 <head>
  <title>Message</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
 
  <style>
      html, body {
          background-color: #fff;
          color: #636b6f;
          font-family: 'Nunito', sans-serif;
          font-weight: 200;
          height: 100vh;
          margin: 0;
      }
      .content { text-align: center; }
      .title { font-size: 84px; }
  </style>
 </head>
 <body>
  <br />
  <div class="container box" style="width: 970px;">
    @if ($data['tipoMensaje'] == 'rapido')
      <h1 style="text-align:center;"> -- Mensaje rapido -- </h1>
      <h3 align="center">{{ $data['message'] }}</h3>
    @endif

    @if ($data['tipoMensaje'] == 'cita')
      <h1 style="text-align:center;"> -- Mensaje para pedir una cita -- </h1>
      <h3 align="center">Nombre: {{ $data['nombre'] }}</h3>
      <h3 align="center">Apellido: {{ $data['apellido'] }}</h3>
      <h3 align="center">Correo electrónico: {{ $data['correo'] }}</h3>
      <h3 align="center">Número de teléfono: {{ $data['numero'] }}</h3>
      <h3 align="center">Razón: {{ $data['razon'] }}</h3>
      <h3 align="center">Descripción: {{ $data['descripcion'] }}</h3>
    @endif

    @if ($data['tipoMensaje'] == 'contacto')
      <h1 style="text-align:center;"> -- Mensaje de contacto -- </h1>
      <h3 align="center">Nombre: {{ $data['nombre'] }}</h3>
      <h3 align="center">Número de teléfono: {{ $data['numero'] }}</h3>
      <h3 align="center">Correo electrónico: {{ $data['correo'] }}</h3>
      <h3 align="center">Mensaje:</h3>
      <p align="center">{{ $data['mensaje'] }}</p>
    @endif

  </div>
 </body>
</html>
