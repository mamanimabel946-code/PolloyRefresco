@ @extends('layouts.main')
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
              <h5 class="card-title fw-semibold mb-4 text-primary" >clientes</h5>
              <h3 class="card-title fw-semibold mb-4 text-primary">administrar clientes</h3>
              <div class="table-responsive">
                <a href="{{route('cliente.create')}}" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> agregar un nuevo cliente</a>
                <table id="tabla-cliente" class="table table-bordered">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>id</th>
                      <th>user_id</th>
                      <th>apellido</th>
                      <th>nombre</th>
                      <th>email</th>
                      <th></th>
                      <th></th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($items as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->user_id}} </td>
                      <td>{{$item->apellido}}</td>
                      <td>{{$item->nombre}}</td>
                      <td>{{$item->email}}</td>
                      <td><a href="{{route('cliente.edit',$item->id)}}"class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                      <a href="{{route('cliente.show',$item->id)}}"class=" btn btn-danger"><i class="fa-solid fa-trash-can"></i></i></a>
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
        <!--  Row 1 -->
        
  
       
