<?php
namespace app\index\controller;
use think\Db;

class Join extends Base
{
    public function index()
    {   
        return $this->fetch();
    }

    // 利用ajax进行留言
    public function leave()
    {

    	if (!request()->isAjax()) {
    		return $this->result('',0,'非法參數錯誤');
    	}
    	else{
            $data = $this->request->post();  //接收请求传递的数据
            $data['time'] = time();
            $validate = \think\Loader::validate('Index');
            if(!$validate->check($data)){
            	$this->error($validate->getError()); die;
            }

            if (Db::name('join_in')->insert($data)) {
            	return $this->result(url('index/index'),1,'留言成功');
            }

            else{
            	return $this->result(url('index/index'),0,'留言失敗');
            }
        }
    }

}
