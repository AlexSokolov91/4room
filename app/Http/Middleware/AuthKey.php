<?php

namespace App\Http\Middleware;

use Closure;

class AuthKey
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
        $token = $request->header('APP_KEY');
        if($token != 'A1B2C3E4'){
            return response()->json(['message' => 'Error'], 401);
        }
        return $next($request);
    }
}
