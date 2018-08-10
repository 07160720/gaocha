<?php
namespace app\index\controller;
use think\Db;

class News extends Base
{
    public function index()
    {
    	$news_select = Db::name('news')->paginate(8);
    	$this->assign('news_select',$news_select);
        return $this->fetch();
    }

    public function index1(){
        $newsid = input('newsid'); 
    	$news_find= Db::name('news')->find($newsid);
        $cate_id = 2;
        $cate_find = Db::name('cate')->find($cate_id);
        $news_select = Db::name('news')->select();
        db('news')->where('id','=',$newsid)->setInc('click');
        $this->assign(array(
            'cate_find'   =>   $cate_find,
            'news_find'   =>   $news_find,
            'news_select' =>   $news_select,
        ));
    	return $this->fetch();
    }

}
