 @extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
      @include('shared.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('shared.header')
      <!--  Header End -->
      <div class="row">
        <div class="col-lg-8 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <h5 class="card-title fw-semibold mb-4 text-primary" >usuario</h5>
              <h3 class="card-title fw-semibold mb-4 text-primary">Administar usuarios</h3>
              <div class="table-responsive">
                <a href="{{route('usuario.create')}}"           class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> agregar un nuevo usuario</a>
                <table id="tabla-cliente" class="table table-bordered">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>email</th>
                      <th>nombre</th>
                      <th>rol</th>
                      <th>cambio pasword</th>
                      <th>activo</th>
                      <th>editar</th>
                      <th></th>
                     
                    </tr>
                  </thead>
                  <tbody id="tbody-usuario">
                      @include('modules.usuarios.tbody')
                     
                  </tbody>
               
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('modules.usuarios.modal_cambiar_password')

      @push('scripts')
    <script>

      function recargar_tbody(){
        $.ajax({
          type : "GET",
          url : "{{ route('usuario.tbody') }}",
          success : function(respuesta){
            console.log(respuesta);
          } 
        });
      }

      function cambiar_estado(id, estado) {
        $.ajax({
          type: "GET",
          url : "cambiar-estado/" + id + "/" + estado,
          success: function(respuesta){
            if(respuesta == 1){
              Swal.fire({
                title: 'Exito!',
                text: 'Cambio de estado exitoso!',
                icon: 'success',
                confirmButtonText:'Aceptar'
              });
              recargar_tbody();
            } else {
              Swal.fire({
                title: 'Fallo!',
                text: 'No se llevo a cabo el cambio!',
                icon: 'error',
                confirmButtonText:'Aceptar'
              });
            }
          }
        });
      }

      function agregar_id_usuario(id) {
        $('#id_usuario').val(id);
      }

      function cambio_password(){
        let id = $('#id_usuario').val();
        let password = $('#password').val();

        $.ajax({
          type: "GET",
          url: "cambiar-password/" + id + "/" + password,
          success :function(respuesta){
            if(respuesta == 1){
               Swal.fire({
                title: 'Exito!',
                text: 'Cambio de password exitoso!',
                icon: 'success',
                confirmButtonText:'Aceptar'
              });
              $('#cambiar_password').modal('hide');
              $('#frmPassword')[0].reset();
            } else {
              Swal.fire({
                title: 'Fallo!',
                text: 'Cambio de password no exitoso!',
                icon: 'error',
                confirmButtonText:'Aceptar'
              });
            }
          }
        });

        return false;
      }

      $(document).ready(function(){
        $('.form-check-input').on("change", function(){
          let id = $(this).attr("id");
          let estado = $(this).is(":checked") ? 1 : 0;
          cambiar_estado(id, estado);
        });
      });
    </script>
@endpush
@endsection



        <!--  Row 1 -->
        
       <!--  Row 1 --> <div class="row">
       
          
        </div>
       
 <!--  inicio footer-->
<!--  fin footer-->
      </div>
    </div>
  </div>












































