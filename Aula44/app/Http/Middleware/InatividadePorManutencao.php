<?php

namespace App\Http\Middleware;

use Closure;

class InatividadePorManutencao
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      abort(503);
    }
}
