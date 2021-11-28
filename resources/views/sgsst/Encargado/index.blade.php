@extends('sgsst.sgsst')
@section('datos')

<!-- crear Empresa -->
<h1>Encargado</h1>
<div class="row justify-content-center ">
    <button type="button" class="btn btn-secondary btn-lg m-2">
    <a class="nav-link active" aria-current="page"  href="{{ url('/createEncargado') }}">Nuevo Encargado</a>
    </button>
   
    
</div>  
<div class="card m-2">
    <div class="card-header text-center bg-primary">
       <h3>Encargados</h3>
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
                     
                </tbody>
            </table>
         </div>
    </div>
</div>

                       


@endsection