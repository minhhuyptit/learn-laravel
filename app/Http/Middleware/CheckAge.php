<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $str)
    {
        echo '<br>Sau khi Request';
        if($request->age > 200){
            return $next($request);
        }else{
            return redirect('/');
        }
    }

    public function terminate($request, $response){
        die('<br>Sau khi Response');
    }
}
