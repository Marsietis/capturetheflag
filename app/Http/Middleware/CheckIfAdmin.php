<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIfAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();
        if (!($user && $user->is_admin)) {
            abort(404);
        }
        return $next($request);
    }
}
