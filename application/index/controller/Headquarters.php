<?php
namespace app\index\controller;
use think\Db;
class Headquarters extends Base
{
    public function index()
    {   
    	$Head_select = Db::name('headquarters')->select();
    	$this->assign('Head_select',$Head_select);
        return $this->fetch();
    }

}
