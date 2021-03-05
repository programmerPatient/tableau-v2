<?php

namespace App\Http\Controllers\DcatAdmin;
ini_set("error_reporting","E_ALL & ~E_NOTICE");

use App\common\Curl;
use App\common\Func;
use App\common\RedisKey;
use App\lib\func\show;
use App\Models\Admin\MemberReport;
use App\Models\Admin\ReportImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Input;
use DB;
use Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Admin\System;
use App\Models\Admin\AllReport;
use App\Models\Admin\Collection;
use App\Models\Admin\RelationReport;

class ReportController extends BaseController
{

    public function index(Request $request){
        /*拿到所有报表的数据*/
        $datas = $request->only(['per_page','page']);
        if(empty($datas['per_page'])){
            $datas['per_page'] = 5;
        }
        if(empty($datas['page'])){
            $datas['page'] = 1;
        }
        $data = Curl::getWorkBooks();
        if($data === false) {
            return view('dcat.error.index');
        }else{
            $p = [];
            foreach($data as $key=>$val){
                $das = json_decode(Redis::hget(RedisKey::$workAllPort,md5(Session::get('credentials') .''. $val->id,32))) ?? Curl::getWorkBooksViews($val->id);
                if($das === false) {
                    return view('dcat.error.index');
                }else{
                    $das = (object)$das;
                    $viesdata = $das->viesdata;
                    $wok = $das->wok;
                }
                for($i=0 ; $i< count($viesdata);$i++ ){
                    $vies['view'] = $viesdata[$i];
                    $vies['project'] = $wok->project->name;
                    $vies['workBook'] = $wok->name;
                    $p[] = $vies;
                }
            }
        }
        $data = RelationReport::where('siteId',Session::get('credentials'))->orderBy('id','desc')->get();
        foreach($data as $o => $vl){
            $k = false;
            foreach($p as $pk=>$valu){
                if($vl->report_id == $valu['view']->id){
                    $k = true;
                    break;
                }
            }
            if(!$k){
                $vl->delete();
            }
        }
        $date = RelationReport::where('siteId',Session::get('credentials'))->paginate($datas['per_page'],$columns = ['*'], $pageName = '',$datas['page']);
        foreach($date as $key=>$value){
            $date[$key]['username'] = $date[$key]->member->username;
        }
        //查询用户组名
        foreach($date as $key=>$value){
            if($value->usergroup_id){
                $date[$key]['user_group_name'] = $value->usergroup->group_name;
            }else{
                $date[$key]['user_group_name'] = '';
            }
        }
        return view('dcat.report.reportindex',compact('date'));
    }

   public function relation($id){
        if(Input::method() == 'POST'){
            $project_group = Input::get('project_group');
            foreach($project_group as $key=>$value){
                if($value == null){
                    unset($project_group[$key]);
                }
            }
            $project_group = implode("|",$project_group);
            $data['project_group'] = $project_group;
            $re = RelationReport::where('id',$id)->get()->first();
            if($re){
                $result = $re->update($data);
            }else{
                return show::error('失败');
            }
            return $result ? show::success('ok'):show::error('error');
        }else{

            $da = RelationReport::where('id',$id)->get()->first();
            if(!$da){
                return view('dcat.report.index');
            }else{
                $project_group = explode('|',$da->project_group);

            }
            return view('dcat.report.relation',compact('project_group'));
        }
   }
   public function relations($id){
        if(Input::method() == 'POST'){
            $ids = explode(',',$id);
            $project_group = Input::get('project_group');
            foreach($project_group as $key=>$value){
                if($value == null){
                    unset($project_group[$key]);
                }
            }
            $project_group = implode("|",$project_group);
            $data['project_group'] = $project_group;
            $result = true;
            foreach($ids as $k=>$id){
                $re = RelationReport::where('id',$id)->get()->first();
                if($re){
                    $result = $re->update($data);
                }else{
                    return show::error('失败');
                }
            }
            return $result ? show::success('ok'):show::error('失败');
        }else{
            return view('dcat.report.index');
        }
   }
   public function expires($id){
        if(Input::method() == 'POST'){
            $ids = explode(',',$id);
            $expire = Input::get('expire');
            if(empty($expire)){
                $expire = -1;
            }else{
                $expire = time()+3600*$expire;
            }
            DB::beginTransaction();
            try {
                foreach($ids as $k=>$id){
                    $re = RelationReport::where('id',$id)->get()->first();
                    if($re){
                        $result = $re->update([
                            'expire' => $expire
                        ]);
                        if(!$result){
                            DB::rollback();
                            return show::error('修改失败');
                        }
                    }else{
                        DB::rollback();
                        return show::error('修改失败');
                    }
                }
                DB::commit();
                return show::success('ok');
            }catch (\Exception $e){
                DB::rollback();
                Log::error($e->getMessage());
                return show::error('修改失败');
            }
        }else{
            return view('dcat.report.expires');
        }
    }


