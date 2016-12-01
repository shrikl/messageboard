<?php
	class RegisterAction extends Action{
		public function register() {
			$this->display();
		}
		public function do_register() {
			if(!$this->isPost()) {
				$this->redirect('register');
			}

			$username = $_POST['username'];
			$password = $_POST['password'];
			$confirm  = $_POST['confirm'];
			$code     = $_POST['code'];
			$sex      = $_POST['sex'];
			
			if($_SESSION['code'] != md5($code)) {
				$this->error("code is wrong!");
			}
			if($password != $confirm) {
				$this->error("password is wrong!");
			}

			$m = M('User');
			// $m->create();

			$m->username = $username;
			$m->password = $password;
			$m->sex = $sex;
			$c = $m->add();

			if($c > 0) {
				$this->redirect("Login/index");
			}else{
				$this->error();
			}
		}
		public function checkName() {
			if($_GET['username']) {
				$username = $_GET['username'];
				$data['username'] = $username;
				$m = M('User');
				$c = $m->where($data)->count();
				if($c > 0) {
					echo 1;
				}else{
					echo 0;
				}
			}else{
				$this->redirect("register");
			}
		}
	}
?>