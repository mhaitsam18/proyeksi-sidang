<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {

        // $roles = array_slice(func_get_args(), 2);

        // foreach ($roles as $role) {
        //     $user = Auth::user()->role_id;
        //     if ($user == $role) {
        //         return $next($request);
        //     }
        // }

        if (in_array($request->user()->role_id, $roles)) {
            return $next($request);
        }

        // if (Auth::user()->role_id == 1) {
        //     return Redirect::to('dashboard');
        // } elseif (Auth::user()->role_id == 2) {
        //     return Redirect::to('dashboard');
        // } elseif (Auth::user()->role_id == 3) {
        //     return Redirect::to('dashboard');
        // }


        return redirect('/login');
    }
}
