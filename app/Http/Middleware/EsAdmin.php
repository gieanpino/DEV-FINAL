<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class EsAdmin
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
            case 1:
                // Administrador
               return $next($request);
            break;
            case 2:
                // Presidente SG_SST
                return redirect()->to('EsSgsst');
            break;
            case 3:
                // Presidente COCOLA
                return redirect()->to('EsCocola');
            break;
            case 4:
                // Presidente COPASST
                return redirect()->to('EsCopasst');
            break;
            case 5:
                // Presidente BE
                return redirect()->to('EsBe');
            break;
            default:
            return redirect()->to('login');

        }
    }
}
