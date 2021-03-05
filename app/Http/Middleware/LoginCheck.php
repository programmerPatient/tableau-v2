<?php


namespace App\Http\Middleware;

use Closure;
use Auth;

use App\Models\Admin\System;

class LoginCheck
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
        if(Auth::guard('admin')->check() || Auth::guard('member')->check()){
            $system = System::get()->first();
            if(empty($system)){
                return $next($request);
            }else{
                //跳转到后台首页
                $model = $system->model;
                if ($model == '1') {
                    return redirect('admin/index/index');
                }
                if ($model == '2') {
                    return redirect('admintwo/index/index');
                }
                if ($model == '3') {
                    return redirect('adminthree/index/index');
                }
                if ($model == '4') {
                    return redirect('adminfour/index/index');
                }
            }

        }
        return $next($request);
    }
}
