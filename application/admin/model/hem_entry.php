<?php
namespace app\admin\model;


use think\Db;
use think\Model;


class hem_entry extends Model
{
    protected $table = 'hem_entry';

    public  function show($name,$pwd){
       return  Db::table('hem_entry')->where("entry_username='$name' and entry_password='$pwd'")->select();
    }
}
