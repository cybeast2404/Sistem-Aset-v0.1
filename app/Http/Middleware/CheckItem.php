<?php

namespace App\Http\Middleware;

use Closure;

class CheckItem
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
        $asset_id = $request->asset_id;
        $asset_no = $request->asset_no;
        $location = $request->location;
        $price    = $request->price;
        $d_purchase    = $request->date_purchase;

        if($asset_id == NULL || $asset_no == NULL ||  $location == NULL || $price == NULL || $d_purchase == NULL)
        {
            return redirect('dashboard/asset-item-registration')->with('statement','Sila penuhkan ruang yang kosong');
        } else {

        }

        return $next($request);
    }
}
