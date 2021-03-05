<?php


namespace App\Http\Controllers\DcatAdmin;


use App\Http\Controllers\Controller;
use App\Models\Admin\System;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $system = System::get()->first();
        View::share(compact('system'));
    }
}
