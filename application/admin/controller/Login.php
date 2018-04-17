<?php
/**
 * Created by PhpStorm.
 * User: 阿瓜
 * Date: 2018/4/15
 * Time: 15:53
 */
namespace app\admin\controller;
use think\Controller;
use think\facade\Session;
use app\admin\model\hem_entry;
use think\Request;
use think\Db;
use phpmailer\phpmailer;

class Login extends  Controller
{
    public function index(){
         return view('login');
    }
    public  function register(){
        return view('register');
    }
    public  function  Sign_in(){
            if($_POST){
            $user = $_POST['email'];
            $pwd = $_POST['password'];
          $a = new hem_entry();
          $a = $a->show($user,$pwd);

          if(!$a){
             $this->error('账户或者密码错误，请您重新输入');
          }else{
              Session::set('name',$user);
              Session::set('dianpu_id',$a[0]['id']);
              $this->success('登录成功',"index/shop_list");
          }
        }

}
}
