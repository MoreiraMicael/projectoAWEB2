<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
    if ($request->$user()===null) {
      // code...
      return response('Sem permissão', 401);
    }
    $actions = $request->route()->getAction();
    $role = isset($actions['roles']) ? $actions['roles'] : null;

    if ($request->user()->hasAnyRole($role) || !$roles){
      return $next($request);
    }
    return response('Sem permissão', 401);
  }
}
