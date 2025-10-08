@extends('layouts.main')
@section('titulo', $titulo)
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


      <div class="container-fluid">
        <!--  Row 1 -->
        
        
        <div class="row">
            <div class="col-lg-8 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body p-4">
                  <h5 class="card-title fw-semibold mb-4 text-primary" >cliente</h5>
                  <h3 class="card-title fw-semibold mb-4 text-primary">Editar cliente</h3>
                  <h5>estas seguro que quieres editar cliente</h5>
                  <div class="table-responsive">
                    <form action="{{route('cliente.update',$item->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                      <label for="">nombre de cliente</label><br>
                      <input type="text"  id="nombre "name="nombre" value="{{$item->nombre}}" ><br><br>
                      <button class="btn btn-danger">editar</button> 
                      <a href="{{route('cliente')}}"        class="btn btn-primary">cancelar</a>
                    </form>
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
          
       
 <!--  inicio footer-->
<!--  fin footer-->
      </div>
    </div>
  </div>