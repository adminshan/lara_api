<?php
namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class IndexController
{
    public function login(Request $request){
        $user_name=$request->input('u');
        $pass=$request->input('p');
        //验证用户信息
        if(1){
            $uid=100;
            $str=time()+$uid+mt_rand(1111,9999);
            $token = substr(md5($str),10,20);
            //保存token至Redis
            $key = 'api:h:u'.$uid;
            Redis::hSet($key,'token',$token);
            echo $token;
        }else{
            echo 'no';
        }
    }
}