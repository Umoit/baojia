<?php

namespace App\Http\Middleware;

use Closure;
// use App\Models\Permission;

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Auth;

class CheckPermission
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
        $route = Route::currentRouteName();
        //dd($route);
        // 判断权限表中这条路由是否需要验证
        //if ($permission = Permission::where('route', $route)->first()) {
            // 当前用户不拥有这个权限的名字
            
            //dd(auth()->guard('admin')->user()->permissions);

            if (! auth()->guard('admin')->user()->can($route)) {
                //return response()->view('errors.403', ['status' => "权限不足，需要：{$route}权限"]);
                abort(403, '权限不足,需要：'.$route.' 权限');


            }
        //}

        return $next($request);
    }
}
