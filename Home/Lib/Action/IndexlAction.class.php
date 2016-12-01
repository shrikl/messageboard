<?php
	class IndexlAction extends CommonAction{
		public function indexl() {
			$this->display();
		}
		public function top() {
			$this->display();
		}
		public function left() {
			$m = D('Message');

			import('ORG.Util.Page');
			$count = $m->count(); //获取数据总数
			$page = new Page($count, 2); //设置每页显示几条数据

			$show = $page->show(); //返回分页信息
			
			$arr = $m->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign('list', $arr);
			$this->assign('show', $show); //将分页信息分配给前台
			$this->display();

			// foreach($arr as $v) {
			// 	$id = $v['uid'];
			// 	$u = M('User');
			// 	$uarr[] = $u->field('username')->where($id)->find();
			// }
		}
		public function right() {
			$this->display();
		}
		public function index() {
			$m = D('Message');

			import('ORG.Util.Page');     //导入分页类
			$count = $m->count();        //获取数据总数
			$page = new Page($count, 3); //设置每页显示几条数据

			$page->lastSuffix = false;   //最后一页不显示为总页数
			$page->setConfig('header',"<li class='disabled hwh-page-info'><a>共<em>%totalRow%</em>条  <em>%nowPage%</em>/%totalPage%页</a></li>");
			$page->setConfig('prev','上一页');
			$page->setConfig('next','下一页');
			$page->setConfig('last','末页');
			$page->setConfig('first','首页');
			$page->setConfig('theme','%header% %first% %upPage% %linkPage% %downPage% %end%');

			$show = bootstrap_page_style($page->show()); //返回分页信息
			// $show = $page->show();
									
			$arr = $m->relation(true)->limit($page->firstRow.','.$page->listRows)->order("time desc")->select();

			$d = D('Reply');
			$dArr = $d->relation(true)->select();
			
			$this->assign('replyList', $dArr);
			$this->assign('list', $arr);
			$this->assign('show', $show); //将分页信息分配给前台
			$this->display();
		}
		// public function downloadImg() {
		// 	$name = $_GET['imgName'];
		// 	$url = __URL__."/Uploads/".$name;
		// 	echo $url;
			
		// }
	}
?>