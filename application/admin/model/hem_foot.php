<?php
namespace app\admin\model;


use think\Db;
use think\Model;


class hem_foot extends Model
{
    protected $table = 'hem_entry';
     public  function show($a){
         return    DB::table($a)->select();
     }
     public  function deletes($a,$id){
          return  DB::table($a)->where('id='.$id)->delete();
     }
     public  function inserts($a,$data){
          return  DB::table('hem_foot')->insert($data);
     }
}