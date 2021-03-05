<?php

namespace App\Http\Controllers\DcatAdmin;

use App\lib\func\show;
use App\Models\Admin\Member;
use App\Models\Admin\SmsConfig;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Illuminate\Support\Facades\Session;
use App\Models\Admin\System;

class SystemController extends BaseController
{
    public function inization(Request $request)
    {
        //系统设置的修改
        $this->validate($request, [
            //验证语法  需要验证的字段名 => "验证规则1|验证规则2...."
            'tableau_domain' => 'required',
            'web_title' => 'required',
            'company' => 'required',
            'toolbar' => 'required',
            'model' => 'required',
            'public_model' => 'required',
            'tableau_username' => 'required',
            'tableau_password' => 'required'
            // 'captcha' => 'required|size:4|captcha'
        ]);

        $default = System::get()->first();
        $post['tableau_username'] = $request->tableau_username;
        $post['tableau_password'] = $request->tableau_password;
        $tableau_domain = Input::only("tableau_domain")["tableau_domain"];
        $web_title = Input::only('web_title')['web_title'];
        $company = Input::only('company')['company'];
        $toolbar = Input::only('toolbar')['toolbar'];
        $model = Input::only('model')['model'];
        $public_model = Input::only('public_model')['public_model'];
        $file = $request->file('logo_img');
        $back = $request->file('background_url');
        $post['system_domain'] = $tableau_domain;
        $post['web_title'] = $web_title;
        $post['company'] = $company;
        $post['toolbar'] = $toolbar;
        $post['model'] = $model;
        $post['public_model'] = $public_model;
        if ($file) {
            $allowed_extensions = ["png", "jpg", "gif", "PNG", 'jpeg'];
            if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
                return ['error' => 'You may only upload png, jpg , PNG , jpeg or gif.'];
            }
            $destinationPath = 'images/'; //public 文件夹下面建 imges 文件夹

            $extension = $file->getClientOriginalExtension();
            $fileName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $fileName);
            $filePath = asset($destinationPath . $fileName);
            $post['logo_url'] = '/' . $destinationPath . $fileName;
        }
        if ($back) {

            $alloweds = ["png", "jpg", "gif", "PNG", 'jpeg'];
            if ($back->getClientOriginalExtension() && !in_array($back->getClientOriginalExtension(), $alloweds)) {
                return ['error' => 'You may only upload png, jpg , PNG , jpeg or gif.'];
            }
            $destinationPat = 'background/'; //public 文件夹下面建 imges 文件夹

            $extensio = $back->getClientOriginalExtension();
            $fileNam = str_random(10) . '.' . $extensio;
            $back->move($destinationPat, $fileNam);
            $filePat = asset($destinationPat . $fileNam);
            $post['background_url'] = '/' . $destinationPat . $fileNam;
        }
        // $post['type'] = '1';

        // $default -> type = '0';
        // $default->save();
        $result = System::insert($post);
        return $result ? show::success('ok') : show::error('error');
    }

    public function update(Request $request){
        if(Input::method() == 'POST'){
            //系统设置的修改
            $default = System::get()->first();
            if($request->same_tableau == '1'){
                $default->tableau_username = $request->tableau_username;
                $default->tableau_password = $request->tableau_password;
            }
            $tableau_domain = Input::only("tableau_domain")["tableau_domain"];
            $web_title = Input::only('web_title')['web_title'];
            $company = Input::only('company')['company'];
            $toolbar = Input::only('toolbar')['toolbar'];
            $publicMemberId = Input::only('publicMemberId')['publicMemberId'];
            // $model = Input::only('model')['model'];
            $file = $request->file('logo_img');
            $back = $request->file('background_url');


            if($file){

                $allowed_extensions = ["png", "jpg", "gif","PNG",'jpeg'];
                if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
                    return ['error' => 'You may only upload png, jpg , PNG , jpeg or gif.'];
                }
                $destinationPath = 'images/'; //public 文件夹下面建 imges 文件夹

                $extension = $file->getClientOriginalExtension();
                $fileName = str_random(10).'.'.$extension;
                $file->move($destinationPath, $fileName);
                $filePath = asset($destinationPath.$fileName);
                $default->logo_url = '/'.$destinationPath.$fileName;
            }
            if($back){

                $alloweds = ["png", "jpg", "gif","PNG",'jpeg'];
                if ($back->getClientOriginalExtension() && !in_array($back->getClientOriginalExtension(), $alloweds)) {
                    return ['error' => 'You may only upload png, jpg , PNG , jpeg or gif.'];
                }
                $destinationPat = 'background/'; //public 文件夹下面建 imges 文件夹

                $extensio = $back->getClientOriginalExtension();
                $fileNam = str_random(10).'.'.$extensio;
                $back->move($destinationPat, $fileNam);
                $filePat = asset($destinationPat.$fileNam);
                $default->background_url = '/'.$destinationPat.$fileNam;
            }
            // $post['type'] = '1';

            // $default -> type = '0';
            // $default->save();
            $default->system_domain = $tableau_domain;
            $default->web_title = $web_title;
            $default->company = $company;
            $default->toolbar = $toolbar;
            $default->publicMemberId = $publicMemberId;
            // $default->model = $model;
            return $default->save() ? '1':'0';
            // //修改config配置
            // $data =  System::get()->first();
            // $data->system_domain = $tableau_domain;
            // $data -> save();
            // return 1;
        }else{
            $default = System::get()->first();
            $members = Member::where('status','1')->get();
            return view('dcat.system.index',compact('default','members'));
        }
    }

    public function sms(Request $request)
    {
        $re = SmsConfig::create($request->all());
        return $re ? show::success('OK') :show::error('添加失败！');

    }

    public function smsUpdate(Request $request)
    {
        if($request->method() == 'POST'){

        }else if($request->method() == 'GET'){
            $sysConf = SmsConfig::get();
            return view('dcat.system.smsInfo',compact('sysConf'));
        }
    }
}
