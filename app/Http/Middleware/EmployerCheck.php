<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmployerCheck
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


        if (session()->missing('employer')) 
        {

            return redirect()->route('employer_login');


        }
        else
        {
            return $next($request);
        }
}
}