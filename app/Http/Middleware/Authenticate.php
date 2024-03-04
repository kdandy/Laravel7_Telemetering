<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, $next)
    {
        if ($request->session()->has('uid')) {
            return $next($request);
        }
        
        return redirect('/login');
    }
}
