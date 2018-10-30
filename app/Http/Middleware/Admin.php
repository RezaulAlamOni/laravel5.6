<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{

    public function handle($request, Closure $next)
    {
        $user = Auth::User();
        if($user){
            if($user->isAdmin()){
                return $next($request);
            }
            else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }





    }
}
