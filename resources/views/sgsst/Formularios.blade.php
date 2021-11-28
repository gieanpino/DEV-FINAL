@extends('sgsst.sgsst')
@section('datos')
<div class="row " id="main">
    <div class="col-12">
        <h2>EMPRESA</h2>
    </div>

    <div class="col-12">
        <button type="button" class="btn col-9 bg-info btn-lg m-2" data-toggle="modal" >Crear usuario </button>
    </div>
    <div class="col-12">
        <button type="button" class="btn col-9 bg-primary btn-lg m-2" data-toggle="modal">
        <a class="nav-link active" aria-current="page"  href="{{ url('/indexEmpresa') }}">Crear Empresa</a>
        </button>
    </div>
    
    <div class="col-12">
        <button type="button" class="btn col-9 bg-primary btn-lg m-2" data-toggle="modal" data-target="#Aliados">Aliados estratégicos  </button>
    </div>
    <div class="col-12">
        <button type="button" class="btn col-9 bg-info  btn-lg m-2" data-toggle="modal" data-target="#politicas">Política del SG-SST  </button>
    </div>

</div>
<!-- crear usuario -->
<div class="modal fade col-12"  id="crearUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
                    <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header text-center">
                                <h5 class="modal-title">Crear Usuario</h5>
                                <button type="button" data-dismiss="modal" class="btn-close" data-bs-dismiss="modal" aria-label="Close" href="{{url('/Empresa')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                        <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                                        <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="m-sm-4 p-sm-4" method="POST" action="" >
                                    {{csrf_field()}}{{method_field('PUT')}}
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" placeholder="Nombre Completo">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <input id="cedula" type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="" required autocomplete="cedula" placeholder="Cedula">

                                            @error('cedula')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                        <select class="mb-3 w-full" style="height: 100%; width: 100%;" name="estudios" id="estudios"  required autofocus>
                                                <option value="1">Bachiller</option>
                                                <option value="2">Tecnico</option>
                                                <option value="3">Tecnologico</option>
                                                <option value="4">Pregrado</option>
                                                <option value="5">Postgrado</option>
                                            </select>
                        
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input id="Empresa" type="text" class="form-control @error('Empresa') is-invalid @enderror" name="Empresa" value="" required autocomplete="Empresa" placeholder="Empresa">

                                            @error('cedula')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <form method="POST" action="http://diamond-chaos.codio.io:3000/tuto/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <label>Cargar HV</label>
                                                <input type="file" class="form-control" name="file" >
                                            </form>
                                        </div>
                                        <div class="col-md-12">
                                            <form method="POST" action="http://diamond-chaos.codio.io:3000/tuto/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <label>Cargar PDF Diploma</label>
                                                <input type="file" class="form-control" name="file" >
                                            </form>
                                        </div> 
                                        <div class="col-md-12">
                                            <form method="POST" action="http://diamond-chaos.codio.io:3000/tuto/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <label>Cargar PDFdel Certificado Curso</label>
                                                <input type="file" class="form-control" name="file" >
                                            </form>
                                        </div>
                                        <div class="col-md-12">
                                            <form method="POST" action="http://diamond-chaos.codio.io:3000/tuto/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <label>Cargar PDF Certificado seccional</label>
                                                <input type="file" class="form-control" name="file" >
                                            </form>
                                        </div>    
                                    </div>
                                     <div class="col text-center m-3">
                                        <button class="btn btn-primary col-6 " type="submit"> Guardar</button>
                                    </div>
                                    
                            </form>
                    </div>
                            
        </div>
    </div>  
