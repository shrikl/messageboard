<?php
	class UserModel extends Model{
		//实现自动验证
		protected $_validate = array(
			array("code", "required", "code is wrong!"),
			array("username", "", "username exist", 0, "unique", "1"),
			array("code", "checkCode", "code is wrong!", 0, "callback", 1),
			array("username", "/^\w{6,}$/", "username need 6 or more char!", 0, "regex", 1),
			array('confirm','password','确认密码不正确',0,'confirm'),
		);
		protected function checkCode($code) {
			if(md5($code) != $_SESSION['code']) {
				return false;
			}else{
				return true;
			}
		}
	}
?>