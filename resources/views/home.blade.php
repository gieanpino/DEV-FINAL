@extends('layouts.app')

@section('content')
<div class="container row">
        <div class="col justify-content-left">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('registrar') }}">Registrar Usuarios</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="{{ route('searchUser') }}">Buscar Usuario</a>
                    </li>
                    </ul>
        </div>
    <div class="row justify-content-center">
       <div class="col-xxl">
            <div class="card" style="width: 40rem;">
                <div class="card-header">{{ __('Presidente de comité de convivencia laboral (COCOLA)')}}</div>

                <div class="card-body">
                 @yield('datos')

                </div>
               
            </div>
        </div>
 </div>
</div>
@endsection

        
