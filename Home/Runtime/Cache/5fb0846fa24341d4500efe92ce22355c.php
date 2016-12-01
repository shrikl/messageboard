<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="page-header">
	<h1>ThinkPHP Message Board</h1>
	<p>
		<h4>
			Welcome, <?php echo (session('username')); ?>&nbsp;
			<a href="__APP__/Login/do_logout" target="_top">Logout</a>
		</h4>
	</p>
</div>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
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
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h2>Message</h2>
		<form action="__APP__/Message/do_message" method="post" enctype="multipart/form-data" role="form">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control" id="title" name="title">
			</div>
			<div class="form-group">
				<label for="content">Content</label>
				<textarea class="form-control" id="content" name="content"></textarea>
			</div>
			<div class="form-group">
				<label for="filename">File input</label>
				<input type="file" id="filename" name="filename">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>