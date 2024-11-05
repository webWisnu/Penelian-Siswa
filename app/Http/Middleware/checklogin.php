<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checklogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user() && $request->is('admin')) {
            return redirect()->route('login-page');
        }

        // Jika user sudah login dan mencoba akses halaman login
        if ($request->user() && $request->is('login')) {
            return redirect()->route('admin-page');
        }
        return $next($request);
    }
}
