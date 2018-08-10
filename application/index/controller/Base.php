<?php 
namespace app\index\controller;
use think\Controller;
use think\Db;
/**
*  
*/
class Base extends Controller
{
	 
	 public function _initialize(){
           $id = input('cate_id');
    	   $cate_find = Db::name('cate')->find($id);
    	   $this->assign('cate_find',$cate_find);
	 }
	 
}

 ?>