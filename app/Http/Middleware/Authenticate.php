<?php

namespace App\Http\Middleware;
use Closure;
class Authenticate extends Middleware
{   
    protected $auth;
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request,Closure $next, $guard = null)
    {
        if ($this->auth->guard($guard)->guest()) {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}
