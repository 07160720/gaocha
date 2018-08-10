<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\wwwroot\sysnaica\wwwroot/application/index\view\produce\index.html";i:1533894588;s:69:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\header.html";i:1533862942;s:70:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\content.html";i:1533873794;s:69:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\footer.html";i:1533862941;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>搞茶_搞茶加盟官网</title>
		<meta name="keywords" content="搞茶_搞茶加盟官网">
        <meta name="description" content="我们崇尚专注一生的事业，更欣赏轻松融洽的氛围。搞茶一场甜蜜事业的旅行和华丽冒险的开始，在搞茶官网，是以一种美食主义者的姿态生存，每月定期推出新品，为顾客不断带来惊喜。">
		<link rel="stylesheet" href="/static/index/css/gc.css" />
		<script type="text/javascript" src="/static/index/js/gc.js" ></script>
		<script type="text/javascript" src="/static/index/js/jquery.js"></script>
		<script type="text/javascript" src="/static/index/js/jquery.min.js"></script>
	</head>
	<body>
		<!-- 頭部 -->
		<header>
	<div><img src="/static/index/img/logo.png" /></div>
	<ul>
		<li><a href="<?php echo url('index/index'); ?>">官网首页</a></li>
		<li><a href="<?php echo url('headquarters/index',array('cate_id'=>1)); ?>">搞茶总部</a></li>
		<li><a href="<?php echo url('news/index',array('cate_id'=>2)); ?>">新闻动态</a></li>
		<li><a href="<?php echo url('successful/index',array('cate_id'=>3)); ?>">成功案例</a></li>
		<li><a href="<?php echo url('produce/index',array('cate_id'=>4)); ?>">产品展示</a></li>
		<li><a href="<?php echo url('join/index',array('cate_id'=>5)); ?>">加盟搞茶</a></li>
	</ul>
</header>

		<!--/頭部 -->
		<style type="text/css">
a:link {
	font-size: 16px;
	color: #000000;
	text-decoration: none;
}
a:visited {
	font-size: 16px;
	color: #000000;
	text-decoration: none;
}
a:hover {
	font-size: 16px;
	color: red;
	text-decoration: underline;
}
</style>
<span style="position: relative; top: 50px; left: 400px;">当前位置：<a href="http://www.sysnaica.com.cn/">首页</a>&gt;<?php echo $cate_find['catename']; ?></span>	
		<section>
          <main>
			<div class="div2" style="position: relative; height: 700px; bottom: 90px; top: 5px;">
			<h3>产品展示</h3>
			<div class="line"></div>
			   <?php if(is_array($produce_select) || $produce_select instanceof \think\Collection || $produce_select instanceof \think\Paginator): $i = 0; $__LIST__ = $produce_select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			   <table><tr><td><img src="http://www.sysnaica.com.cn/agaocha/public/static<?php echo $vo['pic']; ?>" /></td><tr><tr><td><a href="#"><h3>搞茶产品</h3></a></td></tr></table>
			   <?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		  </main>	
		</section>
		<hr/>
		<!-- 腳部 -->
				<footer style="position: absolute;">
			<img src="/static/index/img/code.jpg" />
			<div class="d">
				<div>友情链接：</div>
				<div>备案号：粤ICP备17162717号</div>
				<div>地址：广州市白云区石槎路石井城市广场B座3楼A08</div>
				<div>版权所有 ©搞茶LABOTHERY加盟总部</div>
			</div>
			<div class="e">
				<ul>
					<li><a href="<?php echo url('index/index'); ?>">官网首页</a></li>
					<li><a href="<?php echo url('headquarters/index'); ?>">搞茶总部</a></li>
					<li><a href="<?php echo url('news/index'); ?>">新闻动态</a></li>
					<li><a href="<?php echo url('successful/index'); ?>">成功案例</a></li>
					<li><a href="<?php echo url('produce/index'); ?>">产品展示</a></li>
					<li><a href="<?php echo url('join/index'); ?>">加盟搞茶</a></li>
				</ul>
			</div>
		</footer>
		<!--/腳部 -->  
	</body>
</html>