</div>
<!-- crear Empresa -->
<div class="modal fade" id="crearEmpresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
                    <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header text-center">
                                <h5 class="modal-title">Crear Empresa</h5>
                                <button type="button" data-dismiss="modal" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                        <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                                        <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="m-sm-4 p-sm-4" method="POST" action="'/EmpresaStore'" >
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" placeholder="Nombre">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="col-md-4">
                                                <input id="nit" type="text" class="form-control @error('nit') is-invalid @enderror" name="nit" required autocomplete="nit" placeholder="NIT">

                                                @error('apellido')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="col-md-4">
                                                <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="" required autocomplete="direccion" placeholder="Direccion">

                                                @error('cedula')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <select class="mb-3 w-full" style="height: 100%; width: 100%;" name="actividadEconomica" id="actividadEconomica"  required autofocus>
                                                <option value="1">Educacion</option>
                                                <option value="2">Comercio</option>
                                                <option value="3">Servicio</option>
                                                <option value="4">Operacion</option>
                                                <option value="5">Produccion</option>
                                            </select>
                        
                                            @error('actividadEconomica')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="nivelRiesgo" type="text" class="form-control @error('nivelRiesgo') is-invalid @enderror" name="nivelRiesgo" value="" required autocomplete="nivelRiesgo" placeholder="Nivel Riesgo">

                                            @error('nivelRiesgo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="cantidadEmpleados" type="text" class="form-control @error('cantidadEmpleados') is-invalid @enderror" name="cantidadEmpleados" value="" required autocomplete="cantidadEmpleados" placeholder="Cantidad Empleados">

                                            @error('cantidadEmpleados')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <select class="mb-3 w-full" style="height: 100%; width: 100%;" name="naturalezaJuridica" id="naturalezaJuridica"  required autofocus>
                                                <option value="1">Natural</option>
                                                <option value="2">Juridica</option>
                                            </select>
                        
                                            @error('naturalezaJuridica')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" placeholder="Correo">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-md-6">
                                            <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="" required autocomplete="telefono" placeholder="Telefono">

                                            @error('telefono')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <select class="mb-3 w-full" style="height: 100%; width: 100%;" name="naturalezaJuridica" id="naturalezaJuridica"  required autofocus>
                                                <option value="2">SAS</option>
                                                <option value="3">LTDA</option>
                                                <option value="4">S.en C.</option>
                                                <option value="5">S.C.A.</option>
                                                <option value="6">S. Colectiva</option>
                                                <option value="1">Natural</option>
                                            </select>
                        
                                            @error('naturalezaJuridica')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                   </div>
                                    <div class="col text-center m-3">
                                        <button class="btn btn-primary col-6 " type="submit"> Guardar</button>
                                    </div>
                            
                             </form>
                         </div>
                            
        </div>
    </div>  
</div>

<!-- Aliados -->
<div class="modal fade" id="Aliados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
                    <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header text-center">
                                <h5 class="modal-title">Editar Usuario</h5>
                                <button type="button" data-dismiss="modal" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                        <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                                        <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="m-sm-4 p-sm-4" method="POST" action="" >
                                    {{csrf_field()}}{{method_field('PUT')}}
                                    <div class="form-group row">
                                    <div class="col-md-4">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" placeholder="Nombre">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="" required autocomplete="apellido" placeholder="Apellido">

                                            @error('apellido')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="cedula" type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="" required autocomplete="cedula" placeholder="Cedula">

                                            @error('cedula')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input id="telefono" type="telefono" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="" required autocomplete="telefono" placeholder="Telefono">

                                            @error('telefono')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" value="" required autocomplete="celular" placeholder="Celular">

                                            @error('celular')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="" required autocomplete="direccion" placeholder="Direccion">

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
                                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" placeholder="Correo">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-md-4">
                                            <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="" required autocomplete="usuario" placeholder="Usuario">

                                            @error('usuario')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    <div class="col-md-4">
                                            <input for="password" id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="" required autocomplete="password" placeholder="Contraseña">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input for="password-confirm" id="password-confirm" type="text" class="form-control @error('password-confirm') is-invalid @enderror" name="password-confirm" value="" required autocomplete="password-confirm" placeholder="Confirmar Contraseña">

                                            @error('password-confirm')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                   </div>
                                    <div class="col text-center m-3">
                                        <button class="btn btn-primary col-6 " type="submit"> Guardar</button>
                                    </div>
                            
                                </form>
                         </div>
                            
        </div>
    </div>  
</div>

<!-- Politicas -->
<div class="modal fade" id="politicas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
    <div class="modal-dialog">
          <div class="modal-content">
                            <div class="modal-header text-center">
                                <h5 class="modal-title">Editar Usuario</h5>
                                <button type="button" data-dismiss="modal" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                        <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                                        <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="m-sm-4 p-sm-4" method="POST" action="" >
                                    {{csrf_field()}}{{method_field('PUT')}}
                                    <div class="form-group row">
                                    <div class="col-md-4">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" placeholder="Nombre">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="" required autocomplete="apellido" placeholder="Apellido">

                                            @error('apellido')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="cedula" type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="" required autocomplete="cedula" placeholder="Cedula">

                                            @error('cedula')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input id="telefono" type="telefono" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="" required autocomplete="telefono" placeholder="Telefono">

                                            @error('telefono')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" value="" required autocomplete="celular" placeholder="Celular">

                                            @error('celular')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="" required autocomplete="direccion" placeholder="Direccion">

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
                                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" placeholder="Correo">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-md-4">
                                            <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="" required autocomplete="usuario" placeholder="Usuario">

                                            @error('usuario')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    <div class="col-md-4">
                                            <input for="password" id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="" required autocomplete="password" placeholder="Contraseña">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input for="password-confirm" id="password-confirm" type="text" class="form-control @error('password-confirm') is-invalid @enderror" name="password-confirm" value="" required autocomplete="password-confirm" placeholder="Confirmar Contraseña">

                                            @error('password-confirm')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                   </div>
                                    <div class="col text-center m-3">
                                        <button class="btn btn-primary col-6 " type="submit"> Guardar</button>
                                    </div>
                            
                                </form>
                         </div>
                            
        </div>
    </div>  
</div>



@endsection