<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

	<link href="__PUBLIC__/Fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <script src="__PUBLIC__/Fileinput/js/fileinput.js" type="text/javascript"></script>
    <script src="__PUBLIC__/Fileinput/js/fileinput_locale_fr.js" type="text/javascript"></script>
    <script src="__PUBLIC__/Fileinput/js/fileinput_locale_es.js" type="text/javascript"></script>

	<style type="text/css">
		.hwh-page-info a {
			color: #CCC;
		}
		.hwh-page-info a em {
			font-style: normal;
			margin: 0 2px;
		}
	</style>
	<script type="text/javascript">
		function reply(uname,mid) {
			var toUser = uname;
			document.getElementById("replyWindowLabel").innerHTML = "Reply " + uname;
			document.getElementsByName("mid")[0].value = mid;
		}
	</script>
</head>
<body>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="jumbotron">
			<h1>Message Board</h1>
			<p>
				Welcome, <?php echo (session('username')); ?>
			</p>
			<p>
				<a href="__APP__/Login/do_logout" target="_top">Logout</a>
			</p>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="panel panel-primary">
				<div class="panel-heading">
					<table width="100%">
						<tr>
							<td>
								<span class="label label-warning" style="font-size: 20px;">Title</span>
								<span class="label label-primary" style="font-size: 20px;"><?php echo ($vo["title"]); ?></span>
							</td>
							<td align="right">
								<a href="#" class="btn btn-success" role="button" data-toggle="modal" data-target="#replyWindow" name="<?php echo ($vo["uname"]); ?>" onclick="reply(this.name,<?php echo ($vo["id"]); ?>)">Reply</a>
							</td>
						</tr>
					</table>
				</div>
				<div class="panel-body">
					<?php echo ($vo["content"]); ?>
				</div>
				<?php if(($vo["filename"]) != "0"): ?><!-- <ul class="list-group">
						<li class="list-group-item">
							<span class="label label-info" style="font-size: 15px;">Enclosure: <a href="__PUBLIC__/Uploads/583d3d762648f.sql"><?php echo ($vo["filename"]); ?> (click to download)</a></span>
						</li>
					</ul> -->
					<!-- <div class="row">
						<div class="col-xs-6 col-md-3"> -->
							<ul class="list-group">
								<li class="list-group-item">
								<a href="__PUBLIC__/Uploads/<?php echo ($vo["filename"]); ?>" class="thumbnail" target="_blank">
									<img data-src="holder.js/100%x180" src="__PUBLIC__/Uploads/<?php echo ($vo["filename"]); ?>">
								</a>
								</li>
							</ul>
						<!-- </div> -->
					<!-- </div> --><?php endif; ?>
				<div class="panel-footer">
					<table width="100%">
						<tr>
							<td><?php echo ($vo["uname"]); ?></td>
							<td align="right"><?php echo (date('Y-m-d H:i',$vo["time"])); ?></td>
						</tr>
					</table>
					<br>
					<?php if(is_array($replyList)): foreach($replyList as $key=>$r): if(($r["mid"]) == $vo["id"]): ?><div class="panel panel-info">
								<div class="panel-heading">
									<?php echo ($r["fname"]); ?>
								</div>
								<div class="panel-body">
									<?php echo ($r["content"]); ?>
								</div>
								<div class="panel-footer" align="right">
									<?php echo (date('Y-m-d H:i',$r["time"])); ?>
								</div>
							</div><?php endif; endforeach; endif; ?>
					<!-- 回复留言备用代码 -->
					<!-- <div class="panel panel-info">
						<div class="panel-heading">
							123
						</div>
						<div class="panel-body">
							123
						</div>
						<div class="panel-footer">
							321
						</div>
					</div> -->
				</div>
			</div><?php endforeach; endif; ?>
	</div>
	<div class="col-md-4">
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		
	</div>
	<div class="col-md-8">
		<?php echo ($show); ?>
	</div>
</div>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">Message</div>
			<div class="panel-body">
				<form action="__APP__/Message/do_message" method="post" enctype="multipart/form-data" role="form">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" name="title" onkeyup="check()">
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea class="form-control" id="content" name="content" rows="5" onkeyup="check()"></textarea>
					</div>
					<div class="form-group">
						<label>Image</label>
						<input type="file" id="filename" name="filename" class="file" accept="image/png,image/gif,image/jpeg">
					</div>
					<button type="submit" class="btn btn-primary btn-block" disabled="" id="replySubBtn">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

<!-- replyWindow -->
<div class="modal fade" id="replyWindow" tabindex="-1" role="dialog" aria-labelledby="replyWindowLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="replyWindowLabel">Reply</h4>
			</div>
			<form action="__APP__/Message/reply" method="post" role="form">			
				<div class="modal-body">
					<div class="form-group">
						<label for="replyContent">Content</label>
						<textarea class="form-control" id="replyContent" name="content" rows="5" onkeyup="checkReply()" placeholder="Input here"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="mid">
					<button type="submit" class="btn btn-primary" id="replyBtn" disabled="">Reply</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	function checkReply() {
		if(document.getElementById("replyContent").value == "") {
			document.getElementById("replyBtn").disabled = "disabled";
		}else{
			document.getElementById("replyBtn").removeAttribute("disabled");
		}
	}
	function check() {
		var ot = document.getElementById("title").value;
		var oc = document.getElementById("content").value;
		var os = document.getElementById("replySubBtn");
		if(ot == "" || oc == "") {
			os.disabled = "disabled";
		}else{
			os.removeAttribute("disabled");
		}
	}
</script>
</body>
</html>