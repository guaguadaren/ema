<?php
/**
 * Created by PhpStorm.
 * User: 阿瓜
 * Date: 2018/3/30
 * Time: 15:53
 */
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use phpmailer\phpmailer;


class Index
{
    public function index(){
        return view('index');
    }
    public  function show(){

    }
}
