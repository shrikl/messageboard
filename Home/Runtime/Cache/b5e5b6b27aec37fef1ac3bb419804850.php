<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<style type="text/css">
		.hwh-page-info a{color: #CCC;}.hwh-page-info a em{font-style: normal;margin: 0 2px;}
	</style>
</head>
<body>
<?php if(is_array($list)): foreach($list as $key=>$vo): ?>title:
	<?php echo ($vo["title"]); ?>
	<br>
	content:
	<?php echo ($vo["content"]); ?>
	<br>
	time:
	<?php echo (date('Y m d H:i:s',$vo["time"])); ?>
	<br>
	uid:
	<?php echo ($vo["username"]); ?>
	<br>
	filename:
	<?php echo ($vo["filename"]); ?>
	<hr><?php endforeach; endif; ?>

<?php echo ($show); ?>

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>