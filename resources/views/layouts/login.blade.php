<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('titulo')</title>
  <link rel="stylesheet" href="{{asset('plantilla/assets/css/styles.min.css')}}" />
</head>
<link rel="shortcut icon" type="image/png" href="{{asset('plantilla/assets/images/logos/favicon.png')}}" />

<body>
  <!--  Body Wrapper -->
@yield('contenido')



  <script src="{{asset('plantilla/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('plantilla/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"')}} "></script>
  <script src="{{asset('plantilla/assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('plantilla/assets/js/app.min.js')}}"></script>
  <script src="{{asset('plantilla/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('plantilla/assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('plantilla/assets/js/dashboard.js')}}"></script>
</body>

</html> 