@extends('sgsst.sgsst')
@section('datos')

<div class="row " id="main">
    <div class="col-12 text-lg-left">
        <a href="{{ url('/Empresa') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg>
        </a>
    </div>
    <div class="col-12">
        <h3>ADMINISTRAR EMPRESAS</h3>
    </div>
    <div class="col-12">
        <button type="button" class="btn col-9 bg-primary btn-lg m-2" data-toggle="modal" data-target="#Compromisos">Compromisos</button>
    </div>
    <div class="col-12">
        <button type="button" class="btn col-9 bg-primary btn-lg m-2" data-toggle="modal" data-target="#Politicas">Politicas</button>
    </div>
    <div class="col-12">
        <button type="button" class="btn col-9 bg-primary btn-lg m-2" data-toggle="modal" data-target="#Riesgos">Riesgos</button>
    </div>
    <div class="col-12">
        <button type="button" class="btn col-9 bg-primary btn-lg m-2" data-toggle="modal" data-target="#PlanEmergia">Plan Emergia</button>
    </div>
</div>
<!-- Comprimisos -->
<div class="modal fade col-12"  id="Compromisos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
                    <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header text-center">
                                <h5 class="modal-title">Compromisos y Responsabilidades del Gerente y Empleados</h5></h5>
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
                                    <div class="row m-2">
                                            <div class="col-10">
                                                <form method="POST" action="http://diamond-chaos.codio.io:3000/tuto/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <label>COMPROMISO GERENCIAL</label>
                                                    <input type="file" class="form-control" name="file" >
                                                </form>
                                            </div>
                                            <div class="col-2 mt-4">
                                              <button type="button" class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                                        <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                    </svg>
                                                </button>

                                            </div>       
                                    </div>
                                    <div class="row m-2">
                                            <div class="col-10">
                                                <form method="POST" action="http://diamond-chaos.codio.io:3000/tuto/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <label>ROLES Y RESPONSABILIDADES</label>
                                                    <input type="file" class="form-control" name="file" >
                                                </form>
                                            </div>
                                            <div class="col-2 mt-4">
                                              <button type="button" class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                                        <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                    </svg>
                                                </button>

                                            </div>       
                                    </div>
                                    <div class="col text-center m-3">
                                        <button class="btn btn-primary col-6 " type="submit">Subir</button>
                                    </div>
                                    </div>
                            </form>
                    </div>
                            
        </div>
    </div>  
</div>
<!-- Politicas -->
<div class="modal fade col-12"  id="Politicas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
                    <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header text-center">
                                <h5 class="modal-title">Política del SG-SST</h5>
                                <button type="button" data-dismiss="modal" class="btn-close" data-bs-dismiss="modal" aria-label="Close" href="{{url('/Empresa')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                        <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                                        <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="m-sm-1" method="POST" action="" >
                                    {{csrf_field()}}{{method_field('PUT')}}
                                    <div class="form-group row">
                                    <div class="row m-2">
                                        <input type="text" class="form-control m-2" placeholder="Nombre">
                                        <input type="text" class="form-control m-2" placeholder="NIT">
                                    </div>
                                    <div class="row m-2">
                                            <div class="col-10">
                                                <form method="POST" action="http://diamond-chaos.codio.io:3000/tuto/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <label>Objetivos y las actividades a realizar</label>
                                                    <input type="file" class="form-control" name="file" >
                                                </form>
                                            </div>
                                            <div class="col-2 mt-4">
                                              <button type="button" class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                                        <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                    </svg>
                                                </button>

                                            </div>       
                                    </div>
                                    <div class="row m-2">
                                            <div class="col-10">
                                                <form method="POST" action="http://diamond-chaos.codio.io:3000/tuto/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <label>Hablar de la documentación del sistema</label>
                                                    <input type="file" class="form-control" name="file" >
                                                </form>
                                            </div>
                                            <div class="col-2 mt-4">
                                              <button type="button" class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                                        <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                    </svg>
                                                </button>

                                            </div>       
                                    </div>
                                    <div class="row m-2">
                                        <input type="date" class="form-control m-2" placeholder="fecha">
                                        <input type="img" class="form-control m-2" placeholder="Firma">
                                    </div>
                                    <div class="col text-center m-3">
                                        <button class="btn btn-primary col-6 " type="submit">Guardar</button>
                                    </div>
                                    </div>
                                    
                                     
                                    
                            </form>
                    </div>
                            
        </div>
    </div>  
</div>
<!-- Riesgos -->
<div class="modal fade col-12"  id="Riegos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
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
                                    <div class="row m-2">
                                            <div class="col-10">
                                                <form method="POST" action="http://diamond-chaos.codio.io:3000/tuto/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <label>COMPROMISO GERENCIAL</label>
                                                    <input type="file" class="form-control" name="file" >
                                                </form>
                                            </div>
                                            <div class="col-2 mt-4">
                                              <button type="button" class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                                        <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                    </svg>
                                                </button>

                                            </div>       
                                    </div>
                                    <div class="row m-2">
                                            <div class="col-10">
                                                <form method="POST" action="http://diamond-chaos.codio.io:3000/tuto/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <label>COMPROMISO GERENCIAL</label>
                                                    <input type="file" class="form-control" name="file" >
                                                </form>
                                            </div>
                                            <div class="col-2 mt-4">
                                              <button type="button" class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                                        <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                    </svg>
                                                </button>

                                            </div>       
                                    </div>
                                    <div class="col text-center m-3">
                                        <button class="btn btn-primary col-6 " type="submit">Subir</button>
                                    </div>
                                    </div>
                                    
                                     
                                    
                            </form>
                    </div>
                            
        </div>
    </div>  
</div>
<!-- Plan Emergencia -->
<div class="modal fade col-12"  id="PlanEmergencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
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
                                    <div class="row m-2">
                                            <div class="col-10">
                                                <form method="POST" action="http://diamond-chaos.codio.io:3000/tuto/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <label>COMPROMISO GERENCIAL</label>
                                                    <input type="file" class="form-control" name="file" >
                                                </form>
                                            </div>
                                            <div class="col-2 mt-4">
                                              <button type="button" class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                                        <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                    </svg>
                                                </button>

                                            </div>       
                                    </div>
                                    <div class="row m-2">
                                            <div class="col-10">
                                                <form method="POST" action="http://diamond-chaos.codio.io:3000/tuto/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <label>COMPROMISO GERENCIAL</label>
                                                    <input type="file" class="form-control" name="file" >
                                                </form>
                                            </div>
                                            <div class="col-2 mt-4">
                                              <button type="button" class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                                        <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                    </svg>
                                                </button>

                                            </div>       
                                    </div>
                                    <div class="col text-center m-3">
                                        <button class="btn btn-primary col-6 " type="submit">Subir</button>
                                    </div>
                                    </div>
                                    
                                     
                                    
                            </form>
                    </div>
                            
        </div>
    </div>  
</div>
@endsection