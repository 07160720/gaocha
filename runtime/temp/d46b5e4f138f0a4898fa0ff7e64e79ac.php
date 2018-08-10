<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:74:"D:\wwwroot\sysnaica\wwwroot/application/index\view\headquarters\index.html";i:1533894366;s:69:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\header.html";i:1533862942;s:70:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\content.html";i:1533873794;s:69:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\footer.html";i:1533862941;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>搞茶总部_搞茶加盟官网</title>
        <meta name="keywords" content="搞茶总部_搞茶加盟官网">
        <meta name="description" content="这里，没有茶单，却有数以亿计的茶品类。LABOTHERY搞茶，一杯充满无限想象力与惊喜的茶！一款具有社交属性的互联网属性的茶饮品牌！一款极好缓解社会普遍性人际焦虑的趣味茶！茶+双色球1/12759183360概率味道=搞茶！">
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
			<div class="div1" style="position: relative; height: 500px;">
			<h3>搞茶总部</h3>
			<div class="line" ></div>
            <?php if(is_array($Head_select) || $Head_select instanceof \think\Collection || $Head_select instanceof \think\Paginator): $i = 0; $__LIST__ = $Head_select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vo['desc']; ?></p>
			<?php endforeach; endif; else: echo "" ;endif; ?>
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
