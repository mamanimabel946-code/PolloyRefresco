@extends('layouts.login')
@section('titulo',$titulo)
@section('contenido')
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
data-sidebar-position="fixed" data-header-position="fixed">
<div
  class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
  <div class="d-flex align-items-center justify-content-center w-100">
    <div class="row justify-content-center w-100">
      <div class="col-md-8 col-lg-6 col-xxl-3">
        <div class="card mb-0">
          <div class="card-body">
            <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
              <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
            </a>
            <p class="text-center">INICIAR SESION</p>
            <form method="POST" action="{{route('logear')}}">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
              </div>
              <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
             
               
              </div>
              <input type="submit" value="ACEPTAR" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
              <div class="d-flex align-items-center justify-content-center">
                <p class="fs-4 mb-0 fw-bold">Creado por:</p>
                <a class="text-primary fw-bold ms-2" href="./authentication-register.html">KAREN</a>
              </div>
            </form>
            <div>
              @if ($errors->any())
                <p>
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script src="{{ asset('plantilla/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('plantilla/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    
@endsection