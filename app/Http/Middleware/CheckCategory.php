<?php

namespace App\Http\Middleware;

use Closure;

class CheckCategory
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


        $category   = $request->category_type;
        $description= $request->description;

        if($category == NULL || $description == NULL)
        {
            return redirect('dashboard/asset-category-registration')->with('statement','Sila penuhkan ruang yang kosong');
        }

        return $next($request);

    }
}