   //报表位置的查询
   public function select(){

        if($user = Auth::guard('member')->user()){
            $res = MemberReport::where('member_id',$user->id)->where('siteId',Session::get('credentials'))->get()->first();
            $tableauIds = explode(',',$res['tableauIds']);
        }else{
            $tableauIds = false;

        }
        $data = Curl::getWorkBooks();
        if($data === false){
            return view('dcat.error.index');
        }else{
            $p = [];
            foreach($data as $key=>$val){
                $reda = json_decode(Redis::hget(RedisKey::$workAllPort,md5(Session::get('credentials') .''. $val->id,32))) ?? Curl::getWorkBooksViews($val->id);
                if($reda === false){
                    return view('dcat.error.index');
                }
                $reda = (object)$reda;
                $viesdata = $reda->viesdata;
                $wok = $reda->wok;

                if($tableauIds){
                    foreach($viesdata as $key => $vaie){
                        if(in_array($vaie->id,$tableauIds ) && RelationReport::where('report_id',$vaie->id)->where('member_id',$user->id)->where('siteId',Session::get('credentials'))->where('expire','>=',time())->orWhere('expire',-1)->get()->first()){
                            $project = true;
                        }else{
                            unset($viesdata[$key]);//剔除该元素
                        }
                    }
                }
                foreach($viesdata as $key => $vaie){
                    if($user){
                        $report = RelationReport::where('report_id',$viesdata[$key]->id)->where('member_id',$user->id)->where('siteId',Session::get('credentials'))->get()->first();
                        if(!$report) {
                            $vies['filter'] = '';
                        }else{
                            if($report->usergroup_id){
                                $project = explode('|',$report->usergroup->project_group);
                                $vies['filter'] = implode('@',$project);
                            }else{
                                $project = explode('|',$report->project_group);
                                $vies['filter'] = implode('@',$project);
                            }
                        }
                    }else{
                        $vies['filter'] = "iframeSizedToWindow=true";
                    }
                    $coll = Collection::where('report_id',$viesdata[$key]->id)->where('siteId',Session::get('credentials'))->get()->first();
                    if($coll){
                        $vies['collection'] = '1';//如果为1表示被收藏
                    }else{
                        $vies['collection'] = '0';//如果为0表示未收藏
                    }
                    $vies['view'] = $viesdata[$key];
                    $vies['project'] = $wok->project->name;
                    $vies['workBook'] = $wok->name;
                    $p[] = $vies;
                }
            }
        }
        return view('dcat.report.select',compact('p'));
   }

