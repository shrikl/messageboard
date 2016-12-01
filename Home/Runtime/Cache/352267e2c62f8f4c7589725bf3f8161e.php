<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">
		function resett() {
			var ob = document.getElementsByName("subbtn")[0];
			document.doRegisterForm.username.value = "";
			document.doRegisterForm.password.value = "";
			document.doRegisterForm.confirm.value  = "";
			document.doRegisterForm.code.value     = "";
			$("span#chkspan").remove();
			changeCode()
			ob.disabled = "disabled";
			if(document.getElementsByName("sex")[1].checked) {
				$("label#sex0").removeClass("active");
				$("label#sex1").addClass("active");
			}
		}
		function changeCode() {
			document.getElementsByName("codeimg")[0].src = document.getElementsByName("codeimg")[0].src+'?'+Math.random();
		}
		function check() {
			var ou  = document.doRegisterForm.username.value;
			var op1 = document.doRegisterForm.password.value;
			var op2 = document.doRegisterForm.confirm.value;
			var oc  = document.doRegisterForm.code.value;
			var ob  = document.getElementsByName("subbtn")[0];
			var s1  = "<span class='glyphicon glyphicon-remove'></span>";
			var s2  = "<span class='input-group-addon' id='chkspan'><span class='glyphicon glyphicon-remove'></span></span>";
			var s3  = "<span class='glyphicon glyphicon-ok'></span>";
			var s4  = "<span class='input-group-addon' id='chkspan'><span class='glyphicon glyphicon-ok'></span></span>";
			if(op1 == "" && op2 == "") {
				$("span#chkspan").remove();
			}
			if(op1 != op2) {
				if(document.getElementById("chkspan")) {
					$("span#chkspan").html(s1);
				}else{
					$("input[name='confirm']").after(s2);
				}
			}else if(op1 == op2 && op1 != "" && op2 != ""){
				if(document.getElementById("chkspan")) {
					$("span#chkspan").html(s3);
				}else{
					$("input[name='confirm']").after(s4);
				}
			}
			if(ou == "" || op1 == "" || oc == "" || op2 == "") {
				ob.disabled = "disabled";
			}else {
				if(op1 != op2) {
					ob.disabled = "disabled";
				}else if(op1 == op2 && op1 != "" && op2 != ""){
					ob.removeAttribute("disabled");
				}
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
				<h1>Register</h1>
			</center>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-4"></div>
	</div>
	<form action="__URL__/do_register" method="post" name="doRegisterForm" role="form">
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
					<span class="input-group-addon">&nbsp;&nbsp;Confirm&nbsp;&nbsp;</span>
					<input type="password" name="confirm" class="form-control" onkeyup="check()">				
				</div>
				<!-- <div class="input-group form-group">
					<span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    				<select class="form-control" name="sex">
				   	 	<option value="1">Male</option>
    					<option value="0">Female</option>
    				</select>
    			</div> -->
    			<div class="btn-group form-group input-group" data-toggle="buttons">
    				<span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    				<label class="btn btn-primary active" id="sex1" style="width: 50%">
    					<input type="radio" name="sex" autocomplete="off" value="1" checked="">Male
    				</label>
    				<label class="btn btn-primary" id="sex0" style="width: 50%">
    					<input type="radio" name="sex" autocomplete="off" value="0">Female
    				</label>
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
				<button type="submit" class="btn btn-primary btn-block" name="subbtn" disabled="">Submit</button>
			</div>
			<div class="col-md-2">
				<button type="button" class="btn btn-primary btn-block" name="reset" onclick="resett()">Reset</button>
			</div>
			<div class="col-md-4"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<a href="__APP__/Login/index" class="btn btn-primary btn-block" role="button">Index</a>
			</div>
			<div class="col-md-4"></div>
		</div>
	</form>
</div>


<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function() {
		$("input[name='username']").keyup(function() {
			var username = $(this).val();
			$.get("__URL__/checkName", {
				"username": username
			}, function(jdata) {
				if(jdata == 1) {
					if(!document.getElementById("chkname")) {
						$("input[name='username']").after("<span class='input-group-addon' id='chkname'>用户名已存在</span>");
					}
					document.getElementsByName("subbtn")[0].disabled = "disabled";
				}else if(jdata == 0) {
					if(document.getElementById("chkname")) {
						$("span#chkname").remove();
					}
				}
			});
		});
	});
</script>
</body>
</html>