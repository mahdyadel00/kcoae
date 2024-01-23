<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
//        if (! $request->expectsJson()) {
//            return route('admin_login');
//        }

//        return $request->route()->middleware()[2];
        if (!$request->expectsJson()) {

            if (in_array('auth:client', $request->route()->middleware())) {
                return route('register');

            }

            return route('admin_login');
        }

    }
}