   //报表收藏
   public function collection(Request $request){

        if($user = Auth::guard('member')->user()){
            $user_id = $user->id;
            $type = '2';
        }
        if($manager = Auth::guard('admin')->user()){
            $user_id = $manager->id;
            $type = '1';
        }
        $co = $request->co;
        if($co == 'true'){
            $rep = $request->report_id;
            /*拿到所有报表的数据*/
            $data = Curl::getWorkBooks();
            if($data === false) {
                return view('dcat.error.index');
            }else{
                $cl = false;
                foreach($data as $key=>$val){
                    $das = json_decode(Redis::hget(RedisKey::$workAllPort,md5(Session::get('credentials') .''. $val->id,32))) ?? Curl::getWorkBooksViews($val->id);
                    if($das === false) {
                        return view('dcat.error.index');
                    }else{
                        $das = (object)$das;
                        $viesdata = $das->viesdata;
                        $wok = $das->wok;
                        foreach($viesdata as $k=>$value){
                            if($value->id == $rep){
                                $insert['project_name'] = $wok->project->name;
                                $insert['workBook_name'] = $wok->name;
                                $insert['report_name'] = $value->name;
                                $cl = true;
                                break;
                            }
                        }
                        if($cl){
                            break;
                        }
                    }
                }
                if(!$cl){
                    return '0';
                }
            }
            $insert['report_id'] = $rep;
            $insert['user_id'] = $user_id;
            $insert['type'] = $type;
            $insert['siteId'] = Session::get('credentials');
            if(!$request->filter){
                $insert['filter'] = "iframeSizedToWindow=true";
            }else{
                $insert['filter'] = $request->filter;
            }
            $insert['contentUrl'] = $request->contentUrl;
            $insert['created_at'] = date('Y-m-d H:i:s');
            $has = Collection::where('user_id',$user_id)->where('type',$type)->where('report_id',$rep)->where('siteId',Session::get('credentials'))->get()->first();
            if($has){
                return '0';
            }
            $result = Collection::insert($insert);
        }else{
            $rep = $request->report_id;
            $result = Collection::where('report_id',$rep)->where('user_id',$user_id)->where('type',$type)->where('siteId',Session::get('credentials'))->delete();
        }

        return $result ? '1' : '0';
   }
   //报表收藏
   public function collectindex(Request $request){
       $data = $request->only(['per_page','page']);
       if(empty($data['per_page'])){
           $data['per_page'] = 5;
       }
       if(empty($data['page'])){
           $data['page'] = 1;
       }
        if($user = Auth::guard('member')->user()){
            $id = $user->id;
            $type = '2';
        }
        if($manager = Auth::guard('admin')->user()){
            $id = $manager->id;
            $type = '1';
        }
        $data = Collection::where('user_id',$id)->where('type',$type)->where('siteId',Session::get('credentials'))->paginate($data['per_page'],$columns = ['*'], $pageName = '',$data['page']);

        return view('dcat.collection.index',compact('data'));
   }


   //实时报表搜索
   public function search(Request $request){
        $conditions = $request->conditions;
        $user = Auth::guard('admin')->user();
        $ls = false;
        if($user){
            $ls = true;
        }else{
            $user = Auth::guard('member')->user();
        }

        if(!$ls){
            $result = RelationReport::where('member_id',$user->id)->where('siteId',Session::get('credentials'));
            $result = $result->where('member_id',$user->id)->where(function ($q){
                $q->where('expire','>=',time())->orWhere('expire',-1);
            })->where(function($q1) use($conditions){
                $q1->where('report_name','like','%'.$conditions.'%')->orwhere('project_name','like','%'.$conditions.'%')->orwhere('workBook_name','like','%'.$conditions.'%');
            })->get();

            foreach($result as $k=>$value){
                $c = AllReport::where('report_id',$value->report_id)->where('siteId',Session::get('credentials'))->get()->first();
                $result[$k]['contentUrl'] = $c->contentUrl;
                if($value->usergroup_id){
                    $result[$k]['project_group'] = $value->usergroup->project_group;
                }
            }

        }else{
            $result = AllReport::where('siteId',Session::get('credentials'))->where(function($q1) use($conditions){
                $q1->where('report_name','like','%'.$conditions.'%')->orwhere('project_name','like','%'.$conditions.'%')->orwhere('workBook_name','like','%'.$conditions.'%');
            })->get();
        }


       foreach($result as $key=>$val){
           $image = ReportImage::where([
               'siteId' => Session::get('credentials'),
               'report_id' => $val->report_id,
           ])->get()->first();
           if(!empty($image) && !empty($image->image)){
               $result[$key]['img'] = $image->image;
           }else{

               $response = Curl::getMiniView($val->report_id);
               if($response === false) {
                   return view('admin4.error.index');
               } else {
                   $url =Func::setImage('report/'.Session::get('credentials').'/'.$val->report_id,$response);
                   $result[$key]['img'] = '/storage/'.$url;
                   if(!empty($image)){
                       $image->image = '/storage/'.$url;
                       $image->save();
                   }else{
                       ReportImage::create([
                           'image' => '/storage/'.$url,
                           'siteId' => Session::get('credentials'),
                           'report_id' => $val->report_id,
                       ]);
                   }
               }
           }

       }
       return $result;
   }
}
