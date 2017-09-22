<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        $username = $request->username;
        $password = $request->password;
        $email    = $request->email;
        $staff_no = $request->staff_no;  
        $name     = $request->name;
        $tel_no   = $request->tel_no;


        if($username == NULL||$password == NULL || $email == NULL|| $staff_no == NULL|| $name == NULL|| $tel_no == NULL )
        {
            return redirect('dashboard/admin-registration/')->with('statement','Sila penuhkan ruang yang kosong !');
        } else {

        }
        return $next($request);
    }
}
