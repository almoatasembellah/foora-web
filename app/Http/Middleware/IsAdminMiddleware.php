<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(auth('admin')->check()){
            return $next($request);
        }

        return redirect()->route('admin.auth.login');
    }
}
