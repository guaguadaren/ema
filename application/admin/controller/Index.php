<?php
/**
 * Created by PhpStorm.
 * User: 阿瓜
 * Date: 2018/3/30
 * Time: 15:53
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\hem_foot;
use think\facade\Session;
class Index extends  Controller
{
    public function index(){
        return view('shop_list');
    }
    public  function shop_list(){
           $a= "hem_foot";
           $model = new hem_foot();
           $data =  $model->show($a);
           $this->assign('data',$data);
           return $this->fetch();
    }
    public  function shop_add(){
        return view('shop_add');
    }
    public  function discount(){
        $data = DB::table('hem_coupon')->select();
         $this->assign('data',$data);
         return $this->fetch();
    }
    public  function discount_add(){
        return view('discount_add');
    }
    public  function order_list(){
        $data = DB::table('hem_order')->select();
         $this->assign('data',$data);
         return $this->fetch();
    }
    public  function deletes()  {
        if($_GET){
            $id = $_GET['id'];
            $a= "hem_foot";
            $model = new hem_foot();
            $data =  $model->deletes($a,$id);
            if($data){
                echo "<script> alert('删除成功') ; location.href =('shop_list')</script>";
            }else{
                echo "<script> alert('删除失败')</script>";
            }
        }
    }
    public  function foot_add(){
        $file = request()->file('image');
        if($file){
            $info = $file->move( '../public/static/img');
            if($info){
                $time = date("Y-m-d:h:i:s",time());
               $entry_id =  Session::get('dianpu_id');
                $data = array('foot_name'=>$_POST['foot_name'],'foot_price'=>$_POST['foot_price'],'foot_promotion'=>$_POST['foot_promotion'],'foot_details'=>$_POST['foot_details'],'foot_img'=>$info->getFilename(),'createtime'=>$time,'isdel'=>$_POST['isdel'],'entry_id'=>$entry_id);
                $a= "hem_foot";
                $model = new hem_foot();
                $data =  $model->inserts($a,$data);
                if($data){
                    echo "<script> alert('添加成功') ; location.href =('shop_add')</script>";
                }

                // 输出 42a79759f284b767dfcb2a0197904287.jpg
            }else{
                // 上传失败获取错误信息
            }
        }else{
            echo "<script> alert('请输入上传图片信息') ; location.href =('shop_add')</script>";
        }
        // 移动到框架应用根目录/uploads/ 目录下
    }
    public  function discount_adds(){
        $entry_id =  Session::get('dianpu_id');
        $time = date("Y-m-d:h:i:s",time());
         $data = array('coupon_name'=>$_POST['coupon_name'],'coupon_money'=>$_POST['coupon_money'],'coupon_smoney'=>$_POST['coupon_smoney'],'coupon_des'=>$_POST['coupon_des'],'coupon_num'=>$_POST['coupon_num'],'coupon_starttime'=>$_POST['coupon_starttime'],'coupon_sendtime'=>$_POST['coupon_sendtime'],'entry_id'=>$entry_id,'create_time'=>$time,'coupon_stauts'=>1);
            $data = DB::table('hem_coupon')->insert($data);
            if($data){
                echo "<script> alert('添加成功') ; location.href =('discount_add')</script>";
            }
    }
       public  function order_delete(){
          $id = $_GET['id'];
          $data = DB::table('hem_order')->where('id='.$id)->delete();
          if($data){
              echo "<script> alert('删除成功') ; location.href =('order_list')</script>";
          }
       }
       public  function discount_delete(){
        $id = $_GET['id'];
        $data =  DB::table('hem_coupon')->where('id='.$id)->delete();
        if($data){
            echo "<script> alert('删除成功') ; location.href =('discount')</script>";
        }
       }
}
