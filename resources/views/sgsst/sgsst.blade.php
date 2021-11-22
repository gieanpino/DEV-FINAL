@extends('layouts.app')
@section('menu')

<div class="menu col-3">
  
<div class="principal">
<div class="row perfil p-lg-3">

    <span style="color:blanchedalmond; margin:auto;text-align: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
            <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"/>
        </svg>
        <p>SG SST</p>
        
     </span>

</div>  
</div>
<div class="col justify-content-left">

                <ul class="nav flex-column">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/Empresa') }}">Empresas</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link"href="{{ url('/Formularios') }}">Formularios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/Reportes') }}">Reportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Documentacion') }}">Documentacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="http://127.0.0.1:8000/logout" >Salir</a>
                    </li>
                </ul>
        </div>
</div>
@endsection
@section('content')
<div class="row" style="width: 100%;">
   <div class="col" >
       <div class="card m-2" style="width: 120vh;">
            <div class="card-header bg-dark">{{ __('Encargado SG-SST')}}</div>
            <div class="card-body " style="margin:auto; text-align:center;" >
                @yield('datos')
            </div>
        </div>
    </div>
</div>
@endsection

