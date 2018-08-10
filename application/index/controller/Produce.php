<?php
namespace app\index\controller;
use think\Db;

class Produce extends Base
{
    public function index()
    {   
    	$produce_select = Db::name('produce')->select();
    	$this->assign('produce_select',$produce_select);
        return $this->fetch();
    }

}
