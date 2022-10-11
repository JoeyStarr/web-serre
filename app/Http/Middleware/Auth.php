<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\User; 
use Session;



class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $value = session('user_email');
        dd($value);
        if(Session::has('user_email')) 
        {
            return $next($request); 
        }
             
        else  
            return redirect('/');  

       
    }
    
}
