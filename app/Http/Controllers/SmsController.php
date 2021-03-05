<?php


namespace App\Http\Controllers;


use App\common\Curl;
use App\lib\func\show;
use App\Models\Admin\Manager;
use App\Models\Admin\Member;
use App\Models\Admin\System;
use App\Service\AliyunSms;
use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Facades\Session;
use DB;

class SmsController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request,[
            'mobile' => 'required|regex:/^1[345789][0-9]{9}$/',
        ]);
        $res = AliyunSms::sendSms($request->mobile);
        return $res ? '1' : '0';
    }

    /**
     * 短信登录
     * @param Request $request
     */
    public function login(Request $request)
    {

        $this->validate($request,[
            'mobile' => 'regex:/^1[345789][0-9]{9}$/',
        ]);
        $data = $request->except('_token');
        $mobile = $data['mobile'];
        $captch = $data['captch'];
        $ca = cache()->store('file')->get($mobile);
//        if($captch != $ca){
//            return show::error('验证码错误，请重试！');
//        }
        $res = Member::where('mobile',$mobile)->get();
        if($res->isEmpty()){
            $parm['mobile'] = $mobile;
            $strs="QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm";
            $name=substr(str_shuffle($strs),mt_rand(0,strlen($strs)-11),10);
            $parm['username'] = $name;
            $parm['status'] = 1;
            $time = time();
            $parm['created_at'] = $time;
            $parm['updated_at'] = $time;
            $parm['isInit'] = 1;
            $parm['password'] = bcrypt(123456);
            $re = Member::create($parm);
            if(!$re){
                return redirect()->back()->withErrors(['loginError' => '验证码登陆失败']);
            }else{
               return $this->check(['mobile' => $mobile]);
            }
        }else{
            return $this->check(['mobile'=>$mobile]);
        }
    }

    public function check($data)
    {
        $res = Member::where([
            'mobile'=>$data['mobile'],
            'status' => '1',
        ])->get();
        if (empty($res)) {
            return redirect('/sms/login')->withErrors([
                'loginError' => '用户名或密码错误或未授权，请联系管理员。'
            ]);
        }
        Auth::guard('member')->login($res->first());
        $excel = $res->first()->excel;
        Session::put('execl', $excel);
        $type = '2';
        Session::put('user_type', $type);
        $system = System::get()->first();
        $username = $system->tableau_username;
        $password = $system->tableau_password;

        $res = Curl::getToken(['username' => $username,'password' => $password,'contentUrl' => null]);
        if ($res === false ) {
            return view('dcat.error.index');
        } else {
            Session::put('token', $res->credentials->token);
            Session::put('credentials', $res->credentials->site->id);
            Session::put('default_credentials', $res->credentials->site->id);
        }

        //获取所有站点
        $url = Session::get('tableau_domain') . '/api/3.2/sites';
        $response = Curl::send($url,['token' => Session::get('token')]);
        Session::put('allSites',$response->sites->site);//所有站点信息

        //跳转到后台首页
        $model = System::get()->first()->model;
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
