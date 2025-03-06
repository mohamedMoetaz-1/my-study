<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAouth
{

    /*
     * Handle an incoming request.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     * 
     * the benefit of middleware is to check the request before it reach the controller and
     *  check if the user is allowed to access the page or not
     */

    public function handle(Request $request, Closure $next): Response
    {
        
        $name  = $request->route('name');
        
        if($name != "mohamed"){
            return response()-> json(['error' => 'you are not allowed'], 404);
        }
       
        return $next($request);
    }
}
