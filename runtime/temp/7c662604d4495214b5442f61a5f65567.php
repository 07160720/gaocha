<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\PhpStudy\PHPTutorial\WWW\gaocha1/application/index\view\index\index.html";i:1533899034;s:77:"D:\PhpStudy\PHPTutorial\WWW\gaocha1\application\index\view\common\header.html";i:1533899034;s:77:"D:\PhpStudy\PHPTutorial\WWW\gaocha1\application\index\view\common\footer.html";i:1533899034;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>搞茶_搞茶加盟费_搞茶加盟官网</title>
		<meta name="keywords" content="搞茶_搞茶加盟费_搞茶加盟官网">
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
		<img class="fm" src="/static/index/img/banner_01.jpg" />
		<section>
			<div class="div1">
			<h3>搞茶总部</h3>
			<div class="line" ></div>
            <?php if(is_array($Head_select) || $Head_select instanceof \think\Collection || $Head_select instanceof \think\Paginator): $i = 0; $__LIST__ = $Head_select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vo['desc']; ?></p>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="div2">
			<h3>产品展示</h3>
			<div class="line"></div>
             <?php if(is_array($produce_select) || $produce_select instanceof \think\Collection || $produce_select instanceof \think\Paginator): $i = 0; $__LIST__ = $produce_select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			    <table><tr><td><img src="http://www.sysnaica.com.cn/agaocha/public/static<?php echo $vo['pic']; ?>" /></td><tr><tr><td><a href="#"><h3>搞茶产品</h3></a></td></tr></table>
             <?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			</div>

			<div class="div3">
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
			<!-- // 更多的标签 -->
			<div style="float: right; position: relative; right: 150px; bottom: 90px;"><a href="<?php echo url('news/index'); ?>" style="text-decoration:none"><p style="color: red;">更多>></p></a></div>
           
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
			<!-- // 更多的标签 -->
			<div style="float: right; position: relative; right: 250px; bottom: 10px;"> <a href="<?php echo url('successful/index'); ?>" style="text-decoration:none"><p style="color: red;">更多>></p></a></div>
			<div class="div5">
			<h3>加盟支持</h3>
			<div class="line"></div>
			<div class="a">
			<p>开业前</p>
			<ul>
				<?php if(is_array($support) || $support instanceof \think\Collection || $support instanceof \think\Paginator): $i = 0; $__LIST__ = $support;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['desc1'] != null): ?>
				<a><li><?php echo $vo['desc1']; ?></li></a>
				<?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			</div>
			<div class="a">
			<p>开业中</p>
			<ul>
				<?php if(is_array($support) || $support instanceof \think\Collection || $support instanceof \think\Paginator): $i = 0; $__LIST__ = $support;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['desc2'] != null): ?>
				<a><li><?php echo $vo['desc2']; ?></li></a>
				<?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			</div>
			<div class="a">
			<p>开业后</p>
			<ul>
				<?php if(is_array($support) || $support instanceof \think\Collection || $support instanceof \think\Paginator): $i = 0; $__LIST__ = $support;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['desc3'] != null): ?>
				<a><li><?php echo $vo['desc3']; ?></li></a>
				<?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			</div>
			
			<div class="div6">
			<h3>加盟流程</h3>
			<div class="line"></div>
			<ul>
				<?php if(is_array($process) || $process instanceof \think\Collection || $process instanceof \think\Paginator): $i = 0; $__LIST__ = $process;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<li><?php echo $vo['process']; ?></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			
			<div class="div7">
			<h3>媒体合作</h3>
			<div class="line"></div>
			<div class="b">
				<img src="/static/index/img/media1.jpg" />
				<img src="/static/index/img/media2.jpg" />
				<img src="/static/index/img/media3.jpg" />
				<img src="/static/index/img/media4.jpg" />
				<img src="/static/index/img/media5.jpg" />
				<img src="/static/index/img/media6.jpg" />
			</div>
			
			<div class="div8">
			<img src="/static/index/img/formTile.jpg"/></br></br></br></br>
			<div>如果您有任何疑问请在LABOTHERY搞茶加盟官网留言，搞茶会在收到留言后24小时内联系您</div>
			<form>
				<p>*您的姓名：<input type="text" name="name" class="name" /></p>
				<p>*联系电话：<input type="text" name="phonenumber" class="phonenumber"/></p>
				<p> 您的地址：<input type="text" name="address" class="address" /></p>
				<p>*留言内容：<textarea placeholder="请留言..." name="message" class="message"></textarea></p>
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
				  		message:message,
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
