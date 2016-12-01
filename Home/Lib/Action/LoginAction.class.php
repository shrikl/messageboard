<?php 
	class LoginAction extends Action{
		public function index() {
			$this->display();
		}
		public function do_login() {
			if(!$this->isPost()) {
				$this->redirect("Login/index");
			}

			$username = $_POST['username'];
			$password = $_POST['password'];
			$code     = $_POST['code'];

			if($_SESSION['code'] != md5($code)) {
				$this->error("code is wrong!");
			}

			$m = M('User');

			$data['username'] = $username;
			$data['password'] = $password;

			// $c = $m->where($data)->count();
			$arr = $m->field('id')->where($data)->find();

			if($arr) {
				$_SESSION['id'] = $arr['id'];
				$_SESSION['username'] = $username;
				$this->redirect('Indexl/index');
			}else{
				$this->error('username or password is wrong!');
			}
		}
		public function do_logout() {
			$_SESSION = array();
			//判断是否基于COOKIE
			if(isset($_COOKIE[session_name()])) {
				setcookie(session_name(), '', time()-1, '/');
			}
			session_destroy(); //清除服务器端的session文件
			$this->redirect('Indexl/index');
		}
		// public function getAjax() {
		// 	// if(!$this->isPost()) {
		// 	// 	$this->redirect("Login/index");
		// 	// }
		// 	$arr = array("123", "23");
		// 	$this->ajaxReturn($arr, 'xinxi1', 1);
		// }
		public function ajaxExample() {
			$this->display();
		}
	}
?>