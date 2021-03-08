<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
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
        // $data = [
        //     ['name' => 'taro', 'mail'=> 'taro@test'],
        //     ['name' => 'hanako', 'mail'=> 'hanako@test'],
        //     ['name' => 'sachiko', 'mail'=> 'sachiko@test'],
        // ];
        // $request->merge(['data' => $data]);
        return $next($request);
    }
}
