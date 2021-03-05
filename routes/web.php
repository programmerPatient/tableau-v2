<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//注册界面
Route::get('/register','DcatAdmin\PublicController@register')->name('register');
Route::post('/register','DcatAdmin\PublicController@registerCheck')->name('registerCheck');

//短信登录
Route::post('/sms/login','SmsController@login')->name('smsLogin');

//发送短信
Route::post('/sms/send','SmsController@send')->name('smsSend');

Route::group(['prefix' => '','middleware' => 'login.check'],function(){
//后台登陆页面
    Route::get('/','DcatAdmin\PublicController@login')->name('login');
//短信验证码登录界面
    Route::get('/sms/login','DcatAdmin\PublicController@smsLogin')->name('smsLogin');

//游客登录
    Route::get('/visitor/login','DcatAdmin\PublicController@visitorLogin')->name('visitorLogin');
});



//后台退出地址
Route::get('/adminfour/public/logout','Adminfour\PublicController@logout');


//后台路由
Route::group(['prefix' => 'admin'],function(){
    //后台退出地址
    Route::get('public/logout','DcatAdmin\PublicController@logout');

    //后台登陆处理页面
    Route::post('public/check','DcatAdmin\PublicController@check');

    //初始化后台的系统设置
    Route::post('public/inization','DcatAdmin\SystemController@inization');

    //初始化管理员信息
    Route::post('manager/initzation','DcatAdmin\ManagerController@inization');

    //初始化阿里短信配置
    Route::post('sms/inization','DcatAdmin\SystemController@sms');



    //项目初始化
    // Route::any('public/','Admin\PublicController@index');


});

//需要认证的后台路由
Route::group(['prefix' => 'admin','middleware' => ['admin.auth']],function(){

    //后台首页的路由
    Route::get('index/index','Admin\IndexController@index');
    Route::get('index/welcome','Admin\IndexController@welcome');

    //管理员的管理模块
    Route::get('manager/index','Admin\ManagerController@index');

    //权限的管理模块
    Route::get('auth/index','Admin\AuthController@index');
    Route::any('auth/add','Admin\AuthController@add');

    //角色的管理模块
    Route::get('role/index','Admin\RoleController@index');
    Route::any('role/assign','Admin\RoleController@assign');
    Route::any('role/add','Admin\RoleController@add');

    //会员模块
    Route::get('member/index','Admin\MemberController@index');
    Route::any('member/add','Admin\MemberController@add');
    Route::any('member/adds','Admin\MemberController@adds');
    Route::delete('member/delete','Admin\MemberController@delete');
    //批量删除
    Route::delete('members/delete','Admin\MemberController@deletes');
    Route::any('member/modify/{id}','Admin\MemberController@modify');
    //异步头像上传
    Route::post('uploader/webuploader','Admin\UploaderController@index');
    //异步四级联动数据获取
    // Route::get('member/getAreaById','Admin\UploaderController@getAreaById');
    //tableau模块
    //tableau测试
    Route::get('table/index','Admin\TableController@index');
    //tableau用户的状态修改
    Route::post('table/status','Admin\TableController@status');
    //报表权限分配
    Route::any('table/auth/{id}','Admin\TableController@auth');
    Route::any('table/auths/{id}','Admin\TableController@auths');
    //站内用户映射tableau用户
    Route::any('table/user/{id}','Admin\TableController@user');
    Route::any('table/users/{id}','Admin\TableController@users');
    // 刷新tableau票据
    // Route::get('table/refresh','Admin\TableController@refresh');

    //修改全局配置
    Route::any('system/update','Admin\SystemController@update');


    //excel模板导出
    Route::get('member/excel','Admin\MemberController@excel');

    //excel数据导入
    Route::any('excel/insert','Admintwo\IndexController@excel');

});

