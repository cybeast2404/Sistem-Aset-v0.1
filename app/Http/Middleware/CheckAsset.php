<?php

namespace App\Http\Middleware;

use Closure;

class CheckAsset
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
        $name        = $request->name;
        $description = $request->description;
        $category_id = $request->category_id;

        if($name== NULL || $description== NULL || $category_id== NULL)
        {
             return redirect('dashboard/asset-registration')->with('statement','Sila penuhkan ruang yang kosong');
        }
        return $next($request);
    }
}
