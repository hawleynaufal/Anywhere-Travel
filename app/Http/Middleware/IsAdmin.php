<?php

namespace App\Http\Middleware;
use App\User;
use Closure;

class IsAdmin
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
        $userId = \Auth::id();

        $user = User::find($userId);

        if ($user->level == 0) {
            echo "Maaf kamu bukan admin";
            exit;
        }
        

        return $next($request);
    }

}