//后台二需要认证的后台路由
Route::group(['prefix' => 'admintwo','middleware' => ['admin.auth']],function(){

    //后台首页的路由
    Route::get('index/index','Admintwo\IndexController@index');
    Route::get('index/welcome','Admintwo\IndexController@welcome');

    //管理员的管理模块
    Route::get('manager/index','Admintwo\ManagerController@index');

    //权限的管理模块
    Route::get('auth/index','Admintwo\AuthController@index');
    Route::any('auth/add','Admintwo\AuthController@add');

    //角色的管理模块
    Route::get('role/index','Admintwo\RoleController@index');
    Route::any('role/assign','Admintwo\RoleController@assign');
    Route::any('role/add','Admintwo\RoleController@add');

    //会员模块
    Route::get('member/index','Admintwo\MemberController@index');
    Route::any('member/add','Admintwo\MemberController@add');
    Route::delete('member/delete','Admintwo\MemberController@delete');
    Route::any('member/modify/{id}','Admintwo\MemberController@modify');

    //异步头像上传
    Route::post('uploader/webuploader','Admintwo\UploaderController@index');
    //异步四级联动数据获取
    // Route::get('member/getAreaById','Admin\UploaderController@getAreaById');
    //tableau模块
    //tableau测试
    Route::get('table/index','Admintwo\TableController@index');
    //tableau用户的状态修改
    Route::post('table/status','Admintwo\TableController@status');
    //报表权限分配
    Route::any('table/auth/{id}','Admintwo\TableController@auth');
    // 刷新tableau票据
    // Route::get('table/refresh','Admin\TableController@refresh');

    //修改全局配置
    Route::any('system/update','Admintwo\SystemController@update');
    //excel数据导入
    Route::any('excel/insert','Admintwo\IndexController@excel');

});

//后台三需要认证的后台路由
Route::group(['prefix' => 'adminthree','middleware' => ['admin.auth']],function(){

    //用户报表位置的查询
    Route::get('report/select','Adminthree\ReportController@select');

    //后台首页的路由
    Route::get('index/index','Adminthree\IndexController@index');
    Route::get('index/welcome','Adminthree\IndexController@welcome');

    //管理员的管理模块
    Route::get('manager/index','Adminthree\ManagerController@index');

    //权限的管理模块
    Route::get('auth/index','Adminthree\AuthController@index');
    Route::any('auth/add','Adminthree\AuthController@add');

    //角色的管理模块
    Route::get('role/index','Adminthree\RoleController@index');
    Route::any('role/assign','Adminthree\RoleController@assign');
    Route::any('role/add','Adminthree\RoleController@add');

    //会员模块
    Route::get('member/index','Adminthree\MemberController@index');
    Route::get('member/info','Adminthree\MemberController@info');
    Route::post('member/update','Adminthree\MemberController@update');

    Route::any('member/add','Adminthree\MemberController@add');
    Route::any('member/adds','Adminthree\MemberController@adds');
    Route::delete('member/delete','Adminthree\MemberController@delete');
    Route::any('member/modify/{id}','Adminthree\MemberController@modify');
    //批量删除
    Route::delete('members/delete','Adminthree\MemberController@deletes');
    //异步头像上传
    Route::post('uploader/webuploader','Adminthree\UploaderController@index');
    //异步四级联动数据获取
    // Route::get('member/getAreaById','Admin\UploaderController@getAreaById');
    //tableau模块
    //tableau测试
    Route::get('table/index','Adminthree\TableController@index');
    //tableau用户的状态修改
    Route::post('table/status','Adminthree\TableController@status');

    //站内用户映射tableau用户
    Route::any('table/user/{id}','Adminthree\TableController@user');
    Route::any('table/users/{id}','Adminthree\TableController@users');

    //站内用户项目组的映射
    Route::any('report/user/{id}','Adminthree\MemberController@report');

    //报表权限分配
    Route::any('table/auth/{id}','Adminthree\TableController@auth');
    Route::any('table/auths/{id}','Adminthree\TableController@auths');
    // 刷新tableau票据
    // Route::get('table/refresh','Admin\TableController@refresh');

    //修改全局配置
    Route::any('system/update','Adminthree\SystemController@update');
    //excel模板导出
    Route::get('member/excel','Admin\MemberController@excel');

    //报表操作
    Route::get('report/index','Adminthree\ReportController@index');
    Route::any('report/{id}','Adminthree\ReportController@relation');
    Route::any('report/groups/{id}','Adminthree\ReportController@relations');
    Route::any('report/expires/{id}','Adminthree\ReportController@expires');


    //excel数据导入
    Route::any('excel/insert','Adminthree\IndexController@excel');

});


