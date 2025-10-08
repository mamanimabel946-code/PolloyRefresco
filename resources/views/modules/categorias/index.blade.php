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


  <div class="container-fluid">
    <!--  Row 1 -->
    
    
    <div class="row">
        <div class="col-lg-8 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <h5 class="card-title fw-semibold mb-4 text-primary" >Categorias</h5>
              <h3 class="card-title fw-semibold mb-4 text-primary">Administar categorias</h3>
              <div class="table-responsive">
                <a href="{{route('categoria.create')}}"     class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> agregar una nueva categoria</a>
                <table id="tabla-categorias" class="table table-bordered">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>Nombre Categoria</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($items as $item)
                    <tr>
                      <td>{{$item->nombre}}
                      </td>
                      <td><a href="{{route('categoria.edit',$item->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                      <a href="{{route('categoria.show',$item->id)}}"class=" btn btn-danger"><i class="fa-solid fa-trash-can"></i></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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
@endsection

