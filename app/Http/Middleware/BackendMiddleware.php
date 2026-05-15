<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class BackendMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowRoles = [
            config('setting.ROLE_ADMIN'),
            config('setting.ROLE_STAFF'),
        ];
        if (!in_array(Auth::user()->role, $allowRoles)) {
            abort(403);
        }
        return $next($request);
    }
}
