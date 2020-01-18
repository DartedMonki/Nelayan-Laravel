<?php

namespace App\Http\Middleware;

use Closure;

class KetuaKelompok
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
            if(auth()->user()->status == 'ketua' || auth()->user()->status == 'admin')
            {
                return $next($request);
            }
            return redirect('home')->with('error','Anda tidak mempunyai akses');
        }
    }
}
