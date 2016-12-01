<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
<form role="form" action="__APP__/Message/do_message" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="title">Message Title</label>
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

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>