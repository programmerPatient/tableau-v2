<?php

namespace App\Http\Controllers\DcatAdmin;

use App\lib\func\show;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Manager;
use Input;

class ManagerController extends Controller
{
    public function inization(){
        //初始化
        $data['username'] = Input::get('username');
        $data['password'] = bcrypt(Input::get('password'));
        $data['status'] = '1';
        $result = Manager::insert($data);
        if($result){
            return show::success('ok');
        }else{
            return show::error('error');
        }

    }
    //管理员列表操作
    public function index(){
        //查询数据
        $data = Manager::get();
        return view('dcat.manager.index',compact('data'));
    }
}
