<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckPersonalRegistration
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
        // Verifica se o usuário está autenticado
        if (Auth::check()) {
            $user = Auth::user();

            // Verifica se o usuário já está registrado como personal
            if ($user->personal) {
                abort(403, 'Acesso não autorizado');
                
            }
        }

        return $next($request);
    }
}

