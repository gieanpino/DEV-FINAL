<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EsCopasst
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->rol_id){
            case '1':
                // Administrador
               return redirect()->to('EsAdmin');
            break;
            case '2':
                // Presidente SG_SST
                return $next($request);
            break;
            case '3':
                // Presidente COCOLA
                return redirect()->to('EsCocola');
            break;
            case '4':
                // Presidente COPASST
                return $next($request);
            break;
            case '5':
                // Presidente BE
                return redirect()->to('EsBe');
            break;
            default:
            return redirect()->to('login');



        }
    }
}
