<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:72:"D:\wwwroot\sysnaica\wwwroot/application/index\view\successful\index.html";i:1533892722;s:69:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\header.html";i:1533862942;s:70:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\content.html";i:1533873794;s:69:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\footer.html";i:1533862941;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>成功案例</title>
		<meta name="keywords" content="招商 搞茶">
        <meta name="description" content="自上世纪八十年代，奶茶引进中国以来，就在国内的美食界掀起了一阵火热狂潮。新颖时尚的外形、美味的口感、创新的出餐模式，无一不成为吸睛的焦点。外酥里嫩的炸鸡、有料满足的奶茶实验室 、金黄脆香的薯条...">
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
			<div style="position: relative;  height: 1150px; top: 50px; bottom: 30px; left: 30px;">
				<div class="div4" style="position: relative; top: 30px;">
					<h3>成功案例</h3>
					<div class="line"></div>
					<div class="div4_1">
						<?php if(is_array($successful_select) || $successful_select instanceof \think\Collection || $successful_select instanceof \think\Paginator): $i = 0; $__LIST__ = $successful_select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<a href="<?php echo url('successful/index1',array('id'=>$vo['id'])); ?>"><p><?php echo $vo['title']; ?></p></a>
						<span><?php echo $vo['desc']; ?></span>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
			<div style="position: relative; float: right; right: 250px; bottom: 300px;"><?php echo $successful_select->render(); ?>
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
