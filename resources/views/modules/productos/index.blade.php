@ @extends('layouts.main')

      <!--  Header Start -->
    
      <!--  Header End -->
    
  <div class="row">
    <div class="col-lg-8 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4 text-primary" >Productos</h5>
          <h3 class="card-title fw-semibold mb-4 text-primary">Administar Productoss</h3>
          <div class="table-responsive">
            <a href="{{route('producto.create')}}"       class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> agregar un nuevo producto</a>
            <table id="tabla-producto" class="table table-bordered">
              <thead class="text-dark fs-4">
                <tr>
                  <th>idC</th>
                  <th>idCategoria</th>
                  <th>nombre</th>
                  <th>descrpcion</th>
                  <th>cantidad</th>
                  <th>precio</th>
                  <th></th>
                  <th></th>
                 
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
              
                <tr>
                  <td>{{$item->user_id}}</td>
                  <td>{{$item->categoria_id}}</td>
                  <td>{{$item->nombre}} </td>
                  <td>{{$item->descrpcion}}</td>
                  <td>{{$item->cantidad}}</td>
                  <td>{{$item->precio}}</td>

                  <td><a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                  <a href=""class=" btn btn-danger"><i class="fa-solid fa-trash-can"></i></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
           
            </table>
    