<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>

     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="{{ asset('plantilla/assets/css/styles.min.css') }}" />
    <!-- 
    <link rel="stylesheet" href="{{ asset('plantilla/assets/data-table/style.css') }}" />
-->
   
<link rel="shortcut icon" type="image/png" href="{{ asset('plantilla/assets/images/logos/favicon.png') }}" />
</head>

<body>
  @yield('contenido')
  <!--  jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--  DataTables y Bootstrap JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>


   <!-- <script src="{{ asset('plantilla/assets/libs/jquery/dist/jquery.min.js') }}"></script>-->
    <script src="{{ asset('plantilla/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plantilla/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('plantilla/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('plantilla/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('plantilla/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('plantilla/assets/js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!--  <script src="{{ asset('plantilla/assets/data-table/simple-datatables.js') }}"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 
  @stack('scripts')
<script>
        $(document).ready(function () {
        $('#tabla-categorias').DataTable();
    });
    </script>
</body>

</html>
