@extends('sgsst.sgsst')
@section('datos')

<!-- crear Empresa -->
<div class="col-12 text-lg-left">
        <a href="{{ url('/Encargado') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg>
        </a>
</div>
<h1>Crear Encargado</h1>

<form class="" method="POST" action="{{route('EncargadoStore')}}" >
        @csrf
        <div class=" row m-4">
            <div class="col-4">
                 <select class="mb-6 w-full" style="height: 100%; width: 100%;" name="empresa" id="empresa"  required autofocus>
                 @foreach($empresas as $emp)  
                 <option value="{{$emp->id}}">{{$emp->id.":"}}{{$emp->name}}</option>
                 @endforeach   
                 </select>
                        
                 @error('empresa')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
            </div>
            <div class="col-4">
                <input id="cedula" type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="" required autocomplete="cedula" placeholder="cedula">
                @error('cedula')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-4">
                 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" placeholder="Nombre">

                 @error('name')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
            </div>
        </div>
        <div class=" row m-4">
            <div class="col-4">
                 <input id="nivelEstudio" type="text" class="form-control @error('nivelEstudio') is-invalid @enderror" name="nivelEstudio" value="" required autocomple="nivelEstudio" placeholder="Nivel Estudio">

                 @error('nivelEstudio')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
            </div>
            <div class="col-4">
                <input id="hojaVida" type="text" class="form-control @error('hojaVida') is-invalid @enderror" name="hojaVida" value="" required autocomplete="hojaVida" placeholder="hojaVida">

                @error('hojaVida')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-4">
                 <input id="PDFcertificadohoras" type="text" class="form-control @error('PDFcertificadohoras') is-invalid @enderror" name="PDFcertificadohoras" value="" required autocomplete="PDFcertificadohoras" placeholder="PDFcertificadohoras">

                 @error('PDFcertificadohoras')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
            </div>
        </div>
        <div class=" row m-4">
            <div class="col-4">
                 <input id="PDFcertificadosalud" type="text" class="form-control @error('PDFcertificadosalud') is-invalid @enderror" name="PDFcertificadosalud" value="" required autocomplete="PDFcertificadosalud" placeholder="PDFcertificadosalud">

                 @error('PDFcertificadosalud')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
            </div>
            <div class="col-4">
                <input id="PDFdiploma" type="text" class="form-control @error('PDFdiploma') is-invalid @enderror" name="PDFdiploma" value="" required autocomplete="PDFdiploma" placeholder="PDF diploma">

                @error('PDFdiploma')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
           
        </div>
        <button type="sumit" class="btn btn-primary btn-lg">Crear</button>
</form>
                       


@endsection