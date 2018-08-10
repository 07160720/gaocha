<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"D:\wwwroot\sysnaica\wwwroot/application/index\view\news\index1.html";i:1533892731;s:69:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\header.html";i:1533862942;s:69:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\footer.html";i:1533862941;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php echo $news_find['title']; ?></title>
	<meta name="keywords" content="<?php echo $news_find['keywords']; ?>">
	<meta name="description" content="<?php echo $news_find['desc']; ?>">
	<link rel="stylesheet" href="/static/index/css/gc.css" />
	<script type="text/javascript" src="/static/index/js/gc.js" ></script>
	<script type="text/javascript" src="/static/index/js/jquery.js"></script>
	<script type="text/javascript" src="/static/index/js/jquery.min.js"></script>
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
	<span style="position: relative; top: 50px; left: 400px;">当前位置：<a href="http://www.sysnaica.com.cn">首页</a>&gt;<a href="<?php echo url('news/index'); ?>"><?php echo $cate_find['catename']; ?></a>&gt;<?php echo $news_find['title']; ?></span>	
	<section>	
		<div style="position: relative; height: 800px; top: 30px; bottom: 50px;">
			<div class="div1">
				<h3><?php echo $news_find['title']; ?></h3>
				<div style=" position: relative; left: 450px; margin: 0 auto; top: 0px; bottom: 30px;">日期：<?php echo date("Y-m-d",$news_find['time']); ?>&nbsp;浏览数：<?php echo $news_find['click']; ?></div>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $news_find['content']; ?></p>
			</div>
		</div>
	</section>
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
