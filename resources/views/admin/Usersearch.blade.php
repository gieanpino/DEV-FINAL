@extends('adminlte::page')
@section('content')

       
<div class="row justify-content-center ">
    <form action="{{route('search')}}" method="get">
    <div class="row align-items-center m-5">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Usuario</label>
            </div>
            <div class="col-auto">
                <input type="text" name="texto"  id="dato" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <button  class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </div>
        </div>
    </form>
        
       
</div>  
<div class="card m-2">
    <div class="card-header text-center bg-success">
       <h3>Resultados</h3>
    </div>
    <div class="card-body">
        <div class="col">
            <table class="table table-striped "style="font-size:10px;">
                <thead>
                    <th class="col">Id</th>
                    <th class="col">Nombre</th>
                    <th class="col">Apellido</th>
                    <th class="col">Cedula</th>
                    <th class="col">Correo</th>
                    <th class="col">Usuario</th>
                    <th class="col">Telefono</th>
                    <th class="col">Celular</th>
                    <th class="col">Direccion</th>
                    <th class="col">Usuario</th>
                    <th class="col">editar</th>
                    <th class="col">Eliminar</th>
                </thead>
                <tbody>
                 @foreach($users as $user)
                <tr>
                    <th>{{$user->id}}</th> 
                    <th>{{$user->name}}</th> 
                    <th>{{$user->apellido}}</th> 
                    <th>{{$user->cedula}}</th> 
                    <th>{{$user->email}}</th> 
                    <th>{{$user->usuario}}</th> 
                    <th>{{$user->telefono}}</th> 
                    <th>{{$user->celular}}</th> 
                    <th>{{$user->direccion}}</th> 
                    <th>{{$user->rol_id}}</th> 
                    <th> 
                       <button type="button" class="bg-warning" data-toggle="modal" data-target="#editUsuario{{$user->id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                       </button>
                    </th>
                    <th>
                    <div class="modal fade" id="editUsuario{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
                    <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header text-center">
                                <h5 class="modal-title">Editar Usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            {{$user->name}}
                            <form class="m-sm-4 p-sm-4" method="POST" action="{{route('users.update',$user)}}" >
                                    {{csrf_field()}}{{method_field('PUT')}}
                                    <div class="form-group row">
                                    <div class="col-md-4">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" placeholder="Nombre">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{$user->apellido}}" required autocomplete="apellido" placeholder="Apellido">

                                            @error('apellido')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="cedula" type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{$user->cedula}}" required autocomplete="cedula" placeholder="Cedula">

                                            @error('cedula')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input id="telefono" type="telefono" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{$user->telefono}}" required autocomplete="telefono" placeholder="Telefono">

                                            @error('telefono')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{$user->celular}}" required autocomplete="celular" placeholder="Celular">

                                            @error('celular')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" placeholder="Direccion">

                                            @error('direccion')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                        <select class="mb-3 w-full" style="height: 100%; width: 100%;" name="rol_id" id="rol_id"  required autofocus>
                                                <option value="1">Administrador</option>
                                                <option value="2">Encargado SG_SST</option>
                                                <option value="3">Presidente de COCOLA</option>
                                                <option value="4">Presidente de COPASST</option>
                                                <option value="5">Presidente de BE</option>
                                            </select>
                        
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email" placeholder="Correo">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-md-4">
                                            <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{$user->usuario}}" required autocomplete="usuario" placeholder="Usuario">

                                            @error('usuario')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    <div class="col-md-4">
                                            <input for="password" id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{$user->password}}" required autocomplete="password" placeholder="Contraseña">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input for="password-confirm" id="password-confirm" type="text" class="form-control @error('password-confirm') is-invalid @enderror" name="password-confirm" value="{{$user->password}}" required autocomplete="password-confirm" placeholder="Confirmar Contraseña">

                                            @error('password-confirm')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                   </div>
                                    <div class="col text-center m-3">
                                        <button class="btn btn-success col-6 " type="submit"> Guardar</button>
                                    </div>
                            
                                </form>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                        
                        <form method="post" action="{{route('users.destroy',$user->id)}}" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-danger ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </button>
                            
                        </form>
                        
                    </th>
                </tr> 
                @endforeach          
                </tbody>
            </table>
         </div>
    </div>
</div>
           
@endsection
