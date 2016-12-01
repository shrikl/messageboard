<?php 
	class UserAction extends Action{
		public function index() {
			$m = M('User');
			$arr = $m->select();
			$this->assign('data', $arr);
			$this->display();
		}
		public function del() {
			$m = M('User');
			$id = $_GET['id'];
			$count = $m->delete($id);
			if($count > 0) {
				$this->success('success!');
			}else{
				$this->error('error!');
			}
		}
		public function modify() {
			$id = $_GET['id'];
			$m = M('User');
			$arr = $m->find($id);
			$this->assign('data', $arr);
			$this->display();
		}
		public function update() {
			$id = $_POST['id'];
			$username = $_POST['username'];
			$sex = $_POST['sex'];

			$data['id'] = $id;
			$data['username'] = $username;
			$data['sex'] =$sex;

			$m = M('User');
			$count = $m->save($data);
			if($count > 0) {
				$this->success('success!', 'index');
			}else{
				$this->error('error');
			}
		}
		public function add() {
			$this->display();
		}
		public function create() {
			$username = $_POST['username'];
			$sex = $_POST['sex'];
			$password = $_POST['password'];

			$m = M('User');
			$m->username = $username;
			$m->password = $password;
			$m->sex = $sex;
			$count = $m->add();

			if($count > 0) {
				$this->success('success', 'index');
			}else{
				$this->error('error');
			}
		}
		public function search() {
			$username = $_POST['username'];
			$sex = $_POST['sex'];

			$m = M('User');
			if(isset($username) && $username != null) {
				$data['username'] = array('like', "%$username%");
			}
			if(isset($sex) && $sex != null) {
				$data['sex'] = $sex;
			}
			$arr = $m->where($data)->select();
			$this->assign('data', $arr);
			$this->display('index');
		}
		public function info() {
			$id = $_GET['id'];
			$m = M('User');
			$arr = $m->find($id);
			dump($arr);
		}
		public function getAjax() {
			if(!$this->isPost()) {
				$this->redirect("User/index");
			}
			$id = $_POST['id'];
			$m = M('User');
			$arr = $m->find($id);
			$this->ajaxReturn($arr, "xinxi2", 1);
		}
	}
?>	