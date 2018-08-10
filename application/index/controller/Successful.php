<?php
namespace app\index\controller;
use think\Db;
class Successful extends Base
{
	public function index()
	{
		$successful_select = Db::name('successful')->paginate(8);
		$this->assign('successful_select',$successful_select);
		return $this->fetch();
	}

	public function index1(){

		$sucid = input('id');
		$successful_find= Db::name('successful')->find($sucid);

	    $cate_id = 3;
	    $cate_find = Db::name('cate')->find($cate_id);

		db('successful')->where('id','=',$sucid)->setInc('click'); // 每刷新一次，就自动增加一
		$successful_select = Db::name('successful')->select();
		
	    $this->assign(array(
	    	'successful_find'  =>   $successful_find,
	    	'cate_find'        =>   $cate_find,
	    	'successful_select'=>   $successful_select,
	    ));
		return $this->fetch();
	}
}
