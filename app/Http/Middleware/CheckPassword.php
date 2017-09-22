<?php

namespace App\Http\Middleware;

use Closure;

class CheckPassword
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
        $username   = $request->username;
        $password   = $request->password;
        $password_2 = $request->password_2;

        if($username == NULL || $password == NULL || $password_2 == NULL)
        {
            return redirect('dashboard/authentication')->with('statement','Sila penuhkan ruang yang kosong');
        } 
        else if($password != $password_2)
        {
            return redirect('dashboard/authentication')->with('statement','Kata laluan tidak sama dengan pengesahan kata laluan . sila cuba semula .');
        }
        else
        {

        }

        return $next($request);
    }
}
