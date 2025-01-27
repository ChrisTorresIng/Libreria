<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/estilos.css') }}"> 
  <link rel="icon" type="image/png" href="public/img/icon.png">
  <title> @yield('titulo_principal') </title>
</head>

<body class="h-100 w-100 @yield('clase_Body')">
  @yield('header_barra_navegacion')

  @yield('contenido')

  @yield('foother')
  

  <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script> 
  {{-- <script src="public/js/platillosExpress.js"></script> --}}
</body>

</html>