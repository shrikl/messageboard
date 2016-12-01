<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script type="text/javascript">
		function changeCode() {
			var codeimg = document.getElementsByName("codeimg")[0];
			codeimg.src = codeimg.src+'?'+Math.random();
		}
		function check() {
			var ou = document.doLoginForm.username.value;
			var op = document.doLoginForm.password.value;
			var oc = document.doLoginForm.code.value;
			var ob = document.getElementsByName("subbtn")[0];
			if(ou == "" || op == "" || oc == "") {
				ob.disabled = "disabled";
			}else{
				ob.removeAttribute("disabled");
			}
		}
	</script>
</head>
<body>
<div style="margin-top: 50px;">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-1"></div>
		<div class="col-md-2">
			<center>
				<h3>Message Board</h1>
			</center>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-4"></div>
	</div>
	<form action="__URL__/do_login" method="post" name="doLoginForm" role="form">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="input-group form-group">
					<span class="input-group-addon">Username</span>
					<input type="text" name="username" class="form-control" onkeyup="check()">
				</div>
				<div class="input-group form-group">
					<span class="input-group-addon">Password&nbsp;</span>
					<input type="password" name="password" class="form-control" onkeyup="check()">
				</div>
				<div class="input-group form-group">
					<span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;Code&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<input type="text" name="code" class="form-control" onkeyup="check()">
					<span class="input-group-addon">
						<img src="__APP__/Public/code" onclick="this.src=this.src+'?'+Math.random()" name="codeimg">&nbsp;&nbsp;
						<a href="#" onclick="changeCode()">换一张</a>
					</span>
				</div>		
			</div>
			<div class="col-md-4"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-2">
				<button type="submit" class="btn btn-primary btn-block" name="subbtn" disabled="">Login</button>
			</div>
			<div class="col-md-2">
				<a href="__APP__/Register/register" role="button" class="btn btn-primary btn-block">Register</a>
			</div>
			<div class="col-md-4"></div>
		</div>
	</form>
</div>

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>