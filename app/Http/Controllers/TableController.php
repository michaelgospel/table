<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class TableController extends Controller
{


    public function index()
    {
        return view('user.index');
    }

    public function add()
    {
      return view('user.add');
    }

    public function insert(Request $request)
    {

      // 获取表单数据
      $userInfo = $request->only('username','password','age');
      // dd($userInfo);
        // 生成uuid
        $str = md5(uniqid(mt_rand(), true));
        $uuid  = substr($str,0,8) . '-';
        $uuid .= substr($str,8,4) . '-';
        $uuid .= substr($str,12,4) . '-';
        $uuid .= substr($str,16,4) . '-';
        $uuid .= substr($str,20,12);

        // dd($uuid);
        // 截取uuid第一个字符转为10进制
        $uid = hexdec(substr($uuid,0,1));
        // 根据用户表个数进行对应取余
        $uid = $uid % 8;

        // 根据取余结果插入相应的表
        DB::table('user_'.$uid)->insert(['uid'=>$uuid,'username'=>$userInfo['username'],'password'=>$userInfo['password'],'age'=>$userInfo['age']]);

        // 取出刚才放入的数据
        $userIndex = DB::table('user_'.$uid)->first();
        // dd($userIndex);
        // 将取出的放入索引表
        $r = DB::table('index_user')->insert(['uid'=>$uuid,'username'=>$userIndex->username]);

      return view('user.index');
    }


    public function queryUser()
    {
      return view('user.queryUser');
    }

    public function showUser(Request $request)
    {
      // 获取用户名
      // $username = $request->only('username');
      $username = $request->input('username');
      // dd($username);
      // 索引中获取用户信息uuid
      $user = DB::table('index_user')->where('username',$username)->first();
      $uuid = $user->uid;
      // dd($uuid);
      // 截取uuid第一个字符转为10进制
      $uid = hexdec(substr($uuid,0,1));
      // 根据用户表个数进行对应取余
      $uid = $uid % 8;

      $userInfo = DB::table('user_'.$uid)->first();
      // dd($userInfo);

      return view('user/show',['userInfo'=>$userInfo]);
    }





   public function guid(){
        if (function_exists('com_create_guid')){
            return com_create_guid();
        }else{
            mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid = chr(123)// "{"
                    .substr($charid, 0, 8).$hyphen
                    .substr($charid, 8, 4).$hyphen
                    .substr($charid,12, 4).$hyphen
                    .substr($charid,16, 4).$hyphen
                    .substr($charid,20,12)
                    .chr(125);// "}"
            return $uuid;
        }
    }

}
