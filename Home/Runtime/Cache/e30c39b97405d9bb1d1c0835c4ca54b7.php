<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<style type="text/css">
		a{
			cursor: pointer;
		}
	</style>
</head>
<body>
<form role="form" action="__URL__/search" method="post">
	<div class="row">
		<div class="col-lg-12">
			<div class="input-group">
				<span class="input-group-addon">Username</span>
				<input type="text" class="form-control" name="username">
				<span class="input-group-addon">
					Sex&nbsp;
					<input type="radio" name="sex" value="1" id="sex1"><label for="sex1">Male</label>
					<input type="radio" name="sex" value="0" id="sex0"><label for="sex0">Female</label>
				</span>
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">Search</button>
				</span>
			</div>
		</div>
	</div>
</form>

<table class="table table-bordered">
	<tr>
		<th>id</th>
		<th>username</th>
		<th>sex</th>
		<th>edit</th>
	</tr>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($vo["id"]); ?></td>
			<td>
				<a type="button" data-toggle="modal" data-target="#myModal" id="<?php echo ($vo["id"]); ?>">
				<?php echo ($vo["username"]); ?>
				</a>
			</td>
			<?php if($vo["sex"] == 1): ?><td>Male</td>
				<?php else: ?>
					<td>Female</td><?php endif; ?>
			<td><a href="__URL__/del/id/<?php echo ($vo["id"]); ?>" class="btn btn-primary" role="button">delete</a> <a href="__URL__/modify/id/<?php echo ($vo["id"]); ?>" class="btn btn-primary" role="button">update</a></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<a href="__URL__/add" class="btn btn-primary btn-block" role="button">New User</a>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">User info</h4>
      </div>
      <div class="modal-body" id="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$("a[type='button']").bind('click', function() {
			$.post('__URL__/getAjax', {
				id: this.id,
			}, function(jdata) {
				$("#modal-body").html(jdata.data['password']);
				$("#myModalLabel").html(jdata.data['username'] + " password");
			});
		});
</script>
</body>
</html>