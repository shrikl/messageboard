<?php if (!defined('THINK_PATH')) exit();?><!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<style type="text/css">
		#dh{
			height: 150px;
			background-color: #abcdef;
		}
		a{
			font-size: 60px;
			text-decoration: none;
		}
	</style>
</head> 

<body>
<div id="dh">
	<a href="__APP__/City/bj">北京</a>
	<a href="__APP__/City/sh">上海</a>
	<a href="__APP__/City/gz">广州</a>
</div> -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<style type="text/css">
		#dh{
			height: 150px;
			background-color: #abcdef;
		}
		a{
			font-size: 60px;
			text-decoration: none;
		}
	</style>
</head>
<body>
<div id="dh">
	<?php if(is_array($list)): foreach($list as $key=>$v): ?><a href="__APP__/City/<?php echo ($v["name"]); ?>"><?php echo ($v["name"]); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>
</div>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>