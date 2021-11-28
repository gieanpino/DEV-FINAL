@extends('sgsst.sgsst')
@section('datos')

<!-- crear Empresa -->
<div class="col-12 text-lg-left">
        <a href="{{ url('/Empresa') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg>
        </a>
</div>
<h1>Actualizar Empresa</h1>

<form class="m-sm-4 p-sm-4" method="get" action="{{route('update.empresa',$empresa)}}" >
        @csrf
        <div class="form-group row">
                                        <div class="col-md-4">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$empresa->name}}" required autocomplete="name" placeholder="Nombre">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="col-md-4">
                                                <input id="nit" type="text" class="form-control @error('nit') is-invalid @enderror" name="nit" value="{{$empresa->nit}}" required autocomplete="nit" placeholder="NIT">

                                                @error('apellido')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="col-md-4">
                                                <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{$empresa->nit}}" required autocomplete="direccion" placeholder="Direccion">

                                                @error('cedula')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
        </div>
        <div class="form-group row">
                                        <div class="col-md-4">
                                            <select class="mb-3 w-full" style="height: 100%; width: 100%;" name="actividadEconomica" id="actividadEconomica" value="{{$empresa->actividadEconomica}}" required autofocus>
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
                                            <input id="nivelRiesgo" type="text" class="form-control @error('nivelRiesgo') is-invalid @enderror" name="nivelRiesgo"  value="{{$empresa->nivelRiesgo}}" required autocomplete="nivelRiesgo" placeholder="Nivel Riesgo">

                                            @error('nivelRiesgo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input id="cantidadEmpleados" type="text" class="form-control @error('cantidadEmpleados') is-invalid @enderror" name="cantidadEmpleados"  value="{{$empresa->actividadEconomica}}" required autocomplete="cantidadEmpleados" placeholder="Cantidad Empleados">

                                            @error('cantidadEmpleados')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-md-6">
                                            <select class="mb-3 w-full" style="height: 100%; width: 100%;" name="naturalezaJuridica" id="naturalezaJuridica"  value="{{$empresa->naturalezaJuridica}}" required autofocus>
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
                                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{$empresa->email}}" required autocomplete="email" placeholder="Correo">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
        </div>
        <div class="form-group row ">
                                        <div class="col-md-6">
                                            <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono"  value="{{$empresa->telefono}}" required autocomplete="telefono" placeholder="Telefono">
                                            <input id="latitud" type="hidden" class="form-control @error('latitud') is-invalid @enderror" name="latitud" value="1110101010101010101">
                                            <input id="longitud" type="hidden" class="form-control @error('telefono') is-invalid @enderror" name="longitud" value="1010101010101010">

                                            @error('telefono')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <select class="mb-3 w-full" style="height: 100%; width: 100%;" name="tipoEmpresa" id="tipoEmpresa"  value="{{$empresa->tipoEmpresa}}" required autofocus>
                                                <option value="2">SAS</option>
                                                <option value="3">LTDA</option>
                                                <option value="4">S.en C.</option>
                                                <option value="5">S.C.A.</option>
                                                <option value="6">S. Colectiva</option>
                                                <option value="1">Natural</option>
                                            </select>
                        
                                            @error('tipoEmpresa')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
        </div>
        <div class="col text-center m-3">
            <button class="btn btn-primary col-6 " type="submit">Actualizar</button>
        </div>
                            
</form>
                       


@endsection