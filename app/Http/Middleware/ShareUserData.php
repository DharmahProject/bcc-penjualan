<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ShareUserData
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
        $user = Auth::user();

        // Share data with all views
        View::share('name', $user ? $user->name : null);
        View::share('email', $user ? $user->email : null);
        View::share('levelid', $user ? $user->level_id : null);
        View::share('photo', $user ? $user->photo : null);

        return $next($request);
    }
}
