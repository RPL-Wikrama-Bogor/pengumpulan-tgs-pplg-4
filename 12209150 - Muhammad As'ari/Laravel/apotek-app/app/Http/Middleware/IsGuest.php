<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsGuest
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            // User is logged in
            return redirect()->route('home.page')->with('warning', 'Anda sudah login!');
        }

        return $next($request);
    }
}
