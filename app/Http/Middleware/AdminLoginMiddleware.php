<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminLoginMiddleware
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
       if(Auth::check())
        {

      
            $user = Auth::user();
            //dd($user);
            if($user->role==1)
                return $next($request);
            else
                return redirect()->back();
    
        }
        
        return redirect()->back();
    }

    
}
