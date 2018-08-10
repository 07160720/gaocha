<?php
namespace app\index\controller;
use think\Db;

class Index extends Base
{
    public function index()
    {  
        $cate_select = Db::name('cate')->select();
        $successful_select = Db::name('successful')->paginate(5);
        $news_select = Db::name('news')->paginate(5);
        $Head_select = Db::name('headquarters')->select();
        $produce_select = Db::name('produce')->select();
        $process = Db::name('process')->select();
        $support = Db::name('support')->select();
        $this->assign('produce_select',$produce_select);
    	$this->assign(array(
            'cate_select'    =>$cate_select,
            'successful_select' => $successful_select,
            'news_select'    =>   $news_select,
            'Head_select'    =>   $Head_select,
            'produce_select' =>  $produce_select,
            'process'        =>   $process,
            'support'        =>   $support,
        ));
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

    public function cate(){
    	$cate_select = Db::name('cate')->select();
    	$this->assign('cate_select',$cate_select);
    	return $this->fetch();
    }

    
}
