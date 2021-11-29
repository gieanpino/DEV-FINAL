@extends('adminlte::page')
@section('content')

<div class="card m-5" style="width: 90%;">
  <div class="card-header fs-1 text-lg-center bg-secondary">
    Actualizar Datos
  </div>
  <div class="card-body">
  <form class="m-sm-4 p-sm-4" method="get" action="{{route('update',$users)}}" >
                                    @csrf
                                    <div class="form-group row">
                                    <div class="col-md-4">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $users->name}}" required autocomplete="name" placeholder="Nombre">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ $users->name }}" required autocomplete="apellido" placeholder="Apellido">

                                            @error('apellido')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="cedula" type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ $users->cedula }}" required autocomplete="cedula" placeholder="Cedula">

                                            @error('cedula')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input id="telefono" type="telefono" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ $users->telefono }}" required autocomplete="telefono" placeholder="Telefono">

                                            @error('telefono')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ $users->celular }}" required autocomplete="celular" placeholder="Celular">

                                            @error('celular')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ $users->direccion }}" required autocomplete="direccion" placeholder="Direccion">

                                            @error('direccion')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                        <select class="mb-3 w-full" style="height: 100%; width: 100%;" name="rol_id" id="rol_id" value="{{$users->rol_id}}" required autofocus>
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
                                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $users->email }}" required autocomplete="email" placeholder="Correo">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-md-4">
                                            <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{ $users->usuario }}" required autocomplete="usuario" placeholder="Usuario">

                                            @error('usuario')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    <div class="col-md-4">
                                            <input for="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" placeholder="Contraseña">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input for="password-confirm" id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror" name="password-confirm" value="{{ old('password-confirm') }}" required autocomplete="password-confirm" placeholder="Confirmar Contraseña">

                                            @error('password-confirm')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="form-group col-12 text-center p-1">
                                        <button class="btn btn-success col-6 " type="submit"> Guardar</button>
                                    </div>
    </form>

  </div>
</div>       
@endsection
