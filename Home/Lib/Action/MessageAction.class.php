<?php
	class MessageAction extends Action{
		public function do_message() {
			if(!$this->isPost()) {
				$this->redirect("Indexl/index");
			}
			$m = D('Message');
			$m->create();
			
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			// $upload->maxSize  = 3145728 ;// 设置附件上传大小
			// $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
			if(!$upload->upload()) {// 上传错误提示错误信息
				$m->filename = "0";
				// $this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
				$m->filename = $info[0]['savename'];
			}
			
			// $m->time = time();
			// $m->uid = $_SESSION['id'];
			
			$c = $m->add();

			if($c) {
				$this->success("success!");
			}else{
				$this->error("charushibai!");
			}
		}
		public function reply() {
			if(!$this->isPost()) {
				$this->redirect("Indexl/index");
			}
			$content = $_POST['content'];
			$mid     = $_POST['mid']; /* 被回复消息id */
			$m = D('Reply');
			// $arr = $m->relation(true)->select();
			// dump($arr);
			$m->create();
			$c = $m->add();

			if($c) {
				$this->success("success!");
			}else{
				$this->error();
			}
		}
	}
?>