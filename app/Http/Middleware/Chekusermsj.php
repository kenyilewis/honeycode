<?php

namespace App\Http\Middleware;

use Closure;
use App\Mensajes;

class Chekusermsj
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $id)
    {
      if (auth()->user()->id !== $id) {
          return back();
      }
        return $next($request);
    }
}