//后台四需要认证的后台路由
Route::group(['prefix' => 'adminfour','middleware' => ['admin.auth']],function(){

    //实时搜索用户的报表
    Route::post('search/report','DcatAdmin\ReportController@search');

    //报表收藏
    Route::post('report/collection','DcatAdmin\ReportController@collection');
    Route::get('report/collection/index','DcatAdmin\ReportController@collectindex');

    //用户报表位置的查询
    Route::get('report/select','DcatAdmin\ReportController@select');

    //后台首页的路由
    Route::get('index/index','DcatAdmin\IndexController@index');
    Route::get('index/welcome','DcatAdmin\IndexController@welcome');

    //管理员的管理模块
    Route::get('manager/index','DcatAdmin\ManagerController@index');

    //权限的管理模块
    Route::get('auth/index','DcatAdmin\AuthController@index');
    Route::any('auth/add','DcatAdmin\AuthController@add');

    //缓存更新
    Route::any('cache/update','DcatAdmin\IndexController@cache');

    //申请表单查看
    Route::get('apply/index','DcatAdmin\MemberController@applyIndex');
    Route::post('apply/status','DcatAdmin\MemberController@applyStatus');

    //角色的管理模块
    Route::get('role/index','DcatAdmin\RoleController@index');
    Route::any('role/assign','DcatAdmin\RoleController@assign');
    Route::any('role/add','DcatAdmin\RoleController@add');

    //会员模块
    Route::any('member/excel/{id}','DcatAdmin\MemberController@memberexcel');
    Route::get('member/index','DcatAdmin\MemberController@index');
    Route::any('member/add','DcatAdmin\MemberController@add');
    Route::any('member/adds','DcatAdmin\MemberController@adds');
    Route::delete('member/delete','DcatAdmin\MemberController@delete');
    Route::any('member/modify/{id}','DcatAdmin\MemberController@modify');
    Route::get('member/info','DcatAdmin\MemberController@info');
    Route::any('member/initInfo','DcatAdmin\MemberController@initInfo');
    Route::post('member/update','DcatAdmin\MemberController@update');
    //权限申请
    Route::any('member/apply','DcatAdmin\MemberController@apply');
    Route::any('member/apply','DcatAdmin\MemberController@apply');
    //批量删除
    Route::delete('members/delete','DcatAdmin\MemberController@deletes');
    //异步头像上传
    Route::post('uploader/webuploader','DcatAdmin\UploaderController@index');
    //异步四级联动数据获取
    // Route::get('member/getAreaById','Admin\UploaderController@getAreaById');
    //tableau模块
    //tableau测试
    Route::get('table/index','DcatAdmin\TableController@index');
    //tableau用户的状态修改
    Route::post('table/status','DcatAdmin\TableController@status');

    //站内用户映射tableau用户
    Route::any('table/user/{id}','DcatAdmin\TableController@user');
    Route::any('table/users/{id}','DcatAdmin\TableController@users');
    Route::any('report/expires/{id}','DcatAdmin\ReportController@expires');


    //站内用户项目组的映射
    Route::any('report/user/{id}','ADcatAdmin\MemberController@report');

    //报表权限分配
    Route::any('table/auth/{id}','DcatAdmin\TableController@auth');
    Route::any('table/auths/{id}','DcatAdmin\TableController@auths');
    // 刷新tableau票据
    // Route::get('table/refresh','Admin\TableController@refresh');

    //修改全局配置
    Route::any('system/update','DcatAdmin\SystemController@update');
    Route::any('sms/update','DcatAdmin\SystemController@smsUpdate');
    Route::get('sms/creat','DcatAdmin\SmsController@create');
    //excel模板导出
    Route::get('member/excel','Admin\MemberController@excel');

    //报表操作
    Route::get('report/index','DcatAdmin\ReportController@index');
    Route::any('report/{id}','DcatAdmin\ReportController@relation');
    Route::any('report/groups/{id}','DcatAdmin\ReportController@relations');


    //excel数据导入
    Route::any('excel/insert','DcatAdmin\IndexController@excel');

    //用户组操作
    Route::post('usergroup/delete','DcatAdmin\UsergroupController@delete');
    Route::any('usergroup/add','DcatAdmin\UsergroupController@add');
    Route::get('user/group','DcatAdmin\UsergroupController@group');
    Route::any('usergroup/report/{id}','DcatAdmin\UsergroupController@report');
    Route::any('usergroup/{id}','DcatAdmin\UsergroupController@usergroup');
    Route::any('usergroup/modify/{id}','DcatAdmin\UsergroupController@modify');

    Route::post('sms/confUpdate','DcatAdmin\SmsController@update');

});

