@foreach ($items AS $item )
                                <tr>                        
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->rol}}</td>
                                
                                    <td><a href="#" onclick="agregar_id_usuario({{ $item->id }})" 
                                        class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cambiar_password">
                                        <i class="fa-solid fa-user-lock"></i>
                                        </a>
                                    <td >
                                        <div class="form-check form-switch"> 
                                        <input class="form-check-input" type="checkbox" id="{{$item->id}}"
                                        {{$item->activo ? 'checked' : '' }} >
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <a href="{{route('usuario.edit', $item->id)}}" class="btn btn-warning">
                                        <i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                    </td>                               
                                </tr>
                                @endforeach