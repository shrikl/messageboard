<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div style="height: 50px;background-color: yellow" id="did"></div>
<button>click</button>

<script type="text/javascript">
	document.write(new Date());
</script>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {
		$("button").bind('click', function() {
			$.get('__URL__/getAjax', function(jdata) {
				// alert(data);
				// alert(JSON.stringify(data));
				if(jdata.status == 1) {
					// alert(jdata.data);
					$("div#did").html(jdata.data[0]);
				}
			});
		});
	});
</script>
</body>
</html>