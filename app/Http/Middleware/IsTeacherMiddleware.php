<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsTeacherMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $role = Auth::user()->Role;
            if ((strtolower($role[0]['role_name'])) != 'teacher') {
                return redirect('login');
            } else {
                return $next($request);
            }
        } else {
            return redirect('login');

        }
    }
}
