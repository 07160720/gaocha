<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"D:\wwwroot\sysnaica\wwwroot/application/index\view\join\index.html";i:1533894577;s:69:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\header.html";i:1533862942;s:70:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\content.html";i:1533873794;s:69:"D:\wwwroot\sysnaica\wwwroot\application\index\view\common\footer.html";i:1533862941;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>加盟我们_搞茶加盟官网</title>
		<meta name="keywords" content="加盟我们_搞茶加盟官网">
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
			<div class="div8" style="position: relative; height: 600px;bottom: 40px;">
				<img src="/static/index/img/formTile.jpg"><br><br><br><br>
				<div style="position: relative;">如果您有任何疑问请在LABOTHERY搞茶加盟官网留言，搞茶会在收到留言后24小时内联系您</div>
				<form style="left:400px; position: relative;">
					<p>*您的姓名：<input type="text" name="name" class="name"></p>
					<p>*联系电话：<input type="text" name="phonenumber" class="phonenumber"></p>
					<p> 您的地址：<input type="text" name="address" class="address"></p>
					<p>*留言内容：<textarea placeholder="请留言..." name="message" class="message"></textarea></p>
					<input type="hidden" name="time">
					<p><button type="button" id="subleave">立即留言</button></p>
				</form> 
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
		<script type="text/javascript">
			$('#subleave').on('click',function(){
				 // 獲取對應的值
				  var name = $('.name').val();
				  var phonenumber = $('.phonenumber').val();
				  var address = $('.address').val();
				  var message = $('.message').val();
				  // 發送ajax請求，對於在四個參數，url，data，type，datatype
				  $.ajax({
				  	url:"<?php echo url('index/leave'); ?>",
				  	data:{
				  		name:name,
				  		phonenumber:phonenumber,
				  		address:address,
				  		message:message
				  	},
				  	type:'post',
				  	dataType:'json',
				  	success:function(res)     // 執行成功回調函數
				  	{ 
                        if (res.code==1) 
                        {
                             alert(res.msg);
                        }
                        else{
                        	 alert(res.msg);
                        }
				  	}     
				})
			})
		</script>
	</body>
</html>
