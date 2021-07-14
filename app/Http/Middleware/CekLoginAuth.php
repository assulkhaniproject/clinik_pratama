<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class CekLoginAuth
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
        if(!session('berhasil_login')){
            return redirect('/');
        }

        if(strtolower(User::find(session('user_id'))->name) != $request->segment(1)){
            return redirect()->back();
        }

        return $next($request);
    }
}
