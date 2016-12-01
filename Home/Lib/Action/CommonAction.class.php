<?php
	class CommonAction extends Action{
		/**
 	 	 * 初始化方法 _initialize接口
 	 	 * 可用于扩展需要
 	 	 */
		public function _initialize() {
			if(!isset($_SESSION['username']) && $_SESSION['username'] == "") {
				$this->redirect("Login/index");
			}
		}
	}
?>