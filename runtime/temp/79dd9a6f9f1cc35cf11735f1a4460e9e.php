<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"D:\wwwroot\sysnaica\wwwroot/application/index\view\news\index.html";i:1533892731;s:69:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\header.html";i:1533862942;s:70:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\content.html";i:1533873794;s:69:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\footer.html";i:1533862941;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>新闻动态</title>
		<meta name="keywords" content="">
        <meta name="description" content="在悠闲的午后，还是在意境朦胧的夜晚，一杯美味的奶茶，都能让你的身心，得到前所未有的放松。所以有很大的一部分人，就爱上了奶茶，奶茶的市场需求量，自然也就更多了。开方便面店赚钱不就在这种情况下，吸...">
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
			<div style="position: relative; height: 1200px; top: 30px; bottom: 50px;">
				<div class="div3" style="position: relative; height: 800px; margin: 0 auto;">
					<h3>新闻动态</h3>
					<div class="line"></div>
					<div class="div3_1">
						<?php if(is_array($news_select) || $news_select instanceof \think\Collection || $news_select instanceof \think\Paginator): $i = 0; $__LIST__ = $news_select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>	
						<a href="<?php echo url('news/index1',array('newsid'=>$vo['id'])); ?>"><p><?php echo $vo['title']; ?></p></a>
						<div><?php echo date("Y-m-d",$vo['time']); ?></div>
						<div class="c"><?php echo $vo['desc']; ?></div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
			<div style="position: relative; float: right; right: 150px; bottom: 300px;"><?php echo $news_select->render(); ?></div>
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
