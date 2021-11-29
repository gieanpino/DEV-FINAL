@extends('sgsst.sgsst')
@section('datos')

<!-- crear Empresa -->
<h1>Empresa</h1>
<div class="row justify-content-center ">
    <button type="button" class="btn btn-primary btn-lg m-2">
        <a class="nav-link active" aria-current="page"  href="{{ url('/indexEmpresa') }}">Crear Empresa</a>
    </button>
    <button type="button" class="btn btn-secondary btn-lg m-2">
    <a class="nav-link active" aria-current="page"  href="{{ url('/Administrar') }}">Administrar</a>
    </button>
</div>  
<!-- <div class="row justify-content-center ">
    <form action="{{route('users.search')}}" method="get">
   <div class="row align-items-center m-5">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Usuario</label>
            </div>
            <div class="col-auto">
                <input type="text" name="texto" id="texto" class="form-control" aria-describedby="passwordHelpInline">
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
</div>   -->
<div class="card m-2">
    <div class="card-header text-center bg-primary">
       <h3>Resultados</h3>
    </div>
    <div class="card-body">
        <div class="col">
            <table class="table table-striped "style="font-size:10px;">
                <thead>
                    
                    <th class="col">Nombre</th>
                    <th class="col">NIT</th>
                    <th class="col">Direccion</th>
                    <th class="col">Actividad Economica</th>
                    <th class="col">Riesgo</th>
                    <th class="col">Empleados</th>
                    <th class="col">Naturaleza</th>
                    <th class="col">Telefono</th>
                    <th class="col">Email</th>
                    <th class="col">Tipo Empresa</th>
                </thead>
                <tbody>
                @foreach($empresas as $empresa)
                  <tr>
                        <th>{{$empresa->name}}</th> 
                        <th>{{$empresa->nit}}</th> 
                        <th>{{$empresa->direccion}}</th> 
                        <th>{{$empresa->actividadEconomica}}</th> 
                        <th>{{$empresa->nivelRiesgo}}</th> 
                        <th>{{$empresa->cantidadEmpleados}}</th> 
                        <th>{{$empresa->naturalezaJuridica}}</th> 
                        <th>{{$empresa->telefono}}</th> 
                        <th>{{$empresa->email}}</th> 
                        <th>{{$empresa->tipoEmpresa}}</th> 
                        <th>
                            <form method="get" action="{{route('empresa.update',$empresa)}}" >
                                    @csrf
                                   <button type="submit" class="bg-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                    </button>
                                    
                            </form> 
                        </th>
                        <th>
                            <form method="post" action="{{route('Empresa.destroy',$empresa->id)}}" >
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